
<?php 

$page_title = "LMS";

if(isset($_REQUEST['page'])){
	$page = $_REQUEST['page'];
}else{

	$page = 'home';
}
$page_title .= " - ".ucfirst($page);
require_once('includes/header.php');
require_once('includes/navigation.php');
include 'pages/'.$page.'.php';
require_once('includes/footer.php'); 
?><br><br>
