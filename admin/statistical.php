
<div id="main">

	<div class="head">
		<div class="col-div-6">       
<p class="nav"> Thống kê </p>
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

        <th>mã danh mục </th>
        <th>Tên danh mục</th>
        <th>số lượng sản phẩm</th>
        <th>giá thấp nhất</th>
    
        <th>giá cao nhất</th>  
        <th>giá trung bình</th>  
    
         </tr>
        </thead>

        <tbody>

<?php
$data= GetData_Thong_ke();
foreach($data as $values){
    extract( $values)
    ?>
<tr>
<td><?=$maDM ?></td>
<td><?= $nameDM?></td>
<td><?=$countSp ?></td>
<td><?= number_format( $minSp,0,",",",") ?> đ </td>
<td><?= number_format( $maxSP,0,",",",") ?> đ</td>
<td><?= number_format( $avgSP,0,",",",") ?> đ</td>
</tr>
<?php } ?>

        </tbody>
       
    </table>


    </div>
</div>
