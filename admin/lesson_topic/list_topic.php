


<div id="main">
  
  <div class="head">
    <div class="col-div-6">
      <p class="nav"> chủ đề </p>
    </div>
 

  
    <?php require_once("nav_login.php") ?>
<br>
<br>
<br>
  <form action="index.php?action=deleteAll" method="post" >
    <input type="hidden" name="id_course" value="<?=$_GET['idCourse']?>">
    <h5 class="text-warning">
    <?php if(isset($_SESSION['errAll'])){?>
     
     <span class="alert alert-warning"> <?=
     $_SESSION['errAll'] ; 
        unset($_SESSION['errAll']);
     ?>  </span>   
      <?php  } ?>
    </h5>
<div class="border_checked">
     <label for="chose_all" class=" btn btn-primary btn-select" >chọn tất cả</label>  
   <label for="chose_all" class=" btn btn-danger btn-unselect"  style="display:none" >bỏ chọn</label> 
   <input type="checkbox" hidden id="chose_all"> 
   <button name="delete_btn_topic" class=" btn btn-danger " name="btn-deletes">xóa tất cả lựa chọn</button>  
 
</div>

<br>



    <table >
   
      <thead>
        <tr>
          <th style="color:blue" class="text-center">lựa chọn</th>
          <th style="color:blue" class="text-center">tên chủ đề</th>
          <th colspan="2" style="color:blue" class="text-center"> <a class="btn btn-primary" href="index.php?action=add_lesson_topic&idCourse=<?=$id_course?>">Thêm</a> </th>
        </tr>
      </thead>
      <tbody>


     
<?php  
 foreach ($topic as $val) { extract($val);     $id_lesson_topics;?>

          <tr class="text-center">
         <th> <input type="checkbox" name="item_topic[]" value="<?= $id_lesson_topics?>" class="select_chose"></th> 
            <th name='ten'><?= $topicName ?></th>       
            <th>
            <a class='btn btn-dark' href="index.php?action=detail_lesson&id_course=<?=$_GET['idCourse']?>&id_topic=<?=$id_lesson_topics ?>">xem bài học</a> 
            <a class='btn btn-warning' href="index.php?action=update_lesson_topic&id_course=<?=$_GET['idCourse']?>&id_topic=<?=$id_lesson_topics ?> ">sửa</a> 
            <a name="id_product" class="delete btn btn-danger " href="index.php?action=delete_topic&id=<?=$id_lesson_topics?>&idCourse=<?=$_GET["idCourse"] ?>">xóa</a></th>
          </tr>
   <?php  }?>
        
      </tbody>

    </table>

    </form>

      <a class="btn btn-primary"href="index.php?action=product?>">quay lại</a>
  
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