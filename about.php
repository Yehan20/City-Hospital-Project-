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
    <title>About</title>
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
    <section class="about">
        <div class="container">
            <h1 class="about__title">About Us</h1>
            <div class="history__block">
                  <div>
                    <img src="images/history.jpg" alt="about" class="about__img">
                </div>
                
               
                <div>
                    <h2 classs="about__subtitle">History</h2>
                    <p class="about__para">
                      
                       
                        The City Hospital Was founded in 1888 in a small town in new orleas by retired officer called his name, last it expanded its terortary to the next block In the early nineteenth century, and for more than a century to come, most people used this as a place to treat animals , but in 1940 it started to treat patients, the first labortary was counstructed in 1950, Later mr a Name Person wisited and joined it to the state then it benifited from the state with fundings, in 1990 it joined the name of organization of hospitals in new orleans, and become a member in the council, in 2000 the two more buildings were started to be constructed in order to treat patients,more 
                    </p>
                    <br>
                        
                </div>
              
            </div>
            <div class="vission">
                <h2 class="vission__text">Our Goals</h2>
                <div>
                    
                    <h3>Vission</h3>
                    <p><i class="fa fa-asterisk" aria-hidden="true"></i>Make our Country free of STD, discrimination and AIDS-related deaths.</p>
                </div>
                 <div>
                    <h3>Mission</h3>
                    <p><i class="fa fa-asterisk" aria-hidden="true"></i>Provide best care and prevent the Transmission of this Diseases </p>
                 </div>
                <div>
                    <h3>Targets</h3>
                    <p><i class="fa fa-asterisk" aria-hidden="true"></i>To aware the Public as much as we can about thease Diseases</p>
                    <p><i class="fa fa-asterisk" aria-hidden="true"></i>Provide services for all types of people</p>
                    <p><i class="fa fa-asterisk" aria-hidden="true"></i>Always perform the best and safest Treatments</p>
                    <p><i class="fa fa-asterisk" aria-hidden="true"></i>Making Patients feel that they not alone</p>
                </div>
               
             </div>
        </div>
    </section>
    <div class="team">
        <div class="container">
            <h2 class="team__subtitle">Our Team</h2>
            <img src="images/staff.jpg" class="team__pic" alt="">
            <h3 class="team__text">Middle Picture is DR. James</h3>
            
        </div>
    </div>
    <div class="centers">
        <div class="container">
            <h2 class="centers__text">
                Clinic Branches
            </h2>
            <table class="table" border="1">
				<thead>
					<th>District</th>
					<th>Center Location</th>			
				</thead>
				<tbody>
					<tr>
						<td rowspan=5 class="district"><b>1.Western District <i class="fas fa-map-marked-alt text-success"></i></td>
						<td>
							<div>New City</div>
						</td>
					</tr>
					<tr>
						<td colspan=2>
							<div>Crown Place</div>
						</td>
					</tr>
					<tr>
						<td colspan=2>
							<div>Name of District</div>
						</td>
					</tr>
					<tr>
						<td colspan=2>
							<div>Name of District</div>
						</td>
					</tr>
				


					<tr>
						<td rowspan=5 class="district"><b>2.Centrel District <i class="fas fa-map-marked-alt text-success"></i></td>
						<td>
							<div>Name of District</div>
						</td>
					</tr>
					<tr>
						<td colspan=2>
							<div>Name of District</div>
						</td>
					</tr>
				



					<tr>
						<td rowspan=5 class="district"><b>3.Sothern <i class="fas fa-map-marked-alt text-success"></i></td>
						<td>
							<div>Name of District</div>
						</td>
					</tr>
					<tr>
						<td colspan=2>
							<div>Name of District</div>
						</td>
					</tr>
					

				</tbody>
			</table>

        </div>
    </div>

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