<?php
require_once("../login/index.php") ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

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

if(isset($_POST['resetPass'])){
$password= $_POST['NewPass'];
$EnterPass= $_POST['EnterPass'];
$error=array();
if($password!=$EnterPass){
    $error['fail']='mật Khẩu không khớp';
}else{
        $error['success']='đổi mật khẩu thành công ';
    $ResetPass=ResetPass($password,$_SESSION['email']);
    header('refresh:2s;sign_in.php');
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
            <div class="card">
                <form action="" method="POST" class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Đổi mật khẩu</h3>
                    <div class="input-group mb-3">
                        <input type="password" name="NewPass" class="form-control" placeholder="new password">
                    </div>

                    <div class="input-group mb-4">
                        <input type="password" name="EnterPass" class="form-control" placeholder="enter password">
                    </div>


                    <button name="resetPass" class="btn btn-primary shadow-2 mb-4">Đổi Mật khẩu</button>
                    <div class="input-group mb-3">
                        <?php if (isset($error['fail'])) echo "<p class='text-danger'>" .$error['fail']." </p>"; ?>
                        <?php if (isset($error['success'])) echo "<p class='text-success'>" .$error['success']." </p>"; ?>
                    </div>
                    <p class="mb-0 text-muted">Bạn chưa có tài khoản? <a href="sign_up.php">Đăng ký</a></p>
                    <p class="mb-0 text-muted">Bạn đã có tài khoản? <a href="sign_in.php">Đăng nhập</a></p>
                     </form>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>