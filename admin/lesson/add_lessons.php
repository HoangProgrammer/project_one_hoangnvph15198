<div id="main">
	<div class="head">
		<div class="col-div-6">
<!-- <p class="nav"> create movie</p> -->
</div>
<div class="col-12">
      
      <form action="index.php?action=add_lessonFROM" method="POST" enctype="multipart/form-data" > 
<div id="add_course_modal" >
  
 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thêm Bài Học</h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                      <!-- <a href="course/add_pr.php">ha</a> -->
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>tên bài học   </h6>  </label>
                                <input  type="text" name="lesson_name" class="form-control"  />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){
                              echo $_SESSION['name'];
                              unset($_SESSION['name']);
                          } ?> </p>

                     
                              </div>
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>video bài học   </h6>  </label>
                                <input  type="text" name="video_lesson" class="form-control"  />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['video_lesson'])){
                              echo $_SESSION['video_lesson'];
                              unset($_SESSION['video_lesson']);
                          } ?> </p>


                              </div>
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>thời gian bài học   </h6>  </label>
                                <input  type="text" name="time" class="form-control"  />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['time'])){
                              echo $_SESSION['time'];
                              unset($_SESSION['time']);
                          } ?> </p>
<input type="hidden" name="id_course" value=<?=$_GET['id_course']?> >
 <input  type="hidden" name="id_topic" value="<?=$_GET['id_topic']?>" />
                              </div>                    
                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="btn_course" class="btn btn-primary" >Thêm</button>
                                <a  name="btn_course" href="index.php?action=detail_lesson&id_course=<?=$_GET["id_course"]?>&id_topic= <?=$_GET["id_topic"]?>" class="btn btn-primary" >quay lại</a>
                            </div>



                        </div> 
                      
                    

                    </div>
            
            
            </div>

         
            </div> 
            
         </form> 

</div>


    </div>
</div>



