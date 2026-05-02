<!DOCTYPE html>
<html>
<head>
<title>Library Membership Form</title>

<style>

body{
font-family: Arial;
background: #eef2f7;
}

.container{
width:400px;
margin:50px auto;
padding:25px;
background:white;
border-radius:10px;
box-shadow:0 0 10px gray;
}

h2{
text-align:center;
color:#2c3e50;
}

label{
font-weight:bold;
}

input,select{
width:100%;
padding:8px;
margin:8px 0 15px 0;
border-radius:5px;
border:1px solid #ccc;
}

button{
padding:10px 15px;
border:none;
border-radius:5px;
background:#3498db;
color:white;
cursor:pointer;
}

button:hover{
background:#2980b9;
}

.btns{
text-align:center;
}

</style>
</head>

<body>

<div class="container">

<h2>Library Membership Form</h2>

<form action="getdata.php" method="get">

<label>Name</label>
<input type="text" name="name">

<label>Program</label>
<select name="program">
<option>BCA</option>
<option>B.Com</option>
<option>B.Sc</option>
<option>BBA</option>
</select>

<label>Year</label>
<select name="year">
<option>1st</option>
<option>2nd</option>
<option>3rd</option>
<option>4th</option>
</select>

<label>Mobile</label>
<input type="text" name="mobile">

<label>Email</label>
<input type="email" name="email">

<div class="btns">

<button type="submit">Submit (GET)</button>

<button type="reset">Clear</button>

</div>

</form>

<br>

<form action="postdata.php" method="post">

<div class="btns">

<button type="submit">Submit Using POST</button>

</div>

</form>

</div>

</body>
</html>

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

<html>
<head>
<title>POST Method Output</title>
</head>

<body>

<h2>Library Membership Details (POST)</h2>

<?php

$name=$_POST['name'];
$program=$_POST['program'];
$year=$_POST['year'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

echo "Name : ".$name."<br>";
echo "Program : ".$program."<br>";
echo "Year : ".$year."<br>";
echo "Mobile : ".$mobile."<br>";
echo "Email : ".$email."<br>";

?>

</body>
</html>