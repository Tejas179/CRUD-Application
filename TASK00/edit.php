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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user data from the database based on the ID
    $sql = "SELECT * FROM registration WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $address = $row['address'];
        $hobbies = explode(',', $row['hobbies']);
    } else {
        echo "User not found.";
    }
} else {
    echo "ID not provided.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="update.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" <?php if($gender == 'Male') echo 'checked'; ?>>Male
        <input type="radio" name="gender" value="Female" <?php if($gender == 'Female') echo 'checked'; ?>>Female<br>
        
        <label>DOB:</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>"><br>
        
        <label>Address:</label>
        <textarea name="address"><?php echo $address; ?></textarea><br>
        
        <label for="hobbies">Hobbies:</label>
<select name="hobbies[]" multiple class="select2">
    <option value="Reading" <?php if (in_array('Reading', $hobbies)) echo 'selected'; ?>>Reading</option>
    <option value="Gaming" <?php if (in_array('Gaming', $hobbies)) echo 'selected'; ?>>Gaming</option>
    <option value="Cooking" <?php if (in_array('Cooking', $hobbies)) echo 'selected'; ?>>Cooking</option>
    <!-- Add more options here -->
</select><br>
    
        
        <!-- Include hidden input field to carry ID to the update page -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <input type="submit" name="submit" value="Update User">
    </form>
</body>
</html>
