<?php
// $db = data();
// if (isset($_GET['page'])) {
//   $page = $_GET['page'];
// } else {
//   $page = 1;
// }
// $number = 10;
// $preRows = ($page - 1) * $number;
// //4-1= 3*10=30

// $sql =$db->prepare( "SELECT * FROM products  where 1 order by product_id desc  limit $preRows,$number");
// $sql->execute();
// $select = $sql->fetchAll();

// // var_dump( $select);die();
// $query = "SELECT * FROM products ";
// $stmt = $db->prepare($query);
// $stmt->execute();
// $total_page = $stmt->rowCount();

// $total_row = ceil($total_page / $number);

// var_dump(  $caurse);
?>


<div id="main">
  
  <div class="head">
    <div class="col-div-6">
      <p class="nav"> Danh sách khóa học </p>
    </div>
 

  
    <?php require_once("nav_login.php") ?>
<br>
<br>
<br>
  
    <h5 class="text-warning">
     <?php  
   
   if(isset(  $_SESSION['error_checkbox'])){
    echo  $_SESSION['error_checkbox']  ;
    unset( $_SESSION['error_checkbox']);
  }
  
   ?>

    </h5>
    <form action="index.php?action=deleteAll" method="post" >

   
    <div class="border_checked">
     <label for="chose_all" class=" btn btn-primary btn-select" >Chọn tất cả</label>  
   <label for="chose_all" class=" btn btn-danger btn-unselect"  style="display:none" >bỏ chọn</label> 
   <input  type="checkbox" hidden id="chose_all"> 
   <button name="delete_btn_all" class="btn btn-danger ">Xóa tất cả lựa chọn</button>  


</div>  

<br> <?php if(isset($_SESSION['errAll'])){?>
     
  <span class="alert alert-warning"> <?=
  $_SESSION['errAll'] ; 
     unset($_SESSION['errAll']);
  ?>  </span>   
   <?php  } ?>
<table  class=" table-primary" >
   <thead>
     <tr>
       <th style="color:blue" class="text-center "  scope="col">Lựa chọn</th>
       <th style="color:blue" class="text-center"  scope="col">Tên khóa học</th>
       <th style="color:blue" class="text-center"  scope="col">Hình ảnh</th>
       <th style="color:blue" class="text-center"  scope="col">Giá khóa học</th>

       <th colspan="2" style="color:blue" class="text-center"> 
   <a class=" btn btn-primary " href="index.php?action=add">Thêm</a>  
      </th>
     </tr>
   </thead>
   <tbody>

<?php foreach ($course as $val) { extract($val) ?>
       <tr class="text-center">
      <td> <input type="checkbox" name="item_course[]" value="<?=$id_caurse ?>" class="select_chose"></td> 
         <td name='ten'><?= $NameCaurse ?></td>
         <td><img name="anh" width="150px"  src="../image/<?=$img?>"> </td>
         <td name='dv'><?php  if($price==0){ echo "<p class='text-primary'>miễn phí </p> "; }else{ 
           echo '<p class="text-danger"> '. number_format($price,0).'vnđ </p>';}?></td>  
         <td>
         <a class='btn btn-dark' href="index.php?action=detail_lesson&idCourse=<?=$id_caurse ?>"> Xem </a> 
         <a class='btn btn-warning' href="index.php?action=updateCourse&id=<?=$id_caurse ?> ">Sửa</a> 
         <a name="id_product" class="delete btn btn-danger " href="index.php?action=deleteCourse&id=<?=$id_caurse ?>">Xóa</a>
       </td>
       </tr>
<?php } ?> 
   </tbody>

 </table>

</form>
    <!--  -->
    <!-- <div class="border_checked">
     <label for="chose_all" class=" btn btn-primary btn-select" >chọn tất cả</label>  
   <label for="chose_all" class=" btn btn-danger btn-unselect"  style="display:none" >bỏ chọn</label> 
   <input  type="checkbox" hidden id="chose_all"> 
   <button class="btn btn-danger ">xóa tất cả lựa chọn</button>  
</div> -->
<br>

  </div>


                               
</div> 
 
<!-- // $db = data();
// if (isset($_GET['page'])) {
//   $page = $_GET['page'];
// } else {
//   $page = 1;
// }
// $number = 10;
// $preRows = ($page - 1) * $number;
// //4-1= 3*10=30

// $sql =$db->prepare( "SELECT * FROM products  where 1 order by product_id desc  limit $preRows,$number");
// $sql->execute();
// $select = $sql->fetchAll();

// // var_dump( $select);die();
// $query = "SELECT * FROM products ";
// $stmt = $db->prepare($query);
// $stmt->execute();
// $total_page = $stmt->rowCount();

// $total_row = ceil($total_page / $number);

// var_dump(  $caurse); -->

<!-- <nav aria-label="Page navigation example">
      <ul class="pagination">
        <?php if ($page == 1) {
        } else { ?>
          <li class="page-item">
            <a class="page-link" href="index.php?action=product&page=<?= 1 ?>">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="index.php?action=product&page=<?= $page - 1 ?>">
              <span aria-hidden="true">&lsaquo;</span>
            </a>
          </li>
        <?php } ?>

        <?php
        for ($i = 1; $i <= $total_row; $i++) { ?>
          <?php if ($page == $i) { ?>
            <li class="page-item active"><a class="page-link" href="index.php?action=product&page=<?= $i ?>"> <?= $i ?> </a></li>
          <?php } else { ?>
            <li class="page-item "><a class="page-link" href="index.php?action=product&page=<?= $i ?>" >  <?= $i ?> </a></li>

          <?php  } ?>

        <?php } ?>
    
        <?php

        if ($page == $total_row) {
        } else { ?>
          <li class="page-item">
            <a class="page-link" href="index.php?action=product&page=<?= $page + 1 ?>">
              <span aria-hidden="true">&rsaquo;</span>
            </a>
          </li>

          <li class="page-item">
            <a class="page-link" href="index.php?action=product&page=<?= $total_row ?>">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        <?php  } ?> 

      </ul>
    </nav> -->
   

    