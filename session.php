<?php
session_start();
if($_SESSION['login'])
{
    echo " ";
}
else
{
    header("location:login.php");
}
?>