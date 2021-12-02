<?php 
      function getAll_point_user($id_user ,$id_lesson){
            $conn=connect();
            $stmt= $conn->prepare("SELECT * FROM point Where id_user= ? and id_lesson=?");
            $stmt->execute([$id_user ,$id_lesson]);
          $rows=array();
           while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
               $rows[]=$row;
           }
           return $rows;
        
        }   
      function getAll_point_by_user($id_user ){
            $conn=connect();
            $stmt= $conn->prepare("SELECT point.point_total as point FROM point join lesson
            on point.id_lesson=lesson.id_lesson JOIN user on point.id_user=user.id_user WHERE user.id_user=?;");
            $stmt->execute([$id_user]);
          $rows=array();
           while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
               $rows[]=$row;
           }
           return $rows;
        
        }   
        
function insert_point($id_user,$id_lesson,$mark){
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO point(id_user ,id_lesson ,point_total)
         VALUES(:id_user,:id_lesson,:point_total)");
        $stmt->execute([":id_user"=>$id_user,":id_lesson"=>$id_lesson,":point_total"=>$mark]);
    return true;
    }


    function update_point($mark,$id_lesson,$id_user){
        $conn=connect();
            $stmt=$conn->prepare(" UPDATE point set point_total=:point_total  WHERE id_lesson =:id_lesson and id_user=:id_user");       
            $stmt->execute([":point_total"=>$mark,":id_lesson"=>$id_lesson,":id_user"=>$id_user]);
         return true;
        }

    function delete_point($id_lesson,$id_user){
        $conn=connect();
            $stmt=$conn->prepare("DELETE FROM point WHERE id_lesson =:id_lesson and id_user=:id_user");       
            $stmt->execute([":id_lesson"=>$id_lesson,":id_user"=>$id_user]);
         return true;
        }

   
        
        

?>