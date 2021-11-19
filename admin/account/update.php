


<?php 

    $id=$_GET['id'];

$stmt=GetDataID_user($id);
foreach($stmt as $value){
   $name=$value['FULLNAME'];
   $GT=$value['sex'];
   $phone=$value['phone'];
   $nhiem_vu=$value['role'];
   $EMAIL=$value['EMAIL'];
   $id=$value['user_id']; 
   $status=$value['status']; 

}

?>

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> SỬA</p>
</div>
<br>
<br>
<br>

<form  action="index.php?action=sua_user" method="post">
    <input name="id" type="hidden" value="<?= $id ?>">
<div class="mb-3">
    <label class="form-label" for="">Tên Khách Hàng</label>
    <input class="form-control" name="ten" type="text" value="<?=$name ?>">
</div>
<div class="mb-3">
    <label class="form-label" for="" >Giới Tính</label>
  <select  name="GT">
     <option <?php echo    $GT== 0? "selected" : "";?> value="0">     NỮ </option>                       
       <option <?php echo    $GT == 1 ? "selected" : "";?> value="1" >    NAM      </option>     
  </select>
</div>
<div class="mb-3">
    <label class="form-label" for="">số điện thoại</label>
    <input class="form-control" name="phone" type="text" value="<?=$phone ?>">
</div>
<div class="mb-3">
    <label class="form-label" for="">nhiệm vụ</label>
    <select  name="role">
    <option <?php echo    $nhiem_vu== 0? "selected" : "";?> value="0">     khách hàng </option>                       
       <option <?php echo    $nhiem_vu == 1 ? "selected" : "";?> value="1" >    quản trị      </option>     
  </select>
</div>
<div class="mb-3">
    <label class="form-label" for="">trạng thái</label>
    <select  name="status">
    <option <?php echo    $status== 0? "selected" : "";?> value="0">    hoạt động </option>                       
       <option <?php echo    $status == 1 ? "selected" : "";?> value="1" >   khóa      </option>     
  </select>
</div>

<div class="mb-3">
    <label class="form-label" for="">email</label>
    <input class="form-control" name="email" type="text" value="<?= $EMAIL ?>">
</div>



<button class="btn btn-primary" name="update"> update</button>

<a href="category.php">quay lại</a>


    </form>
</div>
</div>




    <br>
<br>
 