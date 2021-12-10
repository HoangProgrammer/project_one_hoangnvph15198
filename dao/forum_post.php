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
function get_post_other($id){
    $conn=connect();
    $stmt= $conn->prepare("SELECT forum_post.id_post as id_post ,forum_post.title_post as title_post , COUNT( DISTINCT comments_post.id_comment_post)as comment  FROM 
    forum_post join comments_post on comments_post.id_post=forum_post.id_post WHERE  forum_post.id_post<>$id  GROUP by forum_post.id_post");
    $stmt->execute();
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;
}

function get_post_user($id_user){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post join user on forum_post.id_user=user.id_user where forum_post.id_user = :id_user");
    $stmt->execute(['id_user' => $id_user]);
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;
}

function number_post_user($id_user){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post WHERE id_user = :id_user ");
    $stmt->execute(['id_user' => $id_user]);
    $rows = $stmt -> rowCount();
    return $rows;
}

function fix_post($data){
    $conn=connect();
    $stmt= $conn->prepare("UPDATE forum_post SET content = :content , title_post = :title_post WHERE id_post = :id_post ");
    $stmt->execute($data);
    
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

function getALL_comment_forum(){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM comments_post  ");
    $stmt->execute();
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;
}
function getONe_comment_forum($id){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM comments_post where id_comment_post =? ");
    $stmt->execute([$id]);
    $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
    }
    return $rows;
}
function getONe_comment_parent($id){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM comments_post where id_parent =? ");
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

function get_one_by_user($id_post){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM forum_post join user on  forum_post.id_user=user.id_user
    Where forum_post.id_post= :id_post");
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

function getAll_comment_post_by_user($id_post){
    $conn=connect();
    $stmt= $conn->prepare("SELECT comments_post.id_comment_post as id_comment,comments_post.time as time ,comments_post.content as content_cm ,
    user.ten_user as ten, user.id_user as id_user , user.image as anh , comments_post.id_parent as id_parent 
     FROM comments_post join user on comments_post.id_user=user.id_user  
    join forum_post on forum_post.id_post =comments_post.id_post 
     WHERE comments_post.id_post  =:id_post order by comments_post.time desc");
    $stmt->execute(['id_post' => $id_post]);
    $arr=array();
  while ($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    $arr[]=$row;
  }
    return $arr;
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
function delete_comment_all($id_post){
    $conn=connect();
    $stmt= $conn->prepare("DELETE FROM comments_post WHERE id_post =$id_post ");
    $stmt->execute();
    return true;
}

function delete_comment_child($id_comment,$list){
$conn=connect();
    foreach ($list as $value){
        if($value['id_parent'] ==$id_comment ){
            delete_comment_child($value['id_comment_post'],$list);
 $stmt= $conn->prepare("DELETE FROM comments_post WHERE id_comment_post=?  ");
    $stmt->execute([$value['id_comment_post']]);
    return true;
}
        }
    }

function update_comment_post($content,$time, $id_comment){
$conn=connect();
 $stmt= $conn->prepare("UPDATE comments_post set content=?,time=? where id_comment_post=? ");
    $stmt->execute([$content,$time,$id_comment]);
    return true;    
    }
    
function delete_comment_parent($id_comment){
$conn=connect();
 $stmt= $conn->prepare("DELETE FROM comments_post WHERE id_comment_post=?  ");
    $stmt->execute([$id_comment]);
    return true;    
    }
    
   


?>