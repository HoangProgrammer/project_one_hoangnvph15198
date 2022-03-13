
<?php
session_start();

require_once('../../global.php');
require_once('../../models/pdo.php');
require_once('../../dao/quizDB.php');
require_once('../../dao/pointDB.php');

if (isset($_POST['act']) && $_POST['act'] == "insert_point") {
    $id_user_point = $_POST['id_user_point'];
    $id_lesson = $_POST['id_lesson'];
    $mark = $_POST['mark'];

    insert_point($id_user_point, $id_lesson, $mark);
}

if (isset($_POST['act']) && $_POST['act'] == "check") {

    $out = "";
    $text = "";
    $chose = $_POST['chose'];
    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $final_test = final_test($id);
    $mark =0;
    $_SESSION['success_or_failed']='';
    foreach ($final_test as $item) {
        $text = $item['Selection' . $item['answer'] . ''];
    }
    if ($chose == $final_test[0]['answer']) {
       
        $out = "
        <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Chính xác',
            showConfirmButton: true,
         
          })
        </script>
    ";
        $mark += 2;
        if (isset($_SESSION['mark'])) {
            $_SESSION['mark'] += 2;
        } else {
            $_SESSION['mark'] = $mark;
        }
        insert_point($id_user, $mark);

    } else {
        $out = "
        <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Sai rồi  ',
            text: 'đáp án đúng là :  $text',
            showConfirmButton: true,
          })
        </script>
        ";
 

    }
  
     $_SESSION['success_or_failed'];
    echo $out;
    if(isset($_SESSION['mark'])){
        echo $_SESSION['mark'];
    }else{
        echo $_SESSION['mark']=0;

    }
}



?>


