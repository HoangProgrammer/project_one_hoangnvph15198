                    <?php
                    if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
                        require_once('trangchu/trangchu.php');
                    } else {

                        if (isset($_SESSION['user'])) {
                            $id_user = $_SESSION['user']["id"];
                            $role = 0;
                        }

                        if (isset($_SESSION['admin'])) {
                            $id_user = $_SESSION['admin']["id"];
                            $role = 1;
                        }

                        if (isset($_GET['act'])) {
                            $act = $_GET['act'];
                            switch ($act) {
                                case "learn":
                                    break;
                                default:
                                    require("./layout/layout_1/nav.php");
                                    break;
                                case "buyCourse":
                                    break;
                            }
                        } else {

                            require("./layout/layout_1/nav.php");
                        }

                        // require_once('./layout/layout_1/header.php');

                        if (isset($_GET['act'])) {

                            $act = $_GET['act'];
                            switch ($act) {
                                case "forum":
                                    require_once "forum/blog.php";
                                    break;
                                case "comment":
                                    require_once "forum/detail_blog.php";
                                    break;
                                case "rep_forum":
                                    if (isset($_POST['reply'])) {
                                        $id_post = $_POST['id_post'];
                                        $contentReply = $_POST['contentReply'];
                                        $child = $_POST['child'];
                                        $time = date("Y-m-d H:i:s");
                                        $data = [
                                            'id_user' => $id_user,
                                            'id_post' => $id_post,
                                            'content' => $contentReply,
                                            'id_parent' => $child,
                                            'time' => $time,
                                        ];
                                        insert_comment_post($data);
                                        header('Location:index.php?act=detail_blog&id_post=' . $id_post . '');
                                    }
                                    break;
                                case "delete_cm_forum":
                                    if (isset($_GET['id_comment']) && isset($_GET['id_post'])) {
                                        $id_comment = $_GET['id_comment'];
                                        $id_post = $_GET['id_post'];
                                        $list=getAll_comment_post($id_post);
                                        delete_comment_child($id_comment,$list);
                                        delete_comment_parent($_GET['id_comment']);
                                        header('Location:index.php?act=detail_blog&id_post='.$id_post);
                                    }
                                    break;
                                case "comment_post":
                                    if (isset($_POST['button'])) {
                                        $comment = $_POST['comment'];
                                        $id_post = $_POST['id_post'];
                                        $id_parent = 0;
                                        $time = date("Y-m-d H:i:s");
                                        $data = [
                                            'id_user' => $id_user,
                                            'id_post' => $id_post,
                                            'content' => $comment,
                                            'id_parent' => $id_parent,
                                            'time' => $time,
                                        ];
                                        insert_comment_post($data);
                                        header('Location:index.php?act=detail_blog&id_post=' . $id_post . '');
                                    }
                                    break;
                                case "add_post":
                                    if (isset($_POST['button'])) {
                                        $title = $_POST['title'];
                                        $content = $_POST['editor1'];
                                        $time = date("Y-m-d H:i:s");
                                        $interactions = 1;

                                        $data = [
                                            'id_user' => $id_user,
                                            'content' => $content,
                                            'time' => $time,
                                            'interactions' => $interactions,
                                            'title_post' => $title,
                                        ];
                                        insert_post($data);
                                    }
                                    header('Location: index.php?act=blog');
                                    break;
                                case "edit_post":
                                    if (isset($_POST['edit'])) {
                                        $id_comment = $_POST['id_comment'];
                                        $id_post = $_POST['id_post'];
                                        $content = $_POST['content'];
                                        $time = date("Y-m-d H:i:s");
                                        update_comment_post( $content, $time ,$id_comment);
                                    }
                                    header('Location:index.php?act=detail_blog&id_post=' . $id_post . '');
                                    break;


// comment lesson

                                case "comment_lesson":
                                    if (isset($_POST['comment'])) {
                                        $id_user = $_POST['id_user'];
                                        $id_lesson = $_POST['id_lesson'];                                     
                                        $id_course = $_POST['id_course'];
                                        $Topic = $_POST['Topic'];
                                        $content = $_POST['content'];
                                        $child = 0;
                                        $time = date('Y-m-d H:i:s');
                                        $arr = array();
                                        if ($content == "") {
                                            $_SESSION['err'] = "không được để trống";
                                            header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);
                                        } else {
                                            insert_comments($id_user, $id_lesson, $content, $child, $time);
                                            
                                        }
                                    }
                                    header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);
                                    break;

                                case "rep_lesson":
                                                  if (isset($_POST['comment_child'])) {
                                    $id_user;
                                    $child = $_POST['child'];
                                    $id_lesson = $_POST['id_lesson'];
                                    $id_course = $_POST['id_course'];
                                    $Topic = $_POST['Topic'];
                                    $content = $_POST['content'];
                                    $time = date('Y-m-d H:i:s');
                                    // var_dump($time);
                                    $arr = array();
                                    if ($content == "") {
                                        $_SESSION['err'] = "không được để trống";
                                        header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);   
                                    } else {
                                        insert_comments($id_user, $id_lesson, $content, $child, $time);
                                    }
                                }
                                    header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);
                                    break;

                                case "edit_cm_lesson":
                                    // var_dump($_POST);exit;
                                                  if (isset($_POST['edit_btn'])) {
                                    $id_comment= $_POST['id_comment'];                               
                                    $id_lesson = $_POST['id_lesson'];
                                    $id_course = $_POST['id_course'];
                                    $Topic = $_POST['id_topic'];
                                    $content = $_POST['content'];
                                    $time = date('Y-m-d H:i:s');
                                    $arr = array();
                                    if ($content == "") {
                                        $_SESSION['err'] = "không được để trống";
                                        header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);   
                                    } else {
                                        update_comments($content, $time, $id_comment);
                                    }
                                }
                                    header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);
                                    break;

                                case "delete_cm_lesson":

                                                  if (isset($_GET['id_comment'])) {
                                    $id_comment= $_GET['id_comment'];                               
                                    $id_lesson = $_GET['id_lesson'];
                                    $id_course = $_GET['id_course'];
                                    $Topic = $_GET['id_topic'];  
                                   $list= getAll_comment_lesson( $id_lesson );
                                    delete_comment_lesson($id_comment,$list);             
                                        delete_comment_one($id_comment);
                                   
                                }
                                    header('Location:index.php?act=learn&idCourse='. $id_course.'&Topic='.$Topic.'&lesson='. $id_lesson);
                                    break;














                                case "Topic":
                                    if (isset($_GET['idCourse'])) {
                                        $id_course = $_GET['idCourse'];
                                        $getAll_topic = getAll_topic($id_course);
                                    }
                                    require_once "hoc/topic_lesson.php";
                                    break;

                                case "learn":
                                    require_once "hoc/learn.php";
                                    break;
                                case "detail_course":
                                    if (isset($_GET['id_course'])) {
                                        $id_course = $_GET['id_course'];
                                        $getAll_topic = getAll_topic($id_course);
                                    }
                                    require_once "hoc/more_cours.php";
                                    break;
                                case "quiz":
                                    require_once "hoc/exercise_cours.php";
                                    break;
                                case "RaTing":
                                    require_once "rating.php";
                                    break;
                                case "social":
                                    require_once "social.php";
                                    break;
                                case "buyCourse":
                                    require_once "vnpay_php/index.php";
                                    break;
                                case "account":
                                    require_once "user/account.php";
                                    break;
                                case "history":
                                    require_once "history.php";
                                    break;
                                case "delHistory":
                                    if(isset($_GET['id_history'])){
                                        delete_history($_GET['id_history']);
                                        header("Location:history");
                                    }
                                    break;
                                case "profile":
                                    require_once "social/profile_friend.php";
                                    break;
                                case "logout":
                                    if (isset($_SESSION['user'])) {
                                        unset($_SESSION['user']);
                                        header("Location:index.php");
                                    }
                                    if (isset($_SESSION['admin'])) {
                                        unset($_SESSION['admin']);
                                        header("Location:index.php");
                                    }
                                    break;

                                default:
                                    require_once "home2.php";
                                    break;
                            }
                        } else {

                            require_once "home2.php";
                        }

                        require("./layout/layout_1/footer.php");
                    }
