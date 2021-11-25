<?php
if( !isset($_SESSION['user']) && !isset($_SESSION['admin']) ){
require_once('trangchu/trangchu.php');
}else{

if(isset($_SESSION['user'])){
  $id_user=$_SESSION['user']["id"];
  $role=0;
  }
  
if(isset($_SESSION['admin'])){
  $id_user=$_SESSION['admin']["id"];
  $role=1;
  }




if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case "learn":   
            break; 
            default:
            require("./layout/layout_1/nav.php") ;
            break;
    }

}else{

    require("./layout/layout_1/nav.php") ;
}

// if(!isset($_SESSION['user'])){
  
// if(isset($_GET['act']) ){
//     $act = $_GET['act'];
//     switch ($act){
//         case "signup":      
//             require_once "login/auth-signup.php"; 
// break;
//     }

// }else{  

// require_once "login/auth-signin.php"; 

// }

// }else{}
if(isset($_GET['act'])){

    $act = $_GET['act'];
    switch ($act){
    case "blog":      
        require_once "forum/blog.php";      
        break;
    case "detail_blog":      
        require_once "forum/detail_blog.php";      
        break;
        case "Topic":     
            if(isset($_GET['idCourse']))   {
                $id_course= $_GET['idCourse'];
                $getAll_topic=getAll_topic($id_course);
            }     
            require_once "hoc/topic_lesson.php";  
            break;
    case "learn":     
        require_once "hoc/learn.php";         
        break;
    case "detail_course":   
        if(isset($_GET['id_course']))   {
            $id_course= $_GET['id_course'];
            $getAll_topic=getAll_topic( $id_course);
        }      
        require_once "hoc/more_cours.php";      
        break;
    case "quiz":               
        require_once "hoc/exercise_cours.php";      
        break;
    case "Rating":               
        require_once "rating.php";      
        break;
    case "social":               
        require_once "social.php";      
        break;
    case "formRating":  
       if(isset($_POST['content'])){
         $content =$_POST['content'];
         $rating =$_POST['rating'];
         $id_user =$_POST['id_user'];
         $id_child =$_POST['child'];
         $time = $_POST['time'];
             
         $data=[
             "id_user"=>$id_user,
             "id_child"=>$id_child,
             "content"=>$content,
             "time"=>$time,
             "rating"=>$rating,
         ];
        //  insert_Rating($data);
       } 
        break;
    case "account":               
        require_once "user/account.php";      
        break;
    default:
    require_once "home2.php";
    break;
}

}else{

    require_once "home2.php";

}

require("./layout/layout_1/footer.php");

}




?>



