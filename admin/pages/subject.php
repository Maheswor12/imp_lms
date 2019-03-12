<?php
require_once 'includes/dbconnection.php';
if(isset($_GET['edit'])){
    $id =$_GET['edit'];
    $query = 'select * from subject where subject_id ='.$id;
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    
}
?>
     
      <form id="subject">
      <input type="hidden" value="subject" name="form_name">
      <?php
          if(isset($_GET['edit'])){
              ?>
              <input type="hidden" name="subject_id" value="<?php echo $row['subject_id'];?>">
              <?php
          }
          ?>
       <div class="form-group">
           <label for="exampleFormControlInput1">Subject Code</label>
           <input type="text" class="form-control" name="subject_code" placeholder="Please Enter Sunject_code" required value="<?=(isset($_GET['edit']))?$row['subject_code']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Subject Title</label>
           <input type="text" class="form-control" name=subject_title  aria-describedby="emailHelp" placeholder="Please Enter Subject Title" required value="<?=(isset($_GET['edit']))?$row['subject_title']:'';?>">
       </div>
        <div class="form-group">
           <label for="exampleInputEmail1">Subject Category</label>
           <input type="text" class="form-control" name=category required aria-describedby="emailHelp" placeholder="Enter email" value="<?=(isset($_GET['edit']))?$row['category']:'';?>">
       </div>
        
       <div class="form-group">
           <label for="exampleFormControlTextarea1"> Description</label>
           <textarea class="form-control" name="description" rows="3" required placeholder="Please Enter Description"><?=(isset($_GET['edit']))?$row['description']:'';?></textarea>
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">No. of Chapters</label>
           <input type="number" class="form-control" name="unit" aria-describedby="emailHelp" placeholder="Please Enter No. of Chapters" required value="<?=(isset($_GET['edit']))?$row['unit']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Pre-requisites</label>
           <input type="text" class="form-control" name="Pre_req" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pre-requisites" required value="<?=(isset($_GET['edit']))?$row['Pre_req']:'';?>">
       </div>
       
                     <!-- <input type="hidden" name="form_name" value="subject"> -->
        <div class="form-group">
           <label for="exampleInputEmail1">Semester</label>
            <select name="semester" class="form_control" id="">
                
                <option value="1" <?=(isset($_GET['edit']) && $row['semester']==1)? 'selected':'';?>>1st</option>
                <option value="2" <?=(isset($_GET['edit']) && $row['semester']==2)? 'selected':'';?>>2nd</option>
                <option value="3" <?=(isset($_GET['edit']) && $row['semester']==3)? 'selected':'';?>>3rd</option>
                <option value="4" <?=(isset($_GET['edit']) && $row['semester']==4)? 'selected':'';?>>4th</option>
                <option value="5" <?=(isset($_GET['edit']) && $row['semester']==5)? 'selected':'';?>>5th</option>
                <option value="6" <?=(isset($_GET['edit']) && $row['semester']==6)? 'selected':'';?>>6th</option>


            </select>
       </div>
       <button type="submit" class="btn btn-primary"><?=(isset($_GET['edit']))? 'update':'Create';?></button>
 
   </form>
   <?php
if(isset($_GET['type'])){
    $type = $_GET['type'];
    if($type=='success'){
        echo "<script>
        alert ('Data inserted successfully');
        </script>";
    }else{
        echo "<script>
        alert ('Data inserted Error');
        </script>";
    }
    
}
//for delete
if(isset($_GET['del'])){
    $type = $_GET['del'];
    if($type=='delete'){
        echo "<script>
        alert ('Data Deleted successfully');
        </script>";
    }else{
        echo "<script>
        alert ('Delete failed');
        </script>";
    }
    
}
//for update
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

      

       


<div id="table_data">

</div>


       
