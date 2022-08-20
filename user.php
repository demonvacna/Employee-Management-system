<?php
$name = $_POST['name'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];
$DOB = $_POST['dob'];
$phoneno = $_POST['phone'];

$con = new mysqli('localhost','root','','mydb');

$sql = "INSERT INTO `aadharcard`(`name`, `uname`, `email`, `pass`, `pass1`, `dob`, `phone`) VALUES ('$name','$uname','$email','$pass','$pass1','$DOB','$phoneno');";
$run = mysqli_query($con, $sql);

if($run == true){
    echo "data inserted now you can login";
    header("location:logedin.php");

}
else{
    echo "data not inserted try again";
    header("location:index.php");
}
?>