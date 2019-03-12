<?php
//for delete
require_once 'includes/dbconnection.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
     if(isset($_GET['table'])){
        $table=$_GET['table'];
         echo $table;
         if(isset($_GET['delete'])){
                     $id=$_GET['delete'];
            $query = "update users set status='0' where user_id='$id'" ;

         }              
         if (isset($_GET['status'])){
             $id=$_GET['status'];
                         $query = "update users set delete_status='1' where user_id='$id'" ;

         }
         echo $id;
         
         echo $query;
         $result = mysqli_query($conn, $query);
         var_dump ($result);
         if($result){
             echo "done";
         }else{
             echo "not done";
         }
         
         
    
}else{
         echo "user table not available";
     }
}
?>