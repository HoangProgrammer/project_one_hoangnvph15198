<?php

function  fiend_request($sender, $receiver, $time)
{
    $con = connect();
    $query = $con->prepare("INSERT INTO friend_request(sender,receiver,time) values(:sender, :receiver,:time)");
    $query->execute([":sender" => $sender, ":receiver" => $receiver, ":time" => $time]);
    return true;
}


function delete_request($id)
{
    $con = connect();
    $query = $con->prepare("DELETE FROM friend_request where sender=:sender ");
    $query->execute([":sender" => $id]);
    return true;
}


function delete_sender($id)
{
    $con = connect();
    $query = $con->prepare("DELETE FROM friend_request where sender =:sender ");
    $query->execute([":sender" => $id]);
    return true;
}
function delete_receiver($id)
{
    $con = connect();
    $query = $con->prepare("DELETE FROM friend_request where receiver =:receiver ");
    $query->execute([":receiver" => $id]);
    return true;
}

function update_fiend($id)
{
    $con = connect();
    $query = $con->prepare("UPDATE friend_request set status=1 where id_request =? ");
    $query->execute([$id]);
    return true;
}

function accept_Friend($id_user_one, $id_user_two)
{
    $con = connect();
    $query = $con->prepare("INSERT  INTO friends(id_user_one  ,id_user_two ) values(:id_user_one,:id_user_two) ");
    $query->execute([":id_user_one" => $id_user_one, ":id_user_two" => $id_user_two]);
    return true;
}

function notification($my_id)
{
    $con = connect();
    $notification = $con->prepare("SELECT id_request ,sender ,
ten_user FROM friend_request join user on friend_request.sender=user.id_user 
where receiver=?");
    $notification->execute([$my_id]);
    $rows = array();
    while ($row = $notification->fetch()) {
        $rows[] = $row;
    }
    return $rows;
}

// function Friends_request($sender, $receiver)
// {
//     $con = connect();
//     $notification = $con->prepare("SELECT sender,receiver, status FROM friend_request where sender=? and receiver=?");
//     $notification->execute([$sender,$receiver]);
//     $rows = array();
//     while ($row = $notification->fetch()) {
//         $rows[] = $row;
//     }
//     return $rows;
// }

function Friends_request2($sender, $receiver)
{
    $con = connect();
    $notification = $con->prepare("SELECT status 
    FROM friend_request where sender='".$sender."' AND 
    receiver='".$receiver."' OR sender='".$receiver."' AND receiver='".$sender."' AND status =0");
    $notification->execute();
    $rows = array();
    while ($row = $notification->fetch()) {
        $rows[] = $row;
    }
    return $rows;
}

function sender($sender ,$id_user)
{  
    $con = connect();
    $notification = $con->prepare("SELECT sender FROM friend_request where sender='".$sender."' and receiver='".$id_user."'  OR
    receiver='".$sender."' and sender='".$id_user."'
    AND status =0;");
    $notification->execute();
    $rows = array();
    while ($row = $notification->fetch()) {
        $rows[] = $row;
    }
    return $rows;
}


function Select_MyFriend($my_id)
{
    $con = connect();
    $notification = $con->prepare("SELECT * FROM friends where 
     id_user_one=:my_id OR id_user_two=:my_id ");
     $notification->bindValue(':my_id',$my_id,PDO::PARAM_INT);
    $notification->execute();
    $data = [];
   $row = $notification->fetchAll(\PDO::FETCH_ASSOC);
   foreach ($row as $val){
if($val['id_user_one']==$my_id){
    $getUser= $con->prepare("SELECT  *FROM user WHERE id_user=?");
    $getUser->execute([$val['id_user_two']]);
    array_push($data, $getUser->fetch(PDO::FETCH_ASSOC));
}else{
    $getUser= $con->prepare("SELECT * FROM user WHERE id_user=?");
    $getUser->execute([$val['id_user_one']]);
    array_push($data, $getUser->fetch(PDO::FETCH_ASSOC));
}
   }         
    return  $data;
}

function Get_user_other($id){
    $conn=connect();
        $stmt=$conn->prepare("SELECT * FROM user where id_user NOT IN($id) ");
        $stmt->execute();
        $rows=array();
    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
        $rows[]=$row;
    }
    return $rows;
    }
