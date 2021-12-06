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
    <title>Services</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <style>
        .column p span{
            display:inline-block;
            margin:0.5em 0;
            font-weight:bold;
            color:#121256;
           

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
    <section class="service__intro services">
        <div class="image__body">
            <h1 class="services__heading">Our Services</h1>
            <p class="services__para">We Offer wide range of Services in our Clinic Below are them</p>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <h2 class="services__text">
                Services
            </h2>
            <div class="service">
                <div class="services-1">
                  <h3>Laboratory Services</h3>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Full Blood Count(FBC)</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Urine Test</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Pap test.</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>DNA</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Lipid Profile</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>HBA1C</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Total protein</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Animea Testing</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Vitamins and Nutrions Test</p>
                </div>
                 <div class="services-1">
                  <h3>Hiv/AIDS Services</h3>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Couunselling</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Motivating Patients</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Nutritional program</p>
                  <p style="word-spacing:-2px;"><i class="fa fa-check-circle" aria-hidden="true"></i>Prevention of mother to child transmission of HIV</p>
                </div>
                 <div class="services-1">
                  <h3>Hepatitis B Services</h3>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Immune modulator Drugs</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Antiviral Drugs</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Liver transplant</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Interferon injections</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i> Nutritional program</p>
                </div>
                 <div class="services-1">
                  <h3>HPV Services</h3>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Chemotherapy</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Radiation therapy</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Laser or light therapy</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Surgical removal</p>
                  <p><i class="fa fa-check-circle" aria-hidden="true"></i>Cryotherapy</p>
                </div>
              </div> 
        </div>
    </section>
    <section class="working__hours">
        <div class="container">
            <h2>Clnical Stats</h2>
            <div class="rows">
                <div class="column">
                    <h3>Time Slots</h3>
                    <img src="images/time.png" class="stats__img" alt="time">
                   <p><b>The Differnet Time slots where Doctors Come to treat</b></p>
                   <ul class="time__slots">
                       <li>8:00  - 10:00</li>
                       <li>10:30 - 12:30</li>
                       <li>13:30 - 15:30</li>
                       <li>15:30 - 17:00</li>
                
                   </ul>
                </div>
                <div class="column">
                    <h3>Clinic Working Hours</h3>
                    <img src="images/table.png" class="stats__img" alt="time">
                   <p><b>Times which clinic is Open</b></p>
                   <ul class="time__slots">
                       <li>Monday   | 7:00am-5:00pm</li>
                       <li>Tuesday  | 7:00am-5:00pm</li>
                       <li>Wednesday| 7:00am-5:00pm</li>
                       <li>Thursday | 7:00am-5:00pm</li>
                       <li>Friday   | 7:00am-5:00pm</li>
                       <li>Saturday | 7:00am-5:00pm</li>
                       <li>Sunday   | 7:00am-5:00pm</li>

                   </ul>
                </div>
                <div class="column">
                    <h3>Doctors</h3>
                    <img src="images/doctors.png" alt="doctor__image" class="stats__img">
                    <p style="font-weight:bold;">Our Available Doctors</p>
                    <p style="background:#fff;"><?php
                        $ven = new Venerologist();
                        $ven->view();
                    ?></p>
                    <a href="patientlogin.php" target="_blank" class="btn btn__add">Book now</a>
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