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
      <p class="nav"> danh sách câu hỏi </p>
    </div>
 
  
    <?php require_once("nav_login.php") ?>
<br>
<br>
<br>
  <form action="index.php?action=deletes_pr" method="post" >
    <h5 class="text-warning">
     <?php  
   
   if(isset(  $_SESSION['error_checkbox'])){
    echo  $_SESSION['error_checkbox']  ;
    unset( $_SESSION['error_checkbox']);
  }
  
   ?>

    </h5>
    
<div class="border_checked">
     <label for="chose_all" class=" btn btn-primary btn-select" >chọn tất cả</label>  
   <label for="chose_all" class=" btn btn-danger btn-unselect"  style="display:none" >bỏ chọn</label> 
   <input type="checkbox" hidden id="chose_all"> 
   <button class=" btn btn-danger " name="btn-deletes">xóa tất cả lựa chọn</button>  
 
</div>

<br>

    <table >
      <thead>
        <tr>
          <th style="color:blue" class="text-center">lựa chọn</th>
          <th style="color:blue" class="text-center">Câu hỏi</th>
          <th style="color:blue" class="text-center">image</th>
          <th style="color:blue" class="text-center">lựa chọn 1</th>
          <th style="color:blue" class="text-center">lựa chọn 2</th>
          <th style="color:blue" class="text-center">lựa chọn 3</th>
          <th style="color:blue" class="text-center">lựa chọn 4</th>
          <th style="color:blue" class="text-center"> đáp án đúng</th>
          <th colspan="2" style="color:blue" class="text-center"> <a class="btn btn-primary" href="index.php?action=add_quiz&&id_lesson=<?=$id_lesson ?>&idCourse=<?=$_GET['idCourse']?>">Thêm</a> </th>
        </tr>
      </thead>
      <tbody>


     
<?php foreach ($getQuiz as $val) { extract($val) ?>
          <tr class="text-center">
         <th>
            <input type="checkbox" name="chose_deletes[]" value="" class="select_chose">
          </th> 
            <th name='ten'><?= $question ?></th>
            <th name='ten' > <img  width="100px" src="../assets/images/quizs/<?=$img?>" alt=""> </th>

            <th name='dv'><?=$Selectiona?></th>
            <th name='dv'><?=$Selectionb?></th>
            <th name='dv'><?=$Selectionc  ?></th>
            <th name='dv'><?=$Selectiond  ?></th>
            <th name='dv'><?=$answer?></th>    
            <th>
              <a class='btn btn-warning' href="index.php?action=update_quiz&id_quiz=<?=$id_quiz?>&id_lesson=<?=$id_lesson ?>&idCourse=<?=$_GET['idCourse']?> ">sửa</a>
           <a  class=" btn btn-danger " href="index.php?action=delete_quiz&id_quiz=<?=$id_quiz?>&id_lesson=<?=$id_lesson ?>&idCourse=<?=$_GET['idCourse']?>">xóa</a>

          </th>

          </tr>
   <?php } ?>
        
      </tbody>

    </table>
    <br>
    <br>
<a class="btn btn-primary" href="index.php?action=detail_lesson&idCourse=<?=$_GET['idCourse']?>">quay lại</a>
    </form>

    <!-- <div class="border_checked">
     <label for="chose_all" class=" btn btn-primary btn-select" >chọn tất cả</label>  
   <label for="chose_all" class=" btn btn-danger btn-unselect"  style="display:none" >bỏ chọn</label> 
   <input  type="checkbox" hidden id="chose_all"> 
   <button class="btn btn-danger ">xóa tất cả lựa chọn</button>  
</div> -->
<br>









    <!-- pagination -->
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
    </nav>

  </div>
</div>