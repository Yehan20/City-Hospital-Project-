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
    <title>Update ven</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <style>
      .res{
          text-align:center;
      }
      .err{
          font-size:0.8rem;
          color:red;
          display:inline-block;
          margin:0 0 1em 0;
         
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
            <h1 class="admin__title">Manage Vernologist</h1>
            <div class="add__admin__container">
                 <div class="admin__info">
                     <h3>Manage Vernologist Here</h3>
                     <img src="images/upven.png" alt="Vernologist" class="ven__img">
                     <p style="text-align: center;">Find the Vernlogist and you can update details of him/her or Delte it</p>
                     <div class="find">
                         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                             <div>
                                 <label for="">User ID</label>
                                 <input type="text" placeholder="User ID" name="userid">
                             </div>
                        
                             
                             <div>
                                 <input type="submit" class="btn btn__find green" value="Find" name="Find">
                                 <input type="submit" class="btn btn__find red" value="Delete" name="Delete">
                             </div>
                             <div class="res">
                                  <?php 
                                     if(isset($_POST['Find'])){
                                      $userid=$_POST['userid'];
                                      $update= new Admin();
                                      $update->searchven($userid);
                                     }
                                     if(isset($_POST['Delete'])){
                                         $userid=$_POST['userid'];
                                         $delete= new Admin();
                                         $delete->deleteven($userid);
                                     }
                                  ?>
                             </div>
                         </form>
                          <!-- <h3 style="text-align: center;">Other Options</h3>
                         <div class="buttons">
                            <a href="#" class="btn btn__add">Add Vernologist</a>
                            <a href="#" class="btn btn__add">View Vernologists</a>
                       
                        </div>   -->

                     </div>
                    
                 </div>
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="update">
                    <div>
                        <label for="userid">User ID</label>
                        <input type="text" placeholder="Your used id" name="userid" id="userid">
                        <span class="err"></span>

                    </div>
                  
                    <div>
                        <label for="">New Full name</label>
                        <input type="text" placeholder="First Name" name="name" id="name"> 
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">New email</label>
                        <input type="email" placeholder="Email" name="email" id="email">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">New Nic</label>
                        <input type="text" placeholder="Nic" name="nic" id="nic">
                        <span class="err"></span>
                    </div>
                   
                   
                    <div>
                        <label for="">Experience Years</label>
                        <input type="number" placeholder="qualification" name="exp" id="exp">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for=""> New Password</label>
                        <input type="password" placeholder="Password" name="pass" id="password">
                        <span class="err"></span>
                    </div>
                    <div>
                        <label for="">Confirm Password</label>
                        <input type="password" placeholder="Password" name="cpass" id="cpassword">
                        <span class="err"></span>
                    </div>
                    <div class="button_register">
                        <input type="submit" name="update" value="Update" class="btn btn__reg" onclick="return upvalidate()">
                    </div>
                    <?php 
                       if(isset($_POST['update'])){
                           $userid= $_POST['userid'];
                           $fullname= $_POST['name'];
                           $nic= $_POST['nic'];
                           $exp= $_POST['exp'];
                           $pass= $_POST['pass'];
                           $email= $_POST['email'];

                           $updateven= new Admin();
                           $updateven->updateven($userid,$fullname,$nic,$exp,$email,$pass);
                           
                       }
                      
                    ?>
          
                 </form>
                   
             </div>
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