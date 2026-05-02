<?php
$delhiTimeZone = new DateTimeZone("Asia/Kolkata");
$delhiTime = new DateTime("now", $delhiTimeZone);
$kolkataTimeZone = new DateTimeZone("Asia/Kolkata");
$kolkataTime = new DateTime("now", $kolkataTimeZone);
$timeDifference = $delhiTime->getOffset() - $kolkataTime->getOffset();
$hours = floor($timeDifference / 3600);
$minutes = floor(($timeDifference % 3600) / 60);
echo "Time in Delhi: " . $delhiTime->format("Y-m-d H:i:s") . "<br>";
echo "Time in Kolkata: " . $kolkataTime->format("Y-m-d H:i:s") . "<br>";
echo "Time Difference: $hours hours $minutes minutes";
?>