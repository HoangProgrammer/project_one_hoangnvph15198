
<?php


foreach($stmt as $row ){

        $id_course=$row['id_caurse'];
        $ten=$row['NameCaurse'];
        $gia=$row['price'];
        $anh=$row['img'];
        $description=$row['description'];
        $type=$row['type'];  
        $id_route=$row['id_route']; 
}
// var_dump($stmt);


?>


<div id="main">
	<div class="head">
        <div class="col-12">
      
            <form action="index.php?action=updateFrom" method="POST" enctype="multipart/form-data" > 
                <div id="add_course_modal" >
  
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Sửa Khóa học</h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                      <!-- <a href="course/add_pr.php">ha</a> -->
                      <div class="form-group">
                            <label class="form-label " for=""> <h6><b>Tên khóa học</b>  </h6>  </label>
                                <input  type="text" name="course_name" id="name_course" class="form-control"  value="<?=  $ten ?>" />
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){
                              echo $_SESSION['name'];
                              unset($_SESSION['name']);

                          } ?> </p>
                              </div>
                            <input type="hidden" name="id" value="<?= $id_course ?>">
                              
                            <div class="form-group">
                            <label class="form-label" for=""> <h6>  <b>Ảnh</b>  </h6> </label>
                                <input type="file" name="image_course" id="image_course"  class="form-control" placeholder="Enter Your image" />
                           
                            <p class="text-danger error_image"><?php if(isset(  $_SESSION['image_course'])){
                            echo $_SESSION['image_course'];
                            unset($_SESSION['image_course']);
                            } ?> </p> 

                            <img width="100px"  src="../image/<?= $anh ?>" alt="">
                              </div>

                            <div class="form-group">
                            <label class="form-label " for=""> <h6> <b>Lộ trình</b> </h6>  </label> <br>
                            <select class="form-select" aria-label="Default select example" name="route">
                                <?php foreach ($data_route as $key => $value) { ?>
                                    <option value="<?php echo $value['id_route']?>"
                                    <?php if ($value['id_route'] == $id_route) { ?>
                                        selected
                                         <?php } ?>
                                    ><?php echo $value['route']?></option>
                                <?php } ?>
                            </select>
                            </div>


                            <div class="form-group">
                            <label class="form-label" for=""> <h6><b>Loại</b>   </h6> </label>
                            </div>
                            <div class="form-group">
                            <label class="form-label" for="" > Miễn phí  </label>
                           <input type="radio" name="type" id="free" value="0" class="form-radio1" <?php if($type=="0"){echo "checked" ;}else{ }   ?>  />
                           <label class="form-label" for="">  Mất phí </label>
                             <input type="radio" name="type"  value="1"  class="form-radio2"  <?php if($type=="1"){echo "checked" ;}else{}   ?>  />                             
                            </div>
                            </div>
       
                                    <div class="form-group" style="display:block;" id="price">
                            <label class="form-label" for=""> <h6> Giá </h6>  </label>
                            <input type="text"  name="price_course" id="price"  class="form-control" value=" <?= $gia ?>" />    
                            </div> 

                            <div class="form-group">
                            <label class="form-label" for=""> <h6><b> Mô tả</b> </h6>  </label>
                                <textarea name="description" id="mo_ta" class="form-control" placeholder="Type Review Here"><?= $description ?> </textarea>
                                <p class="text-danger error_mo_ta"> <?php if(isset(  $_SESSION['description'])){
echo $_SESSION['description'];
unset($_SESSION['nadescriptionme']);
} ?></p>
                              </div>

                            <div class="form-group text-center mt-4">
                                <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                <button  name="update_course" class="btn btn-primary" >Sửa</button>
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



