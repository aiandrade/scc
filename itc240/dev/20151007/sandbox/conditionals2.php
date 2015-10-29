<?php
//conditionals2.php

/*
1) find a way to determind morning or evening from PHP date()
2) consider using date('a) for the derermining factor
3) am and pm is good, but we need to react to a range of hours in order for our customer to get what they want

morning: 6am - 12pm
//6 - 12
afternoon: 12pm - 6pm
//12 - 18
evening: 6pm - 11pm
//18 - 23
night: 11pm - 6am
//23 - 6

4) we need to get the hour from the date function

5) we then need to convert the hour to a number

6) build complex if block to take care of the problem

*/

//echo date('a');

//we get the hour from the date function
$hour = date('G');


//we cast hour to integer:
$hour = (int)$hour;

//echo gettype($hour);
//die;

/*
if (date ('a')=='pm'){//evening?
    //echo "Good Evening?";
    $backgroundColor = "#FF8533";
}else{//evening?
    //echo "Good Morning?";
    $backgroundColor = "#C2FFFF";
}
*/


//please delete the line below when done: 
$hour = 12;

if ($hour >= 6 && $hour <12){//6am - 12pm
    echo "Good Morning";
    //$backgroundColor = "#FF8533";

}else if($hour >= 12 && $hour <18){//12pm - 18oo (6pm)
    echo "Good Afternoon!";
}else if($hour >= 18 && $hour <23){//6pm - 11pm
    echo "Good Evening!";
}else{//night
    echo "Good Night!";
    //$backgroundColor = "#C2FFFF";
}
die;

?>
<html>
<style>
    body{
        max-width: 960px;
        background: #ffffff;
    }
    html{
     background:<?=$backgroundColor?>;   
    }
    
</style>
    <body>
        <h1>My Page</h1>     
            <p><?=date('G')?></p>
            <p>Clever content goes here</p>
            <p>Clever content goes here</p>
            <p>Clever content goes here</p>    
    </body>
</html>


