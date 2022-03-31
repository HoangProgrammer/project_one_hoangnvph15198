
<style>
	div#piechart {
    position: absolute;
    left: 20%;
}
</style>
<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> Biểu đồ</p>

</div>	
	
	<div class="col-div-6">
		<!-- <form action="index.php?action=search" method="post" class="form" >
			<input type="text" class="search" required>
		<button name="search_btn" class="btn-form">  <i class="fa fa-search search-icon"></i>	 </button>	
		</form> -->
<?php require_once("nav_login.php") ?>
</div>

<?php


$Get_account=Get_account();
$count_user=0;
foreach ($Get_account as $value){
	$count_user+=1;
}
$getAll_payments=getAll_payments();
$count_payments=0;
foreach ($getAll_payments as $value){
	$count_payments+=1;
}
// $getAll_comment_lesson=getAllLesson();
// $count_lesson=0;
// foreach ($getAll_comment_lesson as $value){
// 	$count_lesson+=1;
// }
?>

	<div class="clearfix"></div>
</div>
<div class="row">
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">khách hàng</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'><?=$count_user?></h4>
</div>
<div>
	<i class="fa fa-eye" style="font-size:x-large; color:#116eee"></i>
</div>
</div>
</div>
	</div>
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">phản hồi</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'><?=Get_count_Rating()?></h4>
</div>
<div>
	<i class="fa fa-comment" style="font-size:x-large; color:#3ea75c"></i>
</div>
</div>
</div>
	</div>
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">giỏ hàng</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'><?=$count_payments?></h4>
</div>
<div>
<i class="fa fa-shopping-cart" style="font-size:x-large; color:#dd5e46"></i>
</div>
</div>
</div>
	</div>
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">doanh thu</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'> <?=$total_dollar?> </h4>
</div>
<div>
<i class="fa fa-dollar"></i>
</div>
</div>
</div>
	</div>
</div>

<br>
<br>
<br>
<div class="row">
<div class="col-lg-12">
	<div id="piechart"></div>
	</div>
</div>
	




	<div class="clearfix"></div>
	<br/>

	
</div>



</div>
</div>

