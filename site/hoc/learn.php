<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="site/hoc/cours.css">
</head>
<html>

<body cz-shortcut-listen="true">


    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg" style="background-color: azure;">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="white"></path>
                            <path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="#116EEE" fill-opacity="0.5"></path>
                            <path d="M13.0311 2.01017L8.59428 2.00001C6.0673 1.99493 4.01524 4.03937 4.0127 6.56635L4 17.6647C4 17.6749 4.3454 13.1695 13.0184 13.1695C16.099 13.1721 18.6006 10.6781 18.6057 7.59492C18.6082 4.51429 16.1143 2.01271 13.0311 2.01017Z" fill="white"></path>
                        </svg>
                    </div>
                    <span class="b-title">Busuu</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>


            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                <div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                    <ul class="nav pcoded-inner-navbar">
                        <?php
                        if (isset($_GET['idCourse'])) {
                            $id = $_GET['idCourse'];
                            $getAll_topic = getAll_topic($id); // lấy ra chủ dề của khóa học đó
                        }
                        foreach ($getAll_topic as $val) : extract($val); ?>
                            <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item menu_item active">
                                <a href="#" class="nav-link ">
                                    <span class="pcoded-micon">
                                        <i class="fas fa-circle " style="color:blue"></i>
                                    </span>
                                    <span class="pcoded-mtext"><?= $topicName ?></span>
                                </a>
                                <?php
                                $getAll_lesson = getAll_lesson($id_lesson_topics); // lấy ra khóa học học của chủ đề
                                foreach ($getAll_lesson as $val) : extract($val); ?>
                                    <ul style="padding-left: 0px;" class="nav pcoded-inner-navbar baitap1 btn-secondary">
                                        <li data-username="Table bootstrap datatable footable" class="nav-item ">
                                            <a href="index.php?act=learn&idCourse=<?= $_GET['idCourse'] ?>&Topic=<?= $_GET['Topic'] ?>&lesson=<?= $id_lesson ?>" class="nav-link ">
                                                <span class="pcoded-micon">
                                                </span>
                                                <span style="color: white;" class="pcoded-mtext"><?= $lessonName ?> </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul style="padding-left: 0px;" class="nav pcoded-inner-navbar baitap1">
                                        <li data-username="Table bootstrap datatable footable" class="nav-item ">
                                            <a href="index.php?act=learn&idCourse=<?= $_GET['idCourse'] ?>&Topic=<?= $_GET['Topic'] ?>&lesson=<?= $id_lesson ?>&quiz" class="nav-link ">
                                                <span class="pcoded-micon">
                                                </span>

                                                <span style="color: white;" class="pcoded-mtext"> quiz </span>
                                            </a>
                                        </li>
                                    </ul>
                                <?php endforeach; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 683.2px;"></div>
                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
        </div>
    </nav>


    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Busuu</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <h3 class="text-primary"></h3>
                </li>

                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a id="bell" class="dropdown-toggle" href="javascript:" data-toggle="dropdown">
                            <i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="./assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="./assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="./assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- user -->
                <li>

                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle " data-toggle="dropdown" id="user">
                            <img width="70px" src="./assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="./assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="site/login/sign_in.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="index.php?act=account" class="dropdown-item"><i class="feather icon-settings"></i> cài đặt</a></li>
                                <!-- <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li> -->
                                <!-- <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li> -->
                                <!-- <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li> -->
                                <li><a href="./admin/index.php" class="dropdown-item"><i class="feather icon-lock"></i> Quan tri</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>

    <!--  ...... -->
    <!-- video -->
    <?php if (!isset($_GET['quiz'])) {  // kiểm tra có url  thì show ra quiz
    ?>

        <div class="pcoded-main-container ">
            <div class="pcoded-main-container-lesson">
                <?php

                $get_lesson = Get_lesson_one($_GET['lesson']);
                foreach ($get_lesson as $value) : ?>
                    <iframe width="100%" height="100%" src="<?php if ($value['video'] == "chưa có") {
                                                            } else {
                                                                echo $value['video'];
                                                            } ?>" title="YouTube video player"></iframe>
                <?php endforeach; ?>
            </div>
            <div class="pcoded-main-note">
                <ul class="pcoded-main-container-tab">
                    <li class="pcoded-main-container-tab-item">
                        <a href="#">Tổng quan</a>
                    </li>
                </ul>
                <div class="pcoded-main-container-tab-text">
                </div>
                <div class="pcoded-main-container-tab-cmt">
                    <?php $getAll_comments = getAll_comments($_GET['lesson']);
                    $cou = 0;
                    foreach ($getAll_comments as $value) {
                        $cou += 1;
                    } ?>
                    <h3 class="pcoded-main-container-tab-cmt-title"><?= $cou ?> hỏi đáp</h3>

                    <?php            
                    if (isset($_POST['comment'])) {
                        $id_user = $_POST['id_user'];
                        $id_lesson = $_POST['id_lesson'];
                        $content = $_POST['content'];
                        $child=0;
                        $time = date('Y-m-d H:i:s');
                        $arr = array();
                        if ($content == "") {
                            $_SESSION['err'] = "không được để trống";
                        } else {
                            insert_comments($id_user, $id_lesson, $content,$child,$time);
                        }
                    }

                    if (isset($_POST['comment_child'])) {
                        $id_user = $_POST['id_user'];
                        $child=$_POST['child'];
                        $id_lesson = $_POST['id_lesson'];
                        $content = $_POST['content'];
                        $time = date('Y-m-d H:i:s');
                        $arr = array();
                        if ($content == "") {
                            $_SESSION['err'] = "không được để trống";
                        } else {
                            insert_comments($id_user, $id_lesson, $content,$child, $time);
                        }
                    }

                    ?>
                    
                    <!-- bình luận -->
                    <?php if (isset($_SESSION['err'])) { ?>
                        <span class="alert alert-warning" role="alert"> <?= $_SESSION['err'];
                                                                        unset($_SESSION['err']) ?>
                        <?php } ?></span>
                        <form class="container-tab-cmt-ask" action="" method="post">
                            <div class="container-tab-cmt-ask-img">
                                <img src="." alt="">
                            </div>
                            <div class="container-tab-cmt-ask-text">
                                <input name="content" type="text" placeholder="Bạn có thắc mắc gì trong bài học này">
                            </div>
                            <input type="hidden" name="id_user" value="<?= $id_user ?>">
                            <input type="hidden" name="id_lesson" value="<?= $_GET['lesson'] ?>">
                            <button type="submit" name="comment" class="btn btn-primary">Bình luận</button>
                        </form>
                        <!--  -->
                        <?php $getAll_comments=getAll_comments($_GET['lesson']); ?>
                        <?php
        function get_comments($data,$parent=0){
           
echo  "<ul style='margin-left:15px'>";
foreach($data as $key=>$val){
    $image='';
    if($val['image']==''){
        $image='<i class="fas fa-user"></i>';  
    }else{
        $image='<img src="image/'.$val['image'].'" alt="">';
    }
    if($val['child']==$parent){
echo '<li>
<div class="container-tab-cmt-ask">
<div class="container-tab-cmt-ask-img">
'. $image.'
</div>
<div class="container-tab-cmt-ask-text">
<div class="content_comment" >
 <span class="user_comment "> '.ucfirst($val['ten_user']).' </span>
    <span class="text-dark"> '.$val['content'].' </span>
</div>
   
    <div class="child_comment" >
        <a class="text-danger chats" style="margin-right: 10px; cursor:pointer;">trả lời </a> <span>'.$val['time'].'</span>
        <form action="" method="post" class="formTwo">
            <input type="hidden" name="child" value="'.$val['id_comment'].'">
            <input type="hidden" name="id_user" value="'.$val['id_user'].'">
            <input type="hidden" name="id_lesson" value="'.$_GET['lesson'].'">
            <div class="container-tab-cmt-ask-text">
                <input name="content" type="text" placeholder=" Trả lời ' .ucfirst($val['ten_user']). ' ">
            </div>
            <button type="submit" name="comment_child" class="chat btn btn-primary">Trả Lời</button>
        </form>
    </div>
</div>
</div>
';
$id=$val['id_comment'];
get_comments($data,$id);

    }
}
echo "<li>";
echo  "</ul>";
        }   
        
        get_comments($getAll_comments,$parent=0);
        ?>
                </div>


            </div>

        </div>
   






    <?php } else {  // ngược lại có url id_quiz thì show ra quiz 
    ?>

        <?php  // phần tính điểm
        if (isset($_POST['final'])) {
            $arr = $_POST;
            $id_lesson = $_POST['id_lesson'];
            $id_user = $_POST['id_user'];
            delete_point($id_lesson, $id_user);
            $mark = 0;
            $check = true;
            foreach ($arr as $key => $val) {
                if (is_numeric($key)) {
                    $final_test = final_test($key);
                    foreach ($final_test as $key => $value) {
                        if ($val == $value['answer']) {
                            $check = true;
                            $mark += 2;
                        } else {
                            $check = false;
                        }
                    }
                }
            }
            insert_point($id_user, $id_lesson, $mark);
        }
        ?>
        <div class="pcoded-main-container ">
            <div class="container-exercise">
                <header class="header-exercise">
                    <img class="header-exercise-logo" src="assets/images/logo-thumb.png" alt="">
                    <div class="header-exercise-title">
                        <span>Final test </span>
                    </div>
                </header>
                <form action="" method="post" class="container-exercise-page">



                    <div class="container-exercise-title">
                        <input type="hidden" name="id_user" value="<?= $id_user ?>"> <!-- id_user lấy từ session -->
                        <input type="hidden" name="id_lesson" value="<?= $_GET["lesson"] ?>">
                        <p>Trắc nghiệm cuối bài</p>

                        <?php $getAll_point_user = getAll_point_user($id_user, $_GET['lesson']);
                        foreach ($getAll_point_user as $value)
                            $value['point_total'];
                        ?>
                        <span> <?php if (isset($value['point_total']) == '') {
                                    echo "0";
                                } else {
                                    echo  $value['point_total'];
                                } ?> points (graded)</span>
                    </div>
                    <?php
                    $count = 0;

                    if (isset($_GET['lesson'])) {
                        $id_learn = $_GET['lesson'];
                    }
                    $quiz = getAll_quiz($id_learn);
                    foreach ($quiz as $val) : extract($val); ?>

                        <div class="container-exercise-question">
                            <div class="container-exercise-question-name">
                                <span>Câu <?= $count += 1 ?>:</span>
                            </div>
                            <div class="container-exercise-question-problem">
                                <span><?= $question ?></span>
                            </div>
                            <label class="container-exercise-question-answer">
                                <input name="<?= $id_quiz ?>" value="a" type="radio">
                                <span><?= $Selection1 ?></span>
                            </label>
                            <label class="container-exercise-question-answer">
                                <input name="<?= $id_quiz ?>" value="b" type="radio">
                                <span><?= $Selection2 ?></span>
                            </label>
                            <label class="container-exercise-question-answer">
                                <input name="<?= $id_quiz ?>" value="c" type="radio">
                                <span><?= $Selection3 ?></span>
                            </label>

                        </div>
                    <?php endforeach; ?>

                    <button name="final" class="btn btn-primary">Nộp bài</button>
                </form>
            </div>
        </div>
    <?php } ?>


    <!--  ...... -->

    <!-- <footer style="height: 60px;" class="pcoded-main-container pcoded-main-footer" >
        <div class="course-lesson__footer">
            <div class="course-lesson__footer-left">
                <span class="course-lesson__footer-item">2021 © Busuu Ltd</span>
                <a class="course-lesson__footer-item" href="">Điều khoản</a>
                <a class="course-lesson__footer-item" href="">Bảo mật</a>
            </div>
            <div class="course-lesson__footer-right">
                <span class="course-lesson__footer-heft">Trợ giúp</span>
                <i class="fab fa-facebook course-lesson__footer-heft"></i>
                <i class="fab fa-internet-explorer course-lesson__footer-heft"></i>
                <i class="fab fa-instagram course-lesson__footer-heft"></i>
                <i class="fab fa-youtube course-lesson__footer-heft"></i>
            </div>
        </div>
    </footer> -->



    <script src="./assets/js/vendor-all.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/pcoded.min.js"></script>
    <div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div>
    <div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div>


    <script>
        $(document).ready(function() {
            $('.formTwo').slideUp();

            $('a.chats').click(function() {

                $(this).next().next().slideToggle();
            })

        })
        var menu = document.querySelector('.mobile-menu');
        var baitap = document.querySelectorAll('.baitap1');
        var dem = 0;
        menu.onclick = function(e) {
            dem++;
            for (let i = 0; i < baitap.length; i++) {

                if (dem % 2 == 0) {
                    baitap[i].style.display = "block";
                    // baitap[i].classList.add('baitap');

                } else {
                    baitap[i].style.display = "none";

                }
            }
        }


        var inner = document.querySelectorAll('.menu_item');
        var baitap = document.querySelectorAll('.baitap1');


        var dem = 0;

        for (let i = 0; i < inner.length; i++) {
            inner[i].onclick = function(e) {
                if (dem % 2 == 0) {
                    // baitap[i].classList.add('baitap');
                    baitap[i].style.display = "block";

                    dem++;
                } else {
                    baitap[i].style.display = "none";
                    dem++;
                }
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>