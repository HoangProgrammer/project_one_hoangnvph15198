<?php
function Get_progress(){
    $stmt="SELECT * FROM progress ";
   $result= get_all( $stmt); 
 return $result;
}

function Get_progress_course($id_user){
  $conn = connect();
    $stmt=$conn->prepare( "SELECT  course.img as image_course, course.NameCaurse as name 
    ,user.ten_user as name_user ,user.id_user as id_user,course.id_caurse as id_course 
    FROM progress join course  on progress.id_causer= course.id_caurse 
    JOIN user on progress.id_user =user.id_user WHERE user.id_user=$id_user");
   $stmt->execute();
   $arr=array();
        while ($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    $arr[]=$row;

   }  
  return  $arr;
}

function insert_progress($id_user,$id_causer){
    $conn = connect();
    $select =$conn ->prepare("SELECT * FROM progress WHERE id_causer=$id_causer and id_user=$id_user");
    $select->execute();
if($select->rowCount()>0){
  
}else{
  $stmt= $conn ->prepare( "INSERT INTO progress (id_user,id_causer) VALUES(:id_user,:id_course)");
   $stmt->execute([':id_user' =>$id_user,':id_course'=>$id_causer]); 
    return true;
}

}


    
?>