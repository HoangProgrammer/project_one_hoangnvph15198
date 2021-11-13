


  
<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> Category</p>
</div>

	<div class="col-div-6">
		<form action="index.php?action=search"  method="post" class="form" >
			<input type="text" class="search" name="key" required>
		<button class="btn-form" name="search_btn"> <i class="fa fa-search search-icon"></i>	 </button>	
		</form>
</div>

<table border="1" cellspacing="4" class="table table-strip">
<thead>

<tr class="text-center text-primary">
    <th>tên SP</th>
    <th>ảnh SP</th>
    <th>Thông Tin</th>  
    <th> <a href="index.php?action=add">Thêm</a> </th>  
</tr>


</thead>
<tbody>
    
<?php

if(isset($_SESSION['err_search'])){?>

<?php
      if(isset( $_SESSION['err_search'])){ 

    $err=" <h2 class='btn btn-warning'> ".$_SESSION['err_search']."</h2>";
    unset( $_SESSION['err_search'] );
 } ?>

 <?php }else{ ?>

  <?php  
if(isset($_SESSION['search'])){  ?>
 <?php  
  $search=$_SESSION['search'];
   foreach($search as  $value){?>
    <tr class="text-center">
        <th  name='ten'><?=$value['product_name']?></th>
        <td><img name="anh" width="200px" src="../img/<?=$value['product_image']?>"> </td>
        <th name='thong_tin'><?=$value['product_info']?></th>
        <th ><a href="index.php?action=update_pr&id=<?=$value['product_id'] ?>">sửa</a> / <a href="index.php?action=xoa&id=<?=$value['product_id']?>">xóa</a></th>
    </tr>

 <?php } ?>

    <?php } ?>

    <?php } ?>
</tbody>
<td>
    <?php if(isset($err)){
        echo $err;
    } ?>
</td>

</div>
</div>

