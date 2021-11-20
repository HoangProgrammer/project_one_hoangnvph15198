<?php  require_once "./layout/layout_1/slider.php" ;


?>
<div class="pcoded-main-container">
        <div class="pcoded-wrapper ">
            <div class="pcoded-content  student_learn">
                <span class="pcoded-content-item-span">116.840+ người khác cũng học</span>
            </div>
        </div>
    </div>
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <h3 class="pcoded-content-name">Khóa chưa học</h3>
                <div class="pcoded-inner-content">
               
                    <div class="main-body">
                        <div class="page-wrapper">
                          
                            <div class="row">
                             <?php
                             $course= Get_caurse();
                             foreach ($course as $value):extract($value); ?>
                                <a href="index.php?act=detail_course" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="image/<?=$img?>" alt="">
                                        
                                    </div>
                                    <span class="course-english-tile" >
                                        <?=$NameCaurse  ?>
                                    </span>
                                </a>
                                <?php endforeach; ?>
                                                               
                            </div>
                        </div>
                                
                    </div>                  
                </div>
            </div>

            <!-- <div class="pcoded-content">
                <h3 class="pcoded-content-name">Có thể bạn thích</h3>
                <div class="pcoded-inner-content">
                
                    <div class="main-body">
                        <div class="page-wrapper">
                         
                            <div class="row">
                        
                                <a href="site/hoc/more_cours.php" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                <a href="" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                <a href="" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                
                                        
                            </div>
                        </div>
                                
                         

                    </div>
                    
                </div>
            </div> -->
<!-- 
            <div class="pcoded-content">
                <h3 class="pcoded-content-name">Khóa học nổi bật</h3>
                <div class="pcoded-inner-content">
            

                    <div class="main-body">
                        <div class="page-wrapper">
                    
                            <div class="row">
                        
                                <a href="" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                <a href="" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                <a href="" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                <a href="" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="assets/images/slider/giaotiep.png" alt="">
                                    </div>
                                    <span class="course-english-tile" >
                                        HTML, CSS từ Zero đến Hero
                                   </span>
                                </a>
                                
                                        
                            </div>
                        </div>
                                
                         

                    </div>
              
                </div>
            </div> -->
            </div>
                
            </div>