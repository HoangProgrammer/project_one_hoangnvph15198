

<?php
 $db=data();
 if(isset($_GET['page']) && $_GET['page'] >= 1){
   $page=$_GET['page'];
 }else{
   $page=1;
 }
$number=5;
$preRow= $page*$number-$number; 
$sql="SELECT * FROM slider   limit $preRow,$number";

 $statement = $db->prepare($sql);
 $statement->execute();

 $query= "SELECT * FROM slider ";
 $stmt= $db->prepare( $query);
  $stmt->execute();
$total_page= $stmt->rowCount();
$total_row=ceil($total_page/$number);

?>

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> slider</p>

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
        <th>id slider </th>
        <th>anh slider</th>
        <th><a href="index.php?action=create_slide">thêm slide</a></th>
    
         </tr>
        </thead>

        <tbody>
<?php
while(true){
    $row= $statement->fetch();
    if($row==false){
        break;
    }
    extract($row);
    ?>
<tr>
<th><?=$slider_id   ?></th>
<th><img width="200px" src="../img/<?=$slider_image ?>" alt=""></th>
 <td> <a href="index.php?action=sua_slider&id=<?=$slider_id  ?>">sửa</a></td>
 <td> <a onclick=" return confirm('bạn có muốn xóa không ?')" href="index.php?action=xoa_slider&id=<?=$slider_id  ?>">xóa</a></td>
</tr>

<?php } ?>
        </tbody>
       
    </table>

<!-- pagination -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php  if($page == 1){
      }else{?>
  <li class="page-item" >
      <a   class="page-link" href="index.php?action=slider&page=<?=1?>" >
        <span  aria-hidden="true">&laquo;</span>
      </a>
    </li>
        <li class="page-item"  >
      <a  class="page-link" href="index.php?action=slider&page=<?=$page-1?>" >
        <span  aria-hidden="true">&lsaquo;</span>
      </a>
    </li>
    <?php } ?>
    <!-- chạy vòng lặp -->
  <?php 
  for ($i=1; $i <= $total_row; $i++) { ?>
   <?php if($page == $i){?>
       <li class="page-item active"><a class="page-link" href="index.php?action=slider&page=<?=$i?>"><?=$i?> </a></li>
   <?php }else{?>
     <li class="page-item "><a class="page-link" href="index.php?action=slider&page=<?=$i?>"> <?=$i?> </a></li>
      
  <?php  }?>
   
 <?php } ?>
  <!--  -->
 <?php 

 if($page==$total_row){
   }else{?>
    <li class="page-item">
      <a class="page-link" href="index.php?action=slider&page=<?=$page+1?>" >
        <span aria-hidden="true">&rsaquo;</span>
      </a>
    </li>

    <li  class="page-item">
      <a class="page-link" href="index.php?action=slider&page=<?=$total_row?>" >
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
<?php  }?>

  </ul>
</nav>

</div>
</div>

