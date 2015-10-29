<?php
//forms1.php

if(isset($_POST['FirstName'])){
    echo $_POST['FirstName'] . '<br />';
    echo '<a href="forms1.php">Reset</a>';
} else{
?>

<form action="forms1.php" method="post">
First Name: <input type="text" name="FirstName"/><br />

<input type="submit" />

</form>
<?php
}
?>
