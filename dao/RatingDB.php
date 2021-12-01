<?php
function Get_Rating(){
    $conn=connect();
    $stmt="SELECT * FROM rating join user on rating.id_user=user.id_user Where 1";
    $result= get_all( $stmt); 
    return $result;
}
function Get_Rating_one(){
    $conn=connect();
    $stmt="SELECT rating.status as st ,user.ten_user ,user.id_user as id_user ,rating.id_rating as id_rating , 
    rating.time as time ,rating.content as content
     FROM rating join user on rating.id_user=user.id_user Where rating.id_parent=0";
    $result= get_all( $stmt); 
    return $result;
}
function Get_Rating_status($query){
    $conn=connect();
    $stmt="SELECT rating.status as st ,user.ten_user ,user.id_user as id_user ,rating.id_rating as id_rating , 
    rating.time as time ,rating.content as content
     FROM rating join user on rating.id_user=user.id_user Where  rating.id_parent=0 and rating.status IN($query)  ";
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
function insert_Reply($id_user,$child, $content,$time){
    $conn=connect();
    $stmt=$conn->prepare("INSERT INTO rating ( id_user,id_parent,content,time ) VALUES(:id_user,:child,:content,:time)");
    $stmt->execute([   ":id_user"=>$id_user,
    ":child"=>$child,
    ":content"=>$content,
    ":time"=>$time,
    ]);
    return true;
}

?>