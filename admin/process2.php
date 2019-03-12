<?php
require_once 'includes/dbconnection.php';
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    //print_r($_POST);
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $query ="update content set title='$title', content = '$content' where content_id='$id'";
        $result = mysqli_query($conn, $query);
    }else{
    $query = "INSERT INTO `content`(`title`, `content`) VALUES ('$title','$content')";
    $result = mysqli_query($conn, $query);
}
if($result){
    echo 'success';
       // header("location: index.php?page=pages&type=success");
}else{
    echo 'failed';
        //header("location:index.php?page=pages&type=error");
}
}

if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['table'])){
        $table=$_GET['table'];
        $id=$_GET['delete'];
        $query = 'delete from '.$table.' where '.$table.'_id ='.$id.'' ;
        $result = mysqli_query($conn, $query);
        if($result){
            echo 'deleted';
                   // header("location: index.php?page=pages&del=delete");

        }else{
            echo 'not deleted';
                   // header("location: index.php?page=pages&del=delete Error");

        }
        
        
    }
}
?>