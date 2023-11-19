<?php 
require_once '../config/db.php';
 
$id = $_GET['id'];
mysqli_query($db_connect,"DELETE FROM products WHERE id='$id'");
header("location:../pages/show.php");
 
?>