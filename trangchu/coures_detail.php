<?php
    require_once('./../dao/courseDB.php');
    require_once('./../models/pdo.php');
    $id = $_GET['id_coures'];
    $data = Get_course_one($id);
    // var_dump($data);die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/css/coures_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <?php
            require_once('header_coures.php');
        ?>

        <div class="wrap_detail">
            <div class="detail_left">
                <div class="detail_info">
                    <h3> <?php echo $data[0]['NameCaurse'] ?> </h3>
                    <p>Hiểu sâu hơn về cách Javascript hoạt động, 
                        tìm hiểu về IIFE, closure, reference types, 
                        this keyword, bind, call, apply, prototype, ...
                    </p>
                </div>

                <div class="detail_info">
                    <h3>Bạn sẽ học được gì</h3>
                    <div class="row">
                        <p> ✔️ Được học kiến thức miễn phí với nội dung chất lượng hơn mất phí.</p>
                        <p> ✔️ Được học kiến thức miễn phí với nội dung chất lượng hơn mất phí.</p>
                        <p> ✔️ Được học kiến thức miễn phí với nội dung chất lượng hơn mất phí.</p>
                        <p> ✔️ Được học kiến thức miễn phí với nội dung chất lượng hơn mất phí.</p>
                    </div>

                </div>

                <div class="detail_info">
                    <h3>Nội dung khóa học</h3>
                    <p><span class="span">2 phần</span> <span class="span">14 bài học</span> <span class="span">Thời lượng 06 giờ 27 phút</span></p>
                    <div class="toastt">
                        <div class="topic">
                            <h5>+ Nội dung khóa học nâng cao</h5>

                        </div>
                        <div class="topic_content">
                            <ul>
                                <li>Giới thiệu</li>
                                <li>Giới thiệu</li>
                                <li>Giới thiệu</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_detail">
                <div class="detail_right">
                    <img src="./../image/<?php echo $data[0]['img'] ?>" alt="">
                    <a href="./../site/login/sign_in.php" style="display:block" class="btn btn-primary">Đăng kí</a>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="wrap_footer">
            <div class="footer">
                <div class="column1">
                    <ul>
                        <li>
                            <a href="">
                                <img src="./../assets/images/slider/Busuu_Logo.png" alt="">
                            </a>
                            <ul>
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Liên hệ</a></li>
                                <li><a href="">Chính sách chăm sóc khách hàng</a></li>
                                <li><a href="">Câu hỏi thường gặp</a></li>
                                <li><a href="">Hướng dẫn học</a></li>
                                <li><a href="">Tổng đài CSKH <span style="padding: 5px 10px; background-color: #11ee92; border-radius: 25px;">0354171002</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="column1">
                    <ul>
                        <li>
                            <h3>Chúng tôi</h3>
                            <ul>
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Liên hệ</a></li>
                                <li><a href="">Chính sách</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
    
                <div class="column1">
                    <ul>
                        <li>
                            <h3>Kết nối với chúng tôi</h3>
                               <a href="" data-text="blue"><i class="fab fa-facebook-square"></i></a>
                               <a href="" data-text="#116eee"><i class="fab fa-telegram"></i></a>
                               <a href="" data-text="red"><i class="fab fa-instagram-square"></i></a>
                               <a href="" data-text="blue"><i class="fab fa-twitter-square"></i></a>
                               <a href="" data-text="orange"><i class="fab fa-google-plus-square"></i></a>
                        </li>
                    </ul>
                </div>
    
                <div class="fb-page column1" 
                    data-href="https://www.facebook.com/busuucom/" 
                    data-tabs="hide_cover" 
                    data-width="300" 
                    data-height="" 
                    data-small-header="false" 
                    data-adapt-container-width="true" 
                    data-hide-cover="false" 
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/busuucom/" 
                    class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/busuucom/">Meta</a>
                    </blockquote>
                </div>
            </div>
            <div class="copyright">
                <br>
                <hr>
                <br>
                <div class="container_copyright">
                    <div class="right">
                        <span>©2021 Bussu copyright</span>
                        <div class="link">
                            <a href="#">Terms |</a>
                            <a href="#">Privacy</a>
                        </div>
                    </div>
                    <div class="left">
                        <div class="btnn btn--sign_up">
                            <a href="#">
                                Sign up
                            </a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</body>
</html>