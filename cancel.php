<?php 
  include 'classes.php';
  session_start();
  if(!isset($_SESSION['name'])){
      header('location:login.php');
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
    <title>Cancel</title>
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
                <li class="list__item"><a class="link__item" href="venHome.php">Home</a></li>
                <li class="list__item">
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                         <input type="submit" class="btn btn__register" value="Logout" name="logout">
                      </form>
                    </li>
                    <?php
                      if(isset($_POST['logout'])){
                         session_destroy();
                         header('location:login.php');
                      }
                    ?>
                 
            </ul>
    </nav>



</header>
    <!-- home section here -->
     <section class="sign-in">
         <div class="container">
             <h1 class="signin__title">Manage Appointemnts</h1>
             <div class="ven__cancel">
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="cancel__app">
                     <div>
                         <label for="">Appointment Number</label>
                         <input type="text" name="num" id="" placeholder="Reg Id" required>
                     </div>
                    <div>
                    
                        <input type="submit" name="cancel" id="" value="Cancel" class="btn btn__add" style="background: orangered !important;">
                    </div>
                    <?php 
                         if(isset($_POST['cancel'])){
                         $appkey=$_POST['num'];   
                         $app= new Appointment();
                         $app->cancelApp($appkey);
                         }
                    ?>
                 </form>
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="complete">
                     <div>
                         <label for="">Appointment Number</label>
                         <input type="text" name="num" id="" placeholder="Reg Id" required>
                     </div>
                    
                    <div>
                    
                        <input type="submit" name="mark" id="" value="Mark" class="btn btn__add" style="background: green !important;">
                    </div>
                    <?php 
                         if(isset($_POST['mark'])){
                         $appkey=$_POST['num'];   
                         $app= new Appointment();
                         $app->completeApp($appkey);
                         }
                    ?>
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

</body>
</html>