

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> create movie</p>
</div>
<div class="col-7">
	
<form  class="action_form" action="index.php?action=create_news" method="POST" enctype="multipart/form-data">
<div class="div_form">


    <div class="from col-12 ">
        <label class="form-label" for="">chủ đề </label>
        <input class="form-control" name="chu_de" type="text">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['chu_de'])){
            echo $_SESSION['chu_de'];
            unset($_SESSION['chu_de']);
        }
        
        ?>
     </div>  
    </div>


  
    <div class="from col-12 ">
        <label class="form-label" for="">ảnh</label>
        <input  class="form-control" name="anh" type="file">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['anh'])){
            echo $_SESSION['anh'];
            unset($_SESSION['anh']);
        }
        
        ?>
     </div>  
    </div>
    <div class="from col-12 ">
        <label class="form-label" for="">nội dung</label>
    <textarea class="form-control" name="noi_dung" id="editor" placeholder="Description" required >  </textarea>
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['noi_dung'])){
            echo $_SESSION['noi_dung'];
            unset($_SESSION['noi_dung']);
        }
        
        ?>
     </div>  
    </div>

  


    <div class="to">
        <button class="btn btn-primary" name="btn_new">thêm</button> <a href="product.php">quay lại</a>
    </div>
    </div>
</form>

</div>
<br>
<br>

    </div>
</div>
