<link rel="stylesheet" href="./assets/css/social.css">
<?php

$MyFriend = Select_MyFriend($id_user);
$arr_friend = array($id_user);
foreach ($MyFriend as $val) {
    array_push($arr_friend, $val['id_user']);
}

?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <h1>Cộng đồng/Xã hội</h1>
            <div class="container_social">
                <h4>Gợi ý kết bạn</h4>

                <?php
                $import = implode(',', $arr_friend);
                // var_dump($import);

                $user = Get_user_other($import);
                $dem = 0;

                foreach ($user as $val) :
                ?>
                    <div class="wrap_social">
                        <div class="user_info">
                            <a href="index.php?act=profile&id=<?=$val['id_user']?>">
                                <?php if ($val['image'] == '') { ?>
                                    <img src="./image/user_defaul.png" alt="">
                                <?php   } else { ?>
                                    <img src="./image/<?= $val['image'] ?>" alt="">
                                <?php } ?>
                            </a>
                            <h5 style="margin:10px"><?= ucfirst($val['ten_user']) ?></h5>
                        </div>
                        <form action="" method="post">
                            <?php $Friends_request = Friends_request2($id_user, $val['id_user']);
                          
                            if (empty($Friends_request)) { ?>
                                <button type='submit' id="send_request<?= $val['id_user'] ?>" data-id="<?= $val['id_user'] ?>" class='btn_request btn btn-primary'><i class="fas fa-user-plus"></i>Kết bạn</button>
                                <?php } else  {
                                foreach ($Friends_request as $value) {  // xuất bảng request _friend
                                    extract($value);
                                }

                                if (empty($value)) { ?>
                                    <!-- nếu dữ liệu Trống thì -->
                                    <?php } else {

                                    $sender = sender($val['id_user'], $id_user);
                                    if (empty($sender)) {
                                        // trống
                                    } else {
                                        foreach ($sender as $va) { // get người gửi 
                                            extract($va);                                   
                                        if ($va['sender'] == $val['id_user']) { // nếu người gửi bằng với người kết bạn  thì sẽ có nút chấp nhận
                                            echo "<button type='submit' data-check=" . $val['id_user'] . " id='success-btn" . $val['id_user'] . "' class='make_fiend btn btn-success'>Chấp Nhận</button >";
                                        } else {
                                            $status; ?>
                                            <?= $status = ($status == 0) ? "<button id='cancel" . $val['id_user'] . "'  type='button' data-cancel='" . $val['id_user'] . "'  class='cancel_request btn btn-secondary'><i class='fas fa-window-close'></i> Hủy yêu cầu</button >" :
                                                " <button type='submit' data-id_user='" . $val['id_user'] . "' class=' btn btn-primary'>Kết bạn</button >" ?>
                                <?php } } } ?>
                            
                            <?php  }  }  ?>
                      
                       
                      
                        </form>

                    </div>
                <?php
     
            endforeach; ?>


            </div>


        </div>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function() {

        $('.btn_request').on('click', function(e) {
            e.preventDefault();
            var action = "friend_request";
            var to_id = $(this).data("id");
            // alert(to_id)
            if (to_id > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        id_friend: to_id,
                        action: action
                    },     
                    beforeSend: function(jqXHR, settings) {   
                        $('#send_request' + to_id).html('<i class="fas fa-spinner"></i> ')
                    },         
                    success: function(data, textStatus,jqXHR) {
                        $('#send_request' + to_id).attr('disabled', 'disabled')     
                        $('#send_request' + to_id).html('đã gửi yêu cầu')
                    },  
       
                })

            }
        })


        $('.cancel_request').on('click', function(e) {
            e.preventDefault();
            var toID = $(this).data('cancel')
            var action = "cancel_request";
            //   alert(toID);
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        toID: toID,
                        action: action
                    },
                    success: function(data) {
                        $('#cancel' + toID).attr('disabled', 'disabled')
                        $('#cancel' + toID).html('đã gỡ lời kết bạn');
                    }
                })
            }
        })

        $('.make_fiend').on('click', function(e) {
            e.preventDefault();
            var toID = $(this).data('check')
            var action = "accept_check";
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        toID: toID,
                        action: action
                    },
                    success: function(data) {
                        $('#success-btn' + toID).attr('disabled', 'disabled')
                        $('#success-btn' + toID).html('chấp nhận lời mời');
                    }
                })
            }
        })
    })
</script>