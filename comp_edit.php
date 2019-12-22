<?php
include_once "session_checker.php";
include_once "connection.php";
$temp_id = $_SESSION['users'];
$sql = "SELECT f_name,l_name FROM users WHERE diu_id='$temp_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$comp_id=$_GET['id'];
$_SESSION['id']=$comp_id;
$sql_2 = "SELECT text FROM complains where comp_id=$comp_id";

$result_2 = mysqli_query($conn, $sql_2);
if (mysqli_num_rows($result_2) > 0) {
    // output data of each row
    while($row_2 = mysqli_fetch_assoc($result_2)) {
      $text=$row_2['text'];
    }
} else {
  $text="";
    echo "0 results";
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Edit Your Complain</title>
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






 <div class="container-fluid page-body-wrapper">
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <ul class="nav">
         <li class="nav-item nav-category">Main Menu</li>
         <li class="nav-item">
           <a class="nav-link" href="index.php">
             <i class="menu-icon typcn typcn-document-text"></i>
             <span class="menu-title">Submit A Problem</span>
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
             <span class="menu-title">Notifications</span>
           </a>
         </li>

       </ul>
     </nav>



   <div class="main-panel">
     <div class="content-wrapper">
   <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                   <div class="card-body">
                     <h4 class="card-title">Edit Your Problem</h4>
                     <form class="forms-sample" action="comp_edit_continue.php" method="post">
                       <div class="form-group">
                         <label for="exampleTextarea1">Issue</label>
                         <textarea class="form-control" name="text" rows="2" placeholder="Enter Your Problem here within 255 words." maxlength="255"><?php echo $text; ?></textarea>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputName1">Select Room</label><br>
                         <select  class="btn btn-outline-primary dropdown-toggle" name="room"><option value="302" name="302">302</option>
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
                       <div class="form-group">
                         <label for="exampleInputEmail3">Stuff</label><br>
                         <select  class="btn btn-outline-primary dropdown-toggle" name="stuff">
                                                                <option value="Table & Chair" name="Table & Chair">Table & Chair</option>
                                                                <option value="AC" name="AC">AC</option>
                                                                <option value="Light" name="Light">Light</option>
                                                                <option value="Fan" name="Fan">Fan</option>
                                                                <option value="PC" name="PC">PC</option>
                                                                <option value="Projector" name="Projector">Projector</option>
                                                                <option value="Door & Window" name="Door & Window">Door & Window</option>
                                                                </select>
                       </div>
                       <button type="submit" name="login" class="btn btn-success mr-2">Submit</button>
                       <button class="btn btn-danger">Cancel</button>
                     </form>
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
