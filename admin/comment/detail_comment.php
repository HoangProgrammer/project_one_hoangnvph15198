


<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> comment</p>

</div>
	<div class="col-div-6">
		<form action="" class="form">
			<input type="text" class="search">
		<button class="btn-form">    <i class="fa fa-search search-icon"></i>	 </button>	
		</form>
</div>

<table class="table table-striped table-bordered">
        <thead>
            <tr>

        <th>id comment </th>
        <th>sản phẩm</th>
        <th> người bình luận</th>
        <th>bình luận</th>
        <th>ngày / giờ bình luận</th>  
        <th><a href=""></a></th>  
         </tr>
        </thead>

        <tbody>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$cm=detail_comment_id($id);
foreach($cm as $val){
    extract($val);
   
    ?>
    
<tr>
<td><?=$id_comment  ?></td>
<td><?=$lessonName  ?></td>
<td><?=$ten_user?></td>
<td><?=$content?></td>
<td><?=$time?></td>
 <td> <a class="delete btn btn-danger" href="index.php?action=xoa_cm&id=<?=$coment_id ?>&id_comment=<?=$id?>">xóa</a></td>
</tr>

<?php } ?>
        </tbody>
       
    </table>



</div>
</div>
