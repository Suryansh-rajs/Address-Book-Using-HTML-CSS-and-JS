<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "dbcrud");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $home = $_POST['home'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];



    $sql = "insert into student(name,gender,age,mobile,email,home,city,pincode)values(' $name',' $gender',' $age',' $mobile',' $email',' $home',' $city',' $pincode')";

    if (mysqli_query($connection, $sql)) {
        echo '<script> location.replace("index.php")</script>';
    } else {
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
    <title class="addtitle">Address Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <link rel = "icon" href = "logo.png"  type = "image/x-icon">
</head>

<body class="addbody">


    <div class="container" id="adddiv1">
        <div class="row" id="adddiv2">
            <div class="col-md-9" id="adddiv3">
                <div class="card" id="adddiv4">
                    <div class="card-header">
                        <h1> Address Book</h1>
                    </div>
                    <div class="card-body">

                        <form action="add.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Enter Gender">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control" placeholder="Enter mobile">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Home</label>
                                <input type="text" name="home" class="form-control" placeholder="Enter Home">
                            </div>
                            <div class="form-group">
                                <label>City, State</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter City, State">
                            </div>


                            <div class="form-group">
                                <label>Pincode</label>
                                <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode">
                            </div>

                            <br />
                            <input type="submit" class="btn btn-primary" name="submit" id ="addbutton"value="Register">
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <br>
   <div id="out">
    <a href="website.php" id="signout">Sign Out</a>
   </div>
    
</body>

</html>