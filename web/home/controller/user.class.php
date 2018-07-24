<?php
include_once"../model/dbclass.php";
class Userreg{
    public function register(){
            $db=new Db();
        if ($_GET['act']=="userreg"){
            $user=$_POST['user'];
            $password=$_POST['password'];
            $bool=true;
            $sql1="select user from login";
            $doit=mysqli_query($db->conn,$sql1);
            // for ($i=0; $i <count($doit);$i++) { 
            //         if ($user==($doit[$i])) {
            //             echo "用户名重复";
            //             $bool=false;
            //         }
            // }
            if ($bool) {
                $sql="insert into login(user,password) values('$user','$password')";
                mysqli_query($db->conn,$sql);
                echo '<a href="../view/register.v.php?act=userreg">安全退出</a>';
            }
        }
    }
}
class Userlogin{
    public function login(){
            session_start();
            $db=new Db();
            if (isset($_SESSION['id'])){
                    echo '<script>alert("用户名已登录")
                    location.href="../view/vip.v.php"
                    </script>';
            }else{
                if ($_GET['act']=="userlogin"){
                    $user=$_POST['user'];
                    $password=$_POST['password'];
                    $pp=$db->login("select * from login where user='$user' and password='$password'");
                    if ($pp){
                        echo '<script>alert("登录成功")
                        location.href="../view/vip.v.php"
                        </script>';
                        $_SESSION['id']=$pp[0]['id'];
                    }else{
                        echo '<script>alert("登录失败")
                        location.href="../view/login.v..php"
                        </script>';
                    }
                    echo '<a href="../view/login.v..php?act=userlogin">安全退出</a>';
                }
            }
    }
}
class Message{
    public function message(){
        if ($_GET['act']=="usermessage"){
            echo '留言成功';
            echo"<pre>";
            print_r($_POST);
            echo '<a href="../view/message.v.php?act=userlogin">安全退出</a>';
        }
    }
}
?>