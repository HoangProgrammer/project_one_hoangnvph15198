<?php
$menu=Get_menu();
// if(!isset($_SESSION['user'])){
    
// }else{

// }
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case "learn":    
            require("./layout/layout2/header.php") ;
            break;
            default:
            require("./layout/layout_1/header.php") ;
            break;
    }


}else{
    require("./layout/layout_1/header.php") ;
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
        require_once "blog.php";      
        break;
    case "learn":               
        require_once "hoc/learn.php";      
        break;
    default:
    require_once "home.php";
    break;
}

}else{
    require_once "home.php";
}




require("./layout/layout_1/footer.php");

?>



