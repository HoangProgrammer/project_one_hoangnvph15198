<div id="main">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Người mua</th>
      <th scope="col">Tên khóa học</th>
      <th scope="col">Số tiền</th>
      <th scope="col">Ngày mua</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Xác nhận</th>
    </tr>
  </thead>
  <tbody>
    <?php

    ?>
  <?php 
    $rows = getAll_payments();
    foreach ($rows as $key => $value) {

  ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $value['ten_user'] ?></td>
      <td><?php echo $value['NameCaurse'] ?></td>
      <td><?php echo $value['money'] ?></td>
      <td><?php echo $value['time'] ?></td>
      <td><?php echo $value['note'] ?></td>
      <td>
        <!-- <button type="button" class="btn btn-dark"><a href="">Xác nhận</a></button> -->
        <?php if($value['trang_thai'] == "Đã xác nhận"){ ?>
          <button type="button" class="btn btn-primary" disabled>Đã xác nhận</button>
        <?php }else{ ?>
          <button class="btn btn-warning"><a href="index.php?action=oder_shopping&id_user=<?= $value['id_user'] ?>&id_caurse=<?= $value['id_caurse'] ?>&time=<?= $value['time'] ?>&id_payments=<?= $value['id_payments'] ?>">xác nhận</a></button>
          
        <?php } ?>
      </td>  
    </tr>
<?php } ?>

  </tbody>
</table>

            </div>

