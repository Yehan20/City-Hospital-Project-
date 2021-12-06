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
    <title>Home</title>
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
    <section class="home">
        <div class="container">
            <div class="intro">
                <h1 class="intro__heading">
                    Welcome to City Hospital
                </h1>
                
                <img class="intro__image" src="images/home.jpg" alt="Home ">
               
                 <p class="intro__text">
                    <!-- The National STD/AIDS Control Programme (NSACP) of the Ministry of Health is the main government organization which coordinates the national response to sexually transmitted infections including HIV/AIDS in Sri Lanka. It collaborates with many national and international organizations such as the Global Fund to Fight Against AIDS, TB, and Malaria (GFATM) and UN organizations while providing leadership and technical support to 34 islandwide STD clinics and 23 ART centers. -->
                    Welcome The City Hospital , Its a Brand new Hospital Located in the mega city of New Jersy , it has all the morden facilites including a 24/7 Ambulance service, Full parking services , cafetrias , parmacys, Its part of the Helath of council and cooperates with the organizations to provide good health care, there are many mini clinics of this all over the state
                 </p>
            </div>
        </div>
    </section>
    <!-- chaneling here -->
    <section class="chanell">
        <div class="container">
            <h2 class="subtitle__text">Online chanelling</h2>
           <div class="row">
            <a href="patientlogin.php" target="_blank" class="appointment-btn one"><i class="fas fa-calendar-check"></i>Make your Clinical Appointment</a>
            <a href="singup.php" target="_blank" class="appointment-btn two"><i class="fas fa-user"></i>Create An Account</a>
           </div>
            
        </div>
    </section>
    <!-- testamonials -->
    <section class="testomonials">
        <div class="container">
            <h2 class="testomonial__text">What our Users say About us</h2>
            <div class="testomonials__box">
                <div class="testomonial">
                    <div>
                     <h3 class="testo__name">Mr Karim</h3>
                     <img class="testo__img" src="images/man.jpg" alt="user"> 
                    </div>
                    <div>
                        <p><q><b>Excellent Service , I Booked my appointment from online using this its easy and fast</q></b></p>
                        <p><span><i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="far fa-star"></i></span></p>
                    </div>

                </div>
                <div class="testomonial">
                    <div>
                     <h3 class="testo__name">Mr Gomez</h3>
                     <img class="testo__img"src="images/man-2.jpg" alt="user"> 
                    </div>
                    <div>
                    <p><q><b>I found this from one of my friends,its very good and reiliable,booking is very easy,</q></b></p>
                        <p><span><i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="far fa-star"></i>
       	 				<i class="far fa-star"></i></span></p>
                    </div>

                </div>
                <div class="testomonial">
                    <div>
                     <h3 class="testo__name">Ms Clare</h3>
                     <img class="testo__img"src="images/women.jpg" alt="user"> 
                    </div>
                    <div>
                        <p><q><b>I booked my appointment using this ,and i didnt need to travel and wait in queue </q></b></p>
                        <p><span><i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="fas fa-star"></i>
       	 				<i class="far fa-star"></i></span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- std awarness -->
    <section class="std-awareness">
        <div class="container">
            <h2 class="subtitle">Why City Hospital ?</h2>
            <div class="card">
                <img src="images/hospital.jpg" class="fight__img" alt="">
                <div>
                 <p class="hospital__text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus explicabo doloremque placeat iure eaque, at tempore animi accusantium. Suscipit atque cum velit ducimus magnam dolor tenetur ipsum ratione fugit itaque. <br>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime accusantium aperiam dolore sed, voluptatibus minus adipisci excepturi beatae maiores ea est qui voluptate quam. Ut saepe tempora fugiat. Animi, illum?
                </p>
                </div>
            </div>
        </div>
    </section>
    <!-- facts -->
    <article class="facts">
        <div class="container">
            <h2 class="data__text">Facts Regarding STD</h2>
            <div class="data">
                
                <div class="fact__std">
                    <h3>Local Data</h3>
                    <img src="images/local.jpg" alt="aids img" class="fact__Img">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, dicta. Magnam, porro saepe excepturi beatae id molestias, cum nihil tempora odit qui quod hic necessitatibus cupiditate at officia voluptates. </p>
                </div>
                <div class="fact__std">
                    <h3>Global Facts</h3>
                    <img src="images/globe.jpg" alt="World" class="fact__Img">
                    <ul class="data__list">
                        <li class="data__item">38.0 million [31.6 million–44.5 million] people globally were living with HIV in 2019.</li>
                        <li class="data__item">More than 1 million sexually transmitted infections (STIs) are acquired every day worldwide</li>
                        <li class="data__item">Each year, there are an estimated 376 million new infections with 1 of 4 STIs: chlamydia, gonorrhoea, syphilis and trichomoniasis</li>
                        <li class="data__item">Almost 1 million people die from HIV/AIDS each year; in some countries it's the leading cause of death.</li>
                    </ul>
                </div>

            </div>
        </div>
    </article>

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