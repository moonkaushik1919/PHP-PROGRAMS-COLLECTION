<?php

$sal=array("roshan"=>2000, "twinkle"=>1000, "zara"=>500);

echo" Salary of Roshan is ".$sal['roshan']."<br>";
echo" Salary of Twinkle is ".$sal['twinkle']."<br>";
echo" Salary of zara is ".$sal['zara']."<br>";

$sal['roshan']= "high";
$sal['twinkle']= "medium";
$sal['zara']= "low";


echo" Salary of Roshan is ".$sal['roshan']."<br>";
echo" Salary of Twinkle is ".$sal['twinkle']."<br>";
echo" Salary of zara is ".$sal['zara']."<br>";

?>