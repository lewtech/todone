<?php 

$db = new Mysqli;
$db->connect('localhost','root','','todone');

if(@db){
	echo "success";
}


 ?>