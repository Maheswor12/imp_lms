<?php
if(!session_start()){
    session_start();
}

require_once 'admin/includes/dbconnection.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "select * from users where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if($row){
    
    $_SESSION['level']=$row['level'];
    $_SESSION['uid'] = $row['user_id'];
      
    $_SESSION['username']=$row['username'];
    
    if($row['level']==1){
        echo 'student';
       // header("location:student/index.php");
    }else if($row['level']==2){
        echo 'teacher';
        //header("location:teacher/index.php");
    }else if($row['level']==3){
        echo 'principal';
        //header("location:admin/index.php");
    }else if($row['level']==99){
        echo 'admin';
        //header("location:admin/index.php");
    }else{
        echo 'failed';
        //header("location:admin/index.php");
    }
}else{
    echo 'failed';
           // header("location:login.php?login=failed");
}
    
?>