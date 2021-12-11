<?php
require_once './../models/pdo.php';
$conn = connect();

$param = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "number_phone" => $_POST['number'],
    "course" => $_POST['course'],
];
$sql="INSERT INTO contact(name, email, phone_number, course) VALUES(:name, :email, :number_phone, :course)";
$stm = $conn->prepare($sql);
$stm->execute($param);

echo "Nhận tư vấn thành công. Chúng tôi sẽ liện hệ với bạn sớm nhất";
return true;
?>