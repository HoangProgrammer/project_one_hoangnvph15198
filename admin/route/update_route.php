<div id="main">
	<div class="head">
        <h2>Cập nhật lộ trình</h2>
        <div class="col-12">
            </div>
        </div>
        <form action="index.php?action=update_route" method="POST" enctype="multipart/form-data" > 
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id_route" value="<?php echo $data_route_update['id_route'] ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên lộ trình</label>
            <input type="text" class="form-control" name="route" value="<?php echo $data_route_update['route'] ?>">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh</label>
            <input class="form-control" type="file" id="formFile" name="new_img">
            <input type="hidden" class="form-control" name="old_img" value="<?php echo $data_route_update['img'] ?>">
            <img style="width:100px" src="../image/<?php echo $data_route_update['img'] ?>" alt="">
        </div>

        <button class="btn btn-primary" name="submit">Cập nhật</button>
        </form> 
</div>





