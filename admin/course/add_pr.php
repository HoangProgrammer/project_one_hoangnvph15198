
<div id="main">
	<div class="head">
		<div class="col-div-6">
<!-- <p class="nav"> create movie</p> -->
</div>
<div class="col-12">
      
      <form action="index.php?action=add_course" method="POST" enctype="multipart/form-data" > 
<div id="add_course_modal" >
  
 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thêm Khóa học</h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                      <!-- <a href="course/add_pr.php">ha</a> -->
                            <div class="form-group">
                            <label class="form-label " for=""> <h6>Tên khóa học  </h6>  </label>
                                <input  type="text" name="course_name" id="name_course" class="form-control" placeholder="Enter Your Name" />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){

                              echo $_SESSION['name'];
                              unset($_SESSION['name']);
                          } ?> </p>
                              </div>
                            <div class="form-group">
                            <label class="form-label" for=""> <h6>  Ảnh  </h6> </label>
                                <input type="file" name="image_course" id="image_course"  class="form-control" placeholder="Enter Your image" />
                                <p class="text-danger error_image"><?php if(isset(  $_SESSION['image_course'])){

echo $_SESSION['image_course'];
unset($_SESSION['image_course']);
} ?> </p>
                              </div>
                            <div class="form-group">
                            <label class="form-label" for=""> <h6>Loại   </h6> </label>
                            <div class="form-group">
                            <label class="form-label" for="" > Miễn phí  </label>
                           <input type="radio" name="type" id="free" value="0" class="form-radio1"  />
                           <label class="form-label" for=""> Mất phí </label>
                             <input type="radio" name="type" id="charge"  value="1"  class="form-radio2"  />   
                                         
                            </div>
                            </div>
                            <div class="form-group" style="display:none;" id="price">
                            <label class="form-label" for=""> <h6> Giá </h6>  </label>
                            <input type="text" name="price_course" id="price"  class="form-control" placeholder="Enter Your price" />   
                           
                            </div>

                            <div class="form-group">
                            <label class="form-label" for=""> <h6> Mô tả </h6>  </label>
                                <textarea name="description" id="mo_ta" class="form-control" placeholder="Type Review Here"></textarea>
                                <p class="text-danger error_mo_ta"> <?php if(isset(  $_SESSION['description'])){

echo $_SESSION['description'];
unset($_SESSION['nadescriptionme']);
} ?></p>
                              </div>

                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="btn_course" class="btn btn-primary" >Thêm</button>
                            </div>



                        </div> 
                      
                    

                    </div>
            
            
            </div>

         
            </div> 
            
         </form> 

</div>


    </div>
</div>



