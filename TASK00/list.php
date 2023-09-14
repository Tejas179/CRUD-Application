<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Hobbies</th>
            <th>Action</th>
        </tr>
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

        // Fetch and display data from the database
        $sql = "SELECT id, name, gender, dob, address, hobbies FROM registration";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['dob']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['hobbies']."</td>";
                    echo "<td><a href='view.php?id=".$row['id']."'>View</a> |<a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete?\");'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found.</td></tr>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        // Close the database connection
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
