<?php require_once('../home/nav.php')  ?>

<br>
<h3 class="text-center">Thêm</h3>
<br>
    <form action="post_processing.php?action=them" method="post">
     
<div class="from">
    <label class="form-label" for="">Tên Khách Hàng</label>
    <input class="form-control" name="tenKH" type="text">
</div>
<div class="from">
    <label class="form-label" for="" >Giới Tính</label>
  <select  name="GT">
     <option value="1">nam</option>
     <option value="0">nữ</option>
  </select>
</div>
<div class="from">
    <label class="form-label" for="">số điện thoại</label>
    <input class="form-control" name="sdt" type="text">
</div>
<div class="from">
    <label class="form-label" for="">địa chỉ</label>
    <input class="form-control" name="DiaChi" type="text">
</div>
<div class="from">
    <label class="form-label" for="">email</label>
    <input class="form-control" name="email" type="text">
</div>
<div class="to">
<button name="add" class="btn btn-primary">thêm</button>
<a href="category.php">quay lại</a>
</div>

    </form>
    <br>
<br>
    <?php require_once('../home/footer.php')  ?>