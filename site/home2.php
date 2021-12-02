<?php require_once "./layout/layout_1/slider.php";


?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper ">
        <div class="pcoded-content  student_learn">
            <span class="pcoded-content-item-span">116.840+ người khác cũng học</span>
        </div>
    </div>
</div>

<?php

if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
} else { ?>
    <?php
    $arr = array();
    $ar = array();
    $Get_oderCourse = Get_oderCourse();
    foreach ($Get_oderCourse as $value) {
        if ($value['id_user'] == $id_user) {
            array_push($ar, $value['id_caurse']);
        }
    }
    $gop = implode("','", $ar);
    $get_course_in = Get_course_one_in($gop);
    if (empty($get_course_in)) {
    } else { ?>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">
                                <h3 class="pcoded-content-name">Khóa Vừa Mua</h3>
                                <div class="row">
                                    <?php
                                    $id_user;
                                    $Get_progress = Get_oderCourse();// xuat tu odercause
                                    $arr = array();
                                    foreach ($Get_progress as $value) :
                                        if ($value['id_user'] == $id_user) :// so sanh id o trong gio vs id ss
                                            $Get_course_one = Get_course_one($value['id_caurse']);
                                            // $Get_order_course= Get_oderCourse();
                                            foreach ($Get_course_one as $val) : extract($val); ?>                                         
                                                <a href="index.php?act=Topic&idCourse=<?= $id_caurse?>&new" class="col-md-6 col-xl-4">
                                                    <div class="card daily-sales course-english">
                                                        <img class="course-english-img" src="image/<?= $img ?>" alt="">
                                                    </div>
                                                    <span class="course-english-tile">
                                                        <?= $NameCaurse  ?> 
                                                    </span> 

                                                    <?php
                                                    array_push($arr, $value['id_caurse']); ?> 
                                                </a>
                                    <?php endforeach;
                                        endif;
                                    endforeach;  ?>


                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


   

<?php  }
} ?>


<?php 
$arr_progress = array();
    $ar = array();
    $Get_progress = Get_progress();
    foreach ($Get_progress as $value) {
        if ($value['id_user'] == $id_user) {
            array_push($ar, $value['id_causer']);
        }
    }
    $gop = implode("','", $ar);
    $get_course_in = Get_course_one_in($gop);
    if (empty($get_course_in)) {
    } else { ?>
<div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">
                                <h3 class="pcoded-content-name">Khóa Đang học</h3>
                                <div class="row">
                              

                                    <?php
                                    $id_user;
                                    $Get_progress = Get_progress();// xuat tu odercause
                                    // $arr = array();
                                    foreach ($Get_progress as $value) :
                                        if ($value['id_user'] == $id_user) :// so sanh id o trong gio vs id ss
                                            $Get_course_one = Get_course_one($value['id_causer']);
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
                                                    array_push($arr_progress, $value['id_causer']); ?> 
                                                </a>
                                    <?php endforeach;
                                        endif;
                                    endforeach;  ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <?php }
    ?>

     <?php $merge= array_merge($arr,$arr_progress) ;
   
     ?>
<div class="pcoded-main-container">
 

        <div class="pcoded-content">
            <h3 class="pcoded-content-name">Khóa Chưa Học</h3>
        
                        <div class="row">

                            <?php
                            $course = Get_caurse();

                            $bien = implode("','", $merge);// chuyen mang thanh chuoi 
// var_dump( $bien);
// var_dump( $bien);
                            $conn = connect();
                            $stml = $conn->prepare(" SELECT * FROM course 
                            WHERE id_caurse NOT IN( '$bien')");
                            $stml->execute();
                            $row = $stml->fetchAll();                    

                            foreach ($row as $value) : extract($value); ?>
                                <a href="index.php?act=detail_course&id_course=<?= $id_caurse ?>" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="image/<?= $img ?>" alt="">
                                    </div>
                                    <span class="course-english-tile">
                                        <?= $NameCaurse  ?>
                                    </span>
                                    <span class="course-english-tile">
                                        <?= $price=($price==0)?"<p class='text-primary'>miễn phí</p>":'<p class="text-danger">mất phí</p> '  ?>
                                    </span>
                                </a>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
     
