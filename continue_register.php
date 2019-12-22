<?php
include_once "connection.php";
$u_type = $_POST['u_type'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$diu_id = $_POST['diu_id'];
$pass_1 = $_POST['pass_1'];
$pass_2 = $_POST['pass_2'];

$sql = "INSERT INTO users(u_type,f_name,l_name,email,diu_id,pass_1,pass_2) VALUES('$u_type','$f_name','$l_name','$email','$diu_id','$pass_1','$pass_2')";
mysqli_query($conn,$sql);
header("Location:index.php");
 ?>
