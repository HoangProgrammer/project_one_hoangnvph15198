<?php
require_once('nav.php');
require_once('../models/pdo.php');
require_once('../dao/courseDB.php');

?>

<?php

// if(!isset(  $name_admin))
// {

// header("Location:login.php");

// }else{

// }

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "product":
            $course = Get_caurse();
            require("./course/product.php");

            break;
        case "add":
            require("./course/add_pr.php");
            break;
        case "update_pr":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $stmt = Get_caurse_one($id);
            require("./course/update_pr.php");
            break;
        case "delete":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            break;

            // chủ đề

        case "lesson_topic":
            require("./lesson_topic/list_topic.php");
            break;
        case "add_lesson_topic":

            require("./lesson_topic/add_topic.php");
            break;
        case "update_lesson_topic":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            require("./lesson_topic/update_topic.php");
            break;
        case "delete_lesson_topic":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            break;



            // bài học
        case "lesson":
            require("./lesson/lesson.php");
            break;
        case "add_lesson":        
            require("./lesson/add_lesson.php");
            break;
        case "update_lesson":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $stmt = Get_caurse_one($id);
            require("./lesson/update_lesson.php");
            break;
        case "delete_lesson":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            break;


            // quiz

        case "quiz":
            require("./quiz/quiz.php");
            break;
        case "add_quiz":  
            require("./quiz/add_quiz.php");
            break;
        case "update_quiz":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $stmt = Get_caurse_one($id);
            require("./quiz/update_quiz.php");
            break;
        case "delete_quiz":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            break;



        default:
            require_once('index.php');
            break;
    }
}
// else {
//    header("Location:login.php");
// }
require_once('footer.php');

?>