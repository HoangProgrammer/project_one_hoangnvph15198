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

function getAll_lesson_in($id_lesson,$id_course){
    $conn=connect();
    $stmt= $conn->prepare("SELECT lesson.id_lesson as id_lesson, lesson.id_lesson_topics as id_topic FROM lesson
    JOIN lesson_topics on lesson_topics.id_lesson_topics=lesson.id_lesson_topics JOIN course on course.id_caurse=lesson_topics.id_caurse
    WHERE id_lesson NOT IN('$id_lesson')  AND course.id_caurse=$id_course ");
    $stmt->execute();
 $row=$stmt->fetchAll(\PDO::FETCH_ASSOC);
   return $row;
}

function getAll_lesson_sum($id_course){
    $conn=connect();
    $stmt= $conn->prepare("SELECT COUNT(lesson.id_lesson) as tong  FROM course JOIN lesson_topics on
     lesson_topics.id_caurse =course.id_caurse JOIN 
     lesson ON lesson.id_lesson_topics=lesson_topics.id_lesson_topics WHERE course.id_caurse=$id_course");
    $stmt->execute();
 $row=$stmt->fetchAll(\PDO::FETCH_ASSOC);
   return $row;
}

function getAll_lesson_video($id_cause){
    $conn=connect();
    $stmt= $conn->prepare("SELECT  lesson.video as video FROM lesson JOIN
    lesson_topics on lesson_topics.id_lesson_topics=lesson.id_lesson_topics JOIN course on course.id_caurse=lesson_topics.id_caurse
    WHERE course.id_caurse=$id_cause ORDER by id_lesson ASC LIMIT 1");
    $stmt->execute();
 $row=$stmt->fetchAll(\PDO::FETCH_ASSOC);
   return $row;
}


// function update_lesson_in($id_lesson){
//     $conn=connect();
//     $stmt= $conn->prepare("UPDATE lesson set type=1 WHERE id_lesson =$id_lesson");
//     $stmt->execute();
//    return true;
// }

function insert_lesson($data){
  
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO lesson ( lessonName , video , time , id_lesson_topics )
       VALUES( :lesson_name , :video_lesson , :time ,  :id ) ");
        $stmt->execute($data);
    return true;
    }


function delete_lesson($id){
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM lesson WHERE id_lesson=?");
        $stmt->execute([$id]);
    return true;
    }

    
function delete_lesson_topic($id_topic){
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM lesson WHERE id_lesson_topics=$id_topic");
        $stmt->execute();
    return true;
    }

    function update_lesson($data){
        $conn=connect();
            $stmt=$conn->prepare(" UPDATE lesson set lessonName=:lesson_name,video=:video_lesson, time=:time WHERE id_lesson =:id ");
            $stmt->execute($data);
         return true;
        }

    function Get_lesson_one($id){
        $conn=connect();
            $stmt=$conn->prepare("SELECT * FROM lesson where id_lesson =? order by id_lesson ASC ");
            $stmt->execute([$id]);
            $rows=array();
        while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
            $rows[]=$row;
        }
        return $rows;
        }
?>