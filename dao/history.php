<?php

function get_history($id){
    $conn=connect();
    $stmt=$conn->prepare("SELECT history.id_hytory as id_history, lesson.lessonName as lessonName ,history.time as timeHistory FROM 
    `history` join user on user.id_user=history.id_user 
    join lesson on history.id_lesson=lesson.id_lesson where user.id_user=? order by history.time desc ");
     $stmt->execute([$id]);
     $rows=array();
     while ($row =$stmt->fetch(\PDO::FETCH_ASSOC)){
         $rows[]=$row;
     }
return $rows;
}

function insert_history($id_user,$id_lesson,$time){
    $conn=connect();
    $TimeCurrent=24*60*60;
   if($time <= $TimeCurrent){
    $stmt=$conn->prepare("UPDATE history set(time=:time) Where id_lesson=:id_lesson ");
    $stmt->execute([$time,$id_lesson]);
    return true;
   }else{
         $stmt=$conn->prepare("INSERT INTO history (id_user ,id_lesson,time) VALUES(:id_user ,:id_lesson,:time)");
     $stmt->execute([$id_user,$id_lesson,$time]);
     return true;
   }

}

?>