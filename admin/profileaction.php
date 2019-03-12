<?php
require_once 'includes/dbconnection.php';

        $username = mysqli_real_escape_string($conn, $_POST['username']);
   // echo $username;
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
      $location = mysqli_real_escape_string($conn, $_POST['location']);

    if($_POST['form_name']=='profile'){
        
        if(isset($_POST['user_id'])){
            //extract($_POST);
            $query = "UPDATE `users` SET `username`='$username',
            `password`='$password',
            `firstname`='$firstname',
            `lastname`='$lastname',
            `location`='$location'
            WHERE user_id = $_POST[user_id]";
            echo $query;
            $result = mysqli_query($conn, $query);
            var_dump($query);
        }
    }

if($result){
            
                    header("location: index.php?page=editprofile&up=update");

        }else{
            
                    header("location: index.php?page=editprofile&up=update Error");

        }


   /* if($result){
        echo"<script>
        alert('data updated successfully');
        </script>";
    }else{
       echo"<script>
        alert('data updated failed');
        </script>";
    }*/
    


?>
