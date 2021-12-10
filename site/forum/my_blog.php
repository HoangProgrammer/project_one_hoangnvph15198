<div class="pcoded-main-container">
        <div class="pcoded-module">
<?php
    $number_post_user = number_post_user($id_user);
    if($number_post_user == 0){
?>
<span class="pcoded-content-item-span">Bạn chưa có bài đăng nào</span>
<?php } else{ ?>
<div id="main">
	<div class="head">
		<div class="col-div-6">
<h2 class="nav"> Bài Viết của tôi của tôi</h2>

</div>
	<br>
	<br>

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
$cm=get_post_user($id_user);
foreach($cm as $key => $val){
    $count_comment_post = count_comment_post($val['id_post']);
    ?>
<tr>
<td><?=$val['ten_user'] ?></td>
<td><?=$val['title_post']  ?></td>
<td><?php echo $count_comment_post['so_luong'] ?></td>
<td><?=$val['time'] ?></td>

<td>
    <a class="btn  btn-primary " href="forum/comment/<?= $val['id_post'] ?>">xem chi tiết</a>  
    <a class="btn  btn-danger" href="index.php?act=delete_blog&id_post=<?= $val['id_post'] ?>">Xóa</a>
    
    <a class="btn  btn-warning btn_blog" href="forum/FixBlog/<?= $val['id_post'] ?>" style=" color: rgb(255, 255, 253);">Sửa</a>
            
     
</td>  

</tr>

<?php } ?>
        </tbody>
       
    </table>
    <?php } ?>
    
    

           

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
</div>
</div>
