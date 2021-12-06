<?php 
    include 'classes.php';
    session_start();
    if(!isset($_SESSION['name'])){
        header('location:patientlogin.php');
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cancel Appointment</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
   
</head>
<body>
    <header class="header">

        <div class="logo">
        <h3 class="logo__title"><strong>City Hospital</strong></h3>
        <img src="images/aids.png" alt="logo image" class="logo__img">
        </div>
        <input type="checkbox" class="checkbox" name="checkbox" id="toggle">
        <label  for="toggle"class="hamburger">
            <span  class="hamburger__menu"></span>
        </label>
        <nav class="nav">
            <ul class="list">
                <li class="list__item"><a class="link__item" href="UserHome.php">Home</a></li>
                <li class="list__item"><a class="link__item" href="manageprofile.php">Mange Profile</a></li>
                <li class="list__item">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                         <input type="submit" class="btn btn__register" value="Logout" name="logout">
                      </form>
                    </li>
                    <?php
                      if(isset($_POST['logout'])){
                         session_destroy();
                         header('location:patientlogin.php');
                      }
                    ?>
               
            </ul>
    </nav>



</header>
    <!-- home section here -->
     <section class="sign-in">
         <div class="container">
             <h1 class="signin__title">Cancel Appointemnts</h1>
             <div class="cancel__form">
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div>
                        <label for="">username</label>
                        <input type="text" name="username" id="" placeholder="username" required>
                    </div>
                     <div>
                         <label for="">Appointment Registration Id</label>
                         <input type="text" name="appkey" id="" placeholder="username" required>
                     </div>
                
                    <div>
                    
                        <input type="submit" name="submit" id="" value="Cancel" class="btn btn__add" style="background: orangered !important;">
                    </div>
                 </form>
               
                 
              </div>
              <?php 
                    if(isset($_POST['submit'])){
                          $username=$_POST['username'];
                          $appkey=$_POST['appkey'];
                         

                        $patient=new Patient();
                        $patient->cancelAppointment($username,$appkey);
                    }
                    
                 ?>
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

</body>
</html>