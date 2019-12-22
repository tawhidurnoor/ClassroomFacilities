<?php
      include_once "session_checker.php";
      include_once "connection.php";
      $temp_id = $_SESSION['users'];
      $sql = "SELECT f_name,l_name,u_type,diu_id,email FROM users WHERE diu_id='$temp_id'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
      <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <title><?php echo $row['f_name'].' '.$row['l_name']; ?> | Classroom Facilitiues</title>
  </head>
  <body style="font-family: 'Comfortaa', cursive;">

      <!--top bar-->
      <div class="topnav">
        <a href="#"><img src="images/logo.png" height="70px" width="70px"></a>
        <br>
        <a href="index.php">Submit A Complain</a>
        <a href="profile.php" class="active">Profile</a>
        <a href="notification.php">Notification</a>
        <!--right menue-->
        <div align="right" style="margin-right:20px;">
          <table>
            <tr>
              <td><center><div style="font-size:20px"> <b> <?php echo $row['f_name'].' '.$row['l_name']; ?> </b></div></center></td>
            </tr>
            <tr>
              <td><center><a href="logout.php" style="font-size:15px; color:red;"><b>LOGOUT</b></a></center></td>
            </tr>
          </table>
        </div>

      </div><!--end of top bar-->



      <br><br>
      <center> <img src="images/avatar.png" width="100px" height="100px">
      <br>
      <h2><?php echo $row['f_name'].' '.$row['l_name']; ?> </h2>

      <?php echo $row['u_type'].'<br>'.$row['diu_id'].'<br>'.$row['email'] ?>
      <br>
      <a href="edit_profile.php">Change Password</a>


      <br><br>
      <h4>Recent Complains</h4>
      <table class="table-condensed">
        <tr>
          <th>DIU ID</th>
          <th>Complain ID</th>
          <th>Room</th>
          <th>Stuff</th>
          <th>Details</th>
          <th>Status</th>
          <th></th>
        </tr>
<a href="delete.php?id='.$row['u_id'].'"><img src=""></a>
        <?php
         $sql_2 = "SELECT diu_id,comp_id,room,stuff,text,status FROM complains WHERE diu_id='$temp_id'";
         $result_2 = mysqli_query($conn, $sql_2);

         if (mysqli_num_rows($result_2) > 0) {
           // output data of each row
           while($row_2 = mysqli_fetch_assoc($result_2)) {
             echo "<tr>";
             echo "<td>".$row_2['diu_id']."</td>";
             echo "<td>".$row_2['comp_id']."</td>";
             echo "<td>".$row_2['room']."</td>";
             echo "<td>".$row_2['stuff']."</td>";
             echo "<td>".$row_2['text']."</td>";
             echo "<td>".$row_2['status']."</td>";
             echo '<td><a href="comp_delete.php?id='.$row_2['comp_id'].'"><img src="images/delete.png" white="10%" height="10%"></a>
                       <a href="comp_edit.php?id='.$row_2['comp_id'].'"><img src="images/edit.png" white="4%" height="4%"></a></td>';
             echo "</tr>";
           }
         } else {
           echo "0 results";
         }

         ?>
      </table><br><br>

      <h4>Edit Profile</h4>


      </center>



  </body>
</html>
