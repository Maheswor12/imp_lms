<?php
require_once 'includes/dbconnection.php';
$username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
      $location = mysqli_real_escape_string($conn, $_POST['location']);
if($_SERVER['REQUEST_METHOD']=="POST"){
 if($_POST['form_name']=='teacher'){
     if(isset($_POST['user_id'])){
         $id=$_POST['user_id'];
   //extract($_POST);
        $query="UPDATE `users` SET 
        `firstname`='$firstname',
        `lastname`='$lastname',
        `location`='$location'
         WHERE user_id='$id'";
     } else {
         
          $query="INSERT INTO `users`(`username`, `password`, `firstname`, `lastname`, `location`, `level`) VALUES ('$username','$password','$firstname','$lastname','$location',2)";
     }
         
         
     $result = mysqli_query($conn, $query);
          if($result){
              echo 'success';
    
    }else{
                echo 'failed';

        
           
    }
        
 }
 }



?>
 