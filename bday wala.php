<?php

    // Prints the day
    echo date("l") . "<br>";
    
    // Prints the day, date, month, year, time, AM or PM
    echo date("l jS \of F Y h:i:s A") . "<br>";
    
    // Prints October 3, 1975 was on a Friday
    echo "Jan 26,2005 was  a ".date("l", mktime(0,0,0,01,26,2005)) . "<br>";
    
    // Use a constant in the format parameter
    echo date(DATE_RFC822) . "<br>";
     
    // prints something like: 1975-10-03T00:00:00+00:00
    echo date(DATE_ATOM,mktime(0,0,0,01,26,2005));

?>