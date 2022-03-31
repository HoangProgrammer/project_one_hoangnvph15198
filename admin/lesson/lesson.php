


<div id="main">
  
  <div class="head">
    <div class="col-div-6">
      <p class="nav"> bài học </p>
    </div>
 
  
  
    <?php require_once("nav_login.php") ?>
<br>
<br>
<br>
  <form action="index.php?action=deleteAll" method="post" >
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
   <button class=" btn btn-danger " name="delete_lesson">xóa tất cả lựa chọn</button>  
 
</div>
<br>


    <table >
   
      <thead>
        <tr>
          <th style="color:blue" class="text-center">lựa chọn</th>
          <th style="color:blue" class="text-center">tên bài học</th>
          <!-- <th style="color:blue" class="text-center">video bài học</th>
          <th style="color:blue" class="text-center">time bài học</th> -->

          <th colspan="2" style="color:blue" class="text-center"> 

          <a class="btn btn-primary" href="index.php?action=add_lesson&idCourse=<?=$_GET['idCourse']?>">Thêm</a> 
          
        </th>

        </tr>
      </thead>
      <tbody>

<?php  
 foreach ($getAll_lesson as $val) { extract($val);     $id_lesson ;?>
          <tr class="text-center">
         <th> <input type="checkbox" name="chose_deletes[]" value="" class="select_chose"></th> 
            <th name='ten'><?= $lessonName?></th>   
            <th>
            <a class='btn btn-dark' href="index.php?action=quiz&id_lesson=<?=$id_lesson ?>&idCourse=<?=$_GET['idCourse']?>">xem quiz</a> 
            <a class='btn btn-warning' href="index.php?action=update_lesson&id_lesson=<?=$id_lesson ?>&idCourse=<?=$_GET['idCourse']?>">sửa</a> 
            <a name="id_product" class="delete btn btn-danger " href="index.php?action=delete_lesson&id_lesson=<?=$id_lesson?>&idCourse=<?=$_GET['idCourse']?>">xóa</a>
          </th>
          </tr>
   <?php  }?>
        
      </tbody>

    </table>
    <br>
    <br>
<a href="index.php?action=product" class="btn btn-primary ">quay lại</a>
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