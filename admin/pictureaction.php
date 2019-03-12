<?php
require_once "includes/dbconnection.php";
$fileName = basename($_FILES["image"]["name"]);
echo $fileName;
  move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$_FILES['image']['name']);
 
  
 $query =  "INSERT INTO `picture`(`image`) VALUES ('$fileName')";
$result = mysqli_query($conn, $query);
if($result){
    echo "success";
}else{
    echo "failed";
}
      
?>