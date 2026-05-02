<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>

<h2>Student Details Form</h2>

<form action="process.php" method="post">
    Name: <input type="text" name="username" required><br><br>
    
    Email: <input type="email" name="email" required><br><br>
    
    Course:
    <select name="course">
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MCA">MCA</option>
    </select><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>