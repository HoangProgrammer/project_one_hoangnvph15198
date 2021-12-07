
<?php


foreach($stmt as $row ){

        $topicName=$row['topicName'];
        $id_lesson_topics  =$row['id_lesson_topics']; 
        $id_caurse =$row['id_caurse']; 
}
?>

<div id="main">
	<div class="head">
		<div class="col-div-6">
<!-- <p class="nav"> create movie</p> -->
</div>
<div class="col-12">
      
      <form action="index.php?action=update_topic" method="POST" enctype="multipart/form-data" > 
<div id="add_course_modal" >
  
 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thêm Chủ đề</h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                      <!-- <a href="course/add_pr.php">ha</a> -->
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>tên chủ đề  </h6>  </label>
                                <input  type="text" name="topic_name" class="form-control"value=<?= $topicName ?> />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){
                              echo $_SESSION['name'];
                              unset($_SESSION['name']);
                          } ?> </p>

<input  type="hidden" name="id_lesson" class="form-control" value="<?= $id_topics=$_GET['id_topic'] ?>" />
<input  type="hidden" name="id_course" class="form-control" value="<?= $id_caurse ?>" />
                              </div>
             
                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="btn_course" class="btn btn-primary" >sửa</button>
                                <a  name="btn_course" href="index.php?action=detail&idCourse=<?=$_GET["id_course"]?>" class="btn btn-primary" >quay lại</a>

                            </div>



                        </div> 
                      
                    

                    </div>
            
            
            </div>

         
            </div> 
            
         </form> 

</div>


    </div>
</div>







