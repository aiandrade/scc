<?php
//forms2.php

/*
echo $_SERVER['PHP_SELF'];
die;
*/


if(isset($_POST['FirstName'])){
    echo $_POST['FirstName'] . '<br />';
    echo '<a href="' . $_SERVER['PHP_SELF'] . '">Reset</a>';
} else{
?>

<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
First Name: <input type="text" name="FirstName"/><br />

<input type="submit" />

</form>
<?php
}
?>
