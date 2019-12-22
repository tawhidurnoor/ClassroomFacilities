<?php
include_once "session_checker.php";
session_start();
include_once "connection.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT diu_id,u_type FROM users WHERE email='$email' and pass_1='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['users'] = $row['diu_id'];
    if (strcmp($row['u_type'], "Student")==0 || strcmp($row['u_type'], "Teacher")==0) {
      header("Location:index.php");
    } else {
      header("Location:index_a.php");
    }


  }
}else{
  header("Location:login.php?error=1");
}
 ?>
