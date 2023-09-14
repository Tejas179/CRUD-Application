<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get user data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $hobbies = implode(',', $_POST['hobbies']); // Convert hobbies array to comma-separated string

    // Update user data in the database
    $sql = "UPDATE registration SET name='$name', gender='$gender', dob='$dob', address='$address', hobbies='$hobbies' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the list page after successful update
        header("Location: list.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
