<?php
 include 'classes.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Make Appointment</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <style>
        .available{
    
            display:flex;
            flex-direction:column;

            gap:10px;
        }
        .err{
            font-size:0.8rem;
            color:red;
            display:inline-block;
            margin-bottom:1em;
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
     <section class="sign-up">
         <div class="container">
             <h1 class="signup__title">Appointment</h1>
             <div class="signup__container">
                 <div class="sign__deatils">
                     <h3>Make Your Appointment</h3>
                    
                     <img src="images/appointment.png" alt="sing up " class="sign__up__img">
                     <div class="available">
                         <br>
                        <h3>Available Doctors </h3>
                        <?php 
                           $ven= new Venerologist();
                           $ven->view();
                        //    echo $_SESSION['name'];
                        ?>
                     </div>
                    
                 </div>
               
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="appointment__form">
                        <div>
                            <label for="" >User name</label>
                            <input type="text" placeholder="Username" name="username" id="username">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Nic Number</label>
                            <input type="text" placeholder="Nic" name="nic" id="nic">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Doctor Id</label>
                            <input type="text" placeholder="DOC id" name="venname" id="ven_id">
                            <span class="err"></span>
                        </div>
                   
                        <div>
                            <label for="">Date</label>
                            <input type="date" placeholder="First Name" name="date" id="date" onKeydown="return false">
                            <span class="err"></span>
                        </div>
                        <div>
                            <label for="">Time</label>
                            <select name="time" id="">
                                
                                <option value="8:00-10:00">8:00-10:00</option>
                                <option value="10:30-12:30">10:30-12:30</option>
                                <option value="13:00-15:00">13:00-15:00</option>
                                <option value="15:30-17:00">15:30-17:00</option>
                            </select>
                        </div>
                        <div class="button_register">
                            <input type="submit" name="book" value="Make Appointment" id="appointment-btn"  class="btn btn-green" onclick="return appointmentValidate()">
                        </div>
                         <?php
                           if(isset($_POST['book'])){
                            $username=$_POST['username'];
                            $nic=$_POST['nic'];
                            $vename=$_POST['venname'];
                            $date=$_POST['date'];
                            $time=$_POST['time'];

                            $appointment=new Appointment();
                            $appointment->makeAppointment($username,$nic,$vename,$date,$time);
                            
                           }
                            
                         ?>
                     </form>
                     <!-- <script>
                         var warning = $('<p>').addClass( "yourClass" ).text('You cannot select past day or day on the weekend.');

                            $('#date').change(function(e) {

                                d = new Date(e.target.value)

                                minDate= new Date;
                                minDate.setHours(0, 0, 0, 0);
                                

                                if( < minDate) {
                                  
                                    $('#appdateon').after(warning);
                                } else {
                                 warning.remove()
                            
                                s = true;
                                }
                                
                            })

                      </script>    -->
                 
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