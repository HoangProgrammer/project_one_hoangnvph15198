
<div id="main">

	<div class="head">
		<div class="col-div-6">       
<p class="nav"> Danh Sách Người Dùng </p>
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

        <th class="text-center">tên </th>
        <th class="text-center">gioi tính</th>
        <th class="text-center">số điện thoại</th>
        <th class="text-center">vai trò</th>
        <th class="text-center">email</th>  
        <th class="text-center">mật khẩu</th>  
        <th class="text-center">trạng thái</th>  
        <th colspan="2" class="text-center">thao tác</th>  
         </tr>
        </thead>

        <tbody>

<?php
// $data= GetData_user();
foreach($data as $values){ $status=$values['status']?>
<tr>
<td><?=$values['FULLNAME'] ?></td>

<td>
<?=$values['sex']==1?"Nam":"Nữ" ?>
</td>
<td><?=$values['phone'] ?></td>
<td><?=$values['role']==1?" quản trị":"khách hàng" ?></td>
<td><?=$values['EMAIL'] ?></td>
<td><?= md5($values['PASSWORD']  )?> </td>
<td> 
 <?php if($status==0){
    echo "<span class='text-success'>hoạt đông</span>"; }else{
        echo "<span class='text-danger'>khóa</span>";
 }  ?>   </td>
<td><a class='btn btn-warning'href="index.php?action=edit_user&id=<?= $values['user_id'] ?>">sửa</a> 
 </td>
 <td><a class="delete btn btn-danger" href="index.php?action=xoa_user&id=<?=$values['user_id'] ?>">xóa</a> </td>
</tr>

<?php } ?>
        </tbody>
       
    </table>


    </div>
</div>
