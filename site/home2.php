<?php require_once "./layout/layout_1/slider.php";

?>
<style>
    .pro {
        height: 5px;
        top: 0px;
        /* position: relative; */
        /* z-index: 1000; */
    }
</style>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper ">
        <div class="pcoded-content  student_learn">
            <?php
            $Get_account = Get_account();
            $count = 0;
            foreach ($Get_account as $key => $value) {
                $count += 1;
            }
            ?>
            <span class="pcoded-content-item-span"><?= $count ?>+ người khác cũng học</span>
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
                                    $Get_progress = Get_oderCourse(); // xuat tu odercause
                                    $arr = array();
                                    foreach ($Get_progress as $value) :
                                        if ($value['id_user'] == $id_user) : // so sanh id o trong gio vs id ss
                                            $Get_course_one = Get_course_one($value['id_caurse']);
                                            // $Get_order_course= Get_oderCourse();
                                            foreach ($Get_course_one as $val) : extract($val); ?>
                                                <a href="Tab/Topic/<?= $value['id_caurse'] ?>?new" class="col-md-6 col-xl-4">
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
                                $Get_progress = Get_progress(); // xuat tu odercause
                                // $arr = array();
                                foreach ($Get_progress as $value) :
                                    if ($value['id_user'] == $id_user) : // so sanh id o trong gio vs id ss
                                        $Get_course_one = Get_course_one($value['id_causer']);
                                        // $Get_order_course= Get_oderCourse();
                                        foreach ($Get_course_one as $val) : extract($val); ?>
                                       
                                            <a title="" href="Tab/Topic/<?= $val['id_caurse'] ?>" class="col-md-6 col-xl-4 " id="hover" data-hover="<?= $val['id_caurse'] ?>">
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

<?php } ?>


<?php $merge = array_merge($arr, $arr_progress);?>
<div class="pcoded-main-container">


    <div class="pcoded-content">
        <h3 class="pcoded-content-name">Khóa Chưa Học</h3>

        <div class="row">

            <?php
            $course = Get_caurse();

            $bien = implode("','", $merge); // chuyen mang thanh chuoi 
            $stmt= Get_other_course($bien);

            foreach ($stmt as $value) : extract($value); ?>
                <a href="Tab/detail_course/<?= $id_caurse ?>" class="col-md-6 col-xl-4">
                    <div class="card daily-sales course-english">
                        <img class="course-english-img" src="image/<?= $img ?>" alt="">
                    </div>
                    <span class="course-english-tile">
                        <?= $NameCaurse  ?>
                    </span>
                    <span class="course-english-tile">
                        <?= $price = ($price == 0) ? "<p class='text-primary'>miễn phí</p>" : '<p class="text-danger">mất phí</p> '  ?>
                    </span>
                </a>

            <?php endforeach; ?>

        </div>
    </div>
</div>

<!-- bài viết -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <h3 class="pcoded-content-name">Bài viết nổi bật</h3>
        <div class="row">

<?php
// echo "<pre>";
// var_dump($data_post);die;
foreach ($data_post as $value){ ?>
    <a href="forum/comment/<?php echo $value['id_post'] ?>" class="col-md-6 col-xl-4">
        <div class="card daily-sales course-english">
            <img class="course-english-img" src="image/<?php echo $value['img'] ?>" alt="">
        </div>
        <span class="course-english-tile">
        <?php echo $value['title_post'] ?>
        </span>

<?php } ?>

</div>
    </div>
</div>

<?php if(isset($_SESSION['cart'])){ 
    unset($_SESSION['cart']);
} ?>

<?php  if(isset($_SESSION['name_user'])){ 
?>

<script>

     
const Toast = Swal.mixin({
  toast: true,
  position: 'top',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Chào <h5 class="text-danger"><?=ucfirst($_SESSION['name_user'])?></h5>  Mừng Bạn đến với Busuu '
})
</script>

 <?php
 unset($_SESSION['name_user']);
} ?>


