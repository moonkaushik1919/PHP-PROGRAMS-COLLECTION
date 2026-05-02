<?php
$delhiTimeZone = new DateTimeZone("Asia/Kolkata");
$berlinTimeZone = new DateTimeZone("Europe/Berlin");
$delhiTime = new DateTime("now", $delhiTimeZone);
$berlinTime = new DateTime("now", $berlinTimeZone);
echo "<h2>Current Local Times</h2>";
echo "Delhi, India: " . $delhiTime->format("Y-m-d H:i:s") . "<br>";
echo "Berlin, Germany: " . $berlinTime->format("Y-m-d H:i:s") . "<br><br>";
$offsetDelhi = $delhiTimeZone->getOffset($delhiTime);
$offsetBerlin = $berlinTimeZone->getOffset($berlinTime);
$timeDifferenceSeconds = $offsetDelhi - $offsetBerlin;
$hours = floor(abs($timeDifferenceSeconds) / 3600);
$minutes = floor((abs($timeDifferenceSeconds) % 3600) / 60);
echo "<h2>Time Difference</h2>";
if ($timeDifferenceSeconds > 0) {
    echo "Delhi is ahead of Berlin by $hours hours and $minutes minutes.";
} elseif ($timeDifferenceSeconds < 0) {
    echo "Berlin is ahead of Delhi by $hours hours and $minutes minutes.";
} else {
    echo "Both cities have the same local time.";
}
?>