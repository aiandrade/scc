<?php
//index.php

/*
problem: the boss wants a report that shows if people are happy or not. Based on pay (to start)

also, needs names




*/
$myName= "Ana";
$myPay = 100000;
$myHappyPay = 75000;
$marginalPay= 65000;

/*
if($myPay >= $myHappyPay){
    echo "I'm Happy!";
    
} else if($myPay >= $marginalPay ){
    echo"I'm marginally happy";

}else{
    echo "Not so happy.";
}
*/



//die; //work with HTML etc. later


function employeeHappiness($myName,$myPay,$myHappyPay,$marginalPay)
{

    $myReturn = '';//initialize empty string
    $myPic = '';
    
    /*
                <div class="container">
                    <p><b>Name:</b> John</p>
                    <p><b>Current Pay:</b> $75,000.00</p>
                    <p><b>Requested Pay:</b> $70,000.00</p>
                    <p><b>Minimum Pay:</b> $50,000.00</p>
                    <div class="pic"><img src="images/happy.jpg"></div>
                </div>
                
    */
    
     if($myPay >= $myHappyPay){//must be happy!
        $myPic = "happy.jpg";
        
    }else if ($myPay >= $marginalPay){
        $myPic = "maginally-happy.jpg";
        
    }else {//not so much
        $myPic = "not-so-happy.jpg";
    }
    
    
    $myReturn .= 
        '
                <div class="container">
                    <p><b>Name:</b> ' . $myName . ' </p>
                    <p><b>Current Pay:</b> ' . $myPay . '</p>
                    <p><b>Requested Pay:</b> ' . $myHappyPay . '</p>
                    <p><b>Minimum Pay:</b>' . $marginalPay . '</p>
                    <div class="pic"><img src="images/' . $myPic . '></div>
                </div>
        ';
    
   
    
    
    
    
    
    
    /*
    $myReturn .= '<p>Name: <strong>' . $myName. '</strong></p>';
    $myReturn .= '<p>Current Pay: <strong>' . $myPay. '</strong></p>';
    $myReturn .= '<p>Target Pay: <strong>' . $myHappyPay. '</strong></p>';
    $myReturn .= '<p>Minimum Pay: <strong>' . $marginalPay. '</strong></p>';
    */
   
        
    return $myReturn;

}



?>
<html>
    <head>
    <title>Employee Happiness Report</title>
        <style>
        body {font-family:georgia;}
        #report {
            max-width:600px;
            margin:5px;
            padding:2px;
        }
        #report > div {
            padding:5px;
            min-height:40px;
            margin-bottom:5px;
            border:1px solid #E77D2C;
            -moz-border-radius: 5px; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            position:relative; /* required to place #pic to right */
        }

        #report h3 {
            font-family:georgia;
            padding:5px;
            color:#fff;
            background:#E77D2C;
            margin:0;
        }

        .pic{
            position:absolute;
            right:10px;
            top:10px;
        }
        .pic img{
          max-height:150px;  
        }
		.container{
			height: 160px;
		}
        </style>

    </head>
	<body>
	<h1>Employee Happiness Report</h1>
		<h3 id="filmtitle">Below is a of our employee's satisfaction.</h3>
		<div id="report">
        <?php
            echo employeeHappiness ($myName,$myPay,$myHappyPay,$marginalPay);
            echo employeeHappiness ("John",50000,60000,45000);
            echo employeeHappiness ("Jane",70000,150000,100000);
        ?>

                <!-- partial starts here 
                <div class="container">
                    <p><b>Name:</b> John</p>
                    <p><b>Current Pay:</b> $75,000.00</p>
                    <p><b>Requested Pay:</b> $70,000.00</p>
                    <p><b>Minimum Pay:</b> $50,000.00</p>
                    <div class="pic"><img src="images/happy.jpg"></div>
                </div>
                
                partial ends here -->
		</div>
	</body>
</html>