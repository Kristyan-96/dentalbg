<?php
function validation_errors($error_message){
    
     $error_message = <<<DELIMETER
<div class="alert alert-danger alert-dismissible"        role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong> $error_message
</div>
DELIMETER;
    
    return $error_message;
    
    
    
    
}
function redirect($location){
    
    return header("Location: {$location} ");
    
}

function clean($string){
    
    return htmlentities($string);
    
}

function validate_user(){
    
$errors = [];

    
   if(isset($_POST['submit'])){

       $email    = clean($_POST['email']);
       $password = clean($_POST['password']);
       $remember = isset($_POST['remember-me']);
       
       $sql = query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
       
       while($row = mysqli_fetch_array($sql)){
           
           $user_email = $row['email'];
           $user_password = $row['password'];
       }
       
       if($email !== $user_email && $password !== $user_password){
           
                     redirect("login.php");
           
       }else if ($email == $user_email && $password == $user_password){
           $_SESSION['email'] = $email;
           redirect("index.php");
           if($remember == "on") {
               
               setcookie('email',$email,time() + 86400);
               
           }
           
       }else {
           
           redirect("login.php");
       }
       
        if(empty($email)){
           
           $errors[] = "Email field cannot be empty";
           
       }
       
        if(empty($password)){
           
           $errors[] = "Password field cannot be empty";
           
       }
       
       
       
       if(!empty($errors)){
           
           foreach ($errors as $error) {
               
               echo validation_errors($error);
               
           }
       }
      
       
   }
    
    
    
    
}

function logged_in(){
    
     if(isset($_SESSION['email'])){
            
           return true; 
        
        } else {
            
            return false;
          
        }
    
    
    
}

function loggin_check(){

    if(!logged_in()){
        
        redirect("login.php");
    
    }
    
}


function get_patients(){
    
    $get_patients = query("SELECT * FROM patients");
    confirm($get_patients);
    while($row = fetch_array($get_patients)){
        
        $first_name = $row['first_name'];
        $email    = $row['email'];
        $patient = <<<DELIMETER
        
             <tbody>
             <th>{$row['first_name']}</th>
             <th>{$row['email']}</th>                       
            </tbody>
            
            
            
DELIMETER;

        echo $patient;
            
        
    }  
}

function add_patient(){
    
    
    
    
    
    
}

?>