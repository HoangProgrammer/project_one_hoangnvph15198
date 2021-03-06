<?php
    require_once 'dao/courseDB.php';
    require_once 'dao/RatingDB.php';
    require_once 'models/pdo.php';
    $data = Get_caurse1();
    $data_course = Get_caurse();
    $rating_list = get_rating_groupby_user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiếng anh online Bussu</title>
    <!-- ajax -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="trangchu/style.css">
    <link rel="stylesheet" href="trangchu/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="trangchu/owlcarousel/assets/owl.theme.default.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="trangchu/owlcarousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=253492112890751&autoLogAppEvents=1" nonce="CssDxRAA"></script>
    <div class="wrap">
        <div class="header">
            <div class="slide">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="trangchu/images/istockphoto-1041764000-612x612 (2).jpg" class="d-block w-100" alt="...">
                        <div class="slide-wrap_content">
                            <div class="content">
                                <div class="choose_language">
                                    <h3>Học Tiếng Anh 10 Phút Mỗi Ngày</h3>
                                    <a href="#" class="btn_choose choose">
                                        Bẳt đầu học 
                                    </a>
                                    <br>
                                    <div class="want">
                                        <h3>Bạn muốn học</h3>
                                    </div>
                                    <ul>
                                        <li id="ta" data-text="Tiếng anh">
                                            <img src="trangchu/images/england-150397_960_720.png" alt="">
                                            <span>Tiếng anh</span>
                                        </li>
                                        <li  id="ta1" data-text="Tiếng anh cho người mới">
                                            <img src="trangchu/images/england-150397_960_720.png" alt="">
                                            <span>Tiếng anh cho trẻ em</span>
                        
                                        </li>
                                        <li  id="ta2" data-text="Tiếng anh Ielts">
                                            <img src="trangchu/images/england-150397_960_720.png" alt="">
                                            <span>Tiếng anh Ielts</span>
                        
                                        </li>
                                        <li  id="ta3" data-text="Germany">
                                            <img src="trangchu/images/england-150397_960_720.png" alt="">
                                            <span>Ôn lại tiếng Anh</span>
                        
                                        </li>
                                    </ul>
                                </div>
                                <!-- <img src="trangchu/images/hero-text.png" alt=""> -->
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="wrap_header">
                <div class="header__left">
                    <figure>
                        <a href="">
                            <img src="trangchu/images/Busuu_Logo.png" alt="logo">
                        </a>
                    </figure>
                    <div class="btnn btn--header">
                        <a href="#">
                            <span>New</span> Thử khóa học
                        </a>
                    </div>
                    <div class="btnn btn--header">
                        <a href="/du_an_1/trangchu/coures.php">
                            Các khóa học
                        </a>
                    </div>
                </div>
                <div class="header__right">
                    <div class="btnn btn--header">
                        <a href="site/login/sign_in.php">
                            Đăng nhập
                        </a>
                    </div>
                    <div class="btnn btn--sign_up">
                        <a href="site/login/sign_up.php">
                            Đăng kí
                        </a>
                    </div>
                </div>
            </div>
        
        </div>

        <!-- lộ trình -->
        <div id="dc" class="coures" style="padding:0"></div>
        
        <!-- body -->
        <div class="wrap-mid">
            <div class="mid">
                <div class="mid_border"></div>
                <div class="mid_slo">
                    <h3>ƯU ĐIỂM KHI HỌC TIẾNG ANH TẠI <span class="span_blue">BUSSU</span></h3>
                </div>
            </div>

            <div class="mid_content">
                <div class="column1">
                    <img src="trangchu/images/icon-time2.png" alt="">
                    <div class="text">
                        <h5>CHỦ ĐỘNG THỜI GIAN</h5>
                        <p>Chỉ cần máy tính, smartphone hoặc máy tính bảng có kết nối 
                            internet, Bạn có thể học tiếng Anh với Giáo viên E-SPACE ở 
                            bất cứ nơi đâu, bất cứ khi nào.</p>
                    </div>
                </div>
                <div class="column1">
                    <img src="trangchu/images/icon-teacher.png" alt="">
                    <div class="text">
                        <h5>PHƯƠNG PHÁP 1 - 1</h5>
                        <p>Mỗi học viên sẽ học với một giáo viên, tương tác 2 chiều 
                            suốt buổi học, giáo viên sẽ theo sát trình độ của học
                            viên để giúp học viên tiến bộ cực nhanh.</p>
                    </div>
                </div>
                <div class="column1">
                    <img src="trangchu/images/icon-good.png" alt="">
                    <div class="text">
                        <h5>TIẾT KIỆM - HIỆU QUẢ</h5>
                        <p>Với 100% giáo viên nước ngoài sẽ giúp bạn luyện phát 
                            âm chuẩn quốc tế. Học viên có thể chọn gói học theo 
                            ngân sách của mình và hủy lịch học không bị mất phí.</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- coures -->
        <div class="coures">
            <h3>CÁC KHÓA HỌC NỔI BẬT</h3>
            <div class="container">
                            <?php foreach ($data as $key => $value) { ?>
                            <div class="coures1">
                                    <a href=""><img src="image/<?php echo $data[$key]['img'] ?>" alt=""></a>
                                    <div class="info">
                                        <div class="name">
                                            <h6><?php echo $data[$key]['NameCaurse'] ?></h6>
                                        </div>
                                        <div class="coures_info">
                                            <p><?php echo $data[$key]['description'] ?></p>
                                        </div>
                                        <div class="count_student">
                                            <b>Học viên: 8398</b>
                                        </div>
                                    </div>
                                    <div class="more">
                                        <span><a href="/du_an_1/trangchu/coures_detail.php?id_coures=<?php echo $data[$key]['id_caurse'] ?>">Xem thêm</a></span>
                                    </div>
                                </div>
                            <?php } ?>
                                    </div>
                    </div>
        </div>

        <!-- list_teachers -->
        <div class="list_teachers">
            <h3>GIÁO VIÊN NỔI BẬT TRONG THÁNG</h3>
            <span>Các giáo viên được học viên yêu thích
               <br> và tham gia đăng ký nhiều</span>
            <div class="container_teachers">
                <div class="teacher1">
                    <img src="trangchu/images/Teacher-Cris.jpg" alt="">
                    <div class="info">
                        <h6>Giáo viên Cris</h6>
                        ⭐⭐⭐⭐⭐ <br>
                        <span>Có 127 lượt đánh giá</span>
                    </div>
                </div>

                <div class="teacher1">
                    <img src="trangchu/images/Teacher-Raiza.png" alt="">
                    <div class="info">
                        <h6>Giáo viên Raiza</h6>
                        ⭐⭐⭐⭐⭐ <br>
                        <span>Có 127 lượt đánh giá</span>
                    </div>
                </div>

                <div class="teacher1">
                    <img src="trangchu/images/Teacher-Nik.jpg" alt="">
                    <div class="info">
                        <h6>Giáo viên Nik</h6>
                        ⭐⭐⭐⭐⭐ <br>
                        <span>Có 127 lượt đánh giá</span>
                    </div>
                </div>

                <div class="teacher1">
                    <img src="trangchu/images/56218190_826137094407022_142991049105604608_n.jpg" alt="">
                    <div class="info">
                        <h6>Giáo viên Quân</h6>
                        ⭐⭐⭐⭐⭐ <br>
                        <span>Có 127 lượt đánh giá</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ý kiến học viên -->
        <div class="hoc_vien">
            <h3>NƠI HỌC TẬP CỦA HÀNG NGHÌN HỌC VIÊN</h3>
            <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                })
        });

            </script>

            <div class="owl-carousel">
                <?php foreach ($rating_list as $key => $value) { ?>
                    <div class="hv1"> 
                        <?php if( $value['image'] ==""){?>
                            <img src="image/user_defaul.png" alt="">

                        <?php }else{?> 
                        
                            <img src="image/<?php echo $value['image'] ?>" alt="">
                        
                        <?php 
                        } ?>
                        <div class="content">
                            <h6>Học viên:
                                <?php echo $value['ten_user'] ?>
                            </h6>

                            <div >                
                        <ul style="display:flex;list-style:none;">
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                if ($value['rating'] >= $i) { ?>
                                    <li data-index="1">
                                        <i class="fas fa-star text-warning  mr-1 main_star"></i>
                                    </li>
                                <?php    } else { ?>
                                    <li data-index="2">
                                        <i class="fas fa-star text-dark  mr-1 main_star"></i>
                                    </li>
                            <?php }
                            } ?>
                        </ul>     
                             </div>

                            <span>
                                <?php echo $value['content'] ?>
                            </span>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- form tu van -->
        <div class="wrap_form_tu_van">
            <div class="form_tu_van">
                <h3>Hãy cùng <span>Bussu</span> </h3>
                    <h2>Chinh phục tiếng Anh</h2>
                
                <form action="">
                    <div class="input">
                        <label for="">Họ tên</label> <br>
                        <input class="input_form" type="text" id="name">
                    </div>
    
                    <div class="input">
                        <label for="">Email</label> <br>
                        <input class="input_form" type="email" id="email">
                    </div>
                    <div class="input">
                        <label for="">Số điện thoại</label> <br>
                        <input class="input_form" type="number" id="number">
                    </div>
                    <div class="input">
                        <label class="input_form" for="">Khóa học</label> <br>
                        <select name="course" id="course">
                            <?php foreach ($data_course as $key => $value) { ?>
                                <option value="<?php echo $value['NameCaurse'] ?>"><?php echo $value['NameCaurse'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit" id="btn-submit" />
                </form>
            </div>
    </div>

    <!-- footer -->
    <div class="wrap_footer">
            <div class="footer">
                <div class="column1">
                    <ul>
                        <li>
                                <img src="trangchu/images/Busuu_Logo.png" alt="">
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
        var inputs = document.querySelectorAll(".input_form");
        var acb = document.getElementById('acb');
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].onblur = function(e){
                var value = inputs[i].value;
                console.log(value)
                if (value != "" && value.match(mail)) {
                    inputs[i].style.border = "1px solid green";
                }
                else{
                    inputs[i].style.border = "1px solid red";

                }
            }            
        }
    </script>

<script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#ta").click(function(event){
                   $('#dc').load('/du_an_1/trangchu/dc.php?id=1');
                });
             });
    </script>

<script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#ta1").click(function(event){
                   $('#dc').load('/du_an_1/trangchu/dc.php?id=2');
                });
             });
    </script>

<script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#ta2").click(function(event){
                   $('#dc').load('/du_an_1/trangchu/dc.php?id=3');
                });
             });
    </script>

    <script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#ta3").click(function(event){
                   $('#dc').load('/du_an_1/trangchu/dc.php?id=4');
                });
             });
    </script>

    <!-- insert form tư vấn -->
    <script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#btn-submit").click(function(event){
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var number = $("#number").val();
                    var course = $("#course").val();

                    var dataString = 'name='+ name + '&email='+ email + '&number='+ number + '&course='+ course;

                    if (name == "" || email == "" || number == "" || course == "") {
                        alert("Vui lòng nhập đầy đủ thông tin để chúng tôi có thể liên hệ cho bạn sớm nhất");
                    }
                    else{
                        $.ajax({
                        type: "POST",
                        url: "/du_an_1/trangchu/insert_form_tu_van.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                        alert(result);
                        }
                    });
                    }
                    return false;
                });
             });
    </script>

    <script>
        var btn = document.querySelector(".choose");
        var data = document.querySelectorAll("ul li");
        for (let index = 0; index < data.length; index++) {
            var attr = data[index].getAttribute('data-text');
            data[index].onmousemove = function(){
                btn.innerHTML = data[index].getAttribute('data-text');
            }            
        }
    </script>
</body>
</html>