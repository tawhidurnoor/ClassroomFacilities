<?php
include_once "session_checker.php";
include_once "connection.php";
$temp_id = $_SESSION['users'];
$temp_comp_id = $_SESSION['id'];

$this_diu_id = $temp_id;
$text = $_POST['text'];
$room = $_POST['room'];
$stuff = $_POST['stuff'];
$status = 0;

$sql="UPDATE complains SET diu_id='$this_diu_id',text='$text',room='$room',stuff='$stuff' WHERE comp_id=$temp_comp_id";
mysqli_query($conn,$sql);
header("Location:profile.php");
 ?>
