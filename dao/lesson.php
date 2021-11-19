<?php
function getAll_lesson($id_lesson_topics){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM lesson Where id_lesson_topics= ? ");
    $stmt->execute([$id_lesson_topics]);
  $rows=array();
   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;

}

function insert_lesson($data){
  
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO lesson ( lessonName , video , time , type , id_lesson_topics )
       VALUES( :lesson_name , :video_lesson , :time , :type, :id ) ");
        $stmt->execute($data);
    return true;
    }

    
function delete_lesson($id){
  
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM lesson WHERE id_lesson=?");
        $stmt->execute([$id]);
    return true;
    }

    function update_lesson($data){
        $conn=connect();
            $stmt=$conn->prepare(" UPDATE lesson set lessonName=:lesson_name,video=:video_lesson, time=:time,type=:type WHERE id_lesson =:id ");
            $stmt->execute($data);
         return true;
        }

    function Get_lesson_one($id){
        $conn=connect();
            $stmt=$conn->prepare("SELECT * FROM lesson where id_lesson =?");
            $stmt->execute([$id]);
            $rows=array();
        while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
            $rows[]=$row;
        }
        return $rows;
        }
?>