
<?php  
session_start();
require_once('../backend/model/Khach_hang.php');

    if(isset($_POST['login'])){  
        // var_dump($_POST);die();
        $email =$_POST['email'];
        $password=$_POST['password'];

        if(isset($_POST['remember']) ){  
            setcookie('mail', $email,time()+60*60*7); 
            setcookie('pass', $password,time()+60*60*7); 
          }else{
            setcookie('mail', ""); 
            setcookie('pass', ""); 
          }

          $data=[
            "email"=>$email,
            "password"=>$password 
        ];

               $login=login_user($data);  
if(isset($login)){
    foreach($login as $val){
  $role=$val['role'];
  $status=$val['status'];
    } 
}else{

}

               if($login > 0){
                if($status==1){
                    $_SESSION['error_account']='tài khoản của bạn bị vô hiệu hóa';
                    // header('Location:login.php');
                }else{
                    if($role == 1){
                        $_SESSION['Admin'] = $login;                            
                header('Location:nav.php');
               header('Location:index.php?action=dashboard');  
              
                    }else{
                        $_SESSION['error_login'] = "tài khoản bạn không có quyền ADMIN";   
                    }
                }
                // header('Location:index.php');
               }else{
                $_SESSION['error']='email hoặc tài khoản không chính xác';
               }

     
    }
    $cookieMail = "";
    $cookiePass="";
    $check=false;
    if(isset($_COOKIE['mail']) && isset($_COOKIE['pass']) ){
        $cookieMail = $_COOKIE['mail'];
        $cookiePass= $_COOKIE['pass'];
        $check=true;
    }  else{
            $cookieMail = "";
    $cookiePass="";
    }    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/styles_one.css">
<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>


   
<form class="form_login" action="login.php" method="post">
     <h1> Đăng Nhập</h1>
 
     <?php 
if(isset(  $_SESSION['error'])){
    echo "<h5 class='text-danger'> ".  $_SESSION['error']." </h5> " ;
    unset( $_SESSION['error'] );
}else if(isset( $_SESSION['error_account'])){
    echo "<h5 class='text-danger'>". $_SESSION['error_account']."</h5>";
    unset( $_SESSION['error_account']);
}else if(isset( $_SESSION['error_login'])){
    echo "<h5 class='text-danger'>". $_SESSION['error_login']."</h5>";
    unset($_SESSION['error_login']);
}

?>

 <div>
    <label for="">email</label> <br>
<input class="email_control" type="email" name="email" id="email" value="<?=  $cookieMail ?>"> 
 </div>
<div>
   <label for="">mật khẩu</label>
<input  class="password_control" type="password" name="password" id="password" value="<?=  $cookiePass ?>" > 
</div>
<div>
   <label for="">remember me</label>
<input <?php echo ($check) ?"checked":"" ?> type="checkbox" name="remember" > 
</div>


<input class="btn-control" name="login" type="submit" value="đăng nhập">
<!-- <a href="/learnPHP/web16307/ADMIN/dangki.php">đăng ký</a> -->

</form>
</body>
</html>

