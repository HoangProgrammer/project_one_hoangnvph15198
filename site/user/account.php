<?php
    require_once('./dao/accountDB.php');
    require_once('./models/pdo.php');
    // $id_user = $_SESSION['user']['id'];
    $data = Get_user_one($id_user);

?>

<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
        
    <div class="page-wrap page-wrap--medium">
        <div class="panel-main settings__panel">
            <div class="settings__menu">
                <h1 class="settings__heading" data-cy="UserSettings__heading">Cài đặt</h1>
                <div class="tab-menu__tabs" data-cy="MyProfile__menuTabs">
                    <a class="nav__link  nav__link--active " id="account">Tài khoản</a>
                    <a class="nav__link " id="friend">Bạn Bè</a>
                    <!-- <a class="nav__link " data-qa-settings-languages="true">Ngôn ngữ</a>
                   <a class="nav__link " data-qa-settings-personal="true">Cài đặt cá nhân</a>
                    <a class="nav__link " data-qa-settings-subscription="true">Đăng ký</a>
                    <a class="nav__link " data-qa-settings-studyplan="true">Kế hoạch học tập</a></div>               -->
            </div>
            <div class="settings__view-container" id="friends">
             
               <table cellspacing="10" cellpadding="10">
                   <thead>
                    <?php  
               $Select_MyFriend=Select_MyFriend($id_user);
               if(empty($Select_MyFriend)){
                   echo "<h1 class='text-center'>Trống</h1>";
               }else{         
               foreach ($Select_MyFriend as $val){  ?>                 
                       <tr>
                           <th><?= $val['image']=($val['image']=="")?"<i class='fa fa-user'></i>": '<img  style="width:50px; border-radius:50% ;" src="image/'.$val['image'].'" alt="">'  ?></th>
                           <th><?= ucfirst($val['ten_user'])?></th>
                           <th><button class="btn btn-danger">xóa</button></th>
                       </tr>
               <?php }} 
             foreach($data as $value){
                 extract($value);$image;
             }  
               $images='image/iconn_user.png';
if($image==''){
    $images='./image/iconn_user.png';
}else{
    $images='./image/'.$image.'';
}
               ?>   
                   </thead>

               </table>
            </div>
            <?php
            $error ="";
                if(isset($_POST['button'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $newPassword = $_POST['newPassword'];
                    $confirmPassword = $_POST['confirmPassword'];
                    $file = $_FILES['image_avt']['tmp_name'];
                    $file_name = $_FILES['image_avt']['name'];
                    
                    
                    $number_of_rows = number_rows_user($name);
                    if($number_of_rows == 0 || $name = $data[0]['ten_user'] ){
                        if($newPassword == $confirmPassword){
                            if($file_name == ""){
                                $data2=[
                                    'ten_user' => $name,
                                    'email' => $email,
                                    'mat_khau' => $newPassword,
                                    'id_user' => $id_user,
                                ];
                                update_khach_hang_no_img($data2);
                                header("location:index.php?act=account");
                            }
                            else{
                                $data=[
                                    'ten_user' => $name,
                                    'image' => $file_name,
                                    'email' => $email,
                                    'mat_khau' => $newPassword,
                                    'id_user' => $id_user,
                                ];
                                move_uploaded_file($file,'./image/'.$file_name );
                                update_khach_hang($data);
                                header("location:index.php?act=account");
                            }
                        }
                        else{
                            $error ="Mật khẩu phải trùng nhau";
                        }
                    }
                    else{
                        $error ="Tên đăng nhập đã tồn tại";
                    }
                    
                    
                }

            ?>
            <form action="" method="POST" enctype="multipart/form-data" class="settings__view-container" id="exchangeAcount">
                        <!-- <h1 class="settings__title">Tài khoản</h1> -->
                        <p class="settings__copy">Thông tin tài khoản</p>
                              <div class="">
                             <div class="avatar-upload__no-crop">
                             <div class="avatar-upload__dropzone" id='display_image' style='background-image:url(<?=$images?>)'>
                                 <!-- <img id="image_change" src="<?=$images?>"  style="border-radius:50%;"> -->
                                </div>
                             <label for="file-select" class="btn btn--default btn--s avatar-upload__select-cta-label">Tải ảnh lên
                                 <input type="file" name="image_avt" class="avatar-upload__select-cta" id="file-select">
                        </label>
                    </div>
                    <!-- <div class="avatar-upload__crop">
                                <div class="avatar-upload__crop-container" style="display: none;">
                            <img id="avatar-image-tag" src="">
                           
                        </div>
                        </div> -->
                        </div>
                        <div class="settings__row">
                                <?php echo $error; ?>
                            </div>
                        <div class="settings-account__form">
                            <div class="form-group settings__column">
                            <label class="form__label" for="name">Tên đăng nhập</label>
                            <input class="form__input" name="name" id="name" placeholder="Họ tên" type="text" required="" value="<?php echo $data[0]['ten_user'] ?>"></div>
                            <div class="form-group settings__column">
                                <label class="form__label" for="email">Email</label>
                                <input class="form__input" name="email" id="email" placeholder="Email" type="email" value="<?php echo $data[0]['email'] ?>">
                            </div>
                          
                    <div class="settings__wrap-container">
                                <div class="settings__row">
                                    <div class="form-group settings__column">
                                    <label class="form__label" for="newPassword">Mật khẩu mới</label>
                                    <input class="form__input" name="newPassword" type="password" id="newPassword" pattern="^.{6,}$" title="Mật khẩu của bạn phải có ít nhất 6 ký tự." value="" aria-autocomplete="list">
                                </div>
                                    <div class="form-group settings__column">
                                        <label class="form__label" for="confirmPassword">Xác nhận mật khẩu</label>
                                        <input class="form__input" name="confirmPassword" type="password" id="confirmPassword" pattern="^.{6,}$" title="Mật khẩu của bạn phải có ít nhất 6 ký tự." value=""></div>
                                    </div>
                                </div><div class="form-group settings__column">
                                </div>
                                <button class="btn btn--s btn--primary settings__cta" name="button" type="submit" data-qa-save="true">Lưu</button>
                            </div>
                            
                            
                            </form>

                            </div>
                        </div>
                        
    </div>
        </div>
        </div>
        </div>

   <script>

       $('#file-select').on('change', function() {
var upload=''
        const file=new FileReader();
        file.addEventListener('load', function() {
            upload=file.result;

            $('#display_image').css('backgroundImage',`url(${upload}`);
$('#image_change').hide();
        })
        file.readAsDataURL(this.files[0]);
       })


           $('#friends').hide();
              $('#account').click(function() {
                  $('#friends').hide();
                  $('#exchangeAcount').show();
              })  
              $('#friend').click(function() {
                  $('#friends').show();
                  $('#exchangeAcount').hide();
              })  


              
$('a.nav__link').click(function() {
    $('a.nav__link--active').removeClass('nav__link--active');
    $(this).addClass('nav__link--active')

})

   </script>