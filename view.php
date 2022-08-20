
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
        <?php
           
                include ('dcon.php');
                
                $sql="SELECT * FROM `aadharcard`";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<1)
                {
                    echo "<tr><td>No records Found</td><tr>";
                }
                else
                {
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    {
                        $count++;
                        ?>
            <div class=table>
            <tr>
              <td><?php echo $count;?></td>
              <td><?php echo $data['name'];?></td>
                <td><?php echo $data['uname'];?></td>
              <td><?php echo $data['email'];?></td>
              <td><?php echo $data['dob'];?></td>
              <td><?php echo $data['phone'];?></td>
              <td><a style="color:black" href="updated.php?sid=<?php echo $data['id'];?>">Edit</a></td>
              <td><a style="color:black" href="deletef.php?sid=<?php echo $data['id'];?>">Delete</a></td>
            </tr>
            </div>
                    <?php
                    }
                }

      ?>
    </body>
</html>