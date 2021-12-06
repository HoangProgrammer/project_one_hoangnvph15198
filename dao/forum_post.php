<?php
function getAll_post(){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post ");
    $stmt->execute();
    $rows = $stmt -> fetchAll();
    return $rows;
}

function get_post(){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post join user on forum_post.id_user=user.id_user where 1");
    $stmt->execute();
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;
}

function get_new_post(){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post join user on forum_post.id_user=user.id_user where 1 order by id_post desc limit 5");
    $stmt->execute();
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;
}

function get_comment_post($id){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM comments_post join user on comments_post.id_user=user.id_user
    join forum_post on comments_post.id_post=forum_post.id_post where forum_post.id_post=?");
    $stmt->execute([$id]);
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;

}

function get_one_post($id_post){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post Where id_post  = :id_post");
    $stmt->execute(['id_post' => $id_post]);
    // $rows=array();
    // while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    //    $rows[]=$row;
    // }
    $rows = $stmt -> fetch();
    return $rows;

}

function insert_post($data){
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO forum_post(id_user,content,time,interactions,title_post)  VALUES( :id_user, :content, :time, :interactions, :title_post) ");   
        $stmt->execute($data);
    return true;
}

function insert_comment_post($data){
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO comments_post(id_user,id_post,content,id_parent,time)  VALUES(:id_user, :id_post, :content, :id_parent, :time) ");   
        $stmt->execute($data);
    return true;
}
function getAll_comment_post($id_post){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM comments_post WHERE id_post = :id_post ");
    $stmt->execute(['id_post' => $id_post]);
    $rows = $stmt -> fetchAll();
    return $rows;
    

}
function count_comment_post($id_post){
    $conn=connect();
    $stmt= $conn->prepare("SELECT COUNT(*) as so_luong FROM comments_post WHERE id_post = :id_post ");
    $stmt->execute(['id_post' => $id_post]);
    $rows = $stmt -> fetch();
    return $rows;
}

function delete_blog($id_post){
    $conn=connect();
    $stmt= $conn->prepare("DELETE FROM forum_post WHERE id_post = :id_post ");
    $stmt->execute(['id_post' => $id_post]);
    return true;
}

?>