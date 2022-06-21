
<div id="main">

	<div class="head">
		<div class="col-div-6">       
<p class="nav"> Danh Sách Người Dùng </p>
</div>



<?php require_once("nav_login.php") ?>

<table class="table table-striped table">
        <thead>
            <tr>

        <th class="text-center">tên </th>
        <th class="text-center">ảnh</th>
        <th class="text-center">vai trò</th>
        <th class="text-center">email</th>  
        <th class="text-center">thời gian tham gia</th>  
        <th class="text-center">trạng thái</th>  
        <th colspan="2" class="text-center">thao tác</th>  
         </tr>
        </thead>

        <tbody>

<?php

foreach($account as $values){ extract($values)?>
<tr>
<td><?=$ten_user ?></td>

<td>
    <?=$img=($image==='') ? '<img width=100px src="../image/users.jpg" alt="">': '<img width=100px src="../image/'.$image.'>" alt="">';?>
</td>
<td><?=$values['role']==1?" <p class='text-danger'>quản trị</p> ":"<p class='text-primary'>Khách hàng</p>" ?></td>
<td><?=$email ?></td>
<td><?=get_time($start_time) ?></td>
<td> 
 <?php if($status==0){
    echo "<span class='text-success'>hoạt đông</span>"; }else{
        echo "<span class='text-danger'>khóa</span>";
 }  ?>   </td>
<td>
    <a class='btn btn-warning'href="index.php?action=edit_user&id=<?= $id_user  ?>">sửa</a> 
<!-- <a class="delete btn btn-danger" href="index.php?action=xoa_user&id=<?= $id_user?>">xóa</a> </td> -->
</tr>

<?php } ?>
        </tbody>
       
    </table>


    </div>
</div>
