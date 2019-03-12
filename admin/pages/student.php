<?php
require_once 'includes/dbconnection.php';
$query = "SELECT * FROM class";
$result = mysqli_query($conn,$query);
?>
    <form action="process1.php" method="post">
    <input type="hidden" value="student" name="form_name">
    
        <div class="form-group">
           <label for="exampleInputEmail1">Semester</label>
            <select name="class_id" class="form_control" id="">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['class_id'].'" >'.$row['class_name'].'</option>';
                }
                ?>
            </select>
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">First Name</label>
           <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter First Name" required value="<?=(isset($_GET['edit']))?$row['Pre_req']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Last Name</label>
           <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Last Name" required value="<?=(isset($_GET['edit']))?$row['Pre_req']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Username</label>
           <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Username" required value="<?=(isset($_GET['edit']))?$row['Pre_req']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Password</label>
           <input type="text" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Password" required value="<?=(isset($_GET['edit']))?$row['Pre_req']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Location</label>
           <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Location" required value="<?=(isset($_GET['edit']))?$row['Pre_req']:'';?>">
       </div>
       <button type="submit" class="btn btn-info">Submit</button>
        </form>

        
<div id="table_data">

</div>
