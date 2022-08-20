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
    
        <div class="form">
        <form class="form1" action="user.php" method="post">
            <h2>Registration form</h2>
            <label for="name">Name</label>
            <input type="text" class="form2" name="name">
            <br>
            <br>
            <label for="uname">User Name</label>
            <input type="text" class="form2" name="uname">
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" class="form2" name="email">
            <br>
            <br>
            <label for="pass">Passward</label>
            <input type="password" class="form2" name="pass">
            <br>
            <br>
            <label for="pass">Re-enter the password</label>
            <input type="password" class="form2" name="pass1">
            <br>
            <br>
            <label for="dob">DOB</label>
            <input type="date" class="form2" name="dob">
            <br>
            <br>
            <label for="phone">Phone no</label>
            <input type="text" class="form2" name="phone">
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>
        </div>
</body>
</html>