
<?php

foreach($lesson as $row ){

    $lessonName=$row['lessonName'];
    $video=$row['video'];
    $time=$row['time'];
    $type=$row['type'];
    $id_topics=$row['id_lesson_topics'];
    $id_lesson =$row['id_lesson'];
}

?>

<div id="main">
	<div class="head">
		<div class="col-div-6">
<!-- <p class="nav"> create movie</p> -->
</div>
<div class="col-12">
      
      <form action="index.php?action=update_lessonFrom" method="POST" enctype="multipart/form-data" > 
<div id="add_course_modal" >
  
 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Sửa Bài  <?=$lessonName ?></h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                      <!-- <a href="course/add_pr.php">ha</a> -->
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>tên bài học   </h6>  </label>
                                <input  type="text" name="lesson_name" class="form-control" value=<?=$lessonName?> />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){
                              echo $_SESSION['name'];
                              unset($_SESSION['name']);
                          } ?> </p>

                      <input  type="hidden" name="id_topic" class="form-control" value="<?= $id_topics ?>" />
                      <input  type="hidden" name="id_lesson" class="form-control" value="<?=$id_lesson ?>" />
                              </div>
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>video bài học   </h6>  </label>
                                <input  type="text" name="video_lesson" class="form-control"  value=<?=$video?>/>
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['video_lesson'])){
                              echo $_SESSION['video_lesson'];
                              unset($_SESSION['video_lesson']);
                          } ?> </p>


                              </div>
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>thời gian bài học   </h6>  </label>
                                <input  type="text" name="time" class="form-control" value=<?=$time?> />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['time'])){
                              echo $_SESSION['time'];
                              unset($_SESSION['time']);
                          } ?> </p>


                              </div>
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>loại bài học   </h6>  </label>
                            <div class="form-group">
                             thường   <input  type="radio" <?=$type=($type==0)?"checked":"" ?> name="type" value="0"/>
                             đặc biệt   <input  type="radio"  <?=$type=($type==1)?"checked":"" ?> name="type"  value="1"/>
                             </div>
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['type'])){
                              echo $_SESSION['type'];
                              unset($_SESSION['type']);
                          } ?> 
                          </p>

                              </div>
             
                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="btn_course" class="btn btn-primary" >Sửa</button>
                            </div>



                        </div> 
                      
                    

                    </div>
            
            
            </div>

         
            </div> 
            
         </form> 

</div>


    </div>
</div>




