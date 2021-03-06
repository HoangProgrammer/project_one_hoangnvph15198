<?php
    require_once './../dao/courseDB.php';
    require_once './../models/pdo.php';
    $data = Get_caurse();
    // echo "<pre>";
    // var_dump($data);die;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khóa học</title>
    <link rel="stylesheet" href="./../assets/css/coures.css">
    <!-- ajax -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

            <div class="coures">
                <h3>CÁC KHÓA HỌC</h3>
                <div class="coures_flex">
                    <div class="fillter">
                        <ul>
                            <li id="all" style="cursor:pointer">
                            <i class="fa-brands fa-buromobelexperte"></i>    
                            Tất cả
                            </li>
                            <li id="free" style="cursor:pointer">
                            <i class="fa-solid fa-heart"></i>    
                            Miễn phí
                            </li>
                            <li id="nfree" style="cursor:pointer">
                            <i class="fa-solid fa-dollar-sign"></i>   
                            Trả phí

                            </li>

                        </ul>
                    </div>
                    <div id="stage"></div>
 
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

    <script>
        var btn = document.querySelectorAll('.btn');
        for (let i = 0; i < btn.length; i++) {
            btn[i].onclick = function(e){
                let coures = e.target.getAttribute('data-text');
                let abc = document.querySelector(`.${coures}`);
                console.log(abc)
                abc.style.display = 'none';
            }            

        }

    </script>

<script type="text/javascript" language="javascript">
             $(document).ready(function() {
                
                   $('#stage').load('fillter_course.php');
                
             });
    </script>

            <!-- free -->
    <script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#free").click(function(event){
                   $('#stage').load('fillter_course.php?gia=0');
                });
             });
    </script>

             <!-- no free -->
    <script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#nfree").click(function(event){
                   $('#stage').load('fillter_course.php?gia=1');
                });
             });
    </script>

            <!-- all -->
    <script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#all").click(function(event){
                   $('#stage').load('fillter_course.php');
                });
             });
    </script>
</body>
</html>