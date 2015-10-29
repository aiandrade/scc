<?php

$myDay = date('l');
$myPic = '';
$myText = '';
$imgDir = 'images/';
$myDrink = '';
$myFeature = '';

//$myDay = "Sunday";

switch($myDay)
{
        case 'Monday';
        $myPic = $imgDir . "pumpkin-spice-latte.jpg";
        $myAlt = "Our Pumpkin Spice Latte tastes great on a Fall Day!";
        $myText = "which makes us wish it was always Fall, as this is one of our top sellers!";
        $myDrink = "Pumpkin Spice Latte";
        $myFeature = "#FF7518";
        break;
        
        case 'Tuesday';
        $myPic = $imgDir . "mocha.jpg";
        $myAlt = "caffe mocha, chocolaty!";
        $myText = "what a chocolaty treat!";
        $myDrink = "Mocha";
        $myFeature = "#57171B";
        break;
        
        case 'Wednesday';
        $myPic = $imgDir . "iced-coffee.jpg";
        $myAlt = "refreshing caffeine.";
        $myText = "a cooling way to get your kick!";
        $myDrink = "Iced Coffee";
        $myFeature ="#612033";
        break;
        
        case 'Thursday';
        $myPic = $imgDir . "espresso-macchiato.jpg";
        $myAlt = "simple start.";
        $myText = "a classic start to your morning!";
        $myDrink = "Espresso Macchiato";
        $myFeature = "#945F8C";
        break;
        
        case 'Friday';
        $myPic = $imgDir . "cappuccino.jpg";
        $myAlt = "A classic.";
        $myText = "an oldie but a goodie!";
        $myDrink = "Cappuccino";
        $myFeature = "#AE4845";
        break;
        
        case 'Saturday';
        $myPic = $imgDir . "blended-coffee.jpg";
        $myAlt = "Refreshing.";
        $myText = "a caffeine treat!";
        $myDrink = "Blended coffee";
        $myFeature = "#C5615F";
        break;
        
        case 'Sunday';
        $myPic = $imgDir . "latte.jpg";
        $myAlt = "Classic.";
        $myText = "a warm and classic drink!";
        $myDrink = "Latte";
        $myFeature = "#4F2F1F";
        break;
        
}

//die;

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LARGEBUCK$ Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <style type="text/css">
	
        html {background-color:<?=$myFeature?>;/* pumpkin - overwrites default */}
        
        .feature {color:<?=$myFeature?>; /* daily feature color - pumpkin! */}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/largebucks-logo.jpg" alt="You drink our coffee, we make large bucks!" class="flexible" id="logo" />
		<h1 class="masthead">LARGEBUCK$ COFFEE</h1>
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
		 <header><h3 class="slogan">You drink our coffee, we make large bucks!</h3></header>
        <p>
    		 <img src="<?=$myPic?>" alt="<?=$myAlt?>" id="coffee" />
            <strong class="feature"><?=$myDay?>'s Coffee Special:</strong> <?=$myDay?>'s daily coffee special is <strong class="feature"><?=$myDrink?></strong>, <?=$myText?></p>
        <p><span class="feature"><?=$myDrink?> is </span> Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.</p>
        <p><span class="feature">Enjoy <?=$myDrink?> with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>
		 <p>
		 <b>At LargeBuck$ we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.

		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse.
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
</html>