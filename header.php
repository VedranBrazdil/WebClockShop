<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "satovi";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$conn->set_charset('utf8');

if (mysqli_connect_errno()) {
  echo 'Database connection failed with following errors: ' . mysqli_connect_error();
  die();
}

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title>Clockwise</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ########################### izbornik gore ############################### -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_left">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="active" href="pages/gallery.html">Products</a>
          <!--class="drop"<ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>-->
        </li>
        <li><a class="active" href="pages/sidebar-left.html">Services</a>
        </li>
        <li><a class="active" href="pages/full-width.html">About Us</a></li>
      </ul>
    </nav>
    <!-- ####################### tipke za facebook,twiter i google+ #################################### -->
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>