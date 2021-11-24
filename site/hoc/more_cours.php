<link rel="stylesheet" href="site/hoc/cours.css">

    <div class="pcoded-main-container">
        <div class="pcoded-module">
            <div class="pcoded-module-left">
                <!-- <div class="pcoded-module-left-title">
                    <h3>Những Kiến Thức và bài giảng</h3>
                    <span>Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.</span>
                </div>
                <div class="pcoded-module-left-content">
                    <h3>Bạn sẽ học được gì</h3>
                </div>
                <ul class="pcoded-module-left-description">
                    <li class="pcoded-module-left-description-item">
                        <i class="fas fa-check"></i>
                        <span>Các kiến thức cơ bản, học cách xếp chữ cái</span>
                    </li>
                    <li class="pcoded-module-left-description-item">
                        <i class="fas fa-check"></i>
                        <span>học từ vựng vững chắc hơn cho bé</span>
                    </li>
                    <li class="pcoded-module-left-description-item">
                        <i class="fas fa-check"></i>
                        <span>Các mô hình, kiến trúc cơ bản khi triển khai ứng dụng Tiếng Anh</span>
                    </li>
                    <li class="pcoded-module-left-description-item">
                        <i class="fas fa-check"></i>
                        <span>Các kiến thức cơ bản,tập làm quen với tiếng anh</span>
                    </li>
                    
                </ul> -->

                <div>
                    <div class="pcoded-module-left-content">
                        <h3>Nội dung khóa học</h3>
                    </div>
                    <!-- <ul class="pcoded-module-left-time">
                        <li>
                            <span>4 phần  .</span>
                        </li>
                        <li>
                            <span>8 bài học  .</span>
                        </li>
                        <li>
                            <span>Thời lượng 02 giờ 15 phút</span>
                        </li>
                    </ul> -->

                    <div>
                   <?php
               if(empty($getAll_topic)){?>
             
                   <img width="100%" src="image/erro.png" alt="">
            
                 
           <?php }else{ ?>

              <?php
                   foreach ( $getAll_topic as $val): extract($val);
                   $get_lesson =getAll_lesson($id_lesson_topics); 
                   $sumLesson=0;
                   foreach($get_lesson as $val){  $sumLesson +=1;  }?>
                    <div class="pcoded-module-left-noidung">

                        <div class="pcoded-module-left-noidung-item">

                            <i class="fas fa-plus"></i>
                           
                            <div class="pcoded-module-left-noidung-item-name">
                                <span><?=$topicName ?></span>
                            </div>

                            <div>
                                <span><?=  $sumLesson ?> bài học</span>
                            </div>

                        </div>
                        
                       
                       <?php foreach( $get_lesson as $val): extract($val); $id_lesson ?>
                        <div class="course-lesson__body" >
                            <div class="course-lesson__body-item">
                                <a  class="course-lesson__body-item-title">
                                    <i class="fas fa-play-circle"></i>
                                    <span class="text-secondary"><?= $lessonName?></span>
                                </a>
                            </div>                      
                        </div>
                        <?php endforeach; ?>            
 
 </div>
<?php endforeach; ?>

<?php  } ?>

                </div>
                </div>
            </div>

            <!-- right -->
<?php $course=Get_course_one($_GET['id_course']);
foreach(  $course as $val) { ;
   $price=$val['price'];
   $type=$val['type'];

}
?>
            <div class="pcoded-module-right">
                <div class="pcoded-module-right-video">
                    <iframe class="pcoded-module-right-video-english" src="https://www.youtube.com/embed/gvtKHz7MWpo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="pcoded-module-right-money">
                    <h3><?=  $price=( $price==0)?'Miễn Phí':"<h4 class='text-danger'>".number_format($price)." vnd</h4> "?></h3>
                </div> 
                <form class="pcoded-module-right-add" action="">    
        <?php if( $type==1){?>
            <a class="btn btn-danger text-light" href="index.php?act=buyCourse">  Mua Ngay </a>
       <?php }else{?>
   <a class="btn btn-primary text-light" href="index.php?act=topic&idCourse=<?=$_GET['id_course'] ?>">  học ngay </a>     
   <?php } ?>
        

 
        <!-- <a class="btn btn-danger text-light" href="index.php?act=buyCourse "> Mua ngay </a> -->
       

                </form>
                <div class="pcoded-module-right-parameter">
                    <ul class="pcoded-module-right-parameter-item">
                        <li>
                            <i class="fas fa-feather"></i>
                            <span>Trình độ cơ bản</span>
                        </li>
                        <li>
                            <i class="fas fa-film"></i>
                            <span>Tổng số 8 bài học</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Thời lượng 02 giờ 15 phút</span>
                        </li>
                        <li>
                            <i class="fab fa-pied-piper"></i>
                            <span>Học mọi lúc, mọi nơi</span>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
        
    </div>
    <footer style="height: 60px;" class="pcoded-main-container pcoded-main-footer" >
        <div class="course-lesson__footer">
            <div class="course-lesson__footer-left">
                <span class="course-lesson__footer-item">2021 © Busuu Ltd</span>
                <a class="course-lesson__footer-item" href="">Điều khoản</a>
                <a class="course-lesson__footer-item" href="">Bảo mật</a>
            </div>
            <div class="course-lesson__footer-right">
                <span class="course-lesson__footer-heft">Trợ giúp</span>
                <i class="fab fa-facebook course-lesson__footer-heft"></i>
                <i class="fab fa-internet-explorer course-lesson__footer-heft"></i>
                <i class="fab fa-instagram course-lesson__footer-heft"></i>
                <i class="fab fa-youtube course-lesson__footer-heft"></i>
            </div>
        </div>
    </footer>
<script>

    $('.course-lesson__body').slideDown();
 
    var pcoded = document.querySelectorAll('.pcoded-module-left-noidung-item');
    var course = document.querySelectorAll('.course-lesson__body');
    var dem = 0;


    for(let i=0; i <= pcoded.length; i++){ 
        pcoded[i].onclick = function(e){ 
            dem++;
             for(let i=0; i < course.length; i++) {
            if(dem % 2 ==0){           
  course[i].style.display = "block";         
            } else{
                course[i].style.display = "none";
              
            }
           
        }
        }
    }
</script>



    <script src="../assets/js/vendor-all.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script><div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div><div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
