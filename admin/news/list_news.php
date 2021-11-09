


<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav">tin tức</p>

</div>	
	
	<div class="col-div-6">
		<form action="index.php?action=search" method="post" class="form" >
			<input type="text" class="search" required>
		<button name="search_btn" class="btn-form">    <i class="fa fa-search search-icon"></i>	 </button>	
		</form>

<?php require_once("nav_login.php") ?>

</div>

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">chủ đề</th>
      <th scope="col">ảnh</th>
      <th scope="col"><a href="index.php?action=add_news">thêm</a></th>

    </tr>
  </thead>
  <?php $get_news=GetData_news(); ?>
  
  <tbody>
       <?php foreach($get_news as $val) { extract($val) ?>
    <tr>
 
      <th scope="row"><?= $chu_de ?></th>
      <th scope="row">  <img width="200" src="../img/<?= $anh ?>" alt=""></th>
      <th scope="row"><a href="index.php?action=update_news&id_news=<?=$tin_tuc_id ?>">sửa</a> </th>
      <th scope="row"><a href="index.php?action=delete_news&id_news=<?=$tin_tuc_id ?>">xóa</a></th>
   
    </tr>
     <?php } ?>
  </tbody>
   
</table>

	

</div>	
</div>



</div>
</div>

