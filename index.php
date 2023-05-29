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

<body class="indexbody">

  <div class="container" id="indexborder">
    <div class="row" id="indexdiv1">
      <div class="col-md-9">
        <div class="card" id="indexdiv2">
          <div class="card-header" id="indexdiv3">
            <h1> Address Book</h1>
          </div>
          <div class="card-body">

            <button class="btn btn-success" id="indexbutton"> <a href="add.php" class="text-light"> Add New </a> </button>

            <br />
            <br />

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sr. No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Age</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Home</th>

                  <th scope="col">City</th>
                
                  <th scope="col">Pincode</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, "dbcrud");

                $sql = "select * from student";
                $run = mysqli_query($connection, $sql);
                $id = 1;

                while ($row = mysqli_fetch_array($run)) {
                  $uid = $row['id'];
                  $name = $row['name'];
                  $gender = $row['gender'];
                  $age = $row['age'];
                  $mobile = $row['mobile'];
                  $email = $row['email'];
                  $home = $row['home'];
                  $city = $row['city'];
              
                  $pincode = $row['pincode'];

                ?>

                  <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $gender ?></td>
                    <td><?php echo $age ?></td>
                    <td><?php echo $mobile ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $home ?></td>
                    <td><?php echo $city ?></td>
                    
                    <td><?php echo $pincode ?></td>



                    <td>
                      <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> &nbsp;
                      <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button>
                    </td>
                  </tr>
                <?php $id++;
                } ?>
              </tbody>
            </table>
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