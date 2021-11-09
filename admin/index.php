<?php  
require_once('nav.php');

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