<?php
header('content-Type:text/html;charset=utf-8');
include('../controller/user.class.php');
if ($_GET['act']=="usermessage") {
    echo '留言成功';
    echo"<pre>";
    print_r($_POST);
    echo '<a href="../view/message.v.php?act=userlogin">安全退出</a>';
}

?>