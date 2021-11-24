<?php
function Get_Rating(){
    $conn=connect();
    $stmt="SELECT * FROM rating join user on rating.id_user=user.id_user Where 1";
    $result= get_all( $stmt); 
    return $result;
}
function insert_Rating($id_user,$child, $content,$time,$rating){
    $conn=connect();
    $stmt=$conn->prepare("INSERT INTO rating ( id_user,id_parent,content,time,rating ) VALUES(:id_user,:child,:content,:time,:rating)");
    $stmt->execute([   ":id_user"=>$id_user,
    ":child"=>$child,
    ":content"=>$content,
    ":time"=>$time,
    ":rating"=>$rating,]);
    return true;
}

?>