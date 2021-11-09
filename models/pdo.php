<?php

function connect() {
    $user="root";
    $password="";
    $dbname="du_an_1";

    $con= new PDO('mysql:host=localhost;dbname='.$dbname, $user,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
    if($con==true){
        return $con;
    }else{
        return false;
    }

}


function get_all($sql){
 $conn= connect();

 $stmt= $conn->prepare($sql);

$stmt->execute();
$rows=array();
while($row=$stmt->fetchAll(\PDO::FETCH_ASSOC)){
    $rows[]=$row;
}
return $rows;

}

function executeData($sql){

 $conn= connect();
 $stmt= $conn->prepare($sql);
$stmt->execute();
if($stmt==true){
    return true;
}else{
    return false;
}


}

?>