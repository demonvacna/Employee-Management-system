<?php
        include('dcon.php');
        $id=$_REQUEST['sid'];
        $sql="DELETE FROM `aadharcard` WHERE `id`='$id';";
        $run=mysqli_query($con,$sql);
        if($run==true)
        {
            echo "<script>alert('Data Delete Sucessfully')</script>";
            echo "<script>window.open('logedin.php','_self')</script>";
        }
    
?>