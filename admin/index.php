
<?php
if(!SESSION_START()){
    SESSION_START();
}
if(isset($_SESSION['level'])&& $_SESSION['level']==99){
    

$page_title = 'LMS-admin'; 
if(isset($_REQUEST['page'])){
    
    $page = $_REQUEST['page'];
}else{
     $page='home';
}
 require_once('../includes/header.php');
include('includes/navigation.php');
?>
   

    

   
<?php
 require_once('../includes/footer.php'); 
}else{
 header('location:../login.php'); 

}
?>

