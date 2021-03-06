<?php
session_start();
require_once('../models/pdo.php');
require_once('../dao/courseDB.php');
require_once('../dao/lesson_topicDB.php');
require_once('../dao/lesson.php');
// require_once('../dao/comment_lesson.php');
require_once('../dao/history.php');
require_once('../dao/pointDB.php');
require_once('../dao/quizDB.php');
require_once('../dao/accountDB.php');
require_once('../global.php');
require_once('../dao/BannerDB.php');
require_once('../dao/RatingDB.php');
require_once('../dao/payments.php');
require_once('../dao/forum_post.php');
require_once "../dao/progress.php";


if (isset($_SESSION["admin"])) {
  $admin = $_SESSION["admin"]['id'];
  $Get_user_one = Get_user_one($admin);
  foreach ($Get_user_one as $key => $val) {
    $name_admin = $val['ten_user'];
    $image = $val['image'];
    $admin_id =  $val['id_user'];
  }
}
?>


<!Doctype HTML>
<html>

<head>
  <title>Quản trị web</title>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles_one.css">
</head>


<body>

  <div id="mySidenav" class="sidenav">
    <p class="logo"> <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="white"></path>
        <path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="#116EEE" fill-opacity="0.5"></path>
        <path d="M13.0311 2.01017L8.59428 2.00001C6.0673 1.99493 4.01524 4.03937 4.0127 6.56635L4 17.6647C4 17.6749 4.3454 13.1695 13.0184 13.1695C16.099 13.1721 18.6006 10.6781 18.6057 7.59492C18.6082 4.51429 16.1143 2.01271 13.0311 2.01017Z" fill="white"></path>
      </svg> Manage <span class="menu">&#9776; </span></p>
    <p class="logo1"> <span class="menu1">&#9776;</span></p>
    <a href="index.php?action=dashboard" class="icon-a "><i class="fas fa-tachometer-alt"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="index.php?action=product" class="icon-a"><i class="fab fa-discourse"></i> &nbsp;&nbsp;Khóa học</a>
    <a href="index.php?action=statistical" class="icon-a"><i class="fa fa-file icons"></i> &nbsp;&nbsp;Thống kê</a>
    <a href="index.php?action=banner" class="icon-a"><i class="fa fa-image"></i>&nbsp;&nbsp;Banner</a>
    <a href="index.php?action=account" class="icon-a"><i class="fa fa-users"></i> &nbsp;&nbsp;Người dùng</a>
    <!-- <a href="index.php?action=comments"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;Bình luận</a> -->
    <a href="index.php?action=shopping" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Người mua</a>
    <a href="index.php?action=blog" class="icon-a"><i class="fa fa-th-large"></i> &nbsp;&nbsp;Blog</a>
    <a href="index.php?action=rating" class="icon-a"><i class="fa fa-star"></i> &nbsp;&nbsp;đánh giá</a>
    <a href="index.php?action=contact" class="icon-a"><i class="fa fa-id-badge"></i> &nbsp;&nbsp;Liên hệ</a>
    <a href="index.php?action=route" class="icon-a"><i class="fas fa-route"></i> &nbsp;&nbsp;Lộ trình</a>

    <!-- <a href="index.php?action=lesson_topic"class="icon-a"><i class="fa fa-sliders icons"></i> &nbsp;&nbsp;chủ đề bài học</a> -->
    <!-- <a href="index.php?action=lesson"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;bài học</a>
  <a href="index.php?action=quiz"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;quiz</a> -->
    <!-- <a href="index.php?action=news"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;news</a> -->
    <!-- <a href="index.php?action=statistical"class="icon-a"><i class="fa fa-pie-chart icons"></i> &nbsp;&nbsp;statistical</a> -->


  </div>