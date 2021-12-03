<?php require_once("../login/index.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Reset password</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

   <!-- Favicon icon -->
   <link rel="icon" href="./../../assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="./../../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="./../../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="./../../assets/css/style.css">

</head>

<?php 
   if(isset($_POST['send'] )){
$mail = $_POST['mail'];
if(empty($mail)){
    $error='không được để trống';
}else{
    $mail_user=mail_user($mail);
    $code=substr(rand(0,999999),0,6);
    $title="Forgot password";
    $content="Mã xác nhận của bạn là : <h5 class='text-danger'>".$code."</h5>";
$mail=$mailer->SendMail( $title, $content,$mail);

$_SESSION['email']= $_POST['mail'];
$_SESSION['code']=$code;
header('location:Verification_pass.php');
}
}
?>
<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <form action="" method="post">
                 <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Quên Mật Khẩu</h3>
                    <div class="input-group mb-3">
                        <input type="email" name="mail" class="form-control" placeholder="Email">
                    </div>
                    <p style="color:red">
                        <?php if(isset( $error )){echo $error;} ?>
                    </p>
                    <button name="send" class="btn btn-primary mb-4 shadow-2"> Gửi</button>
                    <p class="mb-0 text-muted">Bạn chưa có tài khoản? <a href="sign_up.php">Đăng ký</a></p>
                    <p class="mb-0 text-muted">Bạn đã có tài khoản? <a href="sign_in.php">Đăng nhập</a></p>
                </div>
            </div> 
            </form>
          
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
