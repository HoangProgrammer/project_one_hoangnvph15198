<?php  
    require_once './../models/pdo.php';

function Get_caurse(){
    $conn=connect();
    $stmt="SELECT * FROM course";
    $result= get_all( $stmt); 
    return $result;
}

function Get_course_one($id){
    $conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course where id_caurse=?");
    $stmt->execute([$id]);
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    $rows[]=$row;
    }
    return $rows;
}


function Get_other_course($id){
    $conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course where id_caurse <> ? ");
    $stmt->execute([$id]);
    $rows=array();
      while(true){
           $row=$stmt->fetch(\PDO::FETCH_ASSOC);
          if($row==false){
              break;
          }        
    $rows[]=$row;

return $rows;
}

    


}


function insert_into($data){
 
    $conn=connect();
    $stmt=$conn->prepare("INSERT INTO course(NameCaurse,img,price,description,type)
   VALUES( :name , :img , :price , :description, :type) ");
    $stmt->execute($data);
return true;
}



function deleteCourse($id){
    $conn=connect();
    $stmt=$conn->prepare("DELETE FROM course WHERE id_caurse=?");
    $stmt->execute([$id]);
return true;
}



function update_course($course_name,$image_course,$price_course,$description,$type,$id){
    $conn=connect();
if($type=="0"){
    $price_course=0;
}
if(!empty($image_course)){
    
    $stmt=$conn->prepare(" UPDATE course set NameCaurse=:NameCaurse,img=:img, price=:price,description=:description,type=:type WHERE id_caurse=:id ");
    $stmt->execute([":NameCaurse"=>$course_name,":img"=>$image_course,":price"=>$price_course,":description"=>$description,":type"=>$type,":id"=>$id]);
 return true;
}else{
     $stmt=$conn->prepare(" UPDATE course set NameCaurse=:NameCaurse, price=:price,description=:description,type=:type WHERE id_caurse=:id ");
    $stmt->execute([":NameCaurse"=>$course_name,":price"=>$price_course,":description"=>$description,":type"=>$type,":id"=>$id]);
    return true;
}


}
?>