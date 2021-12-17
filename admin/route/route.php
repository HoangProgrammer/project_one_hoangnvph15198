<div id="main">
	<div class="head">
        <div class="col-12">
            <h2>Lộ trình</h2>
        </div>
        <a href="index.php?action=add_route_form" class="btn btn-primary">Thêm mới</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Tên lộ trình</th>
            <th scope="col">Ảnh</th>
            <th scope="col" colspan="2">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_route as $key => $value) { ?>
                <tr>
                    <th><?php echo $value['id_route'] ?></th>
                    <td><?php echo $value['route'] ?></td>
                    <td><img src="../image/<?php echo $value['img'] ?>" alt="ảnh lộ trình" style="width: 100px;height: 100px;"></td>
                    <td><a href="index.php?action=update_route_form&id=<?= $value['id_route'] ?>" class="btn btn-primary">Cập nhật</a></td>
                    <td><a onclick="return confirm('Xóa lộ trình này?')" href="index.php?action=delete_route&id=<?= $value['id_route'] ?>" class="btn btn-primary">Xóa</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>