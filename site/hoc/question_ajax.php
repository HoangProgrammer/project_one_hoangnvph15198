<?php  
require_once ('../../global.php');    
require_once ('../../models/pdo.php');
require_once ('../../dao/quizDB.php');
require_once ('../../dao/pointDB.php');

if(isset($_POST['act']) && $_POST['act']=="insert_point" ){
$id_user_point=$_POST['id_user_point'];
$id_lesson=$_POST['id_lesson'];
$mark=$_POST['mark'];
insert_point($id_user_point,$id_lesson,$mark);
}

$quiz = getAll_quiz($_POST['id']);
// var_dump($quiz)
echo json_encode($quiz);
?>
