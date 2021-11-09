

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
        <label class="form-label" for="">số lượng </label>
        <input class="form-control" name="soluong" type="text">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['soluong'])){
            echo $_SESSION['soluong'];
            unset($_SESSION['soluong']);
        }
        
        ?>
     </div>  
    </div>
    <div class="from col-12 ">
        <label class="form-label" for="">hệ điều hành </label>
        <input class="form-control" name="he_dieu_hanh" type="text">
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
        <input class="form-control" name="ram" type="text">
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
        <input class="form-control" name="bo_nho" type="text">
     <div class="text-danger">
 <?php 
        if(isset($_SESSION['bo_nho'])){
            echo $_SESSION['bo_nho'];
            unset($_SESSION['bo_nho']);
        }
        
        ?>
     </div>  
    </div>

    <div class="from col-12">
        <label class="form-label" for="">Thông tin</label>
        <textarea class="form-control" name="thong_tin"  cols="10" rows="5"></textarea>
   
        <div class="text-danger">
 <?php 
        if(isset($_SESSION['err_thong_tin'])){
            echo $_SESSION['err_thong_tin'];
            unset($_SESSION['err_thong_tin']);
        }
        
        ?>
     </div> 
    </div>

   
   
    <div class="from col-12">
        <label class="form-label" for="">danh mục</label>
         <select name="danh_muc" >   
    <?php 
    $category= GetData_category();
        foreach ($category as $key=> $value) { ?>
             <option value="<?= $value['list_id']?>" > 
              <?= $value['name_category'] ?>
             </option>
        <?php } ?>
         </select>
    </div>
    <br>
   
    <div class="from col-12">
        <label class="form-label" for="">hãng</label>
         <select name="hang" >   
    <?php 
    $nation=GetData_list_national();
        foreach ($nation as $key=> $val) {  ?>
 
             <option value="<?=  $val['nation_id'] ?> " ><?= $val['name_nation'] ?> </option>
          <?php }?>
    
          
            </select>   
    </div>
    <div class="from col-12">
        <label class="form-label" for="">sản phẩm đặc biệt ,thường</label>
         <select name="special" >    
             <option value="0" >thường</option>
             <option value="1" >đặc biệt</option>     
            </select>   
    </div>
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

