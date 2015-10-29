<?php
//config.php

//This defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

switch(THIS_PAGE)
{

    case "template.php";
        $title = "My Template Title Tag";
        break;


    default: 
        $title = THIS_PAGE;


}


//echo $title;


//die;