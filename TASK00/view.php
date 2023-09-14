<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
</head>
<body>
    <h2>View User</h2>
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

    // Get user ID from URL parameter
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];

        // Fetch user data from the database
        $sql = "SELECT * FROM registration WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
            echo "<p><strong>Gender:</strong> " . $row['gender'] . "</p>";
            echo "<p><strong>DOB:</strong> " . $row['dob'] . "</p>";
            echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
            echo "<p><strong>Hobbies:</strong> " . implode(', ', explode(',', $row['hobbies'])) . "</p>";
            echo "<p><strong>Display Pic:</strong><br> <img src='data:image/jpg;charset=utf8;base64," . base64_encode($row['displaypic']) . "' width='150' alt='User Display Pic'></p>";
            echo "Image Data Length: " . strlen($row['displaypic']) . " bytes<br>";
            echo base64_encode($row['displaypic']);
            echo "<p><strong>Display Pic:</strong><br> <img src='data:image/jpg;charset=utf8;base64,$displaypic' width='150' alt='User Display Pic'></p>";


        } else {    
            echo "User not found.";
        }
    } else {
        echo "Invalid request.";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
    <p><a href="list.php">Back to List</a></p>
</body>
</html>
