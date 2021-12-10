<?php  

function Get_caurse(){
    $conn=connect();
    $stmt="SELECT * FROM course";
    $result= get_all( $stmt); 
    return $result;
}
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
if($type==0){
    $price_course=0;
}
if(!empty($image_course)){
    
    $stmt=$conn->prepare(" UPDATE course set NameCaurse=:NameCaurse,img=:img, price=:price,description=:description,type=:type,id_route=:route WHERE id_caurse=:id ");
    $stmt->execute([":NameCaurse"=>$course_name,":img"=>$image_course,":price"=>$price_course,":description"=>$description,":type"=>$type,":route"=>$id_route,":id"=>$id]);
 return true;
}else{
     $stmt=$conn->prepare(" UPDATE course set NameCaurse=:NameCaurse, price=:price,description=:description,type=:type,id_route=:route WHERE id_caurse=:id ");
    $stmt->execute([":NameCaurse"=>$course_name,":price"=>$price_course,":description"=>$description,":type"=>$type,":route"=>$id_route,":id"=>$id]);
    return true;
}

}


function GetData_Thong_ke()
{
   $db = connect();
   $sql = "SELECT course.id_caurse as id_caurse,  course.NameCaurse as NameCourse, COUNT(DISTINCT lesson_topics.id_lesson_topics)as tong_topic
   , COUNT(lesson.id_lesson) as lesson
   FROM  lesson_topics join course on lesson_topics.id_caurse=course.id_caurse
        join lesson on lesson.id_lesson_topics=lesson_topics.id_lesson_topics   GROUP by course.id_caurse 
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
function GetData_Thong_ke_user()
{
   $db = connect();
   $sql = "SELECT course.id_caurse as sum_course ,course.NameCaurse as name,
   COUNT(progress.id_user) as user FROM course JOIN progress on progress.id_causer=course.id_caurse GROUP BY course.id_caurse 
   ";
   $statement = $db->prepare($sql);
   $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
   return  $rows;
}

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

function updateCourse (){
    $conn=connect();
    $hinh=$_FILES['hinh'];
    if($hinh["size"] == 0){
        $url = $_POST['old_img'];
    }
    else{
        $ava = $_FILES['hinh'];
        // var_dump($ava);die;
        
        $check = strpos($ava['type'], 'image');
        if ($check === false) {
            $_SESSION['error'] = 'File is not a image';
            header('location: /du_an_mau/form_update.php');
            die;
        }
    
        if ($ava['size'] >= 5000000) {
            $_SESSION['error'] = 'Image is too large';
            header('location: /du_an_mau/form_update.php');
            die;
        }
    
        $foderImg = './../images_db/';
        $anhLuu = $foderImg . $ava["name"];
        move_uploaded_file($ava['tmp_name'], $anhLuu);
        
        $url ='/du_an_mau/images_db/' . $ava["name"];
        // var_dump($url);die;

    }
    $data = [
        'ma_kh' => $_POST['ma_kh'],
        'ho_ten' => $_POST['ho_ten'],
        'email' => $_POST['email'],
        'kich_hoat' => $_POST['kich_hoat'],
        'hinh' => $url,
        'vai_tro' =>$_POST['vai_tro'],
        'mat_khau' => $_POST['mat_khau'],
    ];
    // var_dump($data);die;
    update_pass($data);
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


// function update_pass($data) {
//     $conn = conn();

//     $sql = "UPDATE course SET ho_ten = :ho_ten, mat_khau = :mat_khau,".
//     " hinh = :hinh, kich_hoat= :kich_hoat, email= :email, vai_tro = :vai_tro ".
//     " WHERE ma_kh = :ma_kh ";

//     $statement = $conn->prepare($sql);

//     $statement->execute($data);
// }
?>