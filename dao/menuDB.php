<?php  

function Get_menu(){

    $stmt="SELECT * FROM menu";
   $result= get_all( $stmt); 
 return $result;
}
?>