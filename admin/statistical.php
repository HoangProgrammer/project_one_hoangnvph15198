
<div id="main">

	<div class="head">
		<div class="col-div-6">       
<p class="nav"> Thống kê </p>
</div>
<!-- 
<div class="col-div-6">       
 <form action="" class="form">
			<input type="text" class="search">
		<button class="btn-form">    <i class="fa fa-search search-icon"></i>	 </button>	
		</form>
</div> -->
<?php require_once("nav_login.php") ?>

<table class="table table-striped table-bordered">
        <thead>
            <tr>

        <th>mã khóa học </th>
        <th>Tên khóa học</th>
        <th>số chủ đề</th>
        <th>số bài học</th>
        <!-- <th>giá thấp nhất</th>
    
        <th>giá cao nhất</th>  
        <th>giá trung bình</th>   -->
    
         </tr>
        </thead>

        <tbody>

<?php
$data= GetData_Thong_ke();
foreach($data as $values){
    extract( $values)
    ?>
<tr>
<td><?=$id_caurse ?></td>
<td><?= $NameCourse?></td>
<td><?=$tong_topic ?></td>
<td><?=$lesson ?></td>
</tr>
<?php } ?>

        </tbody>
       

      
    </table>
    <br>
        <br>
        <br>
        <br>

        <div class="col-div-6">       
<p class="nav"> Thống kê số người học</p>
</div>
<table class="table table-striped table-bordered">
        <thead>
            <tr>
        <th>mã khóa học </th>
        <th>Tên khóa học</th>
        <th>số người học</th>
         </tr>
        </thead>

        <tbody>

<?php
$data= GetData_Thong_ke_user();
$Get_course=Get_caurse();

  
foreach($data as $values){  extract( $values);?>
  
<tr>
<td><?=$sum_course  ?></td>
<td><?= $name?></td>
<td><?=$user  ?></td>
</tr>
   
<?php }  ?>

        </tbody>
       
    </table>


    </div>
</div>
