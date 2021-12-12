<div id="main">
	<div class="head">
        <h2>Thêm lộ trình</h2>
        <div class="col-12">
            </div>
        </div>
        <form action="index.php?action=add_route" method="POST" enctype="multipart/form-data" > 
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id_route">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên lộ trình</label>
            <input type="text" class="form-control" name="route">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh</label>
            <input class="form-control" type="file" id="formFile" name="img">
        </div>

        <button class="btn btn-primary" name="submit">Thêm</button>
        </form> 
</div>





