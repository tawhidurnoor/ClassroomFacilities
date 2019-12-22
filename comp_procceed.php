<?php

session_start();
if(!isset($_SESSION['users'])){
  header("Location:log_in.php");
}else{
  include_once "connection.php";
  $comp_id=$_GET['id'];

  $sql="UPDATE complains SET status='pending' where comp_id=$comp_id";
  if(mysqli_query($conn,$sql)){



    $sql_2 = "SELECT * FROM complains WHERE comp_id=$comp_id";
    $result_2 = mysqli_query($conn,$sql_2);
    $row = mysqli_fetch_assoc($result_2);

    $diu_id = $row['diu_id'];
    $room = $row['room'];
    $stuff = $row['stuff'];

    $sql_3 = "INSERT INTO notification (diu_id, text, status) VALUES('$diu_id','Your Complain for $room ($stuff) is under process','unread')";


    mysqli_query($conn,$sql_3);


    header("Location:index_a.php");
  }else{
    echo "Failed to procceed";
  }
}


 ?>
