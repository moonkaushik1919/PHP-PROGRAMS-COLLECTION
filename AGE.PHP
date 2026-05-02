<?php
$birthDate = "19-04-2005";
$birthDateTime = DateTime::createFromFormat('d-m-Y', $birthDate);
$currentDateTime = new DateTime();
$interval = $birthDateTime->diff($currentDateTime);
$totalSeconds = $currentDateTime->getTimestamp() - $birthDateTime->getTimestamp();
$totalHours = floor($totalSeconds / 3600);
$totalMinutes = floor($totalSeconds / 60);
echo "Age from $birthDate until now:<br>";
echo "Total Hours: " . number_format($totalHours) . "<br>";
echo "Total Minutes: " . number_format($totalMinutes) . "<br>";
echo "Total Seconds: " . number_format($totalSeconds) . "<br>";
?>