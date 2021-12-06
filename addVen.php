<?php
   include('classes.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Add Doctor</title>
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
            <img src="images/aids.png" alt="logo image" class="logo__img">
            </div>
            <input type="checkbox" class="checkbox" name="checkbox" id="toggle">
            <label  for="toggle"class="hamburger">
                <span  class="hamburger__menu"></span>
            </label>
            <nav class="nav">
                <ul class="list">
                    <li class="list__item"><a class="link__item" href="adminhome.php">Home</a></li>
                    <!-- <li class="list__item"><button class="btn btn__register">Logout</button></li> -->
                    <li class="list__item">
                        <!-- <button class="btn btn__register">Logout</button> -->
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
    <section class="admin__home">
        <div class="container">
            <h1 class="admin__title">Add Doctor</h1>
            <div class="add__admin__container">
                 <div class="admin__info">
                     <h3>Add Doctor Here</h3>
                     <img src="images/ven.png" alt="Vernologist" class="ven__img">
                     <p style="text-align: center;">Fill all the feilds and select the add Button, Note that you cant use same Doctor id again </p>
                     <!-- <div class="buttons">
                        <a href="#" class="btn btn__add">Update Vernologist</a>
                        <a href="#" class="btn btn__add">View Vernologists</a>
    
                    </div> -->
                    <div class="success" style="background:#fff; ">
                    <?php
                     
                        if(isset($_POST['Register'])){
                            $name=$_POST['name'];
                            $userid=$_POST['userid'];
                            $nic=$_POST['nic'];
                            $email=$_POST['email'];
                            $qual= $_POST['qual'];
                            $exp=$_POST['exp'];
                            $pw=$_POST['pw'];
                            $newVen= new Admin();
                            $newVen->addVen($name,$userid,$nic,$email,$qual,$exp,$pw);
                          
                    
                        }
                          
                     
                    ?>
                    </div> 
                     
                 </div>
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="admin__form" method="post" name="registerForm">
                    <div>
                        <label for="">Full Name</label>
                        <input type="text" placeholder="First Name" name="name" id="name">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">User Id</label>
                        <input type="text" placeholder="User Id" name="userid" id="userid">
                        <span class="err"></span>
                      
                       
                    </div>
                    <div>
                        <label for="">Nic Number</label>
                        <input type="text" placeholder="First Name" name="nic" id="nic">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" placeholder="First Name" name="email" id="email">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">Qualifcation</label>
                        <input type="text" placeholder="Qualifciation" name="qual" id="qual">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">Experience Years</label>
                        <input type="number" placeholder="Exp" name="exp" id="exp" min="1">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="pw" id="password">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">Confirm Password</label>
                        <input type="password" placeholder="Password" id="cpassword">
                        <span class="err"></span>
                        
                    </div>
                    <div class="button_register">
                        <input type="submit" id="submit" name="Register" value="Add" class="btn btn__reg" style="margin-top:1em !important;" onclick="return validate()">
                    </div>
                
                   
                   
                  </div>
          
                 </form>
                 <span class="err"></span>
                
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