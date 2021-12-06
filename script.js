$(document).ready(function () {
    
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
    month = '0' + month.toString();
    if(day < 10)
    day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;

    $('#date').attr('min', maxDate);
});




function validate(){
    let userId=document.getElementById('userid');
    let fullname=document.getElementById('name');
    let nic= document.getElementById('nic');
    let email=document.getElementById('email');
    let qual=document.getElementById('qual');
    let exp=document.getElementById('exp');
    let password=document.getElementById('password');
    let confirm=document.getElementById('cpassword');

    let regex=/^[a-zA-Z-' ]*$/;
    let res=true;
    document.getElementById('userid').nextElementSibling.innerHTML="";
    document.getElementById('name').nextElementSibling.innerHTML="";
    document.getElementById('nic').nextElementSibling.innerHTML="";
    document.getElementById('email').nextElementSibling.innerHTML="";
    document.getElementById('qual').nextElementSibling.innerHTML="";
    document.getElementById('exp').nextElementSibling.innerHTML="";
    document.getElementById('password').nextElementSibling.innerHTML="";
    document.getElementById('cpassword').nextElementSibling.innerHTML="";
    if(userId.value==''){

              document.getElementById('userid').nextElementSibling.innerHTML="Required";
              res=false;
              
          }

          
        if(fullname.value==''){

            document.getElementById('name').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(!regex.test(fullname.value)){
            document.getElementById('name').nextElementSibling.innerHTML="Name can contain only letters";
            res=false;
        }
        if(nic.value.length<7){
            document.getElementById('nic').nextElementSibling.innerHTML='Nic must be 10 characters';
            res=false;
        }
        if(nic.value==''){

            document.getElementById('nic').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(email.value==''){

            document.getElementById('email').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(qual.value==''){

            document.getElementById('qual').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(exp.value==''){

            document.getElementById('exp').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(password.value.length<6){
            document.getElementById('password').nextElementSibling.innerHTML='Weak Password';
            res=false;
        }
        if(password.value==''){
            document.getElementById('password').nextElementSibling.innerHTML='Required';
            res=false;
        }
      
        if(confirm.value==''){
            document.getElementById('cpassword').nextElementSibling.innerHTML='Required';
            res=false;
        }
        if(password.value!=confirm.value){
            document.getElementById('cpassword').nextElementSibling.innerHTML='Not matching';
            document.getElementById('password').nextElementSibling.innerHTML='Not matching';
            res=false;
        }

        if(res==false){
           return false;
        }

}



function upvalidate(){
    let userId=document.getElementById('userid');
    let fullname=document.getElementById('name');
    let nic= document.getElementById('nic');
    let email=document.getElementById('email');

    let exp=document.getElementById('exp');
    let password=document.getElementById('password');
    let confirm=document.getElementById('cpassword');
    // var nameformat=/^[a-zA-Z-' ]*$/;
    let regex=/^[a-zA-Z-' ]*$/;
    let res=true;
    
    document.getElementById('userid').nextElementSibling.innerHTML="";
    document.getElementById('name').nextElementSibling.innerHTML="";
    document.getElementById('nic').nextElementSibling.innerHTML="";
    document.getElementById('email').nextElementSibling.innerHTML="";

    document.getElementById('exp').nextElementSibling.innerHTML="";
    document.getElementById('password').nextElementSibling.innerHTML="";
    document.getElementById('cpassword').nextElementSibling.innerHTML="";
    if(userId.value==''){

              document.getElementById('userid').nextElementSibling.innerHTML="Required";
              res=false;
              
          }
        if(fullname.value==''){

            document.getElementById('name').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(!regex.test(fullname.value)){
            document.getElementById('name').nextElementSibling.innerHTML="Name can contain only letters";
            res=false;
        }
        if(nic.value.length<7){
            document.getElementById('nic').nextElementSibling.innerHTML='Nic must be 10 characters';
            res=false;
        }
        if(nic.value==''){

            document.getElementById('nic').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(email.value==''){

            document.getElementById('email').nextElementSibling.innerHTML="Required";
            res=false;
        }
      
        if(exp.value==''){

            document.getElementById('exp').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(password.value.length<6){
            document.getElementById('password').nextElementSibling.innerHTML='Weak Password';
            res=false;
        }
        if(password.value==''){
            document.getElementById('password').nextElementSibling.innerHTML='Required';
            res=false;
        }
      
        if(confirm.value==''){
            document.getElementById('cpassword').nextElementSibling.innerHTML='Required';
            res=false;
        }
        if(password.value!=confirm.value){
            document.getElementById('cpassword').nextElementSibling.innerHTML='Not matching';
            document.getElementById('password').nextElementSibling.innerHTML='Not matching';
            res=false;
        }

        if(res==false){
           return false;
        }

}


function signupvalidate(){

    let userId=document.getElementById('username');
    let firstname=document.getElementById('fname');
    let lastname=document.getElementById('lastname');
    let nic= document.getElementById('nic');
    let email=document.getElementById('email');

    // let exp=document.getElementById('exp');
    let password=document.getElementById('password');
    let confirm=document.getElementById('cpassword');

    let regex=/^[a-zA-Z-' ]*$/;
    let res=true;
    let date1=document.getElementById('dob');
    let date=new Date(document.getElementById('dob').value);


    document.getElementById('username').nextElementSibling.innerHTML="";
    document.getElementById('fname').nextElementSibling.innerHTML="";
    document.getElementById('lastname').nextElementSibling.innerHTML="";
    document.getElementById('nic').nextElementSibling.innerHTML="";
    document.getElementById('email').nextElementSibling.innerHTML="";
    document.getElementById('dob').nextElementSibling.innerHTML="";
    // document.getElementById('exp').nextElementSibling.innerHTML="";
    document.getElementById('password').nextElementSibling.innerHTML="";
    document.getElementById('cpassword').nextElementSibling.innerHTML="";
        
            if(userId.value.length<5){

                document.getElementById('username').nextElementSibling.innerHTML="Must be more than 5 chracters";
                res=false;
                
            }

            if(userId.value==''){

                document.getElementById('username').nextElementSibling.innerHTML="Required";
                res=false;
                
            }

      
            if(firstname.value==''){

                document.getElementById('fname').nextElementSibling.innerHTML="Required";
                res=false;
            }

            if(!regex.test(firstname.value)){
                document.getElementById('fname').nextElementSibling.innerHTML="Name can contain only letters";
                res=false;
            }
            if(lastname.value==''){

                document.getElementById('lastname').nextElementSibling.innerHTML="Required";
                res=false;
            }
            if(!regex.test(lastname.value)){
                document.getElementById('lastname').nextElementSibling.innerHTML="Name can contain only letters";
                res=false;
            }
            if(date1.value==""){
                document.getElementById('dob').nextElementSibling.innerHTML="Required";
                res=false;
            }
         
            if(nic.value.length<7){
                document.getElementById('nic').nextElementSibling.innerHTML='Nic must be 10 characters';
                res=false;
            }
            if(nic.value==''){

                document.getElementById('nic').nextElementSibling.innerHTML="Required";
                res=false;
            }
            if(email.value==''){

                document.getElementById('email').nextElementSibling.innerHTML="Required";
                res=false;
            }
        
            if(password.value.length<6){
                document.getElementById('password').nextElementSibling.innerHTML='Weak Password';
                res=false;
            }
            if(password.value==''){
                document.getElementById('password').nextElementSibling.innerHTML='Required';
                res=false;
            }
        
            if(confirm.value==''){
                document.getElementById('cpassword').nextElementSibling.innerHTML='Required';
                res=false;
            }
            if(password.value!=confirm.value){
                document.getElementById('cpassword').nextElementSibling.innerHTML='Not matching';
                document.getElementById('password').nextElementSibling.innerHTML='Not matching';
                res=false;
            }

            if(res==false){
            return false;
            }


}

function loginvalidate(){
      let name=document.getElementById('name');
      let password=document.getElementById('password');
      document.getElementById('name').nextElementSibling.innerHTML='';
      document.getElementById('password').nextElementSibling.innerHTML='';
      let res=true;
      if(name.value==''){
        document.getElementById('name').nextElementSibling.innerHTML='Feild Required';
        res=false;
      }
      if(password.value==''){
          document.getElementById('password').nextElementSibling.innerHTML='Feild Required';
          res=false;
      }
      if(res==false){
          return false;
      }

}

function appointmentValidate(){
    let username=document.getElementById('username');
    let nic=document.getElementById('nic');
    let venId=document.getElementById('ven_id');
    let date=document.getElementById('date');

    var today= new Date();
    console.log(today.getDate());

    let res=true;

    document.getElementById('username').nextElementSibling.innerHTML='';
    document.getElementById('nic').nextElementSibling.innerHTML='';
    document.getElementById('ven_id').nextElementSibling.innerHTML='';
    document.getElementById('date').nextElementSibling.innerHTML='';

    if(username.value==''){
        document.getElementById('username').nextElementSibling.innerHTML='Required';
        res=false;
    }
    if(nic.value==''){
        document.getElementById('nic').nextElementSibling.innerHTML='Required';
        res=false;
    }
    if(venId.value==''){
        document.getElementById('ven_id').nextElementSibling.innerHTML='Required';
        res=false;
    }
    $('#date').select(function(e) {

     d = new Date(e.target.value)

     minDate= new Date;
     minDate.setHours(0, 0, 0, 0);
        

     if(d.getDay() === 6 || d.getDay() === 0 || d < minDate) {
      document.getElementById('date').nextElementSibling.innerHTML='Cannot select before dates';
      res=false;
   } 
 
   });

    if(date.value==''){
        document.getElementById('date').nextElementSibling.innerHTML='Required';
        res=false;
    }

    


    if(res==false){
        return false;
    }

}

function patientUpdate(){
    

    let fname=document.getElementById('fname');
    let lastname=document.getElementById('lastname');
    let nic= document.getElementById('nic');
    let pass=document.getElementById('pass');
    let cpass=document.getElementById('cpass');

    let regex=/^[a-zA-Z-' ]*$/;
    let res=true;
    document.getElementById('fname').nextElementSibling.innerHTML="";
    document.getElementById('lastname').nextElementSibling.innerHTML="";
    document.getElementById('nic').nextElementSibling.innerHTML="";

    document.getElementById('pass').nextElementSibling.innerHTML="";
    document.getElementById('cpass').nextElementSibling.innerHTML="";

          
        if(fname.value==''){

            document.getElementById('fname').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(!regex.test(fname.value)){
            document.getElementById('fname').nextElementSibling.innerHTML="Name can contain only letters";
            res=false;
        }
        if(lastname.value==''){

            document.getElementById('lastname').nextElementSibling.innerHTML="Required";
            res=false;
        }
        if(!regex.test(lastname.value)){
            document.getElementById('lastname').nextElementSibling.innerHTML="Name can contain only letters";
            res=false;
        }
        if(nic.value.length<7){
            document.getElementById('nic').nextElementSibling.innerHTML='Nic must be 10 characters';
            res=false;
        }
        if(nic.value==''){

            document.getElementById('nic').nextElementSibling.innerHTML="Required";
            res=false;
        }
     
        if(pass.value.length<6){
            document.getElementById('pass').nextElementSibling.innerHTML='Weak Password';
            res=false;
        }
        if(pass.value==''){
            document.getElementById('pass').nextElementSibling.innerHTML='Required';
            res=false;
        }
      
        if(cpass.value==''){
            document.getElementById('cpass').nextElementSibling.innerHTML='Required';
            res=false;
        }
        if(pass.value!=cpass.value){
            document.getElementById('cpass').nextElementSibling.innerHTML='Not matching';
            document.getElementById('pass').nextElementSibling.innerHTML='Not matching';
            res=false;
        }

        if(res==false){
           return false;
        }

}

let cross=document.querySelector('.cross');
let info=document.querySelector('.patient__info');
cross.addEventListener('click',show);
function show(){
    info.classList.toggle('none');
    cross.classList.toggle('move');
   
}

// let viewtoggle=document.getElementById('ven__app');
// let tablerow=document.querySelectorAll('.main_row');
// viewtoggle.addEventListener('click',toggleX);
// function toggleX(){
//     for(let i=0; i<tablerow.length; i++ ){
//         tablerow[i].classList.toggle('tog');
//     }

// }





