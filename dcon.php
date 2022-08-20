<?php
    $con=mysqli_connect('localhost','root','','mydb');
        if($con==false)
        {
            echo "Not Connected to the server";
        }
       else
       {
           //echo "Conneted";
       }
?>