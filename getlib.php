<html>
<head>
<title>GET Method Output</title>
</head>

<body>

<h2>Library Membership Details (GET)</h2>

<?php

$name=$_GET['name'];
$program=$_GET['program'];
$year=$_GET['year'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];

echo "Name : ".$name."<br>";
echo "Program : ".$program."<br>";
echo "Year : ".$year."<br>";
echo "Mobile : ".$mobile."<br>";
echo "Email : ".$email."<br>";

?>

</body>
</html>