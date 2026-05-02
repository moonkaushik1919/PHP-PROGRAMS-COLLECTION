<?php
   $cars=array("volvo","BMW","Toyota");
   sort($cars);
   
   $clength=count($cars);
   for($x=0;$x<$clength;$x++)
   {
      echo $cars[$x] . "<br>";
    }
?>