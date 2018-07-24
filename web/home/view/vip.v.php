<?php
session_start();
header('content-Type:text/html;charset=utf-8');
echo "欢迎登录";
// setcookie($_SESSION['id'],"",time()-1,"/");
echo '<a href="../view/login.v..php?act=userlogin">返回登录页</a>';
echo '<a href="../view/out.v.php?act=userlogin">退出</a>';
?>