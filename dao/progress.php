<?php
function Get_progress($id_user){
    $stmt="SELECT * FROM progress Where id_user";
   $result= get_all( $stmt); 
 return $result;

}
function insert_progress($data){
    $conn = connect();
    $stmt= $conn ->prepare( "INSERT INTO progress (id_user,id_causer) VALUES(:id_user,:id_course)");
   $stmt->execute($data); 
 return true;

}


    
?>