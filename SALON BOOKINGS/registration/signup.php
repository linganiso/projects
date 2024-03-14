<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMLbooking Book an Appointment</title>
        <link rel="shortcut icon" href="../icon/icon.png" type="image/x-icon">
        <!-- <link rel="stylesheet" href="style/style-calendar.css"> -->
        <link rel="stylesheet" href="../appointment/style/style.c">
        <link rel="stylesheet" href="style/css-card.css">
        <link rel="stylesheet" href="invoice/invoice.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <style>
        .loader{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #3333;
            transition: opacity 0.75s, visibility 0.75s;
        }
        .loader--hidden{
            opacity: 0;
            visibility: hidden;
        }
        .loader::after{
            content: "";
            width: 75px;
            height: 75px;
            border: 15px solid #dddddd;
            border-top-color: #e40046;
            border-radius: 50%;
            animation: loading 0.75s ease infinite;
        }
        @keyframes loading{
            from{transform: rotate(0turn);}
            to{transform: rotate(1turn);}
        }
        </style>
        <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");

            loader.classList.add("loader--hidden");

            loader.addEventListener("transitionend", () =>{
                document.body.removeChild(loader);
            });
        });

             const confirmAction = () => {
                const response = confirm("Are you sure you want to cancel appointment!.");
                if (response) {
                    alert("Ok was pressed");
                } else {
                    alert("Cancel was pressed");
                }
            }
        </script>
    </head>
    <body> 
    <?php
        if(isset($_SESSION['status'])){
            echo "<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
    ?>
        <div id="hide" class="container">
            <div class="loader"></div>
            <div class="appointment-header">
                <section>
                    <div class="logo">
                            <img src="../icon/logopng" alt="">
                    </div><hr>
                    <div class="tbn">
                            <div class="back" onclick="backArrow()">
                                <a href="#"><i class="fa fa-arrow-left"></i></a>
                            </div>
                    </div>
                    <div class="appointment-h2">
                            <h2>Book an appointment</h2>
                    </div>
                    <form action="code1.php" method="post">
        <div class="appointment-p">
            <p>Check as a guest, An account will be automatically created</p>
        </div>
        <div class="appointment-p" onclick="signin()">
            <p>If you have an account login</p>
        </div>    
        <div class="form-align">
                                    <input type="text" name="cust_firstName" id="firstname-field" placeholder="First Name" onkeyup="Register(), myFist()"/>
                                    <span id="firstName-Error"></span>
    
                                    <input type="text" name="cust_lastName" id="lastname-field" placeholder="Last Name" onkeyup="Register(), myFist()"/>
                                    <span id="lastName-Error"></span>

                                    <input type="date" name="cust_dob" id="lastname-field" onkeyup="Register(), myFist()"/>
                                    <span id="cust_dob-Error"></span>

                                    <span>
                                        <input type="radio" name="cust_gender" value="Female"/>Female
                                        <input type="radio" name="cust_gender" value="Male"/>Male
                                        <span id="radioError"></span>
                                    </span>
                                    
                                    <input type="email" name="cust_mail" id="email-field" placeholder="E-mail" onkeyup="Register()"/>
                                    <span id="emailError"></span>
                                    
                                    <input type="text" name="cust_contact" id="number-field" placeholder="Mobile Phone" onkeyup="Register()"/>
                                    <span id="number-error"></span>

                                    <input type="text" name="cust_address" placeholder="Home Address"/>
                                </div>
    

    
                                <div class="form-align">
    
                                    <input type="password" name="cust_password" id="pwd-field" placeholder="Password" onkeyup="Register()">
                                    <span id="pwd-error"></span>
                                    
                                    <input type="password" name="pwd-repeat" id="pwd_repeat-field" placeholder="Repeat password" onkeyup="Register()">        
                                    <span id="pwd_repeat-error"></span>
                                </div>    
                                <div class="btn">
                                <button type="submit" name="save_select">Submit</button>
                                </div>
                            </div>
    </form>
                </section>
            </div>
        </div>
    </body>
    <script src="script/checkbox.js"></script>
    <script src="script/time.js"></script>
    <script src="script/date.js"></script>
    <script src="script/main.js"></script>
</html>