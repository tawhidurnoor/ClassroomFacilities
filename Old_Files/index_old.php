<?php
      include_once "session_checker.php";
      include_once "connection.php";
      $temp_id = $_SESSION['users'];
      $sql = "SELECT f_name,l_name FROM users WHERE diu_id='$temp_id'";
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
    <title>Submit a Problem | Classroom Facilitiues</title>
  </head>
  <body style="font-family: 'Comfortaa', cursive;">

      <!--top bar-->
      <div class="topnav">
        <a href="#"><img src="images/logo.png" height="70px" width="70px"></a>
        <br>
        <a href="index.php" class="active">Submit A Complain</a>
        <a href="profile.php">Profile</a>
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


      <br><br><br>
      <center>
      <h3>Submit Your Problme</h3>
      <form action="continue_submiting.php" method="post" align="center">
        <textarea name="text" rows="5" cols="80" placeholder="Enter Your Problem here within 255 words." maxlength="255" class="input_box"></textarea>
        <br><br>
        <div class="" align="">Select Room: <select  class="select_2" name="room">
                                               <option value="302" name="302">302</option>
                                               <option value="304" name="304">304</option>
                                               <option value="305" name="305">305</option>
                                               <option value="306" name="306">306</option>
                                               <option value="404" name="404">404</option>
                                               <option value="405" name="405">405</option>
                                               <option value="406" name="406">406</option>
                                               <option value="501" name="501">501</option>
                                               <option value="502" name="502">502</option>
                                               <option value="504" name="504">504</option>
                                               <option value="505" name="505">505</option>
                                               <option value="601" name="601">601</option>
                                               <option value="604" name="604">604</option>
                                               <option value="605" name="605">605</option>
                                               <option value="607" name="607">607</option>
                                               </select>
        </div>
        <br>
        <div class="" align="">Select Room: <select  class="select_2" name="stuff">
                                               <option value="Table & Chair" name="Table & Chair">Table & Chair</option>
                                               <option value="AC" name="AC">AC</option>
                                               <option value="Light" name="Light">Light</option>
                                               <option value="Fan" name="Fan">Fan</option>
                                               <option value="PC" name="PC">PC</option>
                                               <option value="Projector" name="Projector">Projector</option>
                                               <option value="Door & Window" name="Door & Window">Door & Window</option>
                                               </select>
        </div>
        <br>
        <button type="submit" name="login" class="button" style="color: #00D7C2; background-color: white;">SUBMIT</button>

      </form>
    </center>

  </body>
</html>
