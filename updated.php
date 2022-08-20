
<?php
include ('dcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `aadharcard` WHERE `id` = '$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
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
                <button><a href="registration.php">Add new employee</a></button>
                <button><a href="update.php">Update new employee</a></button>
                <button><a href="view.php">View all employee details</a></button>
                <button><a href="remove.php">Delete employee</a></button>
                <button><a href="logout.php">Log Out</a></button>

            </form>
        </div>
        </div>
    
    <div class="form">
    <form class="form1" action="#" method="post">
        <h2>Registration form</h2>
        <label for="name">Name</label>
        <input type="text" class="form2" name="name" value="<?php echo $data['name'];?>">
        <br>
        <br>
        <label for="uname">User Name</label>
        <input type="text" class="form2" name="uname" value="<?php echo $data['uname'];?>">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" class="form2" name="email" value="<?php echo $data['email'];?>">
        <br>
        <br>
        <label for="dob">DOB</label>
        <input type="date" class="form2" name="dob" value="<?php echo $data['dob'];?>">
        <br>
        <br>
        <label for="phone">Phone no</label>
        <input type="text" class="form2" name="phone" value="<?php echo $data['phone'];?>">
        <br>
        <br>
        <input type="hidden" name="sid" value="<?php echo $data['id'];?>">
        <input type="submit" name="Submit" value="Submit">
    </form>
    </div>
    <?php
    if(isset($_POST['Submit']))
    {
        include('dcon.php');
        $name=$_POST['name'];
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $id=$_POST['sid'];
        setcookie('username',$name, time() + (86400 * 30),'/');
        setcookie('email',$email, time() + (86400 * 30),'/');
    
        $sql="UPDATE `aadharcard` SET `name` = '$name', `uname` = '$uname', `email` = '$email', `dob` = '$dob', `phone` = '$phone' WHERE `id` = '$id' ;";
        $run=mysqli_query($con,$sql);
        if($run==true)
        {
            echo 'Data Updates Sucessfully';
            
        }
    }
?>

    </body>
</html>