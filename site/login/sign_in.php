<?php
session_start();
require_once "./../../models/pdo.php";
?>
<?php
$conn = connect();
if (isset($_POST['login'])) {
    if ($_POST['name_user'] != "" && $_POST['pass_user'] != "") {
       
        $name_user = $_POST['name_user'];
        $pass = $_POST['pass_user'];
        if(isset($_POST['remember'])){
            setcookie('username',$name_user,time() + (86400 * 30));
            setcookie('password',$pass,time() + (86400 * 30));
        }else{
            setcookie('username');
            setcookie('password');
        }
        $sql = "SELECT * FROM user WHERE user_name = :name_user && mat_khau = :pass ";
        $result = $conn->prepare($sql);
        $abc = [
            'name_user' => $name_user,
            'pass' => $pass
        ];
        $result->execute($abc); 
      
        $number_of_rows = $result->rowCount();

        if ($number_of_rows == 1) {

             $row = $result->fetch();
if($row['status']==1){
$_SESSION['err_account']="tài khoản của bạn đã bị khóa";
}else{
       
            if ($row['role'] == 0) {
                $dataUser= [
                    "id" => $row['id_user'],
                    "user_name" => $row['ten_user'],              
                    "route" => $row['route'],              
                ];
                $_SESSION['user']=$dataUser;
                // var_dump($_SESSION['user']);die;
                header('Location:../processAjax.php');
                if (isset($_GET['id_course'])) {
                    header('Location:../../index.html?act=detail_course&idCourse=' . $_GET['id_course'] );
                }
                else {
                    header('Location:../../index.html');
                }
             } 
             else {
                $dataAdmin=[
                    "id" => $row['id_user'],
                    "route" => $row['route'],              
                    "user_name" => $row['ten_user'],                 
                ];
                $_SESSION['admin'] = $dataAdmin;
                header('Location:../processAjax.php');
                if (isset($_GET['id_course'])) {
                    header('Location:../../index.html?act=detail_course&idCourse=' . $_GET['id_course'] );
                }
                else {
                    header('Location:../../index.html');
                }
            }

 }
           
        }else{
            $_SESSION['err']='tài khoản hoặc mật khẩu không chính xác !';
        
    }


    }  else {
        $error = "**Có lỗi xảy ra khi đăng nhập**";
    }
   
}

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
                    <span>
                    <?php  
                    if(isset( $_SESSION['err'])){
                        echo "<h4 class='text-danger'>". $_SESSION['err']."</h4>";
                        unset( $_SESSION['err'] );
                    }else
                    if(isset( $_SESSION['err_account'])){
                        echo "<h4 class='text-danger'>". $_SESSION['err_account']."</h4>";
                        unset($_SESSION['err_account']);
                    }
                    ?>
                    </span>
                    <h3 class="mb-4">Đăng Nhập</h3>
                    <div class="input-group mb-3">
                        <input type="text" name="name_user" class="form-control " id="user_name" placeholder="Username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>">
                      
                    </div>
                      <p class="text-danger err_user"></p>
                        

                    <div class="input-group mb-4">
                        <input type="password" name="pass_user" class="form-control " id="password" placeholder="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
                     
                    </div>
   <p class="text-danger err_pass">  </p>

                      
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="remember" id="checkbox-fill-a1" >
                            <label for="checkbox-fill-a1" class="cr" > Nhớ</label>
                        </div>
                    </div>
                    <button name="login" class="btn btn-primary shadow-2 mb-4">Đăng Nhập</button>
                    <div class="input-group mb-3">
                        <?php if (isset($error)) echo "<p class='text-danger'> $error </p>"; ?>
                    </div>
                    <p class="mb-2 text-muted">Quên Mật khẩu? <a href="reset-password.php">Quên Mật Khẩu</a></p>
                    <p onblur="" class="mb-0 text-muted">Bạn chưa có tài khoản? <a href="sign_up.php">Đăng ký</a></p>
                     </form>
            </div>
        </div>
    </div>

    <!-- Required Js -->
   
    <script src="assets/js/vendor-all.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function()
        {
            $('#user_name').blur( function() {
                
               if( $(this).val()==''){
                   $('.err_user').html('tên đăng nhập không được để trống');
               }else{
                $('.err_user').html('');
               }
            })
            $('#password').blur( function() {
               if( $(this).val()==''){
                   $('.err_pass').html('không được để trống mật khẩu');
               }else{
                $('.err_pass').html('');
               }
            })
        })
    </script>
</body>

</html>