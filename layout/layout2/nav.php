

<!DOCTYPE html>
<html lang="en">

<head>
    <title>học tiếng anh online </title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicon icon -->
    <!-- <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="https://www.busuu.com/vi/" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="./assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/cours.css">

    
</head>

<body cz-shortcut-listen="true">
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg" style="background-color: azure;">
                      
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="white"></path><path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="#116EEE" fill-opacity="0.5"></path><path d="M13.0311 2.01017L8.59428 2.00001C6.0673 1.99493 4.01524 4.03937 4.0127 6.56635L4 17.6647C4 17.6749 4.3454 13.1695 13.0184 13.1695C16.099 13.1721 18.6006 10.6781 18.6057 7.59492C18.6082 4.51429 16.1143 2.01271 13.0311 2.01017Z" fill="white"></path></svg>
                    </div>
                    <span class="b-title">Busuu</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            
       

            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);"><div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                <ul class="nav pcoded-inner-navbar">
                 <?php
                   if(isset($_GET['id']))   {
                    $id= $_GET['id'];
                    $get_lesson =getAll_lesson($id); 
                }    
                 foreach(  $get_lesson as $val) : extract($val); ?>   
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item menu_item active">
                        <a href="#" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="feather icon-home"></i>
                            </span>
                            <span class="pcoded-mtext"><?=$lessonName?></span>
                        </a>
                        <ul style="padding-left: 0px;" class="nav pcoded-inner-navbar baitap1">
                            <li data-username="Table bootstrap datatable footable" class="nav-item ">
                                 <a href="site/hoc/exercise_cours.php" class="nav-link ">
                                    <span class="pcoded-micon">
                                        
                                    </span>
                                    <span style="color: white;" class="pcoded-mtext">quiz </span>
                                </a>
                            </li>
                        </ul>
                        
                    </li>   
                    <?php endforeach; ?>   



 
                
                       
                </ul>
            </div>
            <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 683.2px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>
    </nav>

    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="white"></path><path d="M15.8045 10.9829C19.1314 10.988 21.1098 13.4565 21.1073 16.4965C21.1022 19.5391 19.1213 22.0026 15.7918 22L7.47431 21.9873C5.51367 21.9873 4.00256 20.428 4.00256 18.3378L4.01272 10.9677L15.8045 10.9829Z" fill="#116EEE" fill-opacity="0.5"></path><path d="M13.0311 2.01017L8.59428 2.00001C6.0673 1.99493 4.01524 4.03937 4.0127 6.56635L4 17.6647C4 17.6749 4.3454 13.1695 13.0184 13.1695C16.099 13.1721 18.6006 10.6781 18.6057 7.59492C18.6082 4.51429 16.1143 2.01271 13.0311 2.01017Z" fill="white"></path></svg>
                    <span>welcome to Nguyễn Mạnh Quân</span>
             
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
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
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
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
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
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
                
                <li>
                    
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="./assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="login/sign_in.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pro-head" >
                        <img src="./assets/images/user/avatar-1.jpg" width="50px" class="img-radius" alt="User-Profile-Image">
                    </div>
                </li>
            </ul>
        </div>

    </header>
    