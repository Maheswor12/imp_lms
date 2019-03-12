<?php
require_once 'includes/dbconnection.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

$table = $_POST['form_name'];
//echo $table;
unset($_POST['form_name']);
$data=$_POST;

$fields=$values=array();
foreach(array_keys($data) as $key){
    $fields[] = "`$key`";
    $values[]="'".mysqli_real_escape_string($conn,$data[$key])."'";
}
$fields=implode(",",$fields);//implode is used to convert the array to stringecho
//echo $fields;
$values = implode(",",$values);
//echo $values;
$query = "Insert into $table ($fields) VALUES ($values)";
//echo $query;
$result = mysqli_query($conn, $query);
//echo $result;
if($result){
    echo "success";

} else{
    echo "failed";
}
}
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['page'])){
        $table=$_GET['page'];
        
        if(!isset($_GET['delete'])){
            $query = "select * from $table";
            $rsResult = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if(mysqli_num_rows($rsResult)>0)
            {
                //We start with header. >>>Here we retrieve the field names<<<
                echo "<table class='table table-bordered'>";
                $i = 0;
                while ($i < mysqli_num_fields($rsResult)){
                   $field = mysqli_fetch_field_direct($rsResult, $i);
                   $fieldName=$field->name;
                   echo "<th>$fieldName</th>";
                   $i = $i + 1;
                }
                echo "<th colspan='2'></th></tr>"; 
                //>>>Field names retrieved<<<
            
                //We dump info
                $bolWhite=true;
                while ($row = mysqli_fetch_assoc($rsResult)) {
                    echo $bolWhite ? "<tr bgcolor=\"#CCCCCC\">" : "<tr bgcolor=\"#FFF\">";
                    $bolWhite=!$bolWhite;
                    foreach($row as $data) {
                        echo "<td>$data</td>";
                    }
                   ?> 
                    <td><a href="index.php?page=<?php echo $table;?>&edit=<?php echo $row[$table.'_id'];?>" class="btn btn-info">Edit</a></td>
                    <td><a href="process1.php?page=<?php echo $table;?>&delete=<?php echo $row[$table.'_id'];?>" id="delete" class="btn btn-danger"> Delete</a></td>
                    
                   <?php echo "</tr>";
                }
                echo "</table>";
            }



        } else {

            $id=$_GET['delete'];
            $query = 'delete from '.$table.' where '.$table.'_id ='.$id.'' ;
            $result = mysqli_query($conn, $query);
            if($result){
                echo 'deleted';
                        //header("location: index.php?page=subjects&del=delete");
    
            }else{
                echo 'undeleted';
                        //header("location: index.php?page=subjects&del=delete Error");
    
            }

            





        }
        
        
        
    }
}

?>

