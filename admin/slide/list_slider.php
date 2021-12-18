

<?php

//  if(isset($_GET['page']) && $_GET['page'] >= 1){
//    $page=$_GET['page'];
//  }else{
//    $page=1;
//  }
// $number=5;
// $preRow= $page*$number-$number; 
// $sql="SELECT * FROM slider   limit $preRow,$number";

//  $statement = $db->prepare($sql);
//  $statement->execute();

//  $query= "SELECT * FROM slider ";
//  $stmt= $db->prepare( $query);
//   $stmt->execute();
// $total_page= $stmt->rowCount();
// $total_row=ceil($total_page/$number);

?>

<div id="main">
	<div class="head">
		<div class="col-div-6">
<p class="nav"> slider</p>

</div>


<?php require_once("nav_login.php") ?>

<table class="">
        <thead>
            <tr>
        <th scope="col" class="text-dark" >stt</th>
        <th scope="col" class="text-dark">anh</th>
        <!-- <th scope="col" class="text-dark">loai</th> -->
        <th scope="col" class="text-dark"><a href="index.php?action=create_slide">thêm slide</a></th>
    
         </tr>
        </thead>

        <tbody>
<?php
$count=0;
foreach($banner as $value){
  extract($value)
    ?>
<tr>
<th><?=$count+=1 ?></th>
<th><img width="200px" src="../image/<?=$image ?>" alt=""></th>
<!-- <th><?=$type?></th> -->
 <td> <a class="btn btn-warning"href="index.php?action=update_slider&id_banner=<?=$id_banner  ?>">sửa</a>
<a class="delete btn btn-danger" href="index.php?action=xoa_slider&id_banner=<?=$id_banner  ?>">xóa</a></td>
</tr>

<?php } ?>
        </tbody>
       
    </table>

<!-- pagination -->


</div>
</div>

<!-- <nav aria-label="Page navigation example">
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
 
  <?php 
  for ($i=1; $i <= $total_row; $i++) { ?>
   <?php if($page == $i){?>
       <li class="page-item active"><a class="page-link" href="index.php?action=slider&page=<?=$i?>"><?=$i?> </a></li>
   <?php }else{?>
     <li class="page-item "><a class="page-link" href="index.php?action=slider&page=<?=$i?>"> <?=$i?> </a></li>
      
  <?php  }?>
   
 <?php } ?>

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
</nav> -->