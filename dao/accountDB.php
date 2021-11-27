<?php  

function Get_account(){
    $stmt="SELECT * FROM user";
   $result= get_all( $stmt); 
 return $result;
}

function Get_user_one($id){
$conn=connect();
    $stmt=$conn->prepare("SELECT * FROM user where id_user =?");
    $stmt->execute([$id]);
    $rows=array();
while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    $rows[]=$row;
}
return $rows;
}

function insert_user($data){
 
$conn=connect();
    $stmt=$conn->prepare("INSERT INTO user(ten_user,email,mat_khau,start_time)
   VALUES( :ten_user , :email , :mat_khau , :start_time,) ");
    $stmt->execute($data);
return true;
}



function deleteUser($id){
$conn=connect();
    $stmt=$conn->prepare("DELETE FROM course WHERE id_caurse=?");
    $stmt->execute([$id]);
return true;
}



function update_user($course_name,$image_course,$price_course,$description,$type,$id){
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
function update_user_admin($data){
$conn=connect();

    $stmt=$conn->prepare(" UPDATE user set ten_user=:ten_user,status=:status,role=:role WHERE id_user=:id ");
    $stmt->execute($data);
 return true;

}
?>