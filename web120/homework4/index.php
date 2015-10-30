<?php include("includes/doc.php"); ?>

<link rel="stylesheet" type="text/css" href="css/styles.css">

<link href="http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700" rel="stylesheet" type="text/css">

<link href="http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<title>HW4 Welcome!</title>

</head>

<body>

<?php include("includes/header.php"); ?>

<div id="wrapper">
	
<main>

<h2>Come visit Mexico!</h2>

<img src="images/zocalo.jpg" alt="Zocalo">

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed mi in lorem faucibus porta eget ac orci. Phasellus a gravida libero, ac gravida tellus. Nullam ut elit at dui hendrerit sagittis. Cras accumsan ante malesuada, efficitur lorem a, pellentesque neque. Nam auctor tincidunt velit id bibendum. Proin convallis justo a odio luctus faucibus. </p>

<h3>Discover the different cultures Mexico has to offer</h3>

<p>Make of Mexico the excuse for your next vacation and get your senses ready for an experience full of magic, color and warmth. Come and fall in love with Mexico!</p>

<p><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fedison.seattlecentral.edu%2F~aandra03%2Fweb120%2Fhomework4%2Findex.php">VALID</a></p>


</main>

<aside>
<h3>Pick A City</h3>
<div id="box">
		<img src="images/mapofmexico.png" alt="map of Mexico" usemap="#Map">
        <map name="Map">
          <area shape="rect" coords="13,109,142,127" href="monterrey.php" title="Visit our Monterrey Sites!" alt="Monterrey">
          <area shape="rect" coords="176,163,248,190" href="cancun.php" title="Visit our Cancun Sites!" alt="Cancun">
          <area shape="rect" coords="85,170,150,199" href="mexicocity.php" title="Visit our Mexico City Sites!" alt="Mexico city">
          <area shape="rect" coords="23,199,127,216" href="acapulco.php" title="Visit our Acapulco Sites!" alt="Acapulco">
          <area shape="rect" coords="141,206,223,219" href="oaxaca.php" title="Visit our Oaxaca Sites!" alt="Oaxaca">
        </map>
				</div>

</aside>


</div>   <!--end wrapper-->

<?php include("includes/footer.php"); ?>




</body>
</html>
