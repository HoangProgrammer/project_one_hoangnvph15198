<?php  

function Get_caurse(){
    $conn=connect();
    $stmt="SELECT * FROM course";
    $result= get_all( $stmt); 
    return $result;
}
function Get_caurse_route(){
    $conn=connect();
    $stmt="SELECT route FROM course";
    $result= get_all($stmt);
    $lresult = array_unique($result, 0);
    return $lresult;
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
function Get_course_by_route($id_route){
    $conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course where id_caurse=?");
    $stmt->execute([$id_route]);
    $result= get_all( $stmt); 
    return $result;
}
function Get_course_one_in($id){
$conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course where id_caurse IN(?)");
    $stmt->execute([$id]);
    $rows=array();
while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    $rows[]=$row;
}
return $rows;
}


function Get_other_course($id){
$conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course  WHERE id_caurse NOT IN($id) ");
    $stmt->execute();
           $rows=$stmt->fetchAll(\PDO::FETCH_ASSOC);    
return $rows;
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

function deleteCourseALL($id){
    $conn=connect();
    $stmt=$conn->prepare("DELETE FROM course WHERE id_caurse IN($id) ");
    $stmt->execute();
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


function GetData_Thong_ke()
{
   $db = connect();
   $sql = "SELECT course.id_caurse as id_caurse,  course.NameCaurse as NameCourse, COUNT(lesson_topics.id_lesson_topics)as tong_topic FROM 
   lesson_topics join course on lesson_topics.id_caurse=course.id_caurse
        GROUP by course.id_caurse 
   ";
   $statement = $db->prepare($sql);
   $statement->execute();
   $row = array();
   while (true) {
      $row = $statement->fetch(PDO::FETCH_ASSOC);
      if ($row == false) {
         break;
      }

      $rows[] = $row;
   }
   return  $rows;
}


?>