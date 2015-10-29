<?php
//happy2.php

/*
problem: the boss wants a report that shows if people are happy or not. Based on pay (to start)

also, needs names




*/
$myName= "Ana";
$myPay = 100000;
$happyPay = 75000;
$marginalPay= 65000;

/*
if($myPay >= $happyPay){
    echo "I'm Happy!";
    
} else if($myPay >= $marginalPay ){
    echo"I'm marginally happy";

}else{
    echo "Not so happy.";
}
*/

echo employeeHappiness ($myName,$myPay,$happyPay,$marginalPay);
echo employeeHappiness ("John",50000,60000,45000);
echo employeeHappiness ("Jane",70000,150000,100000);

die; //work with HTML etc. later


function employeeHappiness($myName,$myPay,$myHappyPay,$marginalPay)
{

    
    $myReturn= '';//initialize empty string
    
    $myReturn .= '<p>Name: <strong>' . $myName. '</strong></p>';
    $myReturn .= '<p>Current Pay: <strong>' . $myPay. '</strong></p>';
    $myReturn .= '<p>Target Pay: <strong>' . $myHappyPay. '</strong></p>';
    $myReturn .= '<p>Minimum Pay: <strong>' . $marginalPay. '</strong></p>';

    if($myPay >= $myHappyPay){//must be happy!
        $myReturn .= "<p>I'm happy</p>";
        
    }else if ($myPay >= $marginalPay){
        $myReturn .= "<p>I'm marginally happy</p>";
        
    }else {//not so much
        $myReturn .= "<p>Not so happy</p>";
    }
    
        
    return $myReturn;

}

