<?php
function Get_Rating(){
    $conn=connect();
    $stmt="SELECT * FROM rating join user on rating.id_user=user.id_user Where 1";
    $result= get_all( $stmt); 
    return $result;
}
function Get_Rating_one(){
    $conn=connect();
    $stmt="SELECT rating.status as st ,user.ten_user as ten_user,user.id_user as idUser ,rating.id_rating as id_rating , 
    rating.time as time ,rating.content as content
     FROM rating join user on rating.id_user=user.id_user Where rating.id_parent=0";
    $query=$conn->prepare($stmt);
    $query->execute();
    $arr=array();
    if($query->rowCount()){
           while($row=$query->fetch(\PDO::FETCH_ASSOC)){
        $arr[]=$row;
    }
return  $arr;
    }
 
}
function Get_Rating_parent($id){
    $conn=connect();
    $stmt="SELECT *
     FROM rating  Where id_rating=?";
    $query=$conn->prepare($stmt);
    $query->execute([$id]);
    $arr=array();
    if($query->rowCount()){
           while($row=$query->fetch(\PDO::FETCH_ASSOC)){
        $arr[]=$row;
    }
return  $arr;
    }
 
}

function Get_Rating_status($query){
    $conn=connect();
    $stmt="SELECT rating.status as st ,user.ten_user  as ten_user ,user.id_user as idUser ,rating.id_rating as id_rating , 
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
function update_parent( $status,$id){
    $conn=connect();
    $stmt=$conn->prepare("UPDATE rating set status=:status WHERE id_Rating =:id_user");
    $stmt->execute([ ":status"=>$status, 
     ":id_user"=>$id, 
    ]); 
    return true;
}
function delete_rating( $id){
    $conn=connect();
    $stmt=$conn->prepare("DELETE FROM rating  WHERE id_Rating =:id_Rating");
    $stmt->execute([":id_Rating"=>$id, 
    ]); 
    return true;
}

function get_rating_groupby_user(){
    $conn=connect();
    $stmt=$conn->prepare("SELECT rating.*, user.ten_user, user.image FROM rating, user WHERE rating.id_user = user.id_user AND user.role < 1 GROUP BY rating.id_user");
    $stmt->execute([]); 

    $data = [];
    while (true) {
        $row = $stmt->fetch();
        // echo "<pre>";
        // var_dump($row);die;
        if ($row === false) {
            break;
        }
        $rowData = [
            'id_Rating' => $row['id_Rating'],
            'id_user' => $row['id_user'],
            'id_parent' => $row['id_parent'],
            'content' => $row['content'],
            'time' => $row['time'],
            'rating' => $row['rating'],
            'status' => $row['status'],
            'ten_user' => $row['ten_user'],
            'image' => $row['image'],
        ];
        array_push($data, $rowData);
    }
    return $data;
}

?>