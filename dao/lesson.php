<?php
function getAll_lesson($id_course){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM lesson Where id_course= $id_course ");
    $stmt->execute();
  $rows=array();
   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;
}

function getAll_lesson_in($id_lesson,$id_course){
    $conn=connect();
    $stmt= $conn->prepare("SELECT lesson.id_lesson as id_lesson, lesson.id_course as id_topic FROM lesson
    JOIN lesson_topics on lesson_topics.id_course=lesson.id_course JOIN course on course.id_caurse=lesson_topics.id_caurse
    WHERE id_lesson NOT IN('$id_lesson')  AND course.id_caurse=$id_course ");
    $stmt->execute();
 $row=$stmt->fetchAll(\PDO::FETCH_ASSOC);
   return $row;
}

function getAll_lesson_sum($id_course){
    $conn=connect();
    $stmt= $conn->prepare("SELECT COUNT(lesson.id_lesson) as tong  FROM course JOIN lesson on
     lesson.id_course =course.id_caurse  WHERE course.id_caurse=$id_course");
    $stmt->execute();
 $row=$stmt->fetchAll(\PDO::FETCH_ASSOC);
   return $row;
}

function getAll_lesson_video($id_cause){
    $conn=connect();
    $stmt= $conn->prepare("SELECT  lesson.video as video FROM lesson  JOIN course on course.id_caurse=lesson.id_course
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

function insert_lesson($lessonName,$id_course){
    // $conn=connect();
        $stmt="INSERT INTO lesson ( lessonName  ,id_course ) VALUES( '$lessonName' , '$id_course' ) ";   
        return   executeQuery($stmt,false);
    // true;
    }
    function checkLesson($text) {
        $stmt="SELECT * FROM lesson WHERE lessonName='$text'  ";
        return   executeQuery($stmt,false);

    }


function delete_lesson($id){
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM lesson WHERE id_lesson=?");
        $stmt->execute([$id]);
    return true;
    }

    
function delete_lesson_topic($id_topic){
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM lesson WHERE id_course=$id_topic");
        $stmt->execute();
    return true;
    }

    function update_lesson($lessonName,$id){
            $stmt=" UPDATE lesson set lessonName='$lessonName' WHERE id_lesson ='$id' ";
            return   executeQuery($stmt,false);
        }

    function Get_lesson_one($id){
        $conn=connect();
            $stmt=$conn->prepare("SELECT * FROM lesson where id_lesson =? order by RAND() ");
            $stmt->execute([$id]);
            $rows=array();
        while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
            $rows[]=$row;
        }
        return $rows;
        }
?>