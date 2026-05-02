<?php
function selfMultiply(&$number)
{
	$number *=$number;
	return $number;
}

$mynum=5;
echo $mynum."<br>";

selfMultiply($mynum);
echo $mynum."<br>";

echo" Written and Executed by Kritik";
?>
