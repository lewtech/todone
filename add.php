<?php 
include 'db.php';

if(isset($_POST['send'])){
$task = $_POST['task'];
$sql = "insert into todos (task) values ('$task')";
$val = $db->query($sql);
if($val == true){
	header('location: index.php');
}else{
	$arr = $statement->errorInfo(); 
print_r($arr);
}

}

?>