<link rel="stylesheet" href="site/hoc/cours.css">
<?php 
// $data=[
//     'id_user'=>$id_user,
//     'id_course'=>$_GET['idCourse'],
// ];

if(isset( $_SESSION['mark'])){
    unset(  $_SESSION['mark']);
}
?>
     <div class="pcoded-main-container" style="margin-bottom: 15rem;">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">  
        <div class="row">
<?php $oder=Get_oderOne($_GET['idCourse'], $id_user);
  if($oder==[]){
    echo "<h1 class='text-center text-warning'>Môn học không tồn tại hoặc chưa đăng ký</h1>";
}else{

  ?>
       <div class="col-xl-12"> 
                    <div class="pcoded-module-left-content">
                        <h3>Nội dung khóa học</h3>
                    </div>                                     
                
  
                    <?php


                       $get_lesson =getAll_lesson($_GET['idCourse']); 
                    //    var_dump( $get_lesson );die;


               if(empty($get_lesson)){?>
             
                   <img width="100%" src="image/erro.png" alt="">
            
                 
           <?php }else{ ?>

              <?php
                
                   $sumLesson=0;
                   foreach($get_lesson as $val){
                    extract($val);
                    ?>
                      
                      
                    <div class="pcoded-module-left-noidung">

                        <div class="pcoded-module-left-noidung-item">

                            <i class="fas fa-plus"></i>
                           
                            <div  class="topic pcoded-module-left-noidung-item-name">
                                <span><?=$lessonName ?></span>
                            </div>

                        </div>
                        
                                
                        <div class="course-lesson__body " >
                            <div class="course-lesson__body-item">
                                <a  class="course-lesson__body-item-title">
                                    <i class="fas fa-play-circle text-primary"></i>
                                    <a  href="index.php?act=learn&idCourse=<?=$_GET['idCourse']?>&lesson=<?=$id_lesson?>"class="text-dark">Bắt đầu Học</a>
                                </a>
                                                  
                            </div>                      
                        </div>
                  

                   
                        <?php     } ?>          
 
 </div>

<?php  } }?>

             
 



            </div> 
                       
  </div>

        </div>
        
    </div>
  </div>

        </div>
        
    </div>



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
