<?php include 'big-config.php';?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<script src="https://kit.fontawesome.com/5d85ded9d4.js"></script>
<link rel="stylesheet" href="css/nav.css"/>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/form.css"/>
</head>

<body>
<!-- START WRAPPER -->  
<main class="wrapper">
<header>
  <h1 class = "logo"><a href="../index.php"><i class="fas fa-dog"></i> Big </a></h1>
  <nav>
    <ul class="topnav" id="myTopnav"> 
        <?=makeLinks($nav1)?>
<!--
      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="mobile.php">Mobile</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="flexbox.php">Flexbox</a></li>
      <li><a href="shoppingcart.php">Shopping Carts</a></li>
      <li><a href="webcam.php">Web Cam</a></li>
-->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li> <!--Look a JavaScript -->
    </ul>
  </nav>
</header>