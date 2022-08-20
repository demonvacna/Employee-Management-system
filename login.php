<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
<div class="header"><h1>Admistrator Panel</h1></div>

<div class="form">
    <form class="form1" action="#" method="post">
        <label for="uname">Username</label>
        <input type="text" class="form2" name="uname">
        <br>
        <br>
        <label for="pass">Passward</label>
        <input type="password" class="form2" name="pass">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit">
        <!-- <button><a href="index.php">Registration Page</a></button> -->

    </form>
</div>
</body>

<?php
   // include ("user.php");
   //include("session.php");
   //include ("dcon.php");
   if(isset($_POST['submit']))
   {
   $con = new mysqli('localhost','root','','mydb');
    
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST");
    {
        $username = mysqli_real_escape_string($con, $_POST['uname']);
        $password = mysqli_real_escape_string($con, $_POST['pass']);
        $sql= "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
        $run=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($run,MYSQLI_ASSOC);
        $count=mysqli_num_rows($run);
        if($count==1)
        {
            $_SESSION['sess'] = $username;
            echo("You are logged in");
            header("location:logedin.php");
        }
        else{
            echo("invalid input");
        }
    }
   }
?>