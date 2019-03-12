<?php
require_once 'includes/dbconnection.php';

 if(isset($_GET['edit'])){
     $id = $_GET['edit'];
     $query="select * from content where content_id='$id'";
    $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
         //var_dump($row);
     }
?>
      <form id="page">
      <?php
          if(isset($_GET['edit'])){
             ?>
             <input type="hidden" name="id" value="<?php echo $row['content_id'];?>">
             <?php 
              
          }
          ?>
          <input type="hidden" value="content" name="form_name">
       <div class="form-group">
           <label for="title"> Page Title</label>
           <input type="text" class="form-control" name="title"  placeholder="Please Enter Page Title" value="<?=(isset($_GET['edit']))?$row['title']:'';?>" required>
       </div>
      
       <div class="form-group">
           <label for="content">Content</label>
           <textarea class="form-control" name="content" rows="3" placeholder="Please Enter Content" required><?=(isset($_GET['edit']))?$row['content']:'';?></textarea>
       </div>
      
       <button type="submit"  class="btn btn-primary"><?=(isset($_GET['edit']))? 'update':'Create';?></button>
   </form>
<table class="table">
       <thead>
           <tr>
               <th scope="col">S.N</th>
               <th scope="col">Title</th>
               <!--<th scope="col">Content</th>-->
                <th scope="col" colspan="2">Action</th>
           </tr>
       </thead>
       <tbody>
          <?php
           $query = "select * from content";
           $result = mysqli_query($conn, $query);
            $count = 1;
           while($row = mysqli_fetch_assoc($result)){
          
           ?>
           <tr>
            
               <td><?=$count;?></td>
               <td><?=$row['title'];?></td>

                <td><a href="index.php?page=pages&edit=<?=$row['content_id']?>" class="btn btn-info">Edit</a></td>
               <td><a href="process2.php?table=content&delete=<?=$row['content_id']?>" class="btn btn-danger">Delete</a></td>

           </tr>
           <?php
           $count++;
           }
           ?>
       </tbody>
   </table>
