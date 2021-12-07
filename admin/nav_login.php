

<div class="profile">
<?php if (isset($image)) { ?>
<img src="../image/<?php if (isset($image)) echo $image; ?>" class="pro-img" />
<?php } else { ?>
<i class="fas fa-user user_icon "></i>
<?php   } ?>
    <p><?php if(isset( $name_admin )) echo  $name_admin ?><i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>

    <?php if(isset($name_admin)) {?>
<div class="profile-div">
<p><i class="fa fa-user"></i><a href="index.php?action=edit_pass.php&id=<?php if (isset($admin_id)) echo $admin_id;?>">   &nbsp;&nbsp; đổi mật khẩu  </a> </p>
<p><i class="fa fa-cogs"></i>  <a  href="index.php?action=edit_account.php&id=<?php if (isset($admin_id)) echo $admin_id;?> "> &nbsp;&nbsp; cài đặt </a>  </p>                
<p><i class="fa fa-power-off"></i> <a  href="index.php?action=log_out">&nbsp;&nbsp;đăng xuất</a> </p>
</div>
<?php  } ?>
</div>