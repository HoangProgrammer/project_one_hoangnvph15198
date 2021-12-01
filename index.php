<?php 
session_start();
ob_start();

require_once "global.php";
require_once "./models/pdo.php";
require_once "./dao/menuDB.php";
require_once "./dao/quizDB.php";
require_once "./dao/lesson.php";
require_once "./dao/lesson_topicDB.php";
require_once "./dao/orderCourse.php";
require_once "./dao/courseDB.php";
require_once "./dao/BannerDB.php";
require_once "./dao/pointDB.php";
require_once "./dao/comment_lesson.php";
require_once "./dao/accountDB.php";
require_once "./dao/RatingDB.php";
require_once "./dao/Friend.php";
require_once "./dao/forum_post.php";
require_once "./dao/payments.php";
require_once "./dao/progress.php";
require_once "./dao/history.php";
require_once "./site/index.php";

?>
