<?php
    include("connection.php");
    include("backendlogin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel = "icon" href = "logo.png"  type = "image/x-icon">
</head>

<body>
<div class="outerheadings">
        <span>H</span>
        <span>I</span>
        <span>!</span>
        <span>&nbsp;</span>
        <span>
        I</span>
        <span>'</span>
        <span>m</span>
        <span>&nbsp;</span>
        <span>A</span>
        <span>D</span>
        <span>D</span>
        <span>R</span>
        <span>E</span>
        <span>S</span>
        <span>S</span>
        <span>&nbsp;</span>
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
    </div>

    <div class="innerheading">
        <h1>I CAN <span class="autotype"></span></h1>
    </div>

    <div class="typing">
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="typed.js"></script>
    </div>

    <div class="hero">
        <div class="typing-text"></div>
            <div class="form">
                <h2>Login</h2>
                <form method="post" action="backendlogin.php" >
                    <div class="inputbox">
                        <input type="email" name="useremail" id="login-email" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputbox">
                        <input type="password" name="userpassword" id="login-password" required="required">
                        <span>Password</span>
                    </div>

                    <div class="remember">
                        <label><input type="checkbox" name="">&nbsp; Remember me</label>
                    </div>
                    <button class="signupb1" name="submit1" type="submit" id="signup-button1">Log in</button>
                    <p class="output" id="output1">

                    </p>
                    <p class="output" id="output2">

                    </p>

                    <div class="signup">
                        <p>Don't Have an account?</p>
                        <a href="#" id="signup-link">Sign up</a>
                    </div>
                    <h3>Other sign in options</h3>

                    <button class="google-button">
                        <img class="google" src="google.svg" width="20" height="20" />
                    </button>

                    <button class="microsoft-button">
                        <img class="microsoft" src="microsoft.svg" width="20" height="20" />
                    </button>

                    <button class="facebook-button">
                        <img class="facebook" src="facebook.svg" width="20" height="20" />
                    </button>
                </form>
                <script>
        

                </script>
                <div class="signup-form" >
                    <h2>Sign Up</h2>

                    <form method="post" action="backend.php">
                        
                        <div class="inputbox1">
                            <input type="text" id="first-name" name="first" required="required">
                            <span>First Name</span>
                        </div>

                        <div class="inputbox2">
                            <input type="text" id="last-name" name="last" required="required">
                            <span>Last Name</span>
                        </div>
                        
                        <div class="inputbox3">
                            <input type="email" id="login-email" name="email" required="required">
                            <span>Email</span>
                        </div>

                        <div class="inputbox3">
                            <input type="password" id="password" name="password" required="required">
                            <span>Password</span>
                        </div>

                        <div class="inputbox3">
                            <input type="password" id="confirm-password" name="password1" required="required">
                            <span>Confirm Password</span>
                        </div>

                        <button class="button1" type="submit" id="signup-button" name="submit">Sign Up</button>
                        <div class="login">
                            <p>Already have an account?</p>
                            <a href="successfull.php">Log in</a>
                        </div>
                        <button class="google-button1">
                            <img class="google1" src="google.svg" width="20" height="20" />
                        </button>

                        <button class="microsoft-button1">
                            <img class="microsoft1" src="microsoft.svg" width="20" height="20" />
                        </button>

                        <button class="facebook-button1">
                            <img class="facebook1" src="facebook.svg" width="20" height="20" />
                        </button>
                        <h4>Other sign up options</h4>
                        
                    </form>
                </div>
                <script src="script2.js"></script>
            </div>

        <div class="About">
            <a href="#">About Us</a>
            <div class="popup">
                <h2>About Us</h2>
                <p>We are the students of Chitkara University, Rajpura, Punjab,
                    pursuing Bachelor of Engineering in Computer Science. <br> We take immense pleasure in
                    introducing our
                    website, which is an Adress Book given to us as a project in Front End Engineering.<br><br>
                    An adress book is a small book in which one writes the names, addresses, and telephone numbers of people one knows (physical meaning).In system terms a place on a computer or other device for storing email addresses, phone numbers, etc.
                    
                </p>
            </div>
        </div>
        <script src="script1.js"></script>
        
    </div>

    <div class="Contact">
        <a href="#">Contact us</a>
        <div class="popup1">
            <p>Contact Us: <br>
                <br>
                
                Suryansh Singh(2210992426) <br>
                Sitanshu Gupta(2210992385) <br>
                Siya Bansal(2210992386) <br>
                Siya Bhagat(2210992387) <br>
                Smriti Arora(2210992388) <br>
                <br>
                
                Email: Suryansh2426.be22@chitkara.edu.in
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sitanshu2385.be22@chitkara.edu.in
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siya2386.be22@chitkara.edu.in
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siya2387.be22@chitkara.edu.in
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Smriti2388.be22@chitkara.edu.in<br>
                <br>
                <!--Phone: 8765946737, 7009631440<br><br>
                Instagram : Suryansh_rajs<br><br>
                Twitter : Suryansh_rajs<br><br>
                Linkedin : Suryansh_rajs<br><br>
                <br>-->
            
                  
            </p>

            


        </div>

      

    </div>

    <div class="find">
        <a href="https://www.google.com/maps/search/chitkara+university+punjab/@30.5157098,76.6582854,18z/data=!3m1!4b1" onclick="showLocation()">Find us</a>
    </div>

    <script src="script1.js"></script>
    </div>

</body>

</html>