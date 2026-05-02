<?php

$marks=array(
"roshan"=>array(
"physics"=>35,
"maths"=>30,
"chemistry"=>39
),

"twinkle"=>array(
"physics"=>30,
"maths"=>32,
"chemistry"=>29
),

"zara"=>array(
"physics"=>31,
"maths"=>22,
"chemistry"=>39
)
);

echo "Marks of roshan in physics:";
echo $marks['roshan'] ['physics']."<br>";


echo "Marks of twinkle in maths:";
echo $marks['twinkle'] ['maths']."<br>";


echo "Marks of zara in chemistry:";
echo $marks['zara'] ['chemistry']."<br>";

?>