<?php  require_once "./layout/layout_1/slider.php" ;


?>
<div class="pcoded-main-container">
        <div class="pcoded-wrapper ">
            <div class="pcoded-content  student_learn">
                <span class="pcoded-content-item-span">116.840+ người khác cũng học</span>
            </div>
        </div>
    </div>

      <?php
    //   $error=false;
    //                          $id_user;
    //                        $Get_oderCourse=Get_oderCourse();
                           
    //                          foreach ($Get_oderCourse as $value){   
                               
    //                              if(  $id_users ==$id_user){
    //                               echo   $error=true;
    //                              } else{
    //                                 echo    $error =false;
    //                              }                     
    //                       } 


                                if( !isset($_SESSION['name_user'])){

                             }else{ ?>

                            
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
                           $Get_oderCourse=Get_oderCourse(); 
                             foreach ($Get_oderCourse as $value):
                             if( $value['id_user']== $id_user): 
                                $Get_course_one=Get_course_one($value['id_caurse']);
                                foreach ($Get_course_one as $val):extract($val); ?>
                                <a href="index.php?act=learn" class="col-md-6 col-xl-4">
                                    <div class="card daily-sales course-english">
                                        <img class="course-english-img" src="image/<?=$img?>" alt="">                                     
                                    </div>
                                    <span class="course-english-tile" >
                                        <?=$NameCaurse  ?>
                                    </span>
                                </a>
                                <?php endforeach; endif; endforeach; ?>                                                            
                            </div>
                        </div>
                                
                        
                    </div>                  
                </div>
            </div>

            </div>
                
            </div>
               
            <?php  }    ?>






    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

            <div class="pcoded-content">
                <h3 class="pcoded-content-name">Khóa c</h3>
                <div class="pcoded-inner-content">
               
                    <div class="main-body">
                        <div class="page-wrapper">
                          
                            <div class="row">

                            
                             <?php                       
                             $course= Get_caurse();
                             foreach ($course as $value):extract($value); ?>    
                                <a href="index.php?act=detail_course&id_course=<?= $id_caurse ?>" class="col-md-6 col-xl-4">
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
            </div>
                
            </div>