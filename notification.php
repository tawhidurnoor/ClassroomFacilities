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
                  <div class="col-md-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Notifications</h4>




                                  <table class="table table-hover">
                                    <tr>
                                    </tr>
                                    <?php
                                       $sql_3 = "SELECT * FROM notification WHERE diu_id = '$diuid' ORDER BY not_id DESC";
                                       $result_3 = mysqli_query($conn,$sql_3);

                                       if (mysqli_num_rows($result_3) > 0) {
                                         // output data of each row
                                         while($row_3 = mysqli_fetch_assoc($result_3)) {
                                           echo "<tr>";
                                           if ($row_3['status'] == "unread") {
                                             echo "<td><b>".$row_3['text']."</b></td>";
                                           }
                                           else {
                                             echo "<td>".$row_3['text']."</td>";
                                           }

                                           echo '<td><a href="not_delete.php?id='.$row_3['not_id'].'"><img src="images/delete.png" whidth="9%" height="9%"></a>
                                                     <a href="not_read.php?id='.$row_3['not_id'].'"><img src="images/comp_comp.png" whidth="3%" height="3%"></a>
                                                     <a href="not_unread.php?id='.$row_3['not_id'].'"><img src="images/error.png" whidth="3%" height="3%"></a></td>';
                                           echo "</tr>";
                                         }
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
