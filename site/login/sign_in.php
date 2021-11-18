<?php
    include_once "./../../models/pdo.php";
?>
<?php
$conn=connect();
    if(isset($_POST['login'])){
        if($_POST['name_user'] != "" && $_POST['pass_user'] != ""){
            $name_user = $_POST['name_user'];
            $pass = $_POST['pass_user'];
            $sql = "SELECT * FROM user WHERE ten_user = :name_user && mat_khau = :pass ";
            $result = $conn -> prepare($sql);
            $abc =[
                'name_user' => $name_user,
                'pass' => $pass
            ];
            $result -> execute($abc);
            $number_of_rows = $result->rowCount(); 
            if($number_of_rows == 1){
                $row = $result -> fetch();
                if($row['role'] == 0){
                    $_SESSION['name_kh'] = $name_kh;
                    header('Location: ./../../index.php ');
                }
                else{
                    $_SESSION['admin'] = $name_kh;
                    header('location: ./../../index.php');
                }
            }

        }
        else{
            $error = "Không được để trống";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
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
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login</h3>
                    <div class="input-group mb-3">
                        <input type="text" name="name_user" class="form-control" placeholder="Username">
                    </div>
                    
                    <div class="input-group mb-4">
                        <input type="password" name="pass_user" class="form-control" placeholder="password">
                    </div>
                    
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                        </div>
                    </div>
                    <button name="login" class="btn btn-primary shadow-2 mb-4">Login</button>
                    <div class="input-group mb-3">
                    <?php if(isset($error)) echo $error; ?>
                    </div>
                    <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="sign_up.php">Signup</a></p>
                    <
                </form>
            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
