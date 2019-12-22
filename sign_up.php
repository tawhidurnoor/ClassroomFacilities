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

    <title>SIgnup | Classroom Facilitiues</title>
  </head>
  <body >
    <div class="main-panel">
      <div class="content-wrapper">

      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-4"><img src="images/logo.png" height="70px" width="70px"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4" align="right"><br><a href="index.php"><img src="images/close.png" width="8%" height="8%"></a></div>
        </div>
        <br><br><br>
        <center>
          <div class="signup_box">
            <h2>SIGN UP</h2>
            <br>
            <form action="continue_register.php" method="post">
              <input type="text" name="f_name" class="input" placeholder="First Name">
              <br><br>
              <input type="text" name="l_name"  class="input" placeholder="Last Name">
              <br><br>
              I'm a <select  class="select" name="u_type">
                      <option value="Student" name="Student">Student</option>
                      <option value="Teacher" name="Teacher">Teacher</option>
                    </select>
              <br><br>
              <input type="text" name="diu_id" class="input" placeholder="DIU ID">
              <br><br>
              <input type="text" name="email" class="input" placeholder="Email">
              <br><br>
              <input type="password" name="pass_1" class="input" placeholder="Password">
              <br><br>
              <input type="password" name="pass_2" class="input" placeholder="Confirm Password">
              <br><br><br>
              <button type="submit" name="register" class="button">Sign Up</button>
            </form>
            <br><br><br>
            Already have an account? <a href="login.php">Login</a>
          </div>
      </center>

      </div>

    </div>
  </div>


  </body>
</html>
