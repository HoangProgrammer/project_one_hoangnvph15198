<?php
// function getAll_topic($id_caurse){
//     $conn=connect();
//     $stmt= $conn->prepare("SELECT * FROM lesson_topics Where id_caurse =?");
//     $stmt->execute([$id_caurse]);
//   $rows=array();
//    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
//        $rows[]=$row;
//    }
//    return $rows;

// }


// function get_one_topic($id_topic){
//     $conn=connect();
//     $stmt= $conn->prepare("SELECT * FROM lesson_topics Where id_lesson_topics  ={$id_topic}");
//     $stmt->execute();
//   $rows=array();
//    while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
//        $rows[]=$row;
//    }
//    return $rows;

// }

// function insert_topic($data){
//         $conn=connect();
//             $stmt=$conn->prepare("INSERT INTO lesson_topics(topicName,id_caurse)  VALUES( :topicName , :id_course ) ");   
//             $stmt->execute($data);
//         return true;
//         }

//         function update_topic($data){
//             $conn=connect();
//                 $stmt=$conn->prepare(" UPDATE lesson_topics set topicName=:topicName WHERE id_lesson_topics=:id ");
//                 $stmt->execute($data);
//              return true;
       
            
//             }


//             function delete_topic($id){
//                 $conn=connect();
//                     $stmt=$conn->prepare("DELETE FROM lesson_topics WHERE id_lesson_topics=?");
//                     $stmt->execute([$id]);
//                 return true;
//                 }

//             function delete_topic_course($id){
//                 $conn=connect();
//                     $stmt=$conn->prepare("DELETE FROM lesson_topics WHERE id_caurse=?");
//                     $stmt->execute([$id]);
//                 return true;
//                 }



//             function delete_topicALL($id){
//                 $conn=connect();
//                     $stmt=$conn->prepare("DELETE FROM lesson_topics WHERE id_lesson_topics IN($id) ");
//                     $stmt->execute();
//                 return true;
//                 }

?>