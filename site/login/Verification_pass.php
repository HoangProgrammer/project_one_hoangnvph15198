<?php require_once("../login/index.php") ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Verification password</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
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
if(isset($_POST['btn_Verification'])){
$code_pin= $_POST['code_pin'];
$error='';
if($code_pin!=$_SESSION['code']){
    $error='mã xác nhận không chính xác';
}else{
    $_SESSION['email'];
    header('location:change_pass.php');
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
                    <h3 class="mb-4">Nhập mã pin</h3>
                    <p class='alert alert-info'>
            chúng tôi đã gửi mã pin tới email của bạn vui lòng xác minh tại đây !
                    </p>
                    <div class="input-group mb-3">
                        <input name="code_pin" type="text" class="form-control" placeholder="pin code">
                    </div>
                    <p style="color:red">
                        <?php if(isset( $error )){echo $error;} ?>
                    </p>
                    <button name='btn_Verification' class="btn btn-primary mb-4 shadow-2">Xác Nhận</button>
                    <p class="mb-0 text-muted">Bạn chưa có tài khoản? <a href="sign_up.php">đăng ký</a></p>
                    <p class="mb-0 text-muted">Bạn đã có tài khoản? <a href="sign_in.php">đăng nhập</a></p>
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
