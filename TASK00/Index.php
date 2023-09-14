<!DOCTYPE html>
<html>
<head>

    <title>CRUD Application</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins';
            font-size: 18px;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        select {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="file"] {
            display: block;
            margin-top: 5px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h2>Add User</h2>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label>Name:</label>
        <input type="text" name="name" required>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female
        
        <label>DOB:</label>
        <input type="date" name="dob" required>
        
        <label>Address:</label>
        <textarea name="address" required></textarea>
        
        <label for="hobbies">Hobbies:</label>
        <select name="hobbies[]" class="select2" multiple>
            <option value="Reading">Reading</option>
            <option value="Gaming">Gaming</option>
            <option value="Cooking">Cooking</option>
            <option value="Cooking2">Cooking20</option>
            <!-- Add more options here -->
        </select>
        
        <label>Display Pic:</label>
        <input type="file" name="display_pic">
        
        <input type="submit" name="submit" value="Add User">
    </form>
</body>
</html>
