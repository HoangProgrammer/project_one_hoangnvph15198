<?php  

function Get_caurse(){
    $conn=connect();
    $stmt="SELECT * FROM course";
    $result= get_all( $stmt); 
    return $result;
}

// lấy course lộ trình ngaoif trang chủ
function Get_caurse1(){
    $conn=connect();
    $stmt="SELECT * FROM course limit 6";
    $result= get_all($stmt); 
    return $result;
}
function Get_caurse_route($id){
    $conn=connect();
    $stmt="SELECT course.id_route as  id_route ,routee.route as name FROM course join routee on course.id_route=routee.id_route Where course.id_caurse=$id";
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
    $stmt=$conn->prepare("SELECT * FROM course  WHERE id_caurse NOT IN('$id') ");
    $stmt->execute();
           $rows=$stmt->fetchAll(\PDO::FETCH_ASSOC);    
return $rows;
}


function insert_into($data){
 
    $conn=connect();
    $stmt=$conn->prepare("INSERT INTO course(NameCaurse,img,price,description,type,id_route)
   VALUES( :name , :img , :price , :description, :type, :id_route) ");
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



function update_course($course_name,$image_course,$price_course,$description,$type,$id_route,$id){
    $conn=connect();
// if($type=="0"){
//     $price_course=0;
// }
if(empty($image_course)){
    $stmt=$conn->prepare(" UPDATE course set NameCaurse=:NameCaurse, price=:price,description=:description,id_route=:id_route,type=:type WHERE id_caurse=:id ");
    $stmt->execute([":NameCaurse"=>$course_name,":price"=>$price_course,":description"=>$description,":id_route"=>$id_route,":type"=>$type,":id"=>$id]);
   return true;
}else{
    $stmt=$conn->prepare(" UPDATE course set NameCaurse=:NameCaurse,img=:img, price=:price,description=:description,id_route=:id_route,type=:type WHERE id_caurse=:id ");
        $stmt->execute([":NameCaurse"=>$course_name,":img"=>$image_course,":price"=>$price_course,":description"=>$description,":id_route"=>$id_route,":type"=>$type,":id"=>$id]);
    return true;
}

}


function GetData_Thong_ke()
{
   $db = connect();
   $sql = " SELECT course.id_caurse as id_caurse,  course.NameCaurse as NameCourse,
    ( SELECT COUNT(*) FROM  lesson where lesson.id_course=course.id_caurse ) as lesson ,
    ( SELECT COUNT(progress.id_user) FROM  progress where progress.id_causer=course.id_caurse ) as user 
     FROM course " ;
  
   
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

// function GetData_Thong_ke_user()
// {
//    $db = connect();
//    $sql = "SELECT course.id_caurse as sum_course ,course.NameCaurse as name,
//     ( SELECT COUNT(progress.id_user) FROM  progress where progress.id_causer=course.id_caurse ) as user  FROM course ";
//    $statement = $db->prepare($sql);
//    $statement->execute();
//       $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//    return  $rows;
// }


function Get_course_by_route($id_route){
    $conn=connect();

    $sql = "SELECT course.*, routee.route FROM course JOIN routee ON course.id_route = routee.id_route AND course.id_route = :id_route ";
    $stm=$conn->prepare($sql);
    $stm->execute(['id_route' => $id_route]);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    
    $data=[];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData === false) {
            break;
        }

        $row = [
            "id_caurse" => $rowData['id_caurse'],
            "NameCaurse" => $rowData['NameCaurse'],
            "img" => $rowData['img'],
            "price" => $rowData['price'],
            "description" => $rowData['description'],
            "type" => $rowData['type'],
            "route" => $rowData['route'],
            "id_route" => $rowData['id_route'],
     
        ];

        array_push($data, $row);
    }

    return $data;
}

function Get_all_route(){
    $conn=connect();

    $sql = "SELECT * FROM routee";
    $stm=$conn->prepare($sql);
    $stm->execute([]);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    
    $data=[];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData === false) {
            break;
        }
                $row = [
            "id_route" => $rowData['id_route'],
            "route" => $rowData['route'],
            "img" => $rowData['img'],
     
        ];

        array_push($data, $row);
    }

    return $data;
}


function find_coures_by_id($id) {
    $conn = connect();
    $sql = "SELECT * FROM course WHERE id_caurse = :id";
    $statement = $conn->prepare($sql);
    $params = [
        'id' => $id,
    ];

    $statement->execute($params);
    $rowData = $statement->fetch();
    $data = [];
    if ($rowData != false) {
        $data = [
            "id_caurse" => $rowData['id_caurse'],
            "NameCaurse" => $rowData['NameCaurse'],
            "img" => $rowData['img'],
            "price" => $rowData['price'],
            "description" => $rowData['description'],
            "type" => $rowData['type'],
            "id_route" => $rowData['id_route']
        ];
    }
    return $data;
}

?>