
<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];  

    $stmt=GetDataID($id);
foreach($stmt as $row ){

       $id=$row['product_id'];
        $ten=$row['product_name'];
        $gia=$row['gia'];
        $soluong=$row['sl'];
        $he_dieu_hanh=$row['he_dieu_hanh'];
        $ram=$row['Ram'];
        $bo_nho=$row['bo_nho_trong'];
        $anh=$row['product_image'];
        $thongtin=$row['product_info'];
        $special=$row['special'];
        
        $nation_id=$row['id_nation'];
     
}
$category= GetData_category_id($id);     
$category_2= GetData_category();    
}  

?>

<div id="main">
	<div class="head">
      <h3 class="text-center">Edit <?=  $ten?> </h3>  
		<div class="col-div-6">
<p class="nav"> Edit</p>
</div>
	 <br>
	 <br>
<form  action="index.php?action=edit_pr" method="post" enctype="multipart/form-data">

    <div class="mb-3">
    <input class="form-control" name="id" type="hidden" value="<?= $id ?>">
    <label class="form-label" for="">Tên </label>
    <input class="form-control" name="ten" type="text" value="<?= $ten?>">
    <div class="text-danger">
<?php
if(isset($_SESSION['err_name'])){
    echo $_SESSION['err_name'];
    unset($_SESSION['err_name']);
}
?>
    </div>
</div>

    <div class="mb-3">
    <label class="form-label" for="">giá </label>
    <input class="form-control" name="gia" type="text" value="<?= $gia ?>">
    <div class="text-danger">
<?php
if(isset($_SESSION['gia'])){
    echo $_SESSION['gia'];
    unset($_SESSION['gia']);
}
?>
    </div>
</div>
    <div class="mb-3">
    <label class="form-label" for="">số lượng </label>
    <input class="form-control" name="soluong" type="text" value="<?= $soluong ?>">
    <div class="text-danger">
<?php
if(isset($_SESSION['soluong'])){
    echo $_SESSION['soluong'];
    unset($_SESSION['soluong']);
}
?>
    </div>
</div>
<!--  -->
<div class="from col-12 ">
        <label class="form-label" for="">hệ điều hành </label>
        <input class="form-control" name="he_dieu_hanh" type="text" value="<?= $he_dieu_hanh ?>">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['he_dieu_hanh'])){
            echo $_SESSION['he_dieu_hanh'];
            unset($_SESSION['he_dieu_hanh']);
        }
        
        ?>
     </div>  
    </div>
    <div class="from col-12 ">
        <label class="form-label" for="">ram</label>
        <input class="form-control" name="ram" type="text" value="<?= $ram ?>">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['ram'])){
            echo $_SESSION['ram'];
            unset($_SESSION['ram']);
        }
        
        ?>
     </div>  
    </div>
    <div class="from col-12 ">
        <label class="form-label" for="">bộ nhớ trong </label>
        <input class="form-control" name="bo_nho" type="text" value="<?= $bo_nho ?>">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['bo_nho'])){
            echo $_SESSION['bo_nho'];
            unset($_SESSION['bo_nho']);
        }
        
        ?>
     </div>  
    </div>

<!--  -->
<div class="mb-3">
    <label class="form-label" for="" >Ảnh</label>
<input name='anh' type="file"> <br>
<img name="img_old" width='200px' src="../img/<?=$anh ?>" alt="">
</div>

<div class="mb-3">
    <label class="form-label" for="">Thông Tin</label>
  
    <textarea class="form-control" name="thong_tin" cols="10" rows="5"><?= $thongtin ?></textarea>

    <div class="text-danger">
<?php
if(isset($_SESSION['err_thong_tin'])){
    echo $_SESSION['err_thong_tin'];
    unset($_SESSION['err_thong_tin']);
}
?>
    </div>
</div>


   
<div class="from">
        <label class="form-label" for="">danh mục</label>
         <select name="danh_muc" >  
            
    <?php 
        foreach ($category as $key=> $value) { ?>
             <option value="<?= $value['list_id']?>" >             
              <?= $value['name_category'] ?>
             </option>
        <?php } ?>

        <?php 
        foreach ($category_2 as $key=> $value) { ?>
             <option value="<?= $value['list_id']?>" >             
              <?= $value['name_category'] ?>
             </option>
        <?php } ?>

         </select>
    </div>
<div class="from">

    <?php   $nation=GetData_list_national(); ?>
    <?php $nation_id=GetData_list_national_id($nation_id) ?>
        <label class="form-label" for="">hãng</label>    
         <select name="hang" > 
         <?php 
        foreach ($nation_id as $key=> $val) {  ?>    
             <option value="<?=  $val['nation_id'] ?> " ><?= $val['name_nation'] ?> </option>
          <?php }?>
          
             <?php 
        foreach ($nation as $key=> $val) {  ?>    
             <option value="<?=  $val['nation_id'] ?> " ><?= $val['name_nation'] ?> </option>
          <?php }?>
         </select>

    </div>
<div class="from">

<label for="">loại</label>
<select name="special" id="">
    <option <?= $special==0 ?'selected':"" ?>  value="0" >thường </option>
    <option <?= $special==1 ?'selected':"" ?>  value="1" >đặc biệt</option>
</select>
    </div>

<div class="to">

<button class="btn btn-primary" name="update"> update</button>

<a href="product.php">quay lại</a>
</div>
    </form>



</div>
</div>



