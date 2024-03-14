<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE/STYLE-SIGNUP/style.css">
    <link rel="shortcut icon" href="../icon/icon.png" type="image/x-icon">
    <title>SMLbooking-signup</title>
</head>
    <body>
        <?php
            if(isset($_SESSION['status'])){
                echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
        ?>
        <div class="container">
            <div class="appointment-header">
                <div class="top_logo">
                    <div class="logo">
                        <img src="../icon/icon.png" alt="">
                    </div>
                    <p class="header">Sign-in to smlbooking
                        <br><br> If you have an account   
                        <a href="login.html"> login</a>
                    </p>
                </div>
                <form action="code.php" method="POST">
                    <!-- <span id="firstName_error">*</span>
                    <span id="lastName_error">*</span>
                    <span id="messages">*</span>
                    <span id="mail_error">*</span> -->
                    <!-- <span id="address_error">*</span><br> -->
                    <select name="option" id="">
                        <option value="">--- Select your opton ---</option>
                        <option value="appointment">Book appointment</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="text" name="emp_first_name" id="firstName" placeholder="First Name">
                    <input type="text" name="emp_last_name" id="lastName" placeholder="Last Name">
                    <input type="text" name="emp_username" id="username" placeholder="Username">
                    <select name="emp_gender" id="gender">
                        <option value="">--- Select your gender ---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="date" name="emp_dob" id="dob" placeholder="Date of birth">
                    <input type="text" name="emp_contact" id="mobilenumber" placeholder="Phone Number">
                    <input type="text" name="emp_address" id="" placeholder="Address">
                    <input type="password" name="emp_password" id="pwd" placeholder="Password" onkeyup="return password()">
                    <input type="password" name="emp_password-repeat" id="pwd_repeat" placeholder="Repeat password" oninput="return comform()">
                    <div class="errors">
                        <ul>
                            <span class="left">
                                <li id="upper"> Atleast one uppercase</li>
                                <li id="lower"> Atleast one lowercase</li>
                                <li id="special_char"> Atleast one spical symbol</li>    
                            </span>
                            <span class="right">
                                <li id="number"> Atleast one number</li>
                                <li id="length"> Atleast six charecters</li>
                            </span>
                        </ul>
                    </div>
                    <button  type="submit" name="OK"><b>REGISTRATION</b></button>              
                </form>
            </div>
        </div>   
    </body>
    <script src="SCRIPT/SCRIPT-LOGIN, FORGOT PWD % CONTACT US/app.js"></script>
</html>