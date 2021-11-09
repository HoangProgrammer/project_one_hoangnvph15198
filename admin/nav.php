<?php
session_start();
// require_once('../backend/model/ProductDB.php');
// require_once('../backend/model/confix.php');
// require_once('../backend/model/Khach_hang.php');
// require_once('../backend/model/slideDB.php');
// require_once('../backend/model/commentDB.php');
// require_once('../backend/model/newDB.php');

// if (isset($_SESSION["Admin"])) {

//  $admin = $_SESSION["Admin"];
//       foreach ($admin as $key => $val) {
//           $name_admin = $val['FULLNAME'];
//           $phone_admin = $val['phone'];
//           $image = $val['image_usre'];
//           $admin_id =  $val[$key];
//       }

//   }


?>


<!Doctype HTML>
<html>
<head>
	<title>Quản trị web</title>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles_one.css">

</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> English manage <span class="menu">&#9776;</span></p>
	<p class="logo1"> <span class="menu1">&#9776;</span></p>
  <a href="index.php?action=dashboard" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Chart</a>
  <a href="index.php?action=product"class="icon-a"><i class="fa fa-file icons"></i> &nbsp;&nbsp;product</a>
  <a href="index.php?action=slider"class="icon-a"><i class="fa fa-sliders icons"></i> &nbsp;&nbsp;sliders</a>
  <a href="index.php?action=account"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="index.php?action=comment"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;comment</a>
  <a href="index.php?action=news"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;news</a>
  <a href="index.php?action=statistical"class="icon-a"><i class="fa fa-pie-chart icons"></i> &nbsp;&nbsp;statistical</a>
  

</div>