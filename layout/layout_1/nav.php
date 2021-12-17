<!DOCTYPE html>
<html lang="en">


<head>
    <title>học tiếng anh online </title>
<base href="http://localhost:81/du_an_1/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.busuu.com/vi/" type="icon">
    <link rel="stylesheet" href="./assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- vendor css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="./assets/css/style_user.css">
  <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />  
  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


</head>

<?php
$home = "";
$forum = "";
$rating = "";
$social = "";
$route = "";

if (isset($_GET['act'])) {
    if ($_GET['act'] == "RaTing") {
        $rating = "active";
    } else if ($_GET['act'] == "social") {
        $social = "active";
    } else if ($_GET['act'] == "forum") {
        $forum = "active";
    }  if ($_GET['act'] == "route") {
        $route = "active";
    }else {
        // $home = "active";
    }
} else {
    $home = "active";
}
?>

<body cz-shortcut-listen="true">
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="white"></path>
                            <path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="#116EEE" fill-opacity="0.5"></path>
                            <path d="M13.0311 2.01017L8.59428 2.00001C6.0673 1.99493 4.01524 4.03937 4.0127 6.56635L4 17.6647C4 17.6749 4.3454 13.1695 13.0184 13.1695C16.099 13.1721 18.6006 10.6781 18.6057 7.59492C18.6082 4.51429 16.1143 2.01271 13.0311 2.01017Z" fill="white"></path>
                        </svg>

                    </div>
                    <span class="b-title">Busuu</span>

                </a>
                <a class="mobile-menu on" id="mobile-collapse"><span></span></a>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                <div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                    <ul class="nav pcoded-inner-navbar">



                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item <?= $home ?>">
                            <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                        </li>

                        <li class="nav-item  <?= $forum ?>">
                            <a href="forum" class="nav-link "><span class="pcoded-micon"><i class="far fa-comment"></i></span><span class="pcoded-mtext">Thảo Luận</span></a>
                        </li>

                        <li class="nav-item  <?= $rating ?> ">
                            <a href="RaTing" class="nav-link "><span class="pcoded-micon"><i class="fas fa-award"></i></span><span class="pcoded-mtext">Đánh giá</span></a>
                        </li>

                        <li class="nav-item  <?= $social ?> ">
                            <a href="social" class="nav-link "><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">Cộng đồng</span></a>
                        </li>


<<<<<<< HEAD
                        
                            
=======
                        <li class="nav-item  <?= $add_course ?> ">
                            <a href="index.php?act=add_course" class="nav-link "><span class="pcoded-micon"><i class="fas fa-shopping-cart"></i></span><span class="pcoded-mtext">Mua khóa học</span></a>
>>>>>>> a2e1c2fa96c6d1d9341894a756c7367507c06720
                        <li class="nav-item  <?= $route ?> ">
                            <a href="route" class="nav-link "><span class="pcoded-micon"><i class="fas fa-route"></i></span><span class="pcoded-mtext">Lộ trình</span></a>
                        </li>

                        <!-- <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li> -->
                    </ul>
                </div>
                <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 683.2px;"></div>
                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
        </div>
    </nav>

<!--  -->

<header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <svg width="1000" height="1000" viewBox="0 0 326 102" xmlns="http://www.w3.org/2000/svg">
                        <path d="M107.478 76.11l-.04-51.373h24.996c5.145 0 9.005 1.267 11.581 3.8 2.577 2.534 3.865 5.764 3.865 9.69a13.137 13.137 0 01-1.639 6.636 11.19 11.19 0 01-4.704 4.444v.156a13.026 13.026 0 016.481 4.75 13.287 13.287 0 012.3 7.808 15.782 15.782 0 01-.966 5.618 11.857 11.857 0 01-2.927 4.44 13.662 13.662 0 01-4.968 2.95 20.567 20.567 0 01-6.901 1.063l-27.078.017zm12.99-39.608v8.412h9.81c1.714 0 2.933-.406 3.657-1.219a4.264 4.264 0 001.081-2.95 4.7 4.7 0 00-.966-3.019c-.64-.816-1.897-1.224-3.772-1.224h-9.81zm0 18.613v9.2h11.414c1.875 0 3.186-.448 3.934-1.34a4.797 4.797 0 001.15-3.22 4.68 4.68 0 00-1.26-3.266c-.833-.914-2.104-1.374-3.818-1.368l-11.42-.006zm61.419-17.86h12.075V57.38a24.097 24.097 0 01-1.397 8.562 16.14 16.14 0 01-10.166 9.902 24.46 24.46 0 01-8.051 1.265 25.145 25.145 0 01-8.05-1.213 16.186 16.186 0 01-6.188-3.686 16.563 16.563 0 01-3.984-6.165 24.18 24.18 0 01-1.415-8.625V37.295h12.076v20.126c0 3.094.701 5.313 2.093 6.676a8.335 8.335 0 0010.925 0c1.388-1.365 2.082-3.59 2.082-6.676V37.255zm38.107 11.5a3.073 3.073 0 00-1.369-2.082 5.133 5.133 0 00-2.875-.741c-1.56 0-2.66.314-3.301.943a3.187 3.187 0 00-.96 2.358c0 .891.529 1.518 1.57 1.886 1.271.42 2.575.733 3.899.937 1.552.257 3.241.544 5.066.863 1.761.291 3.469.845 5.066 1.644a10.606 10.606 0 013.898 3.376c1.047 1.464 1.57 3.478 1.57 6.043a11.366 11.366 0 01-1.202 5.227 11.962 11.962 0 01-3.415 4.123 16.576 16.576 0 01-5.342 2.714 23.448 23.448 0 01-6.993.99 23.9 23.9 0 01-6.952-.938 16.188 16.188 0 01-5.302-2.668 12.29 12.29 0 01-3.421-4.025 11.584 11.584 0 01-1.288-5.176h11.874c.058 2.044 1.693 3.063 4.905 3.06 1.932 0 3.226-.288 3.899-.869a3.019 3.019 0 001.006-2.432c0-.891-.523-1.518-1.57-1.886a24.248 24.248 0 00-3.904-.938l-5.06-.862a17.867 17.867 0 01-5.083-1.622 10.72 10.72 0 01-3.905-3.375c-1.046-1.468-1.568-3.483-1.564-6.044a11.474 11.474 0 011.15-5.175 12.698 12.698 0 013.278-4.134 15.096 15.096 0 015.1-2.755 21.587 21.587 0 016.711-.983 21.215 21.215 0 016.676.978 16.003 16.003 0 015.066 2.668 12.169 12.169 0 013.26 4.025 11.674 11.674 0 011.254 4.882l-11.742-.012zm44.363-11.575h12.076v20.126a24.097 24.097 0 01-1.398 8.562 16.138 16.138 0 01-10.166 9.902 24.46 24.46 0 01-8.051 1.265 25.149 25.149 0 01-8.05-1.213 16.246 16.246 0 01-6.17-3.669 16.563 16.563 0 01-3.962-6.193 24.2 24.2 0 01-1.414-8.625V37.209h12.075v20.126c0 3.093.702 5.313 2.093 6.676a8.356 8.356 0 0010.926 0c1.386-1.363 2.087-3.588 2.081-6.682l-.04-20.149zm45.496-.034h12.076v20.126a23.999 23.999 0 01-1.403 8.556 16.136 16.136 0 01-10.167 9.908 24.28 24.28 0 01-8.05 1.259 25.297 25.297 0 01-8.05-1.208 16.261 16.261 0 01-6.171-3.697 16.562 16.562 0 01-3.984-6.164 24.131 24.131 0 01-1.409-8.626V37.174h12.075V57.3c0 3.09.696 5.314 2.088 6.67a8.335 8.335 0 0010.925 0c1.392-1.364 2.086-3.59 2.082-6.675l-.012-20.15zM46.923 56.323a26.704 26.704 0 0020.453-9.385 25.428 25.428 0 006.09-16.491c0-14.307-11.84-25.917-26.48-25.934l-21.11-.04c-11.983-.023-21.73 9.47-21.742 21.2l-.057 51.523c0 .046 1.639-20.873 42.845-20.873z" fill="#116EEE"></path>
                        <path d="M4.077 80.163c0 9.477 7.849 17.165 17.55 17.165h39.102c15.813 0 25.232-11.42 25.249-25.549 0-12.035-6.826-22.11-18.625-24.84a26.706 26.706 0 01-20.43 9.384c-41.207 0-42.846 20.92-42.846 20.873v2.967z" fill="#88B7F7"></path>
                    </svg>

                </div>
                <span class="b-title">Bussu</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <dv class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <!-- <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div> -->
                </li>
                <li class="nav-item"><a title='lịch sử học' href="history"><i style="font-size:25px" class="fas fa-history"></i></a> </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li>
                    
                    <div class="dropdown">
                    <?php

$notification = notification($id_user);
$count=0;
$note="";

foreach ($notification as $value){
    $count +=1;
}

if(empty($notification)) {
    $note="Chưa có thông báo";
    ?>

<?php }else{ ?>
  <span class="notifications_number"><?=  $count?> </span>
 <?php }?>                    
                        <a title="thông báo" id="bell" class="dropdown-toggle " data-toggle="dropdown" >
                            
                            <i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Thông báo</h6>
                                <div class="float-right">
                                    <!-- <a href="javascript:" class="m-r-10">bài viết mới nhất</a> -->
                                    <!-- <a href="javascript:">clear all</a> -->
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">Mới</p>
                                </li>
                                <a  style=" margin-left:29%; text-align: center"><?=$note?></a>
                                <?php

                                $notification = notification($id_user);
                                foreach ($notification as $val) : ?>
                                    <li class="">
                                        <div class="media">
                                            <img class="img-radius" src="./assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong><?= $val['ten_user']; ?></strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i></span></p>
                                           <div style="display:flex">
                                                   <form action="" method="POST">                                  
                                                  <button type="submit"   data-friend="<?=$val['sender']?>" class="accept_btn btn btn-success "><i class="fas fa-check"> chấp nhận</i> </button>
                                                  <span class="text-secondary" id="accept_friend<?=$val['sender']?>"></span>  
                                               </form>    
                                               <form type="submit"  action="" method="POST">                                                                            
                                                  <button data-friend="<?=$val['sender']?>" class="delete_btn_request btn btn-danger "><i class='fas fa-window-close'> hủy</i></button>  
                                              <span class="text-secondary" id="delete_friend<?=$val['sender']?>" ></span>
                                                </form>  
                                           </div>                                           
                                               <span class="text-secondary span_notification"> </span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach ?>

                                <!-- <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li> -->
                                <!-- <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="./assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li> -->
                                <!-- <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="./assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                            <!-- <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div> -->
                        </div>
                        
                    </div>
                </li>
                <!-- user -->
                <li>
<?php $get_account= Get_user_one($id_user) ;
foreach($get_account as $value){
    extract($value);

}
$images='image/iconn_user.png';
if($image==''){
    $images='image/user_defaul.png';
}else{
    $images='image/'.$image.'';
}
?>
                    <div class="dropdown drp-user">
                        <a  class="dropdown-toggle " data-toggle="dropdown" id="user">                         
                            <img  src="<?=$images?>" class="img-radius" alt="User-Profile-Image">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                
                                <img src="<?= $images?>" class="img-radius" alt="User-Profile-Image">
                                <span><?=$ten_user?></span>
                                <a href="index.php?act=logout" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <?php if($role==1){?>
    <li><a href="account" class="dropdown-item"><i class="feather icon-settings"></i> Hồ Sơ </a></li>
                                <!-- <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li> -->
                                <!-- <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li> -->
                                <!-- <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li> -->
                                <li><a href="./admin/index.php" class="dropdown-item"><i class="feather icon-lock"></i> Quản trị</a></li>
                               <?php }else{?>
                                <li><a href="account" class="dropdown-item"><i class="feather icon-user"></i> Hồ Sơ</a></li>
                                <!-- <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li> -->
                                <!-- <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li> -->
                                <!-- <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li> -->
                                <!-- <li><a href="./admin/index.php" class="dropdown-item"><i class="feather icon-lock"></i> Quan tri</a></li> -->
                           <?php    } ?>
                                
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
    </header>


    <script>
        $(document).ready(function() {


            
  $('#user').on( "click",function() {
            $('.profile-notification').fadeToggle(500);
            $('.notification').hide()
        })
  $('#bell').on( "click",function() {
            $('.notification').fadeToggle(500);
            $('.profile-notification').hide();
        })
        

            $('#remove_friend').on('click', function(e) {
                            e.preventDefault();
                            var toID = $(this).data('remove')                     
                            var action = "remove_friend";
                            if (toID > 0) {
                                $.ajax({
                                    url: "site/processAjax.php",
                                    method: "POST",
                                    data: {
                                        toID: toID,
                                        action: action
                                    },
                                    beforeSend: function(){
                                       return    $('#remove_friend').html('......');;
                                    },
                                    success: function(data) {

                                         $('#remove_friend').html('xóa thành công');
                                        $('#remove_friend').attr('disabled', 'disabled')
                                       
                                    }
                                })
                            }
                        })


         
$('.accept_btn').on('click', function(e) {
    e.preventDefault();
  toID=$(this).data('friend')
  var action="accept";
//   alert(toID);
  if(toID>0){
         $.ajax({
       url:"site/processAjax.php",
       method:"POST",
       data:{id_friends:toID,action:action},
       success: function(data) {
           $('#accept_friend'+toID).html('các bạn đã trở thành bạn');
           $('.accept_btn').hide(); 
        $('.delete_btn_request').hide();    
       }
   })
  }
})

$('.delete_btn_request').on('click', function(e) {
    e.preventDefault();
  var toID=$(this).data('friend')
  
  var action="delete_request";
  if(toID>0){
       $.ajax({
       url:"site/processAjax.php",
       method:"POST",
       data:{toID:toID,action:action},
       success: function(data) {
           $('#delete_friend'+toID).html('đã gỡ lời kết bạn');
        $('.accept_btn').hide(); 
        $('.delete_btn_request').hide(); 
       }
   })
  }
  

})

        })
    </script>