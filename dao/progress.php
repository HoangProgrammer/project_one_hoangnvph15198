<?php
function Get_progress($id_user){
    $stmt="SELECT * FROM progress Where id_user";
   $result= get_all( $stmt); 
 return $result;

}
function insert_progress($id_user,$id_causer){
    $conn = connect();
    $select =$conn ->prepare("SELECT * FROM progress WHERE id_causer=$id_causer");
    $select->execute();
if($select->rowCount()>0){
  
}else{
  $stmt= $conn ->prepare( "INSERT INTO progress (id_user,id_causer) VALUES(:id_user,:id_course)");
   $stmt->execute([':id_user' =>$id_user,':id_course'=>$id_causer]); 
    return true;
}

}


    
?>