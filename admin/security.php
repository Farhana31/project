<?php


session_start();
include 'config.php';


if(!$_SESSION['username'])
{
    header('Location: loginadmin.php');
}







?>