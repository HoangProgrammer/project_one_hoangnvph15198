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
    $query=$con->prepare("UPDATE request_friend set status=1 where id_request =2 ");
$query->execute();
    $sender=$_GET['id'];
    $my_id="2";  
$query=$con->prepare("INSERT  INTO friend(user_one ,user_two ) values(?,?) ");
$query->execute([$sender,$my_id]);
$_SESSION['success']="đã gửi yêu cầu";
header("location:confix.php");
}


?>