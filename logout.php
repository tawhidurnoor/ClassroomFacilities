<?php
include_once "session_checker.php";
session_start();
session_destroy();
header("Location:login.php");
 ?>
