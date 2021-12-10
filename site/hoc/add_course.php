<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Khóa học</th>
            <th scope="col">Giá tiền</th>
            <th scope="col">Ngày mua</th>
            <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php $rows = getAll_one_payments($id_user);
            $i = 0;
                foreach ($rows as $key => $value) {
                    $i++;
            ?>
            <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $value['NameCaurse'] ?></td>
            <td><?php echo $value['money'] ?></td>
            <td><?php echo $value['time'] ?></td>
            <td><?php echo $value['trang_thai'] ?></td>
            </tr>
            <?php } ?>
            
        </tbody>
        </table>
</div>
</div>