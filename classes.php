<?php 
   class DatabaseConnection{



    //    private $hostname='localhost';
    //    private $name='root';
    //    private $password='';
    //    private $db='NscapNew';
    //    public $connect;
   

    //     public function __construct(){
    //     $this->connect=mysqli_connect($this->hostname,$this->name,$this->password,$this->db);
    //     if(!$this->connect){
    //         echo 'Conect error'.mysqli_connect_error($this->connect);
    //         }

    //     }


         private $cleardb_server = 'eu-cdbr-west-01.cleardb.com';
         private $cleardb_username = 'b926f01297bc8a';
         private $cleardb_password = '3d70b53c';
         private $cleardb_db = 'heroku_42ddaf2a7d3b86b';
         private $active_group = 'default';
         private $query_builder = TRUE;
         public  $connect;
// Connect to DB
        // $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

        public function __construct(){
            $this->connect=mysqli_connect($this->cleardb_server,$this->cleardb_username,$this->cleardb_password,$this->cleardb_db);
            if(!$this->connect){
                echo 'Conect error'.mysqli_connect_error($this->connect);
                }
    
            }
  
    }

       
    
 class Admin extends DatabaseConnection{
          
        private $name;
        private $password;

        // public function __construct($name,$password){
        //     $this->name=$name;
        //     $this->password=$password;
        // }
            public function login($username,$password){
                // $this->name=$username;
                // $this->password=$password;

                $sql="SELECT * FROM admin Where Username='$username' AND Password='$password'";
                $exe=mysqli_query( $this->connect,$sql);
                if(mysqli_num_rows($exe)>0){
                    header('location:adminhome.php');
                }
                else{
                    echo '<span>*Username or Password Incorrect</span>';
                }

            }
        


        private function sameId($username){
            $sql="SELECT * FROM Venerologists WHERE userid='$username'";
            $exe=mysqli_query($this->connect,$sql);
            if(mysqli_num_rows($exe)>0){
            return true;
            }
            else{
            return false;
            }

        
        
        }
        private function sameNic($nic){
            $sql="SELECT * FROM Venerologists WHERE nic='$nic'";
            $exe=mysqli_query($this->connect,$sql);
            if(mysqli_num_rows($exe)>0){
            return true;
            }
            else{
            return false;
            }

        
        
        }

      public function addVen($fullname,$userid,$nic,$email,$qualifications,$exp,$password){
          
          if(($fullname&&$userid&&$nic&&$email&&$qualifications&&$exp&&$password)!=''){
              
            //   $res='';
            //   $this->result=$this->sameId($userid);
            //   if($this->result===true){
              $sql="INSERT INTO Venerologists (fullname,userid,nic,email,qualifications,exp,password) values('$fullname','$userid',
              '$nic','$email','$qualifications','$exp','$password')";

             $res=$this->sameId($userid);
             $res2=$this->sameNic($nic);
             if($res!==true && $res2!==true){
             
              if(mysqli_query($this->connect,$sql)){
              echo '<p style="color:green; font-weight:bold; padding:0; background:#fff;">Verorlogist added</p>';
               
              }

              }
             else if($res==true && $res2!=true){
                echo '<p style="color:red; font-weight:bold; padding:0; background:#fff;">User Name is used</p>';
              }
              else if($res!=true && $res2==true){
                echo '<p style="color:red; font-weight:bold; padding:0; background:#fff;">Nic is used</p>';
              }  
            else{
                echo '<p style="color:red; font-weight:bold; padding:0; background:#fff;">User Name is used</p>';
                echo '<p style="color:red; font-weight:bold; padding:0; background:#fff;">Nic Name is used</p>';
            }
              

          

          }
          else{
              echo 'not added becuase its blank';
          }
      }


      public function searchven($userid){
          $sql="SELECT * FROM Venerologists WHERE userid='$userid'";
          $exe=mysqli_query($this->connect,$sql);
          if(mysqli_num_rows($exe)>0){
             while($rows=mysqli_fetch_assoc($exe)){
              echo "<h5>Name:".$rows['fullname']."</h5>";
              echo "<h5>Name:".$rows['nic']."</h5>";
              echo "<h5>Name:".$rows['email']."</h5>";
             }
          }
          else{
              echo "<h3>*No matching results</h3>";
          }
     
      }
      public function deleteven($userid){
          $sql="DELETE  FROM Venerologists WHERE userid='$userid'";
        //   $exe=mysqli_query($this->connect,$sql);
        //   echo mysqli_num_rows($exe);
        $res=$this->sameId($userid);
        if($res==true){

         if(mysqli_query($this->connect,$sql)){
             echo 'Venerlogist Deleted';
             
         }
        }
       else{
           echo 'Cannot find id';
       }
        
      }
      public function updateven($userid,$fullname,$nic,$exp,$email,$pass){
          $res=$this->sameId($userid);
          if($res==true){
          $sql="UPDATE Venerologists SET fullname='$fullname',nic='$nic',exp='$exp',password='$pass',email='$email' WHERE userid='$userid'";
           if(mysqli_query($this->connect,$sql)){
               echo '<p style="color:green; text-align:center;">Venerlogist Updated Successfully</p>';
           }

          }
          else{
              echo '<p style="color:red; text-align:center;">user id canot be found</p>';
          }
      }


      public function viewVen(){
         
        $sql="SELECT fullname,userid,nic,email,qualifications,exp FROM Venerologists";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                echo "<tr>
                        <td>".$row['userid']."</td>
                        <td>".$row['fullname']."</td>
                        <td>".$row['nic']."</td>
                        <td>".$row['qualifications']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['exp']." years"."</td>
                     </tr>";
            }
        }
        
      }

  

    
  }

  class Venerologist extends  DatabaseConnection{
       private $venName;
       private $userid;
       public function findName($userid){
        //    $_SESSION['userdid']=$userid;
           $sql="SELECT fullname FROM venerologists WHERE userid='$userid'";
           $exe=mysqli_query($this->connect,$sql);
           if(mysqli_num_rows($exe)>0){
               while($row=mysqli_fetch_assoc($exe)){
                   echo '<strong> '. $row['fullname'].'</strong> ';
               }
           }
       }
    
       public function login($userid,$password){
        $sql="SELECT * FROM venerologists Where userid='$userid' AND password='$password'";
        $exe=mysqli_query( $this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            header('location:venHome.php');
        }
      
       }
       public function view(){
           $sql="SELECT fullname,qualifications,userid FROM venerologists";
           $exe=mysqli_query($this->connect,$sql);
           if(mysqli_num_rows($exe)>0){
               while($row=mysqli_fetch_assoc($exe)){
                   echo "<span> Name: ".$row['fullname']."<br>"."Qualifications: ".$row['qualifications']."<br>Id :".$row['userid']."</span><br>";
               }
           }
       }

       public function viewApp($id){
        //    $getName="SELECT * FROM venerologists WHERE userid='$id'";
        //    $exe2=mysqli_query($this->connect,$getName);
        //    $name="";
        //    if(mysqli_num_rows($exe2)>0){
              
        //     while($rows=mysqli_fetch_assoc($exe2)){
        //         $name=$rows['fullname'];
               
        //      }
        //    }
         
           $sql="SELECT app_no,fullname,date_of,timeslot,result,appkey FROM appointment  WHERE userid='$id' AND result='booked' ORDER BY date_of DESC , app_no ASC";
           $exe=mysqli_query($this->connect,$sql);
           if(mysqli_num_rows($exe)>0){
               while($row=mysqli_fetch_assoc($exe)){
                   echo "<tr><td>".$row['app_no']."</td><td>".$row['appkey']."</td><td>".$row['fullname']."</td><td>".$row['date_of']."</td><td>".$row['timeslot']."</td>
                   <td>".$row['result']."</td></tr>";
               }
               echo '</table>';
            
           }
           else{
               echo '</table><h2 style="color:darkblue; text-align:center;">All apoinmtents done</h2>';
           }
         
         
       }

       public function viewAppHistory($id){
        $getName="SELECT * FROM venerologists WHERE userid='$id'";
        // $exe2=mysqli_query($this->connect,$getName);
        // $name="";
        // if(mysqli_num_rows($exe2)>0){
           
        //  while($rows=mysqli_fetch_assoc($exe2)){
        //      $name=$rows['fullname'];
            
        //   }
        // }
      
        $sql="SELECT app_no,fullname,date_of,timeslot,result,appkey FROM appointment  WHERE userid='$id' AND result<>'booked' ORDER BY date_of DESC";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                echo "<tr class='main_row tog''><td>".$row['appkey']."</td><td>".$row['app_no']."</td><td>".$row['fullname']."</td><td>".$row['date_of']."</td><td>".$row['timeslot']."</td>
                <td>".$row['result']."</td></tr>";
            }
            echo '</table>';
         
        }
        else{
            echo '</table><h2 style="color:darkblue; text-align:center;">All apoinmtents done</h2>';
        }
      
      
    }
  }

  class Patient extends DatabaseConnection{
      private $username;
      private $sameName_Check;
      private $sameNic_Check;
      private function sameusername($username){
        $sql="SELECT * FROM patient WHERE username='$username'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
        return true;
        }
        else{
        return false;
        }
      }
      private function sameNic($nic){
          $sql="SELECT * FROM patient WHERE nic='$nic'";
          $exe=mysqli_query($this->connect,$sql);
          if(mysqli_num_rows($exe)>0){
            return true;
            }
            else{
            return false;
            }
      }
      public function register($firstname,$lastname,$username,$email,$nic,$dob,$password)  
      {
          $this->sameName_Check=$this->sameusername($username);
          $this->sameNic_Check=$this->sameNic($nic);
          if($this->sameName_Check!=true && $this->sameNic_Check!=true){
          $sql="INSERT INTO patient (firstname,lastname,username,email,nic,dob,password) VALUES('$firstname','$lastname',
          '$username','$email','$nic','$dob','$password')";
          
          if(mysqli_query($this->connect,$sql)){
               echo '<h3 style="color:green; margin-top:1em;">Account made please login</h3>';
          }
          else{
              echo 'not working';
          } 

         }
          else if(($this->sameName_Check==true) && ($this->sameNic_Check!=true)){
              echo '<h4 style="color:red; margin-top:1em;">Username is used </h4>';
          }

          else if(($this->sameName_Check!=true) && ($this->sameNic_Check==true)){
            echo '<h4 style="color:red; margin-top:1em;">Nic is used </h4>';
           }
          
          else{
              echo '<h4 style="color:red; margin-top:1em;">Username is Used</h4>';
              echo '<h4 style="color:red; margin-top:1em;">Nic is used</h4>';
          }  
      }

      public function login($username,$password){
          $sql="SELECT * FROM patient WHERE username='$username' AND password='$password'";
          $exe=mysqli_query($this->connect,$sql);
          if(mysqli_num_rows($exe)>0){
              header('location:UserHome.php');
          }
          else{
              echo '<h3 style="color:red">Login invalid</h3>';
          }
      }
      public function findName($username){
        //    $_SESSION['userdid']=$userid;
           $sql="SELECT firstname,lastname FROM patient WHERE username='$username'";
           $exe=mysqli_query($this->connect,$sql);
           if(mysqli_num_rows($exe)>0){
               while($row=mysqli_fetch_assoc($exe)){
                   echo '<strong> '. $row['firstname'].' '.$row['lastname'].'</strong> ';
               }
           }
       }

       public function viewAppointment($userid){
        $sql="SELECT app_no,venerologist_name,date_of,timeslot,result,appkey FROM appointment WHERE username='$userid'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                 echo '<tr><td>'.$row['appkey'].'</td><td>'.$row['app_no'].'</td><td>'.$row['venerologist_name'].'</td><td>'.$row['date_of'].'</td><td>'.$row['timeslot'].'</td><td>'.$row['result'].'</td></tr>';
            }
            echo'</table>';
        }
        else{
            echo '</table><h2 style="text-align:center;  color:darkblue;">No Appointments yet <a href="Appointment.php">Book now</a></h2>';
        }
    }

    public function cancelAppointment($userid,$appkey){
        $sql="DELETE FROM appointment WHERE username='$userid' AND appkey='$appkey' AND result='booked'";
        $res=$this->sameusername($userid);
        $sql2="SELECT * FROM appointment WHERE username='$userid' AND appkey='$appkey' AND result='booked'";
        $res2;
        $exe=mysqli_query($this->connect,$sql2);
        if(mysqli_num_rows($exe)>0){
            $res2=true;
        }
        else{
            $res2=false;
        }
       

        if(mysqli_query($this->connect,$sql)){
            if($res==true && $res2==true){
            echo '<p style="color:red; text-align:center">Appointment Cancelled</p>';
            }
            else{
                echo '<p style="color:red; text-align:center">Appointment may be cancelled prevoiously/ Entered details wrong</p>';
            }
           
        }
        else{
            echo 'Please enter Correct deatails';
        }
    }

    public function manageProfile($username,$firstname,$lastname,$nic,$pass){
       
        $sql="UPDATE patient SET firstname='$firstname' ,lastname='$lastname',nic='$nic' ,password='$pass' WHERE username='$username'";
        $checkID=$this->sameNic($nic);
        if($checkID==false){
 
             if(mysqli_query($this->connect,$sql)){
                 echo '<p style="text-align:center; color:green;">Information Updated SucessFully</p>';
             }
        }
        else{
            echo ' Nic is Used ';
        }
    }
    public function viewUserprofile($username){
        $sql="SELECT * FROM patient WHERE username='$username'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                echo '<p style="color:darkblue;">User Name :'.$row['username'].'<br><br>nic :'.$row['nic'].'<br><br>First Name:'.$row['firstname'].'<br><br>Last Name'.$row['lastname'].'<br><br>Birthday: '.$row['dob'].'</p>';    
            }
        }
       

    }
    public function search($search){
       
        $sql="SELECT * FROM venerologists WHERE userid LIKE '%$search%' OR fullname LIKE '%$search%' 
        OR email LIKE '%$search%' OR qualifications LIKE '%$search%' OR exp='$search'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                echo '<div class="col">
                      <h2>Profile</h2>
                    <p>Name : <strong>'.$row['fullname'].'</strong></p>
                <p>Email: <strong>'.$row['email'].'</strong></p>
                <p>Qualifications:<strong>'.$row['qualifications'].'</strong></p>
                <p>Experince:<strong>'.$row['exp'].'</strong> Years</p>
                 <a href="patientlogin.php" class="btn btn__register">Book now</a>
                </div>';
            }
        }
        else{
            echo '<h1 style="color:red;">No Matching Results ! </h1>';
        }
    }

  }

  class Appointment extends DatabaseConnection{
    
    //   public $appno;
      private $reg_user;
      private $reg_nic;
      private $reg_ven;
      private function check_registered_user($username){
        $sql="SELECT * FROM patient WHERE username='$username'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
        return true;
        }
        else{
        return false;
        }
      }
      private function check_avaialble_nic($nic){
        $sql="SELECT * FROM patient WHERE nic='$nic'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
          return true;
          }
          else{
          return false;
          }
      }
      private function findVen($venid){
          $sql="SELECT * FROM venerologists WHERE userid='$venid'";
          $exe=mysqli_query($this->connect,$sql);
          if(mysqli_num_rows($exe)>0){
              return true;
          }
          else{
              return false;
          }
      }
      private function maxApp($date,$time){
          $sql="SELECT * FROM appointment WHERE date_of='$date' AND timeslot='$time'";
          $exe=mysqli_query($this->connect,$sql);
          $row=mysqli_num_rows($exe);
        //   echo $row;
          if($row==25){
              return "Max";
          }
          else{
              return "Min";
          }
      }

      private function repeatApp($username,$date,$time,$venName){
          $sql="SELECT * FROM appointment WHERE date_of='$date' AND timeslot='$time' AND username='$username' AND userid='$venName'";
          $exe=mysqli_query($this->connect,$sql);
          if(mysqli_num_rows($exe)>0){
              return true;
          }
          else{
              return false;
          }
      }

       private function getFullname($username){
           $sql="SELECT * FROM patient WHERE username='$username'";
           $exe=mysqli_query($this->connect,$sql);
           if(mysqli_num_rows($exe)>0){
               while($row=mysqli_fetch_assoc($exe)){
                   $fullname=$row['firstname'].' '.$row['lastname'];
                   return $fullname;
               }
           }
       } 

       private function getvenname($id){
        $sql="SELECT * FROM venerologists WHERE userid='$id'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                $fullname=$row['fullname'];
                return $fullname;
            }
        }
    } 
      

      public function makeAppointment($username,$nic,$venerologist_id,$date,$time){
           
           $fullname=$this->getFullname($username);
           $venerologist_name=$this->getvenname($venerologist_id);
           $appno=$this->getAppointment($date,$time);   
           $status="booked";
           $sameApp=$this->repeatApp($username,$date,$time,$venerologist_id);
           $randNumber=$this->generateRand();
           //checking the validations    
            $this->reg_user=$this->check_registered_user($username);
            $this->reg_nic=$this->check_avaialble_nic($nic);
            $this->reg_ven=$this->findVen($venerologist_id);
            $limit=$this->maxApp($date,$time);
            // echo $limit;
            
          if($this->reg_user==true && $this->reg_nic==true && $this->reg_ven==true){
           
           if($limit==="Min"){
               if($sameApp===false){
                    $sql="INSERT INTO appointment(username,fullname,nic,venerologist_name,userid,date_of,timeslot,app_no,result,appkey) 
                    VALUES('$username','$fullname','$nic','$venerologist_name','$venerologist_id','$date','$time',$appno,'$status','$randNumber')";

                        if(mysqli_query($this->connect,$sql)){
                            echo '<p style="color:green; text-align:center">Appointment booked Your number is :'.$appno.'<br><br>
                             Your Registration number is : '.$randNumber.'</p>';
                        }
                        else{
                            echo 'not working';
                        }
                } 
                else{
                    echo '<p style="color:red; text-align:center;">You cannot book samme appointment twice</p>';
                }  
           }
           else{
               echo '<p style="color:red; text-align:center;">Appointments are finished</p>';
           }
         }
      
         else{
             echo '<p style="color:red; text-align:center;">Enterted username/Nic/Venerologist Id doesnt exsists</p>';
         }
      }

    private function getAppointment($date,$time){
        $app;
        $sql="SELECT app_no FROM appointment WHERE date_of='$date' AND timeslot='$time' ORDER BY app_no desc LIMIT 1";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                  $app=$row['app_no']+1;
                  return $app;
                  
                  
            
            }
        }
        else{
            return 1;
        }
    }

    private function generateRand(){
        $rand = random_int(100000, 999999);
        $key='RG'.strval($rand);
        $sql="SELECT * FROM appointment Where appkey='$key'";
        $exe=mysqli_query($this->connect,$sql);
        $row=mysqli_num_rows($exe);
    
        
        if($row==1){
          return  generateRand(); // recursion
          
        }
        else{
        return $key;
        }


    }

    public function informPatient($username){
        $sql="SELECT *  FROM appointment WHERE username='$username' and result='canceled'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            while($row=mysqli_fetch_assoc($exe)){
                echo '<br><small style="color:red; text-align:left; line-height:1.5;">Your Appointment With Doctor '.$row['venerologist_name'].' on '.$row['date_of'].' at '.$row['timeslot'].' has been cancelled
                sorry for the inconvenice Caused. </small><br>';
            }
           
        }
        else{
            echo '<br><small style="color:red; font-size:1.0rem; text-align:left; line-height:1.5;">No Special Messages yet any sudden appointment cancellation by the venerlogist will be displayed here </small><br>';
        }
       
    }
    
    private function FindApp($appkey){
        $sql="SELECT * FROM appointment WHERE appkey='$appkey'";
        $exe=mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($exe)>0){
            return true;
        }
        else{
            return false;
        }
    }

    public function completeApp($appkey){
        $istrue=$this->FindApp($appkey);
        $sql1="SELECT * FROM appointment WHERE result='booked' and appkey='$appkey'";
        $exe=mysqli_query($this->connect,$sql1);
        $sql= "UPDATE appointment SET result='completed' WHERE appkey='$appkey'";

       
        if ($istrue==true){
            
            if(mysqli_num_rows($exe)>0){

                if(mysqli_query($this->connect,$sql)){
                    echo '<p style="color:green; text-align:center;">Appointment Marked</p>';
                    }  
            }
            else{
               echo '<p style="color:red; text-align:center;">Appoinmtent Prevoiously Canceld/Marked</p>';
            }
         
           
        }
        else{
            echo '<p style="color:red; text-align:center;">Enter valid appointment NUM</p>';
        }
    }

    public function cancelApp($appkey){
        $istrue=$this->FindApp($appkey);
        $sql1="SELECT * FROM appointment WHERE result='booked' and appkey='$appkey'";
        $exe=mysqli_query($this->connect,$sql1);
        $sql= "UPDATE appointment SET result='canceled' WHERE appkey='$appkey'";

       
        if ($istrue==true){
            
            if(mysqli_num_rows($exe)>0){

                if(mysqli_query($this->connect,$sql)){
                    echo '<p style="color:red; text-align:center;">Appointment Cancelled</p>';
                    }  
            }
            else{
               echo '<p style="color:red; text-align:center;">Appoinmtent Prevoiously Canceld/Marked</p>';
            }
         
           
        }
        else{
            echo '<p style="color:red; text-align:center;">Enter valid appointment NUM</p>';
        }
    }

  }


  '<script type="text/javascript" src="script.js"></script>';































   
?>