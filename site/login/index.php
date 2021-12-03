<?php  
session_start();
ob_start();
require_once ('../phpmailer/index.php');
require_once ('../../models/pdo.php');
require_once ('../../dao/accountDB.php');
$mailer=new Mailer();

?>