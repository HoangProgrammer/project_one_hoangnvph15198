<?php
$menu=Get_menu();
// if(!isset($_SESSION['user'])){
    
// }else{

// }

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case "learn":    
            require("./layout/layout2/nav.php") ;
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
    case "learn":               
        require_once "hoc/learn.php";      
        break;
    case "Rating":               
        require_once "rating.php";      
        break;
    case "update_account":               
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

?>



