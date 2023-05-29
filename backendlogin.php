<?php
session_start();
include("connection.php");
if (isset($_POST["submit1"])) {
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $result = mysqli_query($conn, "SELECT * FROM login1 WHERE password='$userpassword' OR email='$useremail'");

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($userpassword == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            
            header("Location: add.php");
            exit();
        } 
        else {
            
            $message = "Email and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
           echo"<div id ='remember'>Please Remember Your Email / Password And Try Again 🤔</div><br><br><br>";
            echo '<a href="website.php" id="try">Try Again</a>';
        
          

        }
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
    <link rel="stylesheet" href="stylee.css">
    <link rel = "icon" href = "logo.png"  type = "image/x-icon">
</head>
<body>

</body>
</html>

