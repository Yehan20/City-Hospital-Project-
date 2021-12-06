<?php 
  include('classes.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Chanelling</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <style>
        .error{
            
            color:red;
            text-align:center;
            margin:0 0 1em 0;

        }
         .err{
             font-size:0.8rem;
             color:red;
         }
    </style>
   
</head>
<body>
    <header class="header">

            <div class="logo">
            <h3 class="logo__title"><strong>City Hospital</strong></h3>
            <a href="index.php" class="logo__img"><img src="images/aids.png" alt="logo image" class="logo__img"></a>
            </div>
       
   
  
    
    </header>
    <!-- home section here -->
     <section class="sign-in">
         <div class="container">
             <h1 class="signin__title">Sign in</h1>
             <div class="signin">
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                     <div>
                         <label for="#">Username</label>
                         <input type="text" name="username" id="name" placeholder="username">
                         <span class="err"></span>
                     </div>
                     <div>
                        <label for="#">Password</label>
                        <input type="password"  name="password" id="password" placeholder="Password">
                        <span class="err"></span>
                    </div>
                    <div>
                    
                        <input type="submit" name="submit" id="" value="Login" class="btn btn_login" onclick="return loginvalidate()">
                    </div>
                    <div class="error">
                        <?php 
                        if(isset($_POST['submit'])){
                          
                            $name=$_POST['username'];
                            $pass=$_POST['password'];
                            $_SESSION['name']=$name;
                             $user= new Patient();
                             $user->login($name,$pass);
                        }
                        ?>
                    </div>
                 </form>
                 <h3 class="sign_in-text">Not user Click <a href="singup.php"> Here </a>to Create an Account</h3>
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
    <script src="script.js">
     </script>   

</body>
</html>