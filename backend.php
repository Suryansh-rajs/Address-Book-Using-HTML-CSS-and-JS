<?php
    include("connection.php");
    if(isset($_POST['submit'])) {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword=$_POST['password1'];
        $duplicate=mysqli_query($conn,"SELECT * FROM login1 WHERE email='$email'");
        if(!$duplicate){
            die("Query failed: " . mysqli_error($conn));
        }
        elseif(mysqli_num_rows($duplicate)>0)
        {
            echo 
            "<script>alert('USER already exsists')</script>";
        }
        else
        {
            if($password==$confirmpassword)
            {
                $query="INSERT INTO login1 VALUES('$first','$last','$email','$password','$confirmpassword')";
                mysqli_query($conn, $query);
                header("Location: successfull.php");
                exit();

            }
            else{
                echo
                "<script>alert('Password Does not match')</script>";
            }
        }
    }
?>
