
<?php 


foreach( $banner as $value){
$id_slide=$value['id_banner'];
$slider_image=$value['image'];
$type=$value['type'];
}

?>

<div id="main">
<div class="head">
    <div class="col-div-6">
<p class="nav"> SỬA Banner</p>
</div>
<br>

<form  action="index.php?action=sua_slider" method="post" enctype="multipart/form-data">
<div class="mb-3">

<input class="form-control" name="image" type="file">
<input class="form-control" value="<?=$id_slide?>" name="id" type="hidden">
<br>
<img width="500px" src="../image/<?=$slider_image?>" alt="">
</div>
<div class="mb-3">
<label for=""><h6>Loại</h6></label> <br>
loại 1 <input  type="radio" name="type" value="0" <?php  if($type=="0"){echo "checked";}else{} ?>> <br>
loại 2 <input type="radio" name="type" value="1" <?php  if($type=="1"){echo "checked";}else{} ?>>
</div>
<button class="btn btn-primary" name="update_btn"> update</button>

<a href="category.php">quay lại</a>


</form>
</div>
</div>




<br>
<br>
