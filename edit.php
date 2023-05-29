<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"dbcrud");
$edit = $_GET['edit'];

$sql = "select * from student where id = '$edit'";

$run = mysqli_query($connection,$sql);


while($row=mysqli_fetch_array($run))
{
    $uid = $row['id'];
    $name = $row['name'];
    $gender = $row['gender'];
    $age = $row['age'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $home = $row['home'];
    $city = $row['city'];

    $pincode = $row['pincode']; 
}

?>

<?php
   $connection = mysqli_connect("localhost","root","");

    $db = mysqli_select_db($connection,"dbcrud");


    if(isset($_POST['submit']))
        {
            $edit = $_GET['edit'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $home = $_POST['home'];
            $city = $_POST['city'];
        
            $pincode = $_POST['pincode'];

            $sql = "update student set name= '$name',gender= '$gender',age= '$age',mobile='$mobile',email='$email',home='$home',city='$city',state='$state',pincode='$pincode' where id =  '$edit'";  

           if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

        }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <link rel = "icon" href = "logo.png"  type = "image/x-icon">
</head>

<body class="editbody">

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" id="editdiv1">
                    <div class="card-header">
                        <h1> Address Book </h1>
                    </div>
                    <div class="card-body">

                        <form action="add.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Enter Gender" value="<?php echo $gender; ?>">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter Age" value="<?php echo $age; ?>">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $mobile; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label>Home</label>
                                <input type="text" name="home" class="form-control" placeholder="Enter Home" value="<?php echo $home; ?>">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter City, State" value="<?php echo $city; ?>">
                            </div>



                            <div class="form-group">
                                <label>Pincode</label>
                                <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode" value="<?php echo $pincode; ?>">
                            </div>


                            <br />
                            <input type="submit" class="btn btn-primary" id ="editbutton"name="submit" value="Edit">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <br><br>
   <div id="out">
    <a href="website.php" id="signout">Sign Out</a>
   </div>
</body>

</html>