

<div id="main">
<div class="head">
    <div class="col-div-6">
<p class="nav"> thêm slider</p>
</div>
<br>

<form  action="index.php?action=them_slide" method="post" enctype="multipart/form-data">
<div class="mb-3">
<input class="form-control" name="image" type="file">
<label for=""><h6>Loại</h6></label> <br>
loại 1 <input  type="radio" name="type" value="0"> <br>
loại 2 <input type="radio" name="type" value="1">
</div>

<?php 

if(isset(  $_SESSION['err_slide'])){
    echo "<p class='alert alert-warning'>". $_SESSION['err_slide']." </p>" ;
    unset( $_SESSION['err_slide']);
}

?>


<button class="btn btn-primary" name="create_slide_btn"> Thêm</button>

<a href="index.php?action=banner">quay lại</a>


</form>
</div>
</div>




<br>
<br>
