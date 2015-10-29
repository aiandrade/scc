<?php
//a5-2.php
if (isset($_POST['submit']))
{
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $myTotal = $num1+$num2;
      echo '<h2 align=center>You added <font color=blue>' . $num1 . '</font> and <font color=blue>' . $num2 . '</font> and the answer is <font color=red>' . $myTotal . '</font>!';
      echo '<br><a href="' . $_SERVER['PHP_SELF'] . '">Reset page</a>';
}else{
?>
       <html>
       <body>
       <h1 align="center">Adder.php</h1>
       <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
       Enter the first number:<input type="text" name="num1"/><br/>
       Enter the second number:<input type="text" name="num2"/><br/>
       <input type="submit" name= "submit" value="Add Em!!"/>
       </form>
       </body>
       </html>
<?php
}


/*
errors will be tracked here:
1)Missing . on line 9
2)Missing ; at end of line 10
3)last curly brace turned wrong direction
4)extra / in form element on line 16
5)Missing " on line 19
6)Missing post method on form, line 16
7) changed if statement name to 'submit' and gave input the same name. 
8) removed all " and replaced with ' in echo statment on line 8
9) corrected 'Num1' to 'num1' in input name on line 16
10)Capitalized PHP_SELF 
*/
?>