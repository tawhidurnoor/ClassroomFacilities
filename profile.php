<?php
      include_once "session_checker.php";
      include_once "connection.php";
      $temp_id = $_SESSION['users'];
      $sql = "SELECT * FROM users WHERE diu_id='$temp_id'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $row['f_name'].' '.$row['l_name']; ?> | Classroom Facilitiues</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Submit Your Problem</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  </head>


  <body>


    <div class="container-scroller">


      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="images/logo_2.png" height="" width="" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">


          <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/images/faces/face0.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face0.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo $row['f_name'].' '.$row['l_name']; ?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $row['email']?></p>
                </div>
                <a class="dropdown-item" href="profile.php">My Profile <i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="logout.php">Log Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>


      <?php
      $diuid = $row['diu_id'];
      $sql_5 = "SELECT COUNT(diu_id) AS count FROM notification WHERE status = 'unread' AND diu_id='$diuid'";
      $result_5 = mysqli_query($conn,$sql_5);
      $row_5 = mysqli_fetch_assoc($result_5);
      $count = $row_5['count']
       ?>



<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
          <a class="nav-link" href="<?php if (strcmp($row['u_type'], "Student")==0 || strcmp($row['u_type'], "Teacher")==0) {
                                            echo "index.php";
                                          } else {
                                            echo "index_a.php";
                                          } ?>">
            <i class="menu-icon typcn typcn-document-text"></i>
            <span class="menu-title"><?php if (strcmp($row['u_type'], "Student")==0 || strcmp($row['u_type'], "Teacher")==0) {
                                              echo "Submit A Problem";
                                            } else {
                                              echo "Problem Reports";
                                            } ?></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="menu-icon typcn typcn-document-text"></i>
            <span class="menu-title">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notification.php">
            <i class="menu-icon typcn typcn-document-text"></i>
            <span class="menu-title">Notifications<span class="badge badge-danger ml-2"><?php echo $count ?></span>
          </a>
        </li>

      </ul>
    </nav>



  <div class="main-panel">
    <div class="content-wrapper">



      <div class="page-header">
                  <h4 class="page-title"><?php echo $row['f_name'].' '.$row['l_name']; ?></h4>
                  <div class="quick-link-wrapper  flex-md-wrap">
                    <ul class="quick-links">
                      <li><?php echo $row['u_type']; ?></li>
                      <li><?php echo $row['diu_id']; ?></li>
                      <li><?php echo $row['email']; ?></li>
                    </ul>
                  </div>
                </div>




                <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Profile Elements</h4>
                                  <form class="forms-sample" action="continue_update_profile.php" method="post">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" name="f_name" value="<?php echo $row['f_name'] ?>">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" name="l_name" value="<?php echo $row['l_name'] ?>">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                                    <label>ID</label>
                                    <input type="text" class="form-control" name="diu_id" value="<?php echo $row['diu_id'] ?>">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="pass_1" value="<?php echo $row['pass_1'] ?>">
                                    <label>Confirm Password</label>
                                    <input type="text" class="form-control" name="pass_2" value="<?php echo $row['pass_2'] ?>">
                                    <br><br>
                                    <button type="submit" name="update" class="btn btn-success mr-2">Update</button>
                                  </form>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-6 grid-margin stretch-card">
                                          <div class="card">
                                            <div class="card-body">
                                              <h4 class="card-title">Recent Complains</h4>
                                              <table class="table table-hover">
                                                <tr>
                                                  <th>Complain ID</th>
                                                  <th>Details</th>
                                                  <th>Status</th>
                                                  <th></th>
                                                </tr>
                                                <?php
                                                 $sql_2 = "SELECT diu_id,comp_id,room,stuff,text,status FROM complains WHERE diu_id='$temp_id'  ORDER BY comp_id DESC";
                                                 $result_2 = mysqli_query($conn, $sql_2);

                                                 if (mysqli_num_rows($result_2) > 0) {
                                                   // output data of each row
                                                   while($row_2 = mysqli_fetch_assoc($result_2)) {
                                                     echo "<tr>";
                                                     echo "<td>".$row_2['comp_id']."</td>";
                                                     echo "<td>".$row_2['text']."</td>";
                                                     echo "<td>".$row_2['status']."</td>";
                                                     echo '<td><a href="comp_delete.php?id='.$row_2['comp_id'].'"><img src="images/delete.png" white="9%" height="9%"></a>
                                                               <a href="comp_edit.php?id='.$row_2['comp_id'].'"><img src="images/edit.png" white="3%" height="3%"></a></td>';
                                                     echo "</tr>";
                                                   }
                                                 } else {
                                                   echo "0 results";
                                                 }

                                                 ?>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                            </div>



      </div>
  </div>









<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/shared/off-canvas.js"></script>
<script src="assets/js/shared/misc.js"></script>




  </body>
</html>
