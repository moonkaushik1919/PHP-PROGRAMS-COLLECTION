<?php

date_default_timezone_set("Asia/Delhi");
$india_time=date("y-m-d H:i:s");

echo "<h3>India date & time:</h3>";
echo $india_time;

date_default_timezon_set("Europe/Berlin");
$berlin_time=date("y-m-d H:i:s");

echo "<h3>Berlin date & time:</h3>";
echo $berlin_time;

$time1=strtotime($india_time);
$time2=strtotime($berlin_time);

$difference=abs($time1-$time2);

$hours=floor($difference/3600);
$min=floor(($difference %3600)/60);

echo "<h3> time difference:</h3>";
echo $hours."Hours".$min."Minutes";

?>