
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="pictureaction.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label>File: </label><input type="file" name="image" class="form-control"/>
    <input type="submit" class="btn btn-info"/>
    </div>
</form>
<?php
require_once 'includes/dbconnection.php';
$query="select * from picture";
$result = mysqli_query($conn, $query);

$count=1;
while($row = mysqli_fetch_assoc($result)){

?>
<img src="images/<?php echo $row['image'];?>" alt="this is mahesh" class="img-fluid img-tumbnail" width="100px" height="100px">

<?php
$count++;
}
?>