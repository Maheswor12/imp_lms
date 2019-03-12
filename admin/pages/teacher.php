<?php
require_once 'includes/dbconnection.php';
if(isset($_GET['edit'])){
    $id =$_GET['edit'];
    $query = 'select * from users where user_id ='.$id;
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    
}
?>
      <form id="teacher">

      <?php
          if(isset($_GET['edit'])){
              ?>
              <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
              <?php
          }
          if(!isset($_GET['edit'])){
              
          ?>
          <input type="hidden" value="teacher" name="form_name">
      <div class="form-group">
           <label for="exampleFormControlTextarea1">User Name</label>
            <input type="text" required class="form-control" name="username" aria-describedby="emailHelp" placeholder="Please Enter Username" name="firstname" value="<?=(isset($_GET['edit']))?$row['username']:'';?>">
       </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Passsword</label>
            <input type="password" required class="form-control" name="password" aria-describedby="emailHelp" placeholder="Please Enter Password" name="firstname" value="<?=(isset($_GET['edit']))?$row['password']:'';?>">
       </div>
       
       <?php } ?>
       <div class="form-group">
           <label for="exampleFormControlTextarea1">First Name</label>
            <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please Enter First Name" name="firstname" value="<?=(isset($_GET['edit']))?$row['firstname']:'';?>">
       </div>
        <div class="form-group">
           <label for="exampleFormControlTextarea1">Last Name</label>
            <input type="text" required class="form-control"  aria-describedby="emailHelp" placeholder="
Please Enter Last Name" name="lastname" value="<?=(isset($_GET['edit']))?$row['lastname']:'';?>">
       </div>
        <div class="form-group">
           <label for="exampleFormControlTextarea1">Location</label>
            <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please Enter Location" name="location" value="<?=(isset($_GET['edit']))?$row['location']:'';?>">
       </div>
                            <input type="hidden" name="form_name" value="teacher">

        <button type="submit" class="btn btn-primary"><?=(isset($_GET['edit']))? 'update':'Create';?></button>
      
   </form>

           
<div id="table_data">

</div>
