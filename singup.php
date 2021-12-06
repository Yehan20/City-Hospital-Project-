<?php 
  include 'classes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>singup </title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <style>
        .err{
            color:red;
            font-size:0.8rem;
        }
    </style>
   
</head>
<body>
    <header class="header">

            <div class="logo">
            <h3 class="logo__title"><strong>City Hospital</strong></h3>
            <a href="home.php" class="logo__img">
            <img src="images/aids.png" alt="logo image" class="logo__img">
           </a>
            </div>
            <input type="checkbox" class="checkbox" name="checkbox" id="toggle">
            <label  for="toggle"class="hamburger">
                <span  class="hamburger__menu"></span>
            </label>
            <nav class="nav">
                <ul class="list">
                    <li class="list__item"><a class="link__item" href="index.php">Home</a></li>
                    <li class="list__item"><a class="link__item" href="about.php">About</a></li>
                    <li class="list__item"><a class="link__item" href="services.php">Services</a></li>
                    <li class="list__item"><a class="link__item" href="contact.php">Contact</a></li>
                    <li class="list__item"><a class="link__item" href="login.php">Login</a></li>
                   
                </ul>
            <div class="search">
                <form action="search.php" method="get">
                   
                        <div>
                            <input class="feild" name="search" type="text" placeholder="Search" required/>
                            <input type="submit" name="search-btn" class="button" value="Search"/>
                        </div>
                                         
                </form>
            </div>
        </nav>
   
  
    
    </header>
    <!-- home section here -->
     <section class="sign-up">
         <div class="container">
             <h1 class="signup__title">Register</h1>
             <div class="signup__container">
                 <div class="sign__deatils">
                     <h3>Create Your Account</h3>
                     <img src="images/sign-up.jpg" alt="sing up " class="sign__up__img">
                     <p>Make your Appointments from home, easy and Fast</p>
                     
                     <?php 
                           if(isset($_POST['Register'])){
                               $patient= new patient();
                               $firstname=$_POST['firstname'];
                               $lastname=$_POST['lastname'];
                               $username=$_POST['username'];
                               $nic=$_POST['nic'];
                               $dob=$_POST['dob'];
                               $email=$_POST['email'];
                               $password=$_POST['password'];
                            //    $firstname=$_POST['firstname'];
                                $patient->register($firstname,$lastname,$username,$email,$nic,$dob,$password);
                               
                           }
                        ?>
                         <p>Already A user Click Here to <a href='patientlogin.php'>Login</a></p>
                 </div>
               
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="signup__form">
                        <div>
                            <label for="">First Name</label>
                            <input type="text" placeholder="First Name" name="firstname" id="fname">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Last Name</label>
                            <input type="text" placeholder="Last Name" name="lastname" id="lastname">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">User Name</label>
                            <input type="text" placeholder="Login Name" name="username" id="username">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" placeholder="Email" name="email" id="email">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Nic</label>
                            <input type="text" placeholder="NIC" name="nic" id="nic">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Date of Birth</label>
                            <input type="date" name="dob" id="dob" placeholder="mm-dd-yy" min="1930-01-01" max="2009-01-01">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Password</label>
                            <input type="password" placeholder="Password" name="password" id="password">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Confirm Password</label>
                            <input type="password" placeholder="Password" id="cpassword">
                            <span class="err"></span>
                        </div>
                        <div class="button_register">
                            <input type="submit" name="Register" value="Register" class="btn btn__reg" onclick="return signupvalidate()">
                        </div>
                       
                     
                     </form>
                     
                 
             </div>
             
         </div>
     </section>
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-box">
                <div class="quick-links">
                    <a href="#" class="social__links"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="social__links"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="social__links"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <ul class="reach">
                    <li><a href="#" class="social__links">Email: cityHp@gmail.com</a></li>
                    <li><a href="#" class="social__links">Addreess:Queens Rd nw Orleans</a></li> 
                </ul>
                <div class="copyrights">
                    <h3>Copyright © City Hospital. All rights reserved</h3>
                    <p>Designed By Yehan</p>
                </div>    
            </div>
        </div>
    </footer>
    <script src="script.js"></script>

</body>
</html>