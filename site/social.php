<link rel="stylesheet" href="./assets/css/social.css">
<?php
$arr = array();
$Select_MyFriend = Select_MyFriend($id_user);
foreach ($Select_MyFriend as $val) {
    array_push($arr, $val['id_user']);
}

?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <h1>Cộng đồng/Xã hội</h1>
            <div class="container_social">
                <h4>Gợi ý kết bạn</h4>

                <?php
                // var_dump($import);
                $import = implode(',', $arr);
                $user = Get_user_other($import,$id_user);
                $dem = 0;
                foreach ($user as $val) :
                ?>
                    <div class="wrap_social">
                        <div class="user_info">
                            <?php if ($val['image'] == '') { ?>
                                <i class="fa fa-user"></i>
                            <?php   } else { ?>
                                <img src="./image/<?= $val['image'] ?>" alt="">
                            <?php } ?>

                            <h5 style="margin:10px"><?= ucfirst($val['ten_user']) ?></h5>
                        </div>
                        <form action="" method="post">
                            <?php $Friends_request = Friends_request2($id_user, $val['id_user']);
                            if (empty($Friends_request)) { ?>
                                <button type='submit' id="send_request<?=$val['id_user']?>"  data-id="<?= $val['id_user'] ?>"  class='btn_request btn btn-primary'><i class="fas fa-user-plus"></i>Kết bạn</button>
                                <?php } else {
                                foreach ($Friends_request as $value) {
                                    extract($value);
                                }                           
                                if (empty($value)) { ?>
                                    <button type='submit' class=' btn btn-primary'>Kết bạn</button>
                                    <?php } else {
                                    $sender = sender($val['id_user'], $id_user);
                                    if (empty($sender)) {
                                    } else {
                                        foreach ($sender as $va) {
                                            extract($va);
                                        }
                                        if ($va['sender'] == $val['id_user']) {
                                            echo "<button type='submit' data-check=". $val['id_user']." id='success-btn". $val['id_user']."' class='make_fiend btn btn-success'>Chấp Nhận</button >";
                                        } else {
                                            $status; ?>
                                            <?= $status = ($status == 0) ? " <button id='cancel". $val['id_user']."'  type='button' data-cancel='". $val['id_user']."'  class='cancel_request btn btn-secondary'><i class='fas fa-window-close'></i> Hủy yêu cầu</button >" :
                                                " <button type='submit' data-id_user='" . $val['id_user'] . "' class=' btn btn-primary'>Kết bạn</button >" ?>
                                <?php }
                                    }
                                } ?>
                            <?php } ?>
                        </form>

                    </div>
                <?php endforeach; ?>


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
                    beforeSend: function(data) {
                        $('#send_request' + to_id).html('đang gửi...')
                    },
                    success: function(data) {
                        $('#send_request' + to_id).attr('disabled', 'disabled')
                        $('#send_request' + to_id).html('đã gửi yêu cầu')
                    }
                })

            }
        })


        $('.cancel_request').on('click', function(e) {
    e.preventDefault();
  var toID=$(this).data('cancel')
  var action="cancel_request"; 
//   alert(toID);
  if(toID > 0){
       $.ajax({
       url:"site/processAjax.php",
       method:"POST",
       data:{toID:toID,action:action},
       success: function(data) {
        $('#cancel'+toID).attr('disabled','disabled')
           $('#cancel'+toID).html('đã gỡ lời kết bạn');
       }
   })
  }
})

        $('.make_fiend').on('click', function(e) {
    e.preventDefault();
  var toID=$(this).data('check')
  var action="accept_check"; 
  if(toID > 0){
       $.ajax({
       url:"site/processAjax.php",
       method:"POST",
       data:{toID:toID,action:action},
       success: function(data) {
        $('#success-btn'+toID).attr('disabled','disabled')
           $('#success-btn'+toID).html('chấp nhận lời mời');
       }
   })
  }
})
    })
</script>