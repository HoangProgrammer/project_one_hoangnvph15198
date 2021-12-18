
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
                                <input  type="text" name="course_name" id="name_course" class="form-control input_form" placeholder="Enter Your Name" />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){

                              echo $_SESSION['name'];
                              unset($_SESSION['name']);
                          } ?> </p>
                              </div>
                            <div class="form-group">
                            <label class="form-label" for=""> <h6>  Ảnh  </h6> </label>
                                <input type="file" name="image_course" id="image_course"  class="form-control input_form" placeholder="Enter Your image" />
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
                            <input type="text" name="price_course" id="price"  class="form-control input_form" placeholder="Enter Your price" />   
                           
                            </div>
    
                            <div class="form-group">
                            <label class="form-label" for=""> <h6>Lộ trình</h6> </label>
                            <select class="form-select select input_form" aria-label="Default select example" name="id_route">
                                <option value="4">Ielts</option>
                                <option value="2">Children</option>
                                <option value="3">Basic</option>
                                <option value="1">Training</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label class="form-label" for=""> <h6> Mô tả </h6>  </label>
                                <textarea name="description" id="mo_ta" class="form-control input_form" placeholder="Type Review Here"></textarea>
                                <p class="text-danger error_mo_ta"> <?php if(isset(  $_SESSION['description'])){
                                echo $_SESSION['description'];
                                unset($_SESSION['nadescriptionme']);
                                } ?></p>
                              </div>

                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="btn_course" class="btn btn-primary" >Thêm</button>
                                <a href="index.php?action=product"name="btn_course" class="btn btn-primary" >quay lại</a>
                            </div>



                        </div> 
                      
                    

                    </div>
            
            
            </div>

         
            </div> 
            
         </form> 

</div>


    </div>
</div>

<script>
        var inputs = document.querySelectorAll(".input_form");
        var acb = document.getElementById('acb');
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].onblur = function(e){
                var value = inputs[i].value;
                console.log(value)
                if (value != "") {
                    inputs[i].style.border = "1px solid green";
                }
                else{
                    inputs[i].style.border = "1px solid red";

                }
            }            
        }
    </script>
