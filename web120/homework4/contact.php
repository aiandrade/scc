<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>

<link rel="stylesheet" type="text/css" href="css/styles.css">

<link href="http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700" rel="stylesheet" type="text/css">

<link href="http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

<form action="formhandler.php" method="post" id="form">

<fieldset>

<legend>Contact Us</legend>

<input type="text" name="name" id="name" placeholder=" Your Name">

<input type="email" name="email" id="email" placeholder=" Email">

<label>What region(s) are you most interested to see?</label>
<p><input type="checkbox" name="regions[]" id="monterrey" value="monterrey">Monterrey</p>
<p><input type="checkbox" name="regions[]" id="cancun" value="cancun">Cancun</p>
<p><input type="checkbox" name="regions[]" id="acapulco" value="acapulco">Acapulco</p>
<p><input type="checkbox" name="regions[]" id="oaxaca" value="oaxaca">Oaxaca</p>
<p><input type="checkbox" name="regions[]" id="mexicocity" value="mexicocity">Mexico City</p>

<label>What is the purpose of your visit?</label>
<p><input type="radio" name="from" id="business" value="business">Business</p>
<p><input type="radio" name="from" id="vacation" value="vacation">Vacation</p>
<p><input type="radio" name="from" id="research" value="research">Reasearch</p>
<p><input type="radio" name="from" id="visiting" value="visiting">Visiting Family</p>
<p><input type="radio" name="from" id="other" value="other">Other</p>

<textarea name="comments" rows="6" id="comments" placeholder=" Comments"></textarea>

<br>

<input type="submit" value="Send" id="submit">

</fieldset>

</form>

<div id="valid">

<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fedison.seattlecentral.edu%2F~aandra03%2Fweb120%2Fhomework4%2Fcontact.php">VALID</a>


</div>   <!--end valid-sm-->

</body>
</html>