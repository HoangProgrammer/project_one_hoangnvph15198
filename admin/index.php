<style>
    * {
        font-family: 'Montserrat', sans-serif;
    }
</style>
<?php
ob_start();

require_once('nav.php');
require_once('./../dao/route.php');
$dollar=0;
$ro = getAll_payments();  
foreach ($ro as $key => $value) {
 $value['money'] ;
   $dollar+=$value['money'];
} 
$total_dollar=$dollar;
// require("./statistical.php");

?>

 
 
 



<?php

if (!isset($_SESSION["admin"])) {

    header("Location:../index.html");
} else {

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'add_route_form':
                require_once './route/add_route_form.php';
                break;
            case 'add_route':
                if (isset($_POST['submit'])) {
                    if (($_POST['route']) == "" ) {
                        $_SESSION['err_route'] = 'Tên lộ trình không được để trống';
                        header('location: index.php?action=add_route_form');
                        die;    
                    }
                    $ava = $_FILES['img'];
                    $check = strpos($ava['type'], 'image');
                    if ($check === false) {
                        $_SESSION['error_update'] = 'File is not a image';
                        header('location: index.php?action=add_route_form');
                        die;
                    }

                    if ($ava['size'] >= 5000000) {
                        $_SESSION['error_update'] = 'Image is too large';
                        header('location: index.php?action=add_route_form');
                        die;
                    }

                    $foderImg = './../image/';
                    $anhLuu = $foderImg . $ava["name"];
                    move_uploaded_file($ava['tmp_name'], $anhLuu);
                    $url = $ava["name"];

                    $data = [
                        "id_route" => $_POST['id_route'],
                        "route" => $_POST['route'],
                        "img" => $url,
                    ];
                    add_route($data);
                    header('location: index.php?action=route');
                }
                break;
            case 'route':
                $sql = "SELECT * FROM routee";
                $data_route = get_all($sql);
                require_once './route/route.php';
                break;
            case 'update_route_form':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $data_route_update = findById($id);
                }
                require_once './route/update_route.php';
                break;
            case 'update_route':
                if (isset($_POST['submit'])) {
                    $anh = $_FILES['new_img'];
                    if ($anh['size'] == 0) {
                        $url = $_POST['old_img'];
                    } else {
                        $ava = $_FILES['new_img'];
                        $check = strpos($ava['type'], 'image');
                        if ($check === false) {
                            $_SESSION['error_update'] = 'File is not a image';
                            header('location: /du_an_mau/form_update.php');
                            die;
                        }

                        if ($ava['size'] >= 5000000) {
                            $_SESSION['error_update'] = 'Image is too large';
                            header('location: /du_an_mau/form_update.php');
                            die;
                        }

                        $foderImg = './../image/';
                        $anhLuu = $foderImg . $ava["name"];
                        move_uploaded_file($ava['tmp_name'], $anhLuu);
                        $url = $ava["name"];
                    }
                    $data = [
                        "id_route" => $_POST['id_route'],
                        "route" => $_POST['route'],
                        "img" => $url,
                    ];
                    update_route($data);
                }
                break;

            case 'delete_route':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    uproute_course($id);
                    delete_route($id);
                }
                break;
                // contact
            case 'contact':
                $sql = "SELECT * FROM contact";
                $data_contact = get_all($sql);
                require_once("./contact/contact.php");
                break;
            case 'del_contact':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                $sql = "DELETE FROM contact WHERE id_contact = $id";
                pdo_execute($sql);
                header('location: index.php?action=contact');
                break;
            case "statistical":
                require("./statistical.php");
                break;
            case "product":
                $course = Get_caurse();
                require("./course/product.php");
                break;
            case "add":
                require("./course/add_pr.php");
                break;
            case "add_course":
                if (isset($_POST['btn_course'])) {
                    $course_name = $_POST['course_name'];
                    $type = $_POST['type'];
                    $price_course = $_POST['price_course'];
                    $description = $_POST['description'];
                    $id_route = $_POST['id_route'];

                    $image_course = $_FILES['image_course']['name'];
                    $image_tmp = $_FILES['image_course']['tmp_name'];
                    $err = true;
                    if ($course_name == "") {
                        $_SESSION['name'] = "không được để trống";
                        $err = false;
                    }
                    if ($image_course == "") {
                        $_SESSION['image_course'] = "không được để trống";
                        $err = false;
                    }
                    if ($description == "") {
                        $_SESSION['description'] = "không được để trống";
                        $err = false;
                    }

                    move_uploaded_file($image_tmp, "../image/" . $image_course);
                    $data = [
                        ":name" => $course_name,
                        ":img" => $image_course,
                        ":price" => $price_course,
                        ":description" => $description,
                        ":type" => $type,
                        ":id_route" => $id_route,
                    ];
                    // var_dump($data);die;
                    if ($err == false) {
                        header("location:index.php?action=add");
                    } else {
                        $insert = insert_into($data);
                        if ($insert == true) {
                            header("location:index.php?action=product");
                        }
                    }
                }

                break;
            case "updateCourse":
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                $stmt = Get_course_one($id);
                $data_route = Get_all_route();
                require("./course/update_pr.php");
                break;
            case "updateFrom":
                if (isset($_POST['update_course'])) {
                    $course_name = $_POST['course_name'];
                    $type = $_POST['type'];
                    $id_route = $_POST['route'];
                    $_SESSION['id_route'] = $id_route;
                    // var_dump($id_route);die;
                    $price_course = $_POST['price_course'];
                    $description = $_POST['description'];
                    $id = $_POST['id'];
                    $image_course = $_FILES['image_course']['name'];
                    $image_tmp = $_FILES['image_course']['tmp_name'];
                    $err = true;
                    if ($course_name == "") {
                        $_SESSION['name'] = "không được để trống";
                        $err = false;
                    }
                    if ($description == "") {
                        $_SESSION['description'] = "không được để trống";
                        $err = false;
                    }


                    if ($err == false) {
                        header("location:index.php?action=updateCourse&id=$id");
                    } else {
                        $insert = update_course($course_name, $image_course, $price_course, $description, $type, $id_route, $id);

                        $insert = update_course($course_name, $image_course, $price_course, $description, $type, $id_route, $id);

                        move_uploaded_file($image_tmp, "../image/" . $image_course);
                        if ($insert == true) {
                            header("location:index.php?action=product");
                        }
                    }
                }

                break;
            case "deleteCourse":
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deleteCourse($id);
                    header("location:index.php?action=product");
                }
                break;
            case "deleteAll":
                if (isset($_POST['delete_btn_all'])) {
                    if (!isset($_POST['item_course'])) {
                        $_SESSION['errAll'] = "bạn chưa chọn";
                        header("location:index.php?action=product");
                    } else {
                        $item_course = $_POST['item_course'];
                        $item = implode(',', $item_course);
                        // var_dump( $item);
                        deleteCourseALL($item);
                        header("location:index.php?action=product");
                    }
                } else if (isset($_POST['delete_btn_topic'])) {
                    $id_course = $_POST['id_course'];
                    if (!isset($_POST['item_topic'])) {
                        $_SESSION['errAll'] = "bạn chưa chọn";
                        header("location:index.php?action=detail&idCourse=" . $id_course . "");
                    } else {
                        $item_topic = $_POST['item_topic'];
                        $item = implode(',', $item_topic);
                        // var_dump( $item);
                        delete_lesson_topic($item);
                        delete_topicALL($item);
                        header("location:index.php?action=detail&idCourse=" . $id_course . "");
                    }
                }
                break;









                // chủ đề
            case "detail":
                $id_course = $_GET['idCourse'];
                $topic = getAll_topic($id_course);
                require("./lesson_topic/list_topic.php");
                break;
            case "add_lesson_topic":
                require("./lesson_topic/add_topic.php");
                break;
            case "add_topic":
                if (isset($_POST['btn_course'])) {
                    $idCourse = $_POST['idCourse'];
                    $topic_name = $_POST['topic_name'];
                    $err = true;
                    if ($topic_name == "") {
                        $_SESSION['name'] = "không được để trống";
                        $err = false;
                    }
                    $data = [
                        ":topicName" => $topic_name,
                        ":id_course" => $idCourse,
                    ];
                    if ($err == false) {
                        header("Location:index.php?action=add_lesson_topic&idCourse=" . $idCourse . "");
                    } else {
                        $insert_topic = insert_topic($data);
                        if ($insert_topic == true) {

                            header("Location:index.php?action=detail&idCourse=$idCourse");
                        }
                    }
                }
                break;
            case "update_lesson_topic":
                if (isset($_GET['id_topic'])) {
                    $id = $_GET['id_topic'];
                }
                $stmt = get_one_topic($id);
                require("./lesson_topic/update_topic.php");
                break;
            case "update_topic":
                if (isset($_POST['btn_course'])) {
                    $id_lesson = $_POST['id_lesson'];
                    $topic_name = $_POST['topic_name'];
                    $id_course = $_POST['id_course'];
                    $err = true;
                    if ($topic_name == "") {
                        $_SESSION['name'] = "không được để trống";
                        $err = false;
                    }
                    $data = [
                        ":topicName" => $topic_name,
                        ":id" => $id_lesson,
                    ];

                    if ($err == false) {
                        header("Location:index.php?action=update_lesson_topic&id_course=" . $id_course . "&id_topic=$id_lesson");
                    } else {
                        $update_topic = update_topic($data);
                        if ($update_topic == true) {
                            header("Location:index.php?action=detail&idCourse=$id_course");
                        }
                    }
                }
                break;
            case "delete_topic":
                if (isset($_GET['id']) && isset($_GET['idCourse'])) {
                    $id = $_GET['id'];
                    $idCourse = $_GET['idCourse'];
                    delete_lesson_topic($id);
                    $delete = delete_topic($id);
                    if ($delete) {
                        header("Location:index.php?action=detail&idCourse=" . $idCourse . " ");
                    }
                }
                break;

                // bài học
            case "detail_lesson":
                $id_topic = $_GET['id_topic'];
                $getAll_lesson = getAll_lesson($id_topic);
                require("./lesson/lesson.php");
                break;
            case "add_lesson":
                require("./lesson/add_lessons.php");
                break;
            case "add_lessonFROM":
                // var_dump($_POST);die();
                if (isset($_POST['btn_course'])) {
                    $lesson_name = $_POST['lesson_name'];
                    $video_lesson = $_POST['video_lesson'];
                    $time = $_POST['time'];
                    $id_topic = $_POST['id_topic'];
                    $id_course = $_POST['id_course'];
                    $err = true;
                    if ($lesson_name == "") {
                        $_SESSION['name'] = "không được để trống";
                        $err = false;
                    }
                    if ($video_lesson == "") {
                        $_SESSION['video_lesson'] = "không được để trống";
                        $err = false;
                    }
                    if ($time == "") {
                        $_SESSION['time'] = "không được để trống";
                        $err = false;
                    }

                    $data = [
                        ":lesson_name" => $lesson_name,
                        ":video_lesson" => $video_lesson,
                        ":time" => $time,
                        ":id" => $id_topic,
                    ];
                    if ($err == false) {
                        header("location:index.php?action=add_lesson&id_course=" . $id_course . "&id_topic=$id_topic");
                    } else {
                        $insert = insert_lesson($data);
                        if ($insert == true) {
                            header("location:index.php?action=detail_lesson&id_course=" . $id_course . "&id_topic=$id_topic");
                        }
                    }
                }


                break;
            case "update_lesson":
                if (isset($_GET['id_lesson'])) {
                    $id = $_GET['id_lesson'];
                }
                $lesson =  Get_lesson_one($id);
                require("./lesson/update_lesson.php");
                break;
            case "update_lessonFrom":
                if (isset($_POST['btn_course'])) {

                    $lesson_name = $_POST['lesson_name'];
                    $video_lesson = $_POST['video_lesson'];
                    $time = $_POST['time'];
                    $id_lesson = $_POST['id_lesson'];
                    $id_topic = $_POST['id_topic'];
                    $id_course = $_POST['id_course'];

                    $err = true;
                    if ($lesson_name == "") {
                        $_SESSION['name'] = "không được để trống";
                        $err = false;
                    }
                    if ($video_lesson == "") {
                        $_SESSION['video_lesson'] = "không được để trống";
                        $err = false;
                    }
                    if ($time == "") {
                        $_SESSION['time'] = "không được để trống";
                        $err = false;
                    }

                    $data = [
                        ":lesson_name" => $lesson_name,
                        ":video_lesson" => $video_lesson,
                        ":time" => $time,
                        ":id" => $id_lesson,
                    ];
                    if ($err == false) {
                        header("location:index.php?action=update_lesson&id_lesson=$id_lesson&id_course=" . $id_course . "&id_topic=$id_topic");
                    } else {
                        $update_lesson = update_lesson($data);
                        if ($update_lesson == true) {
                            header("location:index.php?action=detail_lesson&id_course=" . $id_course . "&id_topic=$id_topic");
                        }
                    }
                }

                break;
            case "delete_lesson":
                if (isset($_GET['id_lesson']) && isset($_GET['id_topic'])) {
                    $id_lesson = $_GET['id_lesson'];
                    $idTopic = $_GET['id_topic'];
                    $id_course = $_GET['id_course'];
                    $delete = delete_lesson($id_lesson);
                    if ($delete == true) {
                        header("Location:index.php?action=detail_lesson&id_course=" . $id_course . "&id_topic=" . $idTopic . " ");
                    }
                }
                break;
                // quiz
            case "quiz":
                $id_lesson = $_GET['id_lesson'];
                $getQuiz = getAll_quiz($id_lesson);
                require("./quiz/quiz.php");
                break;
            case "add_quiz":

                require("./quiz/add_quiz.php");
                break;
            case "add_quizFROM":
                if (isset($_POST['btn_course'])) {
                    $question = $_POST['question'];
                    $Selection1 = $_POST['Selection1'];
                    $Selection2 = $_POST['Selection2'];
                    $Selection3 = $_POST['Selection3'];
                    $answer = $_POST['answer'];
                    $id_lesson = $_POST['id_lesson'];
                    $id_topic = $_POST['id_topic'];
                    $id_course = $_POST['id_course'];
                    $err = true;
                    if ($question == "") {
                        $_SESSION['question'] = "không được để trống";
                        $err = false;
                    }
                    if ($Selection1 == "") {
                        $_SESSION['Selection1'] = "không được để trống";
                        $err = false;
                    }
                    if ($Selection2 == "") {
                        $_SESSION['Selection2'] = "không được để trống";
                        $err = false;
                    }
                    if ($Selection3 == "") {
                        $_SESSION['Selection3'] = "không được để trống";
                        $err = false;
                    }


                    $data = [
                        ":question" => $question,
                        ":Selection1" => $Selection1,
                        ":Selection2" => $Selection2,
                        ":Selection3" => $Selection3,
                        ":answer" => $answer,
                        ":id_lesson" => $id_lesson,
                    ];
                    if ($err == false) {
                        header("location:index.php?action=add_quiz&id_lesson=$id_lesson&id_course=" . $id_course . "&id_topic=" . $id_topic . "");
                    } else {
                        $insert = insert_quiz($data);
                        if ($insert == true) {
                            header("location:index.php?action=quiz&id_lesson= $id_lesson&id_course=" .  $id_course . "&id_topic=" . $id_topic . "");
                        }
                    }
                }

                break;
            case "update_quiz":
                if (isset($_GET['id_quiz'])) {
                    $id = $_GET['id_quiz'];
                }
                $updateQuiz = Get_quiz_one($id);
                require("./quiz/update_quiz.php");
                break;
            case "update_quizFrom":
                if (isset($_POST['btn_course'])) {
                    $question = $_POST['question'];
                    $Selection1 = $_POST['Selection1'];
                    $Selection2 = $_POST['Selection2'];
                    $Selection3 = $_POST['Selection3'];
                    $answer = $_POST['answer'];
                    $id_quiz = $_POST['id_quiz'];
                    $id_lesson = $_POST['id_lesson'];
                    $id_topic = $_POST['id_topic'];
                    $id_course = $_POST['id_course'];
                    $err = true;
                    if ($question == "") {
                        $_SESSION['question'] = "không được để trống";
                        $err = false;
                    }
                    if ($Selection1 == "") {
                        $_SESSION['Selection1'] = "không được để trống";
                        $err = false;
                    }
                    if ($Selection2 == "") {
                        $_SESSION['Selection2'] = "không được để trống";
                        $err = false;
                    }
                    if ($Selection3 == "") {
                        $_SESSION['Selection3'] = "không được để trống";
                        $err = false;
                    }


                    $data = [
                        ":question" => $question,
                        ":Selection1" => $Selection1,
                        ":Selection2" => $Selection2,
                        ":Selection3" => $Selection3,
                        ":answer" => $answer,
                        ":id" => $id_quiz,
                    ];
                    if ($err == false) {
                        header("location:index.php?action=update_quiz&id_quiz=$id_quiz&id_lesson=$id_lesson&id_course=" .  $id_course . "&id_topic=" . $id_topic . "");
                    } else {
                        $update = update_quiz($data);
                        if ($update == true) {
                            header("location:index.php?action=quiz&id_lesson=$id_lesson&id_course=" .  $id_course . "&id_topic=" . $id_topic . "");
                        }
                    }
                }
                break;
            case "delete_quiz":
                if (isset($_GET['id_quiz']) && isset($_GET['id_lesson'])) {
                    $id_quiz = $_GET['id_quiz'];
                    $id_lesson = $_GET['id_lesson'];
                    $delete = delete_quiz($id_quiz);

                    if ($delete == true) {
                        header("location:index.php?action=quiz&id_lesson=$id_lesson&id_course=" . $_GET['id_course'] . "&id_topic=" . $_GET['id_topic'] . "");
                    }
                }
                break;
            case "account":
                $account = Get_account();
                require_once('./account/category.php');

                break;
            case "edit_user":
                $id = $_GET['id'];
                $get_one = Get_user_one($id);
                require_once('./account/update.php');
                break;
            case "update_user":
                if (isset($_POST['btn_course'])) {
                    $user_name = $_POST['user_name'];
                    $role = $_POST['role'];
                    $status = $_POST['status'];
                    $id = $_POST['id'];
                }
                $data = [
                    ":ten_user" => $user_name,
                    ":status" => $status,
                    ":role" => $role,
                    ":id" => $id,
                ];

                update_user_admin($data);
                header("location:index.php?action=account");
                break;
            case "xoa_user":
                $id = $_GET['id'];
                $deleteUser = deleteUser($id);
                header("location:index.php?action=account");
            case "banner":
                $banner = Get_Banner();
                require_once('./slide/list_slider.php');
                break;
            case "create_slide":
                require_once('./slide/create_slide.php');
                break;
            case "them_slide":
                if (isset($_POST['create_slide_btn'])) {
                    $type = $_POST['type'];
                    $image = $_FILES['image']['name'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    move_uploaded_file($image_tmp, "../image/" . $image);
                    $data = [
                        ":img" => $image,
                        ":type" => $type

                    ];
                    $insert = insert_Banner($data);
                    header("location:index.php?action=banner");
                }
                break;

            case "update_slider":
                $id = $_GET['id_banner'];
                $banner = Get_banner_one($id);
                require_once('./slide/update_slide.php');
                break;
                // mua khóa học
            case "shopping":
                require "./course/shopping_course.php";
                break;
            case "oder_shopping":
                $payments = "quỵt";
                $id_payments = $_GET['id_payments'];
                $data = [
                    'id_user' => $_GET['id_user'],
                    'id_caurse' => $_GET['id_caurse'],
                    'payments' => $payments,
                    'time' => $_GET['time'],
                ];
                $dem_dong = [
                    'id_caurse' => $_GET['id_caurse'],
                    'id_user' => $_GET['id_user'],
                ];
                $number_of_rows = number_rows_ordercaurse($dem_dong);
                $number_rows_thanh_toan = number_rows_thanh_toan($dem_dong);
                if ($number_of_rows == 0) {
                    insert_ordercaurse($data);
                    $data_2 = [
                        'trang_thai' => "1",
                        'id_payments' => $id_payments,
                    ];
                    update_payments($data_2);
                    //   delete_ordercaurse($value['id_payments']);
                    // header('Location: index.php?action=shopping');
                }
                require "./course/shopping_course.php";
                break;
            case "sua_slider":
                if (isset($_POST['update_btn'])) {

                    $type = $_POST['type'];
                    $id = $_POST['id'];
                    $image = $_FILES['image']['name'];
                    $image_tmp = $_FILES['image']['tmp_name'];

                    move_uploaded_file($image_tmp, "../image/" . $image);

                    $update = update_Banner($image, $type, $id);
                    header("location:index.php?action=banner");
                }
            case "xoa_slider":
                $id_banner = $_GET['id_banner'];
                deleteBanner($id_banner);
                header("location:index.php?action=banner");
                break;
            case "comments":
                require("./comment/list_comments.php");
                break;
            case "detail_cm":
                require("./comment/detail_comment.php");
                break;
            case "xoa_cm":
                delete_comment_one($_GET['id_comment']);
                header("location:index.php?action=detail_cm&id=" . $_GET['id'] . "");
                break;
            case "dashboard":
                require("./dashboard.php");
                break;
            case "rating":
                require("./rating/list_rating.php");
                break;
            case "delete_rating":
                delete_rating($_GET['id_rating']);
                header("location:index.php?action=rating");
                break;
            case "blog":
                require("./blog/blog.php");
                break;
            case "delete_blog":
                $id_post = $_GET['id_post'];
                delete_blog($id_post);
                header("location:index.php?action=blog");
                break;

            case "request":
                require("./rating/request_rating.php");
                break;
            case "edit_account":
                require("changer_pass.php");
                break;
            case "log_out":
                unset($_SESSION['Admin']);
                header("Location:login.php");
                break;
            default:
                $course = Get_caurse();
                require("./course/product.php");
                break;
        }
    } else {
        // $course = Get_caurse();
        require("./dashboard.php");
    }
}
require_once('footer.php');

?>