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
    <title>Contact</title>
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
     <section class="contact__us">
         <div class="container">
             <h1 class="contact__title">Contact Us</h1>
             <div class="contact">
                        <div class="contact__form" >
                        <form action="#" class="form">
                            <div>
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input type="email" name="name" id="name" placeholder="Your Email">
                            </div>
                            <div>
                                <label for="">Number</label>
                                <input type="number" name="name" id="name" placeholder="Your Number">
                            </div>
                            <div>
                                <label for="">Question</label>
                                <textarea name="" id="" cols="30" rows="5" style="resize: none;" placeholder="Your Doubt"></textarea>
                            </div>
                            <div>
                                <input type="submit" value="Send Question" id="submit" class="btn btn__send">
                            </div>

                        </form>
                        </div>
                        <div class="contact__info">
                            <h2 class="contact__subtitle">Send us you question and Feedback we would love to hear it</h2>
                            <div class="quick__info">
                                
                               <div>
                                <h3>Useful Info</h3>
                                <ul class="useful__list">
                                   
                                    <li><a href="#">Aids Reports</a></li>
                                    <li><a href="#">WHO</a></li>
                                    <li><a href="#">Types of STD </a></li>
                                    <li><a href="#">Unicef</a></li>
                                </ul>
                               </div>
                               <div>
                                   <h3>Details</h3>
                                   <ul class="useful__list">
                                    <li>Address: Queens Rd, NW Orleans</li>
                                    <li>Number : (+001)-1231313131</li>
                                    <li>Email  : cityHp@gmail.com</li>
                                </ul>
                               </div>
                              
                            </div>
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
</body>
</html>