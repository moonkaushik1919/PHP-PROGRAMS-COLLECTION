<?php
    
    echo "Lisbon, Portugal\n";
    echo("Date: " . date("D M d Y"));
    echo("\nSunrise time: ");
    echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
    echo("\nSunset time: ");
    echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));

?>