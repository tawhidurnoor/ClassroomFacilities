<?php

session_start();
if(!isset($_SESSION['users'])){
  header("Location:log_in.php");
}else{
  include_once "connection.php";
  $comp_id=$_GET['id'];

  $sql="DELETE from complains where comp_id=$comp_id";
  if(mysqli_query($conn,$sql)){
    header("Location:profile.php");
  }else{
    echo "Failed to delete";
  }
}


 ?>
