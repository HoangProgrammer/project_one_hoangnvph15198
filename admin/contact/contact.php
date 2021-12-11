<div id="main">
	<div class="head">
        <h2>Liên hệ</h2>
    </div>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Khóa học</th>
        <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data_contact as $key => $value) {?>
        <tr>
            <td scope="col">
                <?php echo $value['id_contact']  ?>   
            </td>
            <td scope="col">
                <?php echo $value['name']  ?>   
            </td>
            <td scope="col">
                <?php echo $value['email']  ?>   
            </td>
            <td scope="col">
                <?php echo $value['phone_number']  ?>   
            </td>
            <td scope="col">
                <?php echo $value['course']  ?>   
            </td>
            <td scope="col">
                <a  onclick="return confirm('Xóa liên hệ này?')" href="index.php?action=del_contact&id=<?php echo $value['id_contact'] ?>" class="btn btn-primary">Xóa</a>   
            </td>
        </tr>
    <?php }?>
  </tbody>
</table>
</div>




