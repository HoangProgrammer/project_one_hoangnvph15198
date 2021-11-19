<?php

require_once('nav.php');
require_once('../models/pdo.php');
require_once('../dao/courseDB.php');
require_once('../dao/lesson_topicDB.php');
require_once('../dao/lesson.php');
require_once('../dao/quizDB.php');
require_once('../dao/accountDB.php');

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
        case "add_course":
      if(isset($_POST['btn_course'])){
        $course_name=$_POST['course_name']; 
        $type=$_POST['type'];
        $price_course=$_POST['price_course'];
        $description=$_POST['description'];

         $image_course=$_FILES['image_course']['name'];     
         $image_tmp=$_FILES['image_course']['tmp_name']; 
        $err=true;
             if( $course_name==""){
                 $_SESSION['name']="không được để trống";
                 $err=false;
             }
             if( $image_course==""){
                 $_SESSION['image_course']="không được để trống";
                 $err=false;
             }
             if( $description==""){
                 $_SESSION['description']="không được để trống";
                 $err=false;
             }

                          move_uploaded_file($image_tmp,"../image/".$image_course);
$data=[
    ":name"=>$course_name, 
    ":img"=>$image_course,
     ":price"=>$price_course, 
     ":description"=>$description, 
     ":type"=>$type,   
];
             if( $err==false ){
                 header("location:index.php?action=add");
             }else{         
                $insert=insert_into($data);
if($insert==true){
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
            require("./course/update_pr.php");
            break;
        case "updateFrom":
            if (isset($_POST['update_course'])) {
                $course_name=$_POST['course_name']; 
                $type=$_POST['type'];
                $price_course=$_POST['price_course'];
                $description=$_POST['description'];
                $id=$_POST['id'];
                 $image_course=$_FILES['image_course']['name'];     
                 $image_tmp=$_FILES['image_course']['tmp_name']; 
                $err=true;
                     if( $course_name==""){
                         $_SESSION['name']="không được để trống";
                         $err=false;
                     }
                     if( $description==""){
                         $_SESSION['description']="không được để trống";
                         $err=false;
                     }
                              

                 if( $err==false ){
                         header("location:index.php?action=updateCourse&id=$id");
                     }else{        

                        $insert=update_course($course_name,$image_course,$price_course,$description,$type,$id);

                            move_uploaded_file($image_tmp,"../image/".$image_course);
        if($insert==true){
            header("location:index.php?action=product");
        }
                     }   

              
            }
          
            break;      
        case "deleteCourse":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteCourse( $id);
                header("location:index.php?action=product");
            }
            break;

            // chủ đề
        case "detail":
            $id_course=$_GET['idCourse'];
            $topic=getAll_topic($id_course);    
            require("./lesson_topic/list_topic.php");
            break;
        case "add_lesson_topic":
            require("./lesson_topic/add_topic.php");
            break;
        case "add_topic":
            if (isset($_POST['btn_course'])) {
                $idCourse=$_POST['idCourse'];
                $topic_name=$_POST['topic_name']; 
                $err=true;
                if( $topic_name==""){
                    $_SESSION['name']="không được để trống";
                    $err=false;
                }
                $data=[
                    ":topicName"=>$topic_name, 
                    ":id_course"=>$idCourse,    
                ];
                if( $err==false){
                    header("Location:index.php?action=add_lesson_topic");       
                }else{
                    $insert_topic= insert_topic( $data);
                    if($insert_topic==true){

                  header("Location:index.php?action=detail&idCourse=$idCourse");         
                    }
             
                }
       
            }
            break;
        case "update_lesson_topic":
            if (isset($_GET['id_topic'])) {
                $id = $_GET['id_topic'];
            }
           $stmt= get_one_topic( $id );
            require("./lesson_topic/update_topic.php");
            break;
        case "update_topic":
            if (isset($_POST['btn_course'])) {
                $id_lesson=$_POST['id_lesson'];
                $topic_name=$_POST['topic_name']; 
                $id_course=$_POST['id_course']; 
                $err=true;
                if( $topic_name==""){
                    $_SESSION['name']="không được để trống";
                    $err=false;
                }
                $data=[
                    ":topicName"=>$topic_name, 
                    ":id"=>$id_lesson,    
                ];

                if( $err==false){
                    header("Location:index.php?action=update_lesson_topic&id_topic=$id_lesson");       
                }else{
                    $update_topic= update_topic( $data);
                    if($update_topic==true){
                        header("Location:index.php?action=detail&idCourse=$id_course");            
                    }         
                }   
            }
            break;
        case "delete_topic":  
            if (isset($_GET['id'])&& isset($_GET['idCourse'])) {
                $id = $_GET['id']; 
                $idCourse = $_GET['idCourse']; 
  $delete= delete_topic( $id);      
              if( $delete)     {
                 header("Location:index.php?action=detail&idCourse=". $idCourse." ");     
              }                     
            }   
            break;

            // bài học
        case "detail_lesson":
            $id_topic=$_GET['id_topic'];
            $getAll_lesson=getAll_lesson($id_topic);
            require("./lesson/lesson.php");      
            break;
        case "add_lesson":        
            require("./lesson/add_lessons.php");
            break;
        case "add_lessonFROM":     
            // var_dump($_POST);die();
            if(isset($_POST['btn_course'])){
                $lesson_name=$_POST['lesson_name']; 
                $type=$_POST['type'];
                $video_lesson=$_POST['video_lesson'];
                $time=$_POST['time'];
                $id_lesson_topic=$_POST['id_topic'];
                $err=true;
                     if( $lesson_name==""){
                         $_SESSION['name']="không được để trống";
                         $err=false;
                     }
                     if( $video_lesson==""){
                         $_SESSION['video_lesson']="không được để trống";
                         $err=false;
                     }
                     if( $time==""){
                         $_SESSION['time']="không được để trống";
                         $err=false;
                     }
        
        $data=[
            ":lesson_name"=>$lesson_name, 
            ":video_lesson"=>$video_lesson,
             ":time"=>$time, 
             ":type"=>$type, 
             ":id"=>$id_lesson_topic,   
        ];
                     if( $err==false ){
                         header("location:index.php?action=add_lesson&id_topic=$id_lesson_topic");
                     }else{         
                        $insert=insert_lesson($data);
        if($insert==true){
            header("location:index.php?action=detail_lesson&id_topic= $id_lesson_topic");
        }
                     }   
              
                 }
                 
               
            break;
        case "update_lesson":
            if (isset($_GET['id_lesson'])) {
                $id = $_GET['id_lesson'];
            }
     $lesson=  Get_lesson_one($id);
            require("./lesson/update_lesson.php");
            break;
        case "update_lessonFrom":
            if(isset($_POST['btn_course'])){

                $lesson_name=$_POST['lesson_name']; 
                $type=$_POST['type'];
                $video_lesson=$_POST['video_lesson'];
                $time=$_POST['time'];
                $id_lesson=$_POST['id_lesson'];
                $id_topic=$_POST['id_topic'];

                $err=true;
                     if( $lesson_name==""){
                         $_SESSION['name']="không được để trống";
                         $err=false;
                     }
                     if( $video_lesson==""){
                         $_SESSION['video_lesson']="không được để trống";
                         $err=false;
                     }
                     if( $time==""){
                         $_SESSION['time']="không được để trống";
                         $err=false;
                     }
        
        $data=[
            ":lesson_name"=>$lesson_name, 
            ":video_lesson"=>$video_lesson,
             ":time"=>$time, 
             ":type"=>$type, 
             ":id"=>$id_lesson,   
        ];
                     if( $err==false ){
                         header("location:index.php?action=update_lesson&id_lesson=$id_lesson");
                     }else{         
                        $update_lesson=update_lesson($data);
        if($update_lesson==true){
            header("location:index.php?action=detail_lesson&id_topic=$id_topic");
        }
                     }   
              
                 }

            break;
        case "delete_lesson":
            if (isset($_GET['id_lesson']) && isset($_GET['id_topic']) ) {
                $id_lesson = $_GET['id_lesson'];
                $idTopic = $_GET['id_topic'];
                $delete=delete_lesson($id_lesson);  
                if( $delete==true)     {
                   header("Location:index.php?action=detail_lesson&id_topic=".$idTopic." ");     
                }    
            }
            break;
            // quiz
        case "quiz":
           $id_lesson= $_GET['id_lesson'];
           $getQuiz= getAll_quiz( $id_lesson);
            require("./quiz/quiz.php");
            break;
        case "add_quiz":  
            
            require("./quiz/add_quiz.php");
            break;
        case "add_quizFROM":  
            if(isset($_POST['btn_course'])){
                $question=$_POST['question']; 
                $Selection1=$_POST['Selection1'];
                $Selection2=$_POST['Selection2'];
                $Selection3=$_POST['Selection3'];
                $answer=$_POST['answer'];
                $id_lesson=$_POST['id_lesson'];
                $err=true;
                     if( $question==""){
                         $_SESSION['question']="không được để trống";
                         $err=false;
                     }
                     if( $Selection1==""){
                         $_SESSION['Selection1']="không được để trống";
                         $err=false;
                     }
                     if( $Selection2==""){
                         $_SESSION['Selection2']="không được để trống";
                         $err=false;
                     }
                     if( $Selection3==""){
                         $_SESSION['Selection3']="không được để trống";
                         $err=false;
                     }
                  
        
        $data=[
            ":question"=>$question, 
            ":Selection1"=>$Selection1,
             ":Selection2"=>$Selection2, 
             ":Selection3"=>$Selection3, 
             ":answer"=>$answer, 
             ":id_lesson"=>$id_lesson,   
        ];
                     if( $err==false ){
                         header("location:index.php?action=add_quiz&id_lesson=$id_lesson");
                     }else{         
                        $insert=insert_quiz($data);
        if($insert==true){
            header("location:index.php?action=quiz&id_lesson= $id_lesson");
        }
                     }   
              
                 }
                 
            break;
        case "update_quiz":
            if (isset($_GET['id_quiz'])) {
                $id = $_GET['id_quiz'];
            }
           $updateQuiz= Get_quiz_one(   $id);
            require("./quiz/update_quiz.php");
            break;
        case "update_quizFrom":
            if(isset($_POST['btn_course'])){
                $question=$_POST['question']; 
                $Selection1=$_POST['Selection1'];
                $Selection2=$_POST['Selection2'];
                $Selection3=$_POST['Selection3'];
                $answer=$_POST['answer'];
                $id_quiz=$_POST['id_quiz'];
                $id_lesson=$_POST['id_lesson'];
                $err=true;
                     if( $question==""){
                         $_SESSION['question']="không được để trống";
                         $err=false;
                     }
                     if( $Selection1==""){
                         $_SESSION['Selection1']="không được để trống";
                         $err=false;
                     }
                     if( $Selection2==""){
                         $_SESSION['Selection2']="không được để trống";
                         $err=false;
                     }
                     if( $Selection3==""){
                         $_SESSION['Selection3']="không được để trống";
                         $err=false;
                     }
                  
        
        $data=[
            ":question"=>$question, 
            ":Selection1"=>$Selection1,
             ":Selection2"=>$Selection2, 
             ":Selection3"=>$Selection3, 
             ":answer"=>$answer, 
             ":id"=>$id_quiz,   
        ];
                     if( $err==false ){
                         header("location:index.php?action=update_quiz&id_quiz=$id_quiz");
                     }else{         
        $update=update_quiz($data);
        if($update==true){
            header("location:index.php?action=quiz&id_lesson=$id_lesson");
        }
                     }           
                 }
            break;
        case "delete_quiz":
            if ( isset($_GET['id_quiz']) && isset( $_GET['id_lesson'])  ) {
                $id_quiz = $_GET['id_quiz'];
                $id_lesson = $_GET['id_lesson'];
               $delete= delete_quiz( $id_quiz);

               if( $delete==true){
                  header("location:index.php?action=quiz&id_lesson=$id_lesson");   
               }      
            }
            break;
            case "account":
                $account=Get_account();
require_once ('./account/category.php');

break;
            case "edit_user":
                $id=$_GET['id'];
                $get_one=Get_user_one($id);
require_once ('./account/update.php');
break;
            case "update_user":
                if(isset($_POST['btn_course'])){
                    $user_name=$_POST['user_name']; 
                    $role=$_POST['role'];
                    $status=$_POST['status'];
                    $id=$_POST['id'];
                }
                $data=[
                    ":ten_user"=>$user_name,
                    ":status"=>$status,
                    ":role"=>$role,
                    ":id"=>$id,
                ];

                update_user_admin($data);
                header("location:index.php?action=account");
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