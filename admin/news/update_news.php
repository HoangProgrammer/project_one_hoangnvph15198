<?php 

if(isset($_GET['id_news'])){
    $id_news = $_GET['id_news'];

    $news=GetData_news_id( $id_news);
    foreach($news as $value){
        extract($value);
        $chu_de;
        $anh;
        $noi_dung;
        $tin_tuc_id;
    }
}

?>

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> sửa tin tức</p>
</div>
<div class="col-7">
	
<form  class="action_form" action="index.php?action=update_form_news" method="POST" enctype="multipart/form-data">
<div class="div_form">


    <div class="from col-12 ">
        <label class="form-label" for="">chủ đề </label>
        <input class="form-control" name="chu_de" type="text" value="<?=$chu_de?>">
        <input class="form-control" name="id_news" type="hidden" value="<?=$tin_tuc_id?>">
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
        <img src="..img/<?=$anh?>" alt="">
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
    <textarea class="form-control" name="noi_dung" id="editor" placeholder="Description" required > value="<?=$noi_dung?>" </textarea>
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
        <button class="btn btn-primary" name="btn_update_news">thêm</button> <a href="product.php">quay lại</a>
    </div>
    </div>
</form>

</div>
<br>
<br>

    </div>
</div>
