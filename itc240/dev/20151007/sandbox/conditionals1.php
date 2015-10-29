<?php
//conditionals1.php

/*
1) find a way to determind morning or evening from PHP date()
2) consider using date('a) for the derermining factor



*/

//echo date('a');

if (date ('a')=='pm'){//evening?
    //echo "Good Evening?";
    $backgroundColor = "#FF8533";
}else{//evening?
    //echo "Good Morning?";
    $backgroundColor = "#C2FFFF";
}

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
            <p>Clever content goes here</p>
            <p>Clever content goes here</p>
            <p>Clever content goes here</p>
            <p>Clever content goes here</p>    
    </body>
</html>


