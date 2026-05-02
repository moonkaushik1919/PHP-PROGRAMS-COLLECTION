<?php
function test()
{
static $count=0;
$count++;
echo $count."<br>";
}
test();
test();
test();
?>