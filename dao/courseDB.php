<?php  

function Get_caurse(){

    $stmt="SELECT * FROM course";
   $result= get_all( $stmt); 
 return $result;
}

function Get_caurse_one($id){
$conn=connect();
    $stmt=$conn->prepare("SELECT * FROM course where id_caurse=?");
    $stmt->execute([$id]);
    $rows=array();
while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
    $rows[]=$row;
}
return $rows;
}
?>