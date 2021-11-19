


<?php 

    $id=$_GET['id'];


foreach( $get_one as $value){
   $name=$value['ten_user'];
   $vaiTro=$value['role'];
   $id=$value['id_user']; 
   $status=$value['status']; 

}

?>


<div id="main">
	<div class="head">
		<div class="col-div-6">
<!-- <p class="nav"> create movie</p> -->
</div>
<div class="col-12">
      
      <form action="index.php?action=update_user" method="POST" enctype="multipart/form-data" > 
<div id="add_course_modal" >
  
 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Sửa </h5>
                            <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span id="closes">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                        <label class="form-label" for="">Tên</label>
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="text" name="user_name"class="form-control" value="<?=$name?>">
                            <div class="form-group">
                        
                          <p class="text-danger error_name"> <?php if(isset(  $_SESSION['name'])){
                              echo $_SESSION['name'];
                              unset($_SESSION['name']);
                          } ?> </p>
                
                              </div>
                              <!--  -->
                        
                            <div class="form-group">
                            <label class="form-label" for="">nhiệm vụ</label>
    <select  name="role">
    <option <?php echo    $vaiTro== 0? "selected" : "";?> value="0">     khách hàng </option>                       
       <option <?php echo    $vaiTro == 1 ? "selected" : "";?> value="1" >    quản trị      </option>     
  </select>
                              </div>
                              <!--  -->
                        
                            <div class="form-group">
                            <div class="mb-3">
    <label class="form-label" for="">trạng thái</label>
    <select  name="status">
    <option <?php echo    $status== 0? "selected" : "";?> value="0">    hoạt động </option>                       
       <option <?php echo    $status == 1 ? "selected" : "";?> value="1" >   khóa      </option>     
  </select>
</div>

                    
                              </div>
                   
                            <div class="form-group text-center mt-4">
                       
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







    <br>
<br>
 