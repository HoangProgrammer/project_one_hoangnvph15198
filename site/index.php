<?php

require_once "./models/pdo.php";
require_once "./dao/khach_hang/khach_hang.php";
require_once "./layout/layout_1/header.php";


if(isset($_GET['action'])){
    $action = $_GET['action'];

   echo $link= basename($_SERVER['PHP_SELF'])=="index.php?action=$action" ;


    switch ($action){
    case "blog":
           
        require_once "blog.php";
        
        break;
    default:
    require_once "home.php";
    break;
}

}else{
    require_once "home.php";
}




require_once "./layout/layout_1/footer.php";
?>