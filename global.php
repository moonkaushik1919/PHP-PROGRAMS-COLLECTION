<?php
$x=20;
function test()
{
global $x;
echo "value of x is:$x"."<br>";
}
test();
echo $x;
?>