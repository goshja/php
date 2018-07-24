<?php
session_start();
include_once"../controller/user.class.php";
header('content-Type:text/html;charset=utf-8');
echo "欢迎退出";
$_SESSION=[];
echo '<a href="../view/login.v..php?act=userlogin">返回登录页</a>';
?>