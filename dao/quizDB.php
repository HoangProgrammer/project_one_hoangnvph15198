<?php
function getAll_quiz($id_lesson ){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM quiz Where  id_lesson = ? ");
    $stmt->execute([$id_lesson ]);
  $rows=array();
   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;
}

function checkQuiz($text){
    $stmt="SELECT * FROM quiz WHERE question='$text' ";
    executeQuery($stmt,false);
}
function getAll_quiz_limit($id_lesson,$preRows,$number){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM quiz  where id_lesson=$id_lesson limit $preRows,$number");
    $stmt->execute();
  $rows=array();
   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;

}

function final_test($id_quiz ){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM quiz Where id_quiz = ?  ");
    $stmt->execute([$id_quiz ]);
$rows= $stmt->fetchAll();
   return $rows;

}


function insert_quiz($data){
  
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO quiz ( question ,img, Selectiona , Selectionb , Selectionc , Selectiond , answer,id_lesson)
       VALUES( :question ,:img, :Selection1 , :Selection2 , :Selection3, :Selection4,:answer,:id_lesson ) ");
        $stmt->execute($data);
    return true;
    }

    
function delete_quiz($id){
  
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM quiz WHERE id_quiz =?");
        $stmt->execute([$id]);
    return true;
    }
function delete_quiz_by_lesson($id){
  
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM quiz WHERE id_lesson =?");
        $stmt->execute([$id]);
    return true;
    }

    function update_quiz($data){
        $conn=connect();
            $stmt=$conn->prepare(" UPDATE quiz set question=:question,img=:img, Selectiona=:Selectiona, Selectionb=:Selectionb,
            Selectionc=:Selectionc,Selectiond=:Selectiond,answer=:answer WHERE id_quiz  =:id ");
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