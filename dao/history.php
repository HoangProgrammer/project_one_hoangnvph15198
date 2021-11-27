<?php

function get_history($id){
    $conn=connect();
    $stmt=$conn->prepare("SELECT history.id_hytory as id_history, lesson.lessonName as lessonName ,history.time as timeHistory FROM 
    `history` join user on user.id_user=history.id_user 
    join lesson on history.id_lesson=lesson.id_lesson where user.id_user=?");
     $stmt->execute([$id]);
     $rows=array();
     while ($row =$stmt->fetch(\PDO::FETCH_ASSOC)){
         $rows[]=$row;
     }
return $rows;
}

?>