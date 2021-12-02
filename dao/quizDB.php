<?php
function getAll_quiz($id_lesson ){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM quiz Where  id_lesson = ? order by RAND() ");
    $stmt->execute([$id_lesson ]);
  $rows=array();
   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;

}

function final_test($id_quiz ){
    $conn=connect();
    $stmt= $conn->prepare("SELECT answer FROM quiz Where id_quiz = ?  ");
    $stmt->execute([$id_quiz ]);
  $rows=array();

   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;

}


function insert_quiz($data){
  
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO quiz ( question , Selection1 , Selection2 , Selection3 , answer,id_lesson)
       VALUES( :question , :Selection1 , :Selection2 , :Selection3, :answer,:id_lesson ) ");
        $stmt->execute($data);
    return true;
    }

    
function delete_quiz($id){
  
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM quiz WHERE id_quiz =?");
        $stmt->execute([$id]);
    return true;
    }

    function update_quiz($data){
        $conn=connect();
            $stmt=$conn->prepare(" UPDATE quiz set question=:question,Selection1=:Selection1, Selection2=:Selection2,
            Selection3=:Selection3,answer=:answer WHERE id_quiz  =:id ");
            $stmt->execute($data);
         return true;
        }

    function Get_quiz_one($id){
        $conn=connect();
            $stmt=$conn->prepare("SELECT * FROM quiz where id_quiz = ? ");
            $stmt->execute([$id]);
            $rows=array();
        while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
            $rows[]=$row;
        }
        return $rows;
        }
?>