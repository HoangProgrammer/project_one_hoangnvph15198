<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <h1>Lịch sử học </h1>
      <div class="container_social">
        <?php
        if (isset($_POST["delete_all"])) {
          $err = '';
          if (!isset($_POST["chose_all"])) {
            $err = 'vui lòng chọn';
          } else {
            $id_history = $_POST["chose_all"];
            $export =  implode(',', $id_history);
            delete_history($export);
          }
        }

        $get_history = get_history($id_user);
        ?>
        <h3>các bài đã học gần đây </h3> <br>
        <form action="" method="post">

          <?php if (!empty($get_history)) {?>

            <div class="border_checked">
              <label for="chose_all" class=" btn btn-primary btn-select">Chọn tất cả</label>
              <label for="chose_all" class=" btn btn-danger btn-unselect">bỏ chọn</label>
              <input type="checkbox" hidden id="chose_all">
              <button class="btn btn-danger " name="delete_all">Xóa tất cả lựa chọn</button>
            </div>

            <?php if (isset($err)) { ?>
              <h4 class="alert alert-warning text-danger"> <?= $err ?></h1>
              <?php } ?>
            <?php  } ?>


            <?php 
            foreach ($get_history as $key => $value) : 
              // $get_point =  getAll_point_user($id_user, $value['id_lesson']);
            ?>


              <div class="wrap_social">

                <div class="user_info">
            
                  <input type="checkbox" name="chose_all[]" value='<?= $value['id_history'] ?>' class="select_chose">
                  <h5 style="margin:10px"> <a href=""><?= $value['lessonName'] ?></a></h5>
                  <span><?= get_time($value['timeHistory']); ?> </span>

                </div>


                <a href="index.php?act=delHistory&id_history=<?= $value['id_history'] ?>" class='btn_request btn btn-danger'>xóa</a>

              </div>



            <?php endforeach; ?>

        </form>
      </div>


    </div>
  </div>
</div>


<script type="text/javascript">
  var select_chose = document.querySelectorAll('.select_chose')
  var chose_All = document.querySelector('#chose_all')
  var select = document.querySelector('.btn-select')
  var unselect = document.querySelector('.btn-unselect')

  $('.btn-unselect').hide();
  chose_All.onclick = function() {
    select_chose.forEach(function(element) {

      if (chose_All.checked == true) {
        element.checked = true;
        $('.btn-select').hide();
        $('.btn-unselect').show();
      } else {
        element.checked = false;
        $('.btn-select').show();
        $('.btn-unselect').hide();
      }
    })
  }
</script>