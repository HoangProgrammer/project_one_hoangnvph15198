
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
		<form action="index.php?action=search" method="post" class="form" >
			<input type="text" class="search" required>
		<button name="search_btn" class="btn-form">  <i class="fa fa-search search-icon"></i>	 </button>	
		</form>
<?php require_once("nav_login.php") ?>
</div>



	<div class="clearfix"></div>
</div>
<div class="row">
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">khách hàng</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'>14</h4>
</div>
<div>
	<i class="fa fa-eye"></i>
</div>
</div>
</div>
	</div>
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">bình luận</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'>124</h4>
</div>
<div>
	<i class="fa fa-comment"></i>
</div>
</div>
</div>
	</div>
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">giỏ hàng</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'>154</h4>
</div>
<div>
<i class="fa fa-shopping-cart"></i>
</div>
</div>
</div>
	</div>
	<div class="col-xl-3">
<div class="body_web">
	<h5 class="title">dollar</h5>
<div class="block_center">

<div class="parameter">
<h4 class='text-danger'>15,745,34 vnd</h4>
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

