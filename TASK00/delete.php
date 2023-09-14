<?php
if(isset($_GET['id'])) {
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the ID from the URL
    $id = $_GET['id'];

    // Delete user data from the database
    $sql = "DELETE FROM registration WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the list page after successful deletion
        header("Location: list.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "ID not provided.";
}
?>
