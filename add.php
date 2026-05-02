<?php
$file = "students.txt";

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$sem = $_POST['sem'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// Format data
$data = "$id | $name | $class | $sem | $mobile | $email\n";

// Write to file
file_put_contents($file, $data, FILE_APPEND);

echo "Record Added Successfully!<br>";
echo "<a href='form.html'>Go Back</a>";
?>