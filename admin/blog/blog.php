<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> Bài Post Blog</p>

</div>
	<div class="col-div-6">
		<form action="" class="form">
			<input type="text" class="search">
		<button class="btn-form">    <i class="fa fa-search search-icon"></i>	 </button>	
		</form>
</div>
<?php require_once("nav_login.php") ?>
<table class="table table-striped table-bordered">
        <thead>
            <tr> 
        <th>Tên user </th>
        <th>Tiêu đề</th>
        <th>tổng số bình luận</th>
        <th>ngày mới nhất</th>
        <th>Thao tác</th>
        <!-- <th>ngày / giờ bình luận</th>   -->
         </tr>
        </thead>

        <tbody>
<?php
$cm=get_post();
foreach($cm as $key => $val){
    $count_comment_post = count_comment_post($val['id_post']);
    ?>
<tr>
<td><?=$val['ten_user'] ?></td>
<td><?=$val['title_post']  ?></td>
<td><?php echo $count_comment_post['so_luong'] ?></td>
<td><?=$val['time'] ?></td>

<td>
    <a class="btn btn-primary" href="/du_an_1/index.php?act=detail_blog&id_post=<?= $val['id_post'] ?>">xem chi tiết</a>  
    <a class="btn btn-primary" href="index.php?action=delete_blog&id_post=<?= $val['id_post'] ?>">Xóa</a>
</td>  

</tr>

<?php } ?>
        </tbody>
       
    </table>

    <?php 
    if(isset($_SESSION['error_comment'])){ 
      var_dump($_SESSION['error_comment']);die();
      ?>
    
<script>
  swal({
  title: "<?=$_SESSION['error_comment'] ?>",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
</script>
   <?php 
  unset($_SESSION['error_comment']);
  }?>
    



</div>
</div>