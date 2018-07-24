<?php
header('content-Type:text/html;charset=utf-8');
include('../controller/user.class.php');
include_once"../model/dbclass.php";
$login=new Userlogin();
$login->login();
$register=new Userreg();
$register->register();
// $message=new Message();
// $message->message();
?>