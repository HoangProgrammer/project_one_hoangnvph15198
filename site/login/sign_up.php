<?php
    include_once "./../../models/pdo.php";
?>
<?php
    $conn=connect();
    $error ="";
    if(isset($_POST['sign_up'])){

        if($_POST['name_user'] != "" && $_POST['email_user'] != "" && $_POST['pass_user'] != "" && $_POST['check_pass_user'] != "" ){
            $name = $_POST['name_user'];
            $email = $_POST['email_user'];
            $pass = $_POST['pass_user'];
            $check_pass = $_POST['check_pass_user'];
            $img = "abc";
            $time = date("Y-m-d H:i:s");
            $sql = "SELECT * FROM user WHERE ten_user = :ten_user";
            $result = $conn -> prepare($sql);
            $result -> execute(['ten_user' => $name]);
            $number_of_rows = $result->fetchColumn(); 
            if($number_of_rows == 0){
                if($pass == $check_pass){
                    $sql = "INSERT INTO user(ten_user,image,email,mat_khau,start_time) VALUES ('$name','$img','$email','$pass','$time')";
                    pdo_execute($sql);
                    $error2 = "Đăng ký thành công. Mời bạn đăng nhập(tự động chuyển hướng sau 3s)";
                    header( "refresh:5;url=sign_in.php");
                }
                else{
                    $error="mật khẩu không trùng nhau";
                }
            }
            else{
                $error="tên đăng nhập đã tồn tại";
            }
            
        }
        else{
            $error="Bạn phải nhập đầy đủ thông tin";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>đăng ký học tiếng anh online</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="./../../assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="./../../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="./../../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="./../../assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                
                <form action="" method="POST" class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Sign up</h3>
                    <div class="input-group mb-3">
                        <input type="text" name="name_user" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email_user" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="pass_user" class="form-control" placeholder="password">
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="check_pass_user" class="form-control" placeholder="check password">
                    </div>
                    
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-1" checked="">
                            <label for="checkbox-fill-1" class="cr"> Save Details</label>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                            <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
                        </div>
                    </div>
                    <button name="sign_up" class="btn btn-primary shadow-2 mb-4">Sign up</button>
                    <div class="input-group mb-4">
                        <?php if(isset($error)) echo $error; ?>
                        <?php if(isset($error2)) echo $error2; ?>
                    </div>
                    <p class="mb-0 text-muted">Allready have an account? <a href="sign_in.php"> Log in</a></p>
                </form>
                
            </div>
        </div>
    </div>
    <br>
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
