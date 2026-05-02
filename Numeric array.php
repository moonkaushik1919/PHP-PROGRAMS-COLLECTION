<?php 

$numbers= array(1,2,3,4,5);

foreach($numbers as $value)
{
	echo" Value is $value <br>";
}

$numbers[0]= "One"; 
$numbers[1]= "Two"; 
$numbers[2]= "Three"; 
$numbers[3]= "Four"; 
$numbers[4]= "Five";

foreach($numbers as $value)
{
	echo" Value is $value <br>";
}

?>