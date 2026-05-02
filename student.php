<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Details Form</h2>

<form action="add.php" method="post">
    ID: <Input type="text" name="id" required><br><br>
    Name: <Input type="text" name="name" required><br><br>
    Class: <Input type="text" name="class" required><br><br>
    SEM: <Input type="text" name="sem" required><br><br>
    Mobile No: <Input type="text" name="mobile" required><br><br>
    Email: <Input type="email" name="email" required><br><br>

    <input type="submit" value="Add Record">
</form>

<hr>

<h2>Delete Record</h2>
<form action="delete.php" method="post">
    Enter Name to Delete: <input type="text" name="delname" required>
    <input type="submit" value="Delete">
</form>

</body>
</html>