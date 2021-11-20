<?php 


function Get_Banner(){

    $stmt="SELECT * FROM banner";
   $result= get_all( $stmt); 
 return $result;
}

function insert_Banner($data){
 
    $conn=connect();
        $stmt=$conn->prepare("INSERT INTO banner(image	,type)
       VALUES( :img ,:type) ");
        $stmt->execute($data);
    return true;
    }
    function Get_banner_one($id){
        $conn=connect();
            $stmt=$conn->prepare("SELECT * FROM banner where id_banner=?");
            $stmt->execute([$id]);
            $rows=array();
        while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
            $rows[]=$row;
        }
        return $rows;
        }
        
function update_Banner($image, $type,$id){
       $conn=connect();
 if(!empty($image)){ 
        $stmt=$conn->prepare("UPDATE  banner set image=:image,type=:type WHERE id_banner =:id");
        $stmt->execute([":image"=>$image,":type"=>$type,":id"=>$id ]);   
    return true;
 }else{
    $stmt=$conn->prepare("UPDATE  banner set type=:type WHERE id_banner =:id");
    $stmt->execute([":type"=>$type,":id"=>$id ]);   
return true;
 }
  
    }
    
    
    
    function deleteBanner($id){
    $conn=connect();
        $stmt=$conn->prepare("DELETE FROM banner WHERE id_banner =?");
        $stmt->execute([$id]);
    return true;
    }
    
    
?>