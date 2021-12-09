                <link rel="stylesheet" href="./assets/css/global.css">
                <?php
                $id_users=$id_user;
                $MyFriend = Select_MyFriend($id_user);
                $arr_friend = array($id_user);    
                foreach ($MyFriend as $val) {
                                   
                    array_push($arr_friend, $val['id_user']);
                }
                $import = implode(',', $arr_friend);
           
                ?>


                <?php
                $Get_user_one = Get_user_one($_GET['id']);

                foreach ($Get_user_one as $value) {
                    extract($value);
                    $id_friend = $value['id_user'];
                    $ten_user;
                    $image;
                }
                ?>
                <div class="pcoded-main-container">


                    <div class="pcoded-content">
                        <header class="profile-header">
                            <div class="page-wrap page-wrap--medium">
                                <div class="profile-info" data-cy="MyProfile__info">
                                    <div class="profile-info__avatar" data-cy="MyProfile__infoAvatar">
                                        <?php if ($image == '') { ?>
                                            <img class="profile-info__picture" src="./image/user_defaul.png" alt="">
                                        <?php   } else { ?>
                                            <img class="profile-info__picture" src="./image/<?= $image ?>" alt="Dimitrios" width="100" height="100">
                                        <?php } ?>

                                    </div>
                                    <div class="profile-info__data">
                                        <h1 class="profile-info__name" data-cy="MyProfile__name"><?= ucfirst($ten_user) ?></h1>
                                        <ul class="profile-info__data-list">
                                            <li class="icon-text" data-cy="MyProfile__dataLocation"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile__actions">
                                    <?php  $date=date_create($start_time) ?>

                                    <div class="profile__languages">
                                    <h5>đã tham gia :<?=date_format($date,'Y/m/d H:i:s') ?></h5>
                                        <div class="icon-text">
                                            <?php

                                            $Get_progress_course = Get_progress_course($_GET['id']);
                                            foreach ($Get_progress_course as $val) {
                                                $NameCourse = $val['name'];
                                            }
                                            ?>
                                            <?php if (empty($Get_progress_course)) { ?>
                                                <span class="icon-text__text">Tôi chưa học khóa học nào</span>

                                            <?php } else { ?>

                                                <div class="icon-text__text">Tôi học


                                                    <div class="flex-course">

                                                    </div>

                                                </div>
                                            <?php } ?>

                                            <div class="profile__language">
                                      
                                                <?php
                                                $Get_progress = Get_progress(); // xuat tu odercause                       
                                                foreach ($Get_progress as $value) :
                                                    if ($value['id_user'] == $_GET['id']) : // so sanh id o trong gio vs id ss
                                                        $Get_course_one = Get_course_one($value['id_causer']);
                                                        // $Get_order_course= Get_oderCourse();
                                                        foreach ($Get_course_one as $val) : extract($val); ?>

                                                            <a class="col-md-6 col-xl-4" title="<?= $NameCaurse ?>">

                                                                <div class="card-english">
                                                                    <img class="course-img" src="image/<?= $img ?>" alt="">

                                                                </div>

                                                            </a>
                                                          


                                                <?php endforeach;
                                                    endif;
                                                endforeach;  ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile__friend-cta">
                                        <div class="friend-request-cta">
                                            <?php
                                            $sta = '';
                                            $id_chung = '';
                                            foreach ($arr_friend as  $v) {
                                               
                                               if (intval($v) == intval($_GET['id'])) {                                         
                                                   $id_chung = $v;
                                                  
                                                }
                                            }
                                            ?>

                                          
                                            <?php


                                            if ($id_chung == $_GET['id']) {?>
    <button id="remove_friend"  class='btn btn--s btn--default btn--icon' data-remove='<?=$_GET['id']?>'>                                        
                                                 <span class='icon icon--light'>
                                                 <i class='fas fa-user-minus'></i>
                                                     </span> xóa bạn 
                                                 </button>

                                         <?php   } else { ?>

<?php
    foreach ($Get_user_one as $val) {

$request = Friends_request2($val['id_user'],  $id_users);
                            if (empty($request)) { ?>

                                <button type='submit' id="send_request<?= $id_friend ?>" data-id="<?= $id_friend ?>" class='btn_request btn btn-primary'><i class="fas fa-user-plus"></i>Kết bạn</button>
                                <?php } else{?>
                                    
                              <?php  foreach ($request as $value) {
                                    extract($value);
                                }
                                if (empty($value)) { ?>
                                   <!-- trống thì thôi -->
                                  
                                    <?php } else {
                                    $sender = sender( $val['id_user'],   $id_users);

                                    if (empty($sender)) {
                                        // trống thì thôi
                                    } else {
                                        foreach ($sender as $va) { // get người gửi 
                                            extract($va);                                      
                                        if ($va['sender'] == $id_friend) { 
                                            echo "<button type='submit' data-check=" . $id_friend . " id='success-btn" . $id_friend . "' class='make_fiend btn btn-success'>Chấp Nhận</button >";
                                        } else {
                                            $status; ?>
                                            <?= $status = ($status == 0) ? " <button id='cancel" . $id_friend . "'  type='button' data-cancel='" . $id_friend . "'  class='cancel_request btn btn-secondary'><i class='fas fa-window-close'></i> Hủy yêu cầu</button >" :
                                                " <button type='submit' data-id_user='" . $id_friend . "' class=' btn btn-primary'>Kết bạn</button >" ?>
                                <?php } } } ?>
                            
                            <?php } } ?>
                                                    
                                                        
                                         <?php       }  
                                        
                                        }?>
                                           

                                                
                                           


                                        </div>
                                    </div>

                                </div>



                                <div class="tab-menu__tabs" data-cy="MyProfile__menuTabs">
                                    <a class="nav__link nav__link--active " data-qa-profile-progress-tab="true">Tiến trình</a>
                                </div>
                        </header>

                        <div class="progress_friend">

                            <h1 class='text-secondary'>No data</h1>
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
                                    beforeSend: function() {
                                       $('#send_request' + to_id).html('<i class="fas fa-spinner"></i>') 
                                       
                                    },                     
                                    success: function() {
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

                        $('#remove_friend').on('click', function(e) {
                            e.preventDefault();
                            var toID = $(this).data('remove')                     
                            var action = "remove_friend";
                            if (toID > 0) {
                                $.ajax({
                                    url: "site/processAjax.php",
                                    method: "POST",
                                    data: {
                                        toID: toID,
                                        action: action
                                    },
                                    beforeSend: function(){
                                       return    $('#remove_friend').html('......');;
                                    },
                                    success: function(data) {

                                         $('#remove_friend').html('xóa thành công');
                                        $('#remove_friend').attr('disabled', 'disabled')
                                       
                                    }
                                })
                            }
                        })
                    })
                </script>