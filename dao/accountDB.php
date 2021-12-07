<?php  

function Get_account(){
    $stmt="SELECT * FROM user";
   $result= get_all( $stmt); 
 return $result;
}


function login_user($email,$password){
    $conn=connect();
    $stmt=$conn->prepare("SELECT * FROM user where email=? and mat_khau=?");
    $stmt->execute([$email,$password]);
    if($stmt->rowCount() >0){
     while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
         $arr[]=$row;
     }  
     return $arr;
    }

}
function ResetPass($password,$email){
    $conn=connect();
    $stmt=$conn->prepare("UPDATE user SET mat_khau=? WHERE email=?");
    $stmt->execute([$password,$email]);
    return true;

}
function mail_user($email){
    $conn=connect();
    $stmt=$conn->prepare("SELECT * FROM user where email=?");
    $stmt->execute([$email]);
    if($stmt->rowCount() >0){
     while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
         $arr[]=$row;
     }  
     return $arr;
    }

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
    $stmt=$conn->prepare("DELETE FROM user WHERE id_user=?");
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

function update_khach_hang($data){
    $conn=connect();
    
        $stmt=$conn->prepare(" UPDATE user set ten_user=:ten_user,image=:image, email=:email, mat_khau=:mat_khau WHERE id_user=:id_user ");
        $stmt->execute($data);
     return true;
    
    }

function update_khach_hang_no_img($data){
    $conn=connect();
    
        $stmt=$conn->prepare(" UPDATE user set ten_user=:ten_user, email=:email, mat_khau=:mat_khau WHERE id_user=:id_user ");
        $stmt->execute($data);
        return true;
    
    }

function number_rows_user($name){
    $conn=connect();
    $sql = "SELECT * FROM user WHERE ten_user = :ten_user";
    $stmt=$conn->prepare($sql);
    $stmt->execute(['ten_user' => $name]);
    $number_of_rows = $stmt->fetchColumn(); 
    return $number_of_rows;
}
?>