<link rel="stylesheet" href="../assets/css/style_user.css">

<?php
           
                if(isset($_POST['button'])){ 
                    $error ="";
                         $full_name = $_POST['full_name'];
                    $name = $_POST['name'];            
                    $email = $_POST['email'];
                    $newPassword = $_POST['newPassword'];
                    $confirmPassword = $_POST['confirmPassword'];
                    $file = $_FILES['image_avt']['tmp_name'];
                    $file_name = $_FILES['image_avt']['name'];
                    
                    
                    $number_of_rows = number_rows_user($name);
                    if($number_of_rows == 0 || $name = $data[0]['user_name'] ){
                        if($newPassword == $confirmPassword){
                            if($file_name == ""){
                                $data1=[
                                    'ten_user' => $full_name,
                                    'user_name' => $name,
                                    'email' => $email,
                                    'mat_khau' => $newPassword,
                                    'id_user' => $admin_id,
                                ];
                                update_khach_hang_no_img($data1);
                                header("location:index.php?action=edit_account&id=".$admin_id);
                            }
                            else{
                                $data2=[
                                    'ten_user' => $full_name,
                                    'user_name' => $name,
                                    'image' => $file_name,
                                    'email' => $email,
                                    'mat_khau' => $newPassword,
                                    'id_user' => $admin_id,
                                ];
                                move_uploaded_file($file,'./image/'.$file_name );
                                update_khach_hang($data2);
                                header("location:index.php?action=edit_account&id=".$admin_id);
                            }
                        }
                        else{
                            $error ="M???t kh???u ph???i tr??ng nhau";
                        }
                    }  else{
                        $error ="T??n ????ng nh???p ???? t???n t???i";
                    }
                  
                    
                    
                }
      
            ?>


<div id="main">

<div class="head">
		<div class="col-div-6">
<p class="nav"> t??i kho???n</p>

</div>	
	
	<div class="col-div-6">
		<!-- <form action="index.php?action=search" method="post" class="form" >
			<input type="text" class="search" required>
		<button name="search_btn" class="btn-form">    <i class="fa fa-search search-icon"></i>	 </button>	
		</form> -->

<?php require_once("nav_login.php") ?>

</div>
	<div class="clearfix"></div>
</div>

       <?php 
         $data = Get_user_one($admin_id); 
       
       foreach($data as $value){
        extract($value);$image;
    }  
      $images='image/iconn_user.png';
if($image==''){
$images='../image/iconn_user.png';
}else{
$images='../image/'.$image.'';
}
       ?>
            <form action="" method="POST" enctype="multipart/form-data" class="settings__view-container" id="exchangeAcount">
                        <!-- <h1 class="settings__title">T??i kho???n</h1> -->
                        <p class="settings__copy">Th??ng tin t??i kho???n</p>
                              <div class="">
                             <div class="avatar-upload__no-crop">
                             <div class="avatar-upload__dropzone" id='display_image' style='background-image:url(<?=$images?>)'>
                                 <!-- <img id="image_change" src="<?=$images?>"  style="border-radius:50%;"> -->
                                </div>
                             <label for="file-select" class="btn btn--default btn--s avatar-upload__select-cta-label">T???i ???nh l??n
                                 <input type="file" name="image_avt" class="avatar-upload__select-cta" id="file-select">
                        </label>
                    </div>
                        </div>
                        <div class="settings__row">
                                <?php if(isset($error)){echo "<h5 class='text-danger'>".$error."</h5>";} ?>
                            </div>
                        <div class="settings-account__form">
                            <div class="form-group settings__column">
                            <label class="form__label" for="name">T??n </label>
                            <input class="form__input" name="full_name" id="name" placeholder="H??? t??n" type="text" required="" value="<?php echo $data[0]['ten_user'] ?>"></div>
    
                            <label class="form__label" for="name">T??n ????ng nh???p</label>
                            <input class="form__input" name="name" id="name" placeholder="t??n ????ng nh???p" type="text" required="" value="<?php echo $data[0]['user_name'] ?>"></div>
                            <div class="form-group settings__column">
                                <label class="form__label" for="email">Email</label>
                                <input class="form__input" name="email" id="email" placeholder="Email" type="email" value="<?php echo $data[0]['email'] ?>">
                            </div>
                          
                    <div class="settings__wrap-container">
                                <div class="settings__row">
                                    <div class="form-group settings__column">
                                    <label class="form__label" for="newPassword">?????i m???t kh???u</label>
                                    <input class="form__input" name="newPassword" type="password" id="newPassword" pattern="^.{6,}$" title="M???t kh???u c???a b???n ph???i c?? ??t nh???t 6 k?? t???." value="<?php echo $data[0]['mat_khau'] ?>" aria-autocomplete="list">
                                </div>
                                    <div class="form-group settings__column">
                                        <label class="form__label" for="confirmPassword">X??c nh???n m???t kh???u</label>
                                        <input class="form__input" name="confirmPassword" type="password" id="confirmPassword" pattern="^.{6,}$" title="M???t kh???u c???a b???n ph???i c?? ??t nh???t 6 k?? t???." value="<?php echo $data[0]['mat_khau'] ?>"></div>
                                    </div>
                                </div>
                                <div class="form-group settings__column">
                                </div>
                                <button class="btn btn--s btn--primary settings__cta" name="button" type="submit" data-qa-save="true">L??u</button>
                          
                          
                            
                            
                            </form>
                        
                      