                <link rel="stylesheet" href="./assets/css/global.css">
                <?php

                $Get_user_one = Get_user_one($_GET['id']);

                foreach ($Get_user_one as $value) {
                    extract($value);
                    $id_fiend = $value['id_user'];
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
                                        <h1 class="profile-info__name" data-cy="MyProfile__name"><?= ucfirst($ten_user ) ?></h1>
                                        <ul class="profile-info__data-list">
                                            <li class="icon-text" data-cy="MyProfile__dataLocation"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile__actions">

                                    <div class="profile__languages">
                                        <span class="icon-text">
                                            <?php

                                            $Get_progress_course = Get_progress_course($_GET['id']);
                                            foreach ($Get_progress_course as $val) {
                                                $NameCourse = $val['name'];
                                            }
                                            ?>
<?php if(empty($Get_progress_course )){?>
                                            <span class="icon-text__text">Tôi chưa học khóa học nào</span>

<?php }else {?>  
    <span class="icon-text__text">Tôi học 
  
    <?php 
       $Get_progress_course = Get_progress_course($_GET['id']);
       foreach ($Get_progress_course as $val) { ?>
        <span>
          <?= $NameCourse ?>  
        </span>    
     <?php  }
        ?>
   </span>
    <?php } ?>
    <?php 
    
        $Get_progress = Get_progress();// xuat tu odercause                       
        foreach ($Get_progress as $value) :
            if ($value['id_user'] == $_GET['id']) :// so sanh id o trong gio vs id ss
                $Get_course_one = Get_course_one($_GET['id']);
                // $Get_order_course= Get_oderCourse();
                foreach ($Get_course_one as $val) : extract($val); ?>                                         
                    <a href="index.php?act=Topic&idCourse=<?= $id_caurse ?>" class="col-md-6 col-xl-4">
                        <div class="card daily-sales course-english">
                            <img class="course-english-img" src="image/<?= $img ?>" alt="">
                        </div>
                        <span class="course-english-tile">
                            <?= $NameCaurse  ?> 
                        </span>
                        <?php
                        array_push($arr, $value['id_causer']); ?> 
                    </a>
        <?php endforeach;
            endif;
        endforeach;  ?>
                                            <div class="profile__language">
                                            </div>
                                        </span>
                                    </div>
                                    <div class="profile__friend-cta">
                                        <div class="friend-request-cta">
                                            <button class="btn btn--s btn--default btn--icon" data-qa-remove-friend="true">
                                                <span class="icon icon--light">
                                                    <i class="fas fa-user-plus"></i>
                                                </span> Thêm bạn bè
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-menu__tabs" data-cy="MyProfile__menuTabs">
                                    <a class="nav__link nav__link--active " data-qa-profile-progress-tab="true">Tiến trình</a>
                                </div>
                        </header>

                        <div class="progress_friend">

                            <h1>Chưa Cập Nhật</h1>
                        </div>

                    </div>
                </div>