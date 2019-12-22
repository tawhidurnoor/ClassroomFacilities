<?php

session_start();
if(!isset($_SESSION['users'])){
  header("Location:log_in.php");
}else{
  include_once "connection.php";
  $not_id=$_GET['id'];
  $sql="UPDATE notification SET status='read' where not_id=$not_id";
  if(mysqli_query($conn,$sql)){
    header("Location:notification.php");
  }else{
    echo "Failed to delete";
  }
}


 ?>
