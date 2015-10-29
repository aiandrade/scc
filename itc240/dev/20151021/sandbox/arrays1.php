<?php
//arrays1.php

$aCheese = array();
$aCheese[] = "Cheddar";
$aCheese[] = "Swiss";
$aCheese[0] = "Gouda";

foreach($aCheese as $cheese)
{
    echo $cheese . '<br />';
}

/*

$aFruit = array('cherry','pineapple','lime');

foreach($aFruit as $fruit)
{
    echo $fruit . '<br />';

}

for($x=0;$x<count($aFruit);$x++)
{
    echo $aFruit[$x] . '<br />';
}



echo '<pre>';
var_dump($aFruit);
echo '<pre>';
*/