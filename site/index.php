<?php

$menu=Get_menu();
if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action){
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


// require("./layout/layout_1/header.php") ;
if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action){
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



