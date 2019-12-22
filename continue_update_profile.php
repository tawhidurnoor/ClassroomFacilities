<?php
include_once "session_checker.php";
include_once "connection.php";
$temp_id = $_SESSION['users'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$diu_id = $_POST['diu_id'];
$pass_1 = $_POST['pass_1'];
$pass_2 = $_POST['pass_2'];

$sql = "UPDATE users SET f_name='$f_name',l_name='$l_name',email='$email',diu_id='$diu_id',pass_1='$pass_1',pass_2='$pass_2' WHERE diu_id='$temp_id'";
mysqli_query($conn,$sql);
header("Location:profile.php");
 ?>
