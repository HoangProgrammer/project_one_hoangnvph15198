<?php

function get_history($id){
    $conn=connect();
    $stmt=$conn->prepare("SELECT history.id_hytory as id_history, lesson.lessonName as lessonName ,
    history.id_lesson as id_lesson ,history.time as timeHistory FROM     
    `history` join user on user.id_user=history.id_user 
    join lesson on history.id_lesson=lesson.id_lesson where user.id_user=? order by history.time desc ");
     $stmt->execute([$id]);
     $rows=array();
     while ($row =$stmt->fetch(\PDO::FETCH_ASSOC)){
         $rows[]=$row;
     }
return $rows;
}
function get_history_course($id){
    $conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course JOIN lesson_topics ON
     course.id_caurse =lesson_topics.id_caurse join lesson 
     on lesson.id_lesson_topics=lesson_topics.id_lesson_topics WHERE lesson.id_lesson=?");
     $stmt->execute([$id]);
     $rows=array();
     while ($row =$stmt->fetch(\PDO::FETCH_ASSOC)){
         $rows[]=$row;
     }
return $rows;
}


function delete_history($id_history){
    $conn=connect();
    $query=$conn->prepare("DELETE FROM history WHERE id_hytory IN($id_history)");
    $query->execute();
    return true;
}

function insert_history($id_user,$time,$id_lesson){
    $time_ago=strtotime($time);
    $current=time();
    $time_diff=$current-$time_ago;
    $seconds=$time_diff;
    $minute=round($seconds/60);
    $hour=round($seconds/3600);//60*60
    $day=round($seconds/86400); //24*60*60
    $week=round($seconds/604800);
    $moth=round($seconds/2629440);
    $year=round($seconds/31553280);

    $conn=connect();
        $stmt=$conn->prepare("SELECT * FROM history  Where id_lesson=? and id_user=?");
        $stmt->execute([$id_lesson,$id_user]);
        if($stmt->rowCount()>0){
            if(  $day>=1){
            $stmt=$conn->prepare("INSERT INTO history (id_user ,id_lesson,time) VALUES(? ,?,?)");
                $stmt->execute([$id_user,$id_lesson,$time]);
                return true;   
            }else{
                          $stmt=$conn->prepare("UPDATE history set time=? Where id_lesson=? and  id_user=?");
    $stmt->execute([$time,$id_lesson,$id_user]);
    return true;    
              
            }
        }else{

         $stmt=$conn->prepare("INSERT INTO history (id_user ,id_lesson,time) VALUES(? ,?,?)");
     $stmt->execute([$id_user,$id_lesson,$time]);
     return true;
   


        }
  
}

?>