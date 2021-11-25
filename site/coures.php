<?php
    require_once './../dao/courseDB.php';
    require_once './../models/pdo.php';
    $data = Get_caurse();
    // echo "<pre>";
    // var_dump($data[0]['description']);die;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/css/coures.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="wrap_header">
                <div class="header__left">
                    <figure>
                        <a href="">
                            <img src="./../assets/images/slider/Busuu_Logo.png" alt="logo">
                        </a>
                    </figure>
                    <div class="btnn btn--header">
                        <a href="#">
                            <span>New</span> Try live lessons
                        </a>
                    </div>
                </div>
                <div class="header__right">
                    <div class="btnn btn--header">
                        <a href="../site/login/sign_in.php">
                            Đăng nhập
                        </a>
                    </div>
                    <div class="btnn btn--sign_up">
                        <a href="#">
                            Đăng kí
                        </a>
                    </div>
                </div>
            </div>
        </div>


            <div class="coures">
                <h3>CÁC KHÓA HỌC</h3>
                <div class="coures_flex">
                    <div class="fillter">
                        <ul>
                            <li>
                            <i class="fa-solid fa-heart"></i>    
                            Miễn phí
                            </li>
                            <li>
                            <i class="fa-solid fa-dollar-sign"></i>   
                            Trả phí

                            </li>

                        </ul>
                    </div>
                    <div class="container_coures">
                        <?php foreach ($data as $key => $value) { ?>
                        <div class="coures1">
                                <a href=""><img src="./../image/<?php echo $data[$key]['img'] ?>" alt=""></a>
                                <div class="info">
                                    <div class="name">
                                        <h6><?php echo $data[$key]['NameCaurse'] ?></h6>
                                    </div>
                                    <div class="coures_info">
                                        <p><?php echo $data[$key]['description'] ?></p>
                                    </div>
                                    <div class="count_student">
                                        <p><b>Học viên: 8398</b></p>
                                    </div>
                                </div>
                                <div class="more">
                                    <span><a href="">Xem thêm</a></span>
                                </div>
                            </div>
                        <?php } ?>
                                </div>
                </div>
        </div>


        <!-- footer -->
        <?php 
            require_once './../trangchu/footer_coures.php';
        ?>

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
</body>
</html>