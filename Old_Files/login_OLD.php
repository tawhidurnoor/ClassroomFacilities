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
    <title>Login | Classroom Facilitiues</title>
  </head>
  <body style="font-family: 'Comfortaa', cursive;">

      <div class="container">
        <div class="row">
          <div class="col-md-4"><img src="images/logo.png" height="70px" width="70px"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4" align="right"><br><a href="index.php"><img src="images/close.png" width="8%" height="8%"></a></div>
        </div>
        <br><br><br>
        <center>
          <div class="login_box">
            <h2>LOGIN</h2>
            <br><br>
            <form action="login_checker.php" method="post">
              <input type="text" name="email" class="input" placeholder="Email">
              <br><br>
              <input type="password" name="password" class="input" placeholder="Password">
              <br><br><br>
              <button type="submit" name="login" class="button">LOGIN</button>
            </form>
            <br><br><br>
            Don't have an account? <a href="sign_up.php">Sign Up</a>
          </div>
      </center>

      </div>
      <br><br><br>
      <div class="footer"></div>

  </body>
</html>
