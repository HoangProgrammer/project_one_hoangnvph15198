
<?php


foreach($stmt as $row ){

        $id_caurse=$row['id_caurse'];
        $ten=$row['NameCaurse'];
        $gia=$row['price'];
        $anh=$row['img'];
        $thongtin=$row['description'];
        $loai=$row['type'];
       
     
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

<div class="mb-3">
    <label class="form-label" for="">loại</label>
  
    <textarea class="form-control" name="loai" cols="10" rows="5"><?=  $loai ?></textarea>

    <div class="text-danger">
<?php
if(isset($_SESSION['loai'])){
    echo $_SESSION['loai'];
    unset($_SESSION['loai']);
}
?>
    </div>
</div>



<div class="to">

<button class="btn btn-primary" name="update"> update</button>

<a href="product.php">quay lại</a>
</div>
    </form>



</div>
</div>



