<?php
session_start();
$user="root";
$password="";
$dbname="friends";

$con= new PDO('mysql:host=localhost;dbname='.$dbname, $user,$password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);


?>
<?php
if(isset($_GET['id'])){
    $receiver=$_GET['id'];
    $sender="1";
     
$query=$con->prepare("INSERT  INTO request_friend(sender,receiver) values(?, ?) ");
$query->execute([$sender,$receiver]);
$_SESSION['success']="đã gửi yêu cầu";
header("location:confix.php");
}

if(isset($_GET['delete_id'])){
    $receiver=$_GET['delete_id'];
  
$query=$con->prepare("DELETE FROM request_friend where id_request=? ");
$query->execute([$receiver]);
$_SESSION['success']="đã gửi yêu cầu";
header("location:confix.php");
}


?>