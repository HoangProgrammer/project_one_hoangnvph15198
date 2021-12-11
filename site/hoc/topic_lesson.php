<link rel="stylesheet" href="site/hoc/cours.css">
<?php 
// $data=[
//     'id_user'=>$id_user,
//     'id_course'=>$_GET['idCourse'],
// ];
if(isset($_GET['new'])){
    delete_oderCourse($_GET['idCourse']);
}


   insert_progress($id_user,$_GET['idCourse']) ; 
?>
     <div class="pcoded-main-container" style="margin-bottom: 15rem;">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">  
        <div class="row">

       <div class="col-xl-12"> 
                    <div class="pcoded-module-left-content">
                        <h3>Nội dung khóa học</h3>
                    </div>                                     
                
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
                           
                            <div data-topic="<?=$id_lesson_topics?>" class="topic pcoded-module-left-noidung-item-name">
                                <span><?=$topicName ?></span>
                            </div>

                            <div >
                                <span><?=  $sumLesson ?> bài học</span>
                            </div>

                        </div>
                        
                       
                       <?php foreach( $get_lesson as $val): extract($val);  ?>
                        <div class="course-lesson__body lesson<?=$id_lesson_topics?>" >
                            <div class="course-lesson__body-item">
                                <a  class="course-lesson__body-item-title">
                                    <i class="fas fa-play-circle text-primary"></i>
                                    <a  href="index.php?act=learn&idCourse=<?=$_GET['idCourse']?>&Topic=<?=$id_lesson_topics?>&lesson=<?=$id_lesson?>"class="text-dark"><?= $lessonName?></a>
                                </a>
                                <?php $getAll_point_user = getAll_point_user($id_user, $id_lesson);
                                                foreach ($getAll_point_user as $val) {  $total_points = $val['point_total']; ?>
                                           <span class="text-dark" style="float: right"><?=$total_points?>/10</span>                                                      
                                              <?php  if ($total_points < 10) { ?>
                                             
                                                <?php } else { ?>
                                                    <span class="pcoded-micon" style="float: right; margin-right:5px">
                                                        <i class="fas fa-check text-success"></i>
                                                    </span>
                                                <?php    } }?>
                               
                            </div>                      
                        </div>
                        <?php endforeach; ?>            
 
 </div>
<?php endforeach; ?>
<?php  } ?>

             
 



            </div> 
                       
  </div>

        </div>
        
    </div>
  </div>

        </div>
        
    </div>

<!-- 
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
    </footer> -->



<script>
    var dem = 0;

$('.topic').on('click', function(e) {
 
   var main= $(this).data('topic')
$('.lesson'+main).slideToggle(1)

})




    $('.course-lesson__body').show();
 
    // var pcoded = document.querySelectorAll('.pcoded-module-left-noidung-item');
    // var course = document.querySelectorAll('.course-lesson__body');
    // var dem = 0;


//     for(let i=0; i <= pcoded.length; i++){ 
//         var data= pcoded[i].attributes('data-topic')
//         alert(data);
//         pcoded[i].onclick = function(e){ 
//             dem++;
//              for(let i=0; i < course.length; i++) {
//             if(dem % 2 ==0){           
//   course[i].style.display = "block";         
//             } else{
//                 course[i].style.display = "none";
              
//             }
           
//         }
//         }
//     }
</script>



    <script src="../assets/js/vendor-all.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script><div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div><div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
