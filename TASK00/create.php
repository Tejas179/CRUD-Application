<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $hobbies = implode(',', $_POST['hobbies']); // Convert array to comma-separated string

    // Handle file upload
    $targetDir = "uploads/"; // Specify the upload directory
    $displayPicPath = $targetDir . basename($_FILES["display_pic"]["name"]);
    move_uploaded_file($_FILES["display_pic"]["tmp_name"], $displayPicPath);

    // Perform data insertion into the database
    $sql = "INSERT INTO registration (name, gender, dob, address, hobbies, displaypic) VALUES ('$name', '$gender', '$dob', '$address', '$hobbies', '$displayPicPath')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the list page after successful insertion
        header("Location: list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
