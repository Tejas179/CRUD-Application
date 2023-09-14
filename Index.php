<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
</head>
<body>
    <h2>Add User</h2>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female<br>
        
        <label>DOB:</label>
        <input type="date" name="dob" required><br>
        
        <label>Address:</label>
        <textarea name="address" required></textarea><br>
        
        <label>Hobbies:</label>
        <select name="hobbies[]" multiple required>
            <option value="Reading">Reading</option>
            <option value="Gaming">Gaming</option>
            <option value="Cooking">Cooking</option>
            <!-- Add more options here -->
        </select><br>
        
        <label>Display Pic:</label>
        <input type="file" name="display_pic"><br>
        
        <input type="submit" name="submit" value="Add User">
    </form>
</body>
</html>
