<div id="main">
	<div class="head">
		<div class="col-div-6">
<!-- <p class="nav"> create movie</p> -->
</div>
<div class="col-12">
    <?php
       if(isset($_POST['btn_request'])){
        $id_Admin= $_POST['id_admin'];
        $id_rating= $_POST['id_rating'];
        $content= $_POST['content'];
        $status= 2;
        $time= date('Y-m-d H:i:s');
        update_parent(  $status,$id_rating);
        insert_Reply( $id_Admin, $id_rating,  $content, $time);
        header('location:index.php?action=rating');
    }
    
    ?>
      
      <form  method="POST" enctype="multipart/form-data" > 
<div id="add_course_modal" >
  <?php  
   $Get_Rating=Get_Rating_parent($_GET['id_rating']);  
   foreach($Get_Rating as $values){ extract($values);
//   $ten_user= $values['ten_user'];
//   $id_rating= $values['id_rating'];
   }

   
   ?>

 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Gửi câu trả lời</h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                      <!-- <a href="course/add_pr.php">ha</a> -->
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>Trả lời   </h6>  </label>
                                <input  type="text" name="content" class="form-control"  />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['question'])){
                              echo $_SESSION['question'];
                              unset($_SESSION['question']);
                          } ?> </p>
                      <input  type="hidden" name="id_admin" class="form-control" value="<?= $admin_id?>" />
                      <input  type="hidden" name="id_rating" class="form-control" value="<?=$_GET['id_rating']?>" />
                              </div>                                  
                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="btn_request" class="btn btn-primary" >Gửi</button>
                                <a  href="index.php?action=rating" class="btn btn-primary" >quay lại</a>
                            </div>



                        </div> 
                      
                    

                    </div>
            
            
            </div>

         
            </div> 
            
         </form> 

</div>


    </div>
</div>

