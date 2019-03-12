<?php
require_once 'includes/dbconnection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
 if($_POST['form_name']=='subject'){
     if(isset($_POST['subject_id'])){
    extract($_POST);
         $query = "UPDATE `subject` SET 
         `subject_code`='$subject_code',
         `subject_title`='$subject_title',
         `category`='$category',
         `description`='$description',
         `unit`='$unit',
         `Pre_req`='$Pre_req',
         `semester`='$semester' where subject_id= $_POST[subject_id]";
        // echo $query;
     $result = mysqli_query($conn, $query);
          if($result){
        
              echo 'success';
    }else{
        //header("location: index.php?page=subjects&up=insert Error");
echo 'failed';
        
        /*?><script>
            alert("Insert failed!");
        </script>"
        <?php */   
    }
 }else{
     extract($_POST);
     $query="INSERT INTO `subject`( `subject_code`, `subject_title`, `category`, `description`, `unit`, `Pre_req`, `semester`) VALUES ('$subject_code','$subject_title','$category','$description','$unit','$Pre_req','$semester')";
     //echo $query;
     $result = mysqli_query($conn, $query);
      //echo $result;
         if($result){
        /*?><script>
            alert("Insert Success!");
        </script>"
        <?php*/
       // header("location: index.php?page=subjects&type=success");
             echo 'success';
    }else{
             echo 'failed';
        //header("location: index.php?page=subjects&type=insert Error");

        
        /*?><script>
            alert("Insert failed!");
        </script>"
        <?php */   
    }
 }
    
    
}
}

// if($_SERVER['REQUEST_METHOD']=="GET"){
//     if(isset($_GET['table'])){
//         $table=$_GET['table'];
//         $id=$_GET['delete'];
//         $query = 'delete from '.$table.' where '.$table.'_id ='.$id.'' ;
//         $result = mysqli_query($conn, $query);
//         if($result){
//             echo 'deleted';
//                     //header("location: index.php?page=subjects&del=delete");

//         }else{
//             echo 'undeleted';
//                     //header("location: index.php?page=subjects&del=delete Error");

//         }
        
        
//     }
// }


//
?>