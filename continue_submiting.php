<?php
include_once "session_checker.php";
include_once "connection.php";
$temp_id = $_SESSION['users'];

$this_diu_id = $temp_id;
$text = $_POST['text'];
$room = $_POST['room'];
$stuff = $_POST['stuff'];
$status = 0;

$sql = " INSERT INTO complains(diu_id,text,room,stuff,status) VALUES('$this_diu_id','$text','$room','$stuff','new')";
mysqli_query($conn,$sql);


$sql_3 = "INSERT INTO notification (diu_id, text, status) VALUES('100-100-100','New Complain for room $room ($stuff)','unread')";
mysqli_query($conn,$sql_3);



header("Location:index.php");
 ?>
