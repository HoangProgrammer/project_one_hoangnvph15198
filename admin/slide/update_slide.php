
<?php 
if(isset($_GET['id'])){
   $id=$_GET['id']; 

   $stmt=GetData_slider_id($id);
foreach($stmt as $value){
$id_slide=$value['slider_id'];
$slider_image=$value['slider_image'];
}
}
?>

<div id="main">
<div class="head">
    <div class="col-div-6">
<p class="nav"> SỬA slider</p>
</div>
<br>

<form  action="index.php?action=update_slider" method="post" enctype="multipart/form-data">

<input name="id" type="hidden" value="<?= $id ?>">
<div class="mb-3">
<label class="form-label" for="">ảnh sản phẩm</label>
<input class="form-control" name="image" type="file">
<input class="form-control" value="<?=$id_slide?>" name="id_slide" type="hidden">
<br>
<img width="500px" src="../img/<?=$slider_image?>" alt="">
</div>


<button class="btn btn-primary" name="update_btn"> update</button>

<a href="category.php">quay lại</a>


</form>
</div>
</div>




<br>
<br>
