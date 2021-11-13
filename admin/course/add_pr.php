

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> create movie</p>
</div>
<div class="col-7">
	
<form  class="action_form" action="index.php?action=add_pr" method="POST" enctype="multipart/form-data">
<div class="div_form">


    <div class="from col-12 ">
        <label class="form-label" for="">Tên </label>
        <input class="form-control" name="ten" type="text">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['err_name'])){
            echo $_SESSION['err_name'];
            unset($_SESSION['err_name']);
        }
        
        ?>
     </div>  
    </div>
    <div class="from col-12">
        <label class="form-label" for="">Ảnh</label>
        <input class="form-control" name='anh' type="file">
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
        <label class="form-label" for="">giá </label>
        <input class="form-control" name="gia" type="text">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['gia'])){
            echo $_SESSION['gia'];
            unset($_SESSION['gia']);
        }
        
        ?>
     </div>  
    </div>

    <div class="from col-12 ">
        <label class="form-label" for="">thông tin </label>
        
        <textarea  name="description"  id="" cols="30" rows="10"></textarea>
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['description'])){
            echo $_SESSION['description'];
            unset($_SESSION['description']);
        }
        
        ?>
     </div>  
    </div>



    <br>
   

<!--  -->
    <div class="to">
        <button class="btn btn-primary" name="add">thêm</button> <a href="product.php">quay lại</a>
    </div>
    </div>
</form>

</div>
<br>
<br>

    </div>
</div>

