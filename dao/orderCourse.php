<?php  

function Get_oderCourse(){
    $stmt="SELECT * FROM ordercaurse";
   $result= get_all( $stmt); 
 return $result;
 
}
function Get_one_oderCourse($id){
  $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM ordercaurse where id_user=? ");
   $stmt->execute([$id]);
   $rows=array();
 while ($row= $stmt->fetch(\PDO::FETCH_ASSOC)){
  $rows[]=$row;
 }
 return $rows;
}



?>