
<?php 
//session_start();

$id= $_SESSION['uid'];
require_once 'includes/dbconnection.php';
$query = "select * from users where user_id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="profileaction.php" method="post" enctype="multipart/form-data">
      
              <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">

         
       <div class="form-group">
           <label for="exampleFormControlInput1">User Name</label>
           <input type="text" class="form-control" value="<?=$row['username'];?>" name="username" placeholder="John Doe">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Password</label>
           <input type="text" class="form-control" value="<?=$row['password'];?>" name="password" aria-describedby="emailHelp" placeholder="Enter email">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">First Name</label>
           <input type="text" class="form-control" value="<?=$row['firstname'];?>"  aria-describedby="emailHelp" name="firstname" placeholder="Enter email">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Last Name</label>
           <input type="text" class="form-control" name="lastname" value="<?=$row['lastname'];?>"  aria-describedby="emailHelp" placeholder="Enter email">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Location</label>
           <input type="text" class="form-control" name="location" value="<?=$row['location'];?>"  aria-describedby="emailHelp" placeholder="Enter email">
       </div>
       
       <button type="submit" name="form_name" value="profile" class="btn btn-primary">Update</button>
       <a href="index.php?page=profile" class="btn btn-info">Back</a>                  

   </form>
   <?php
if(isset($_GET['up'])){
    $type = $_GET['up'];
    if($type=='update'){
        echo "<script>
        alert ('Data updated successfully');
        </script>";
    }else{
        echo "<script>
        alert ('Data updated Error');
        </script>";
    }
    
}
    ?>
</body>
</html>