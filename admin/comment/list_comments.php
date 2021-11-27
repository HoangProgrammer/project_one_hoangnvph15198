

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> Bình Luận bài học</p>

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
        <th>id comment </th>
        <th> id bài học</th>
        <th>tổng số bình luận</th>
        <th>bình luận mới nhất</th>
        <th>bình luận cũ nhất</th>
        <!-- <th>ngày / giờ bình luận</th>   -->
         </tr>
        </thead>

        <tbody>
<?php
$cm=select_comment();
foreach($cm as $val){
    extract($val);
    ?>
<tr>
<td><?=$IDcomment ?></td>
<td><?=$IDlesson  ?></td>
<td><?=$sumBL ?></td>
<td><?=get_time($maxDate )?></td>
<td><?=get_time($minDate) ?></td>
<td><a class="btn btn-primary" href="index.php?action=detail_cm&id=<?= $IDlesson   ?>">xem chi tiết</a>  </td>  

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

