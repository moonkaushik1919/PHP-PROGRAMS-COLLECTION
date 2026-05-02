<?php
$file = "students.txt";


$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$sem = $_POST['sem'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$data = "$id | $name | $class | $sem | $mobile | $email \n";

file_put_contents($file, $data, FILE_APPEND);

echo "Record Added Successfully!<br>";
echo "<a href='student.php'>Go Back</a>";
?>