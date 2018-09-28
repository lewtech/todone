<?php 
include 'db.php';

$datetime = $_GET['datetime'];

$sql = "delete from todos where datetime = '$datetime'";

$val = $db->query($sql);
if($val){
header('location: index.php');
};


 ?>