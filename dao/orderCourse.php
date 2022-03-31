<?php  

function Get_oderCourse(){
    $stmt="SELECT * FROM ordercaurse";
   $result= get_all( $stmt); 
 return $result;
}

function Get_oderOne($id_user,$id_course){
  $conn=connect();
  $stmt=  "SELECT * FROM ordercaurse where id_caurse=$id_user and id_user=$id_course ";
  $rows=  executeQuery($stmt);
  return $rows;
}

function delete_oderCourse($id_course){
  $conn=connect();
    $stmt= $conn->prepare("DELETE FROM ordercaurse WHERE id_caurse=$id_course");
    $stmt->execute();
 return true;
 
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