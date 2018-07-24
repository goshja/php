<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="box1">
           <div class="box2">
                <span></span>
                <h1>
                    游客您好！您还没有<a href="login.php">登录</a>
                    若您还不是会员请先免费<a href="register.v.php">注册</a>
                </h1>
                <h2>
                    <a href="message.php" class="c">留言板</a>
                    <a href="#" class="d">订阅</a>
                    <a href="#" class="e">加入收藏</a>
                    <a href="#" class="f">论坛</a>
                    <a href="#" class="g">English</a>
                </h2>
        </div>
        <div class="box3">
                <ul>
                    <li><a href="./index.php">关于分会</a></li>
                    <li id="lan"></li>
                    <li><a href="#">行业动态</a></li>
                    <li id="lan"></li>
                    <li><a href="#">学术交流</a></li>
                    <li id="lan"></li>
                    <li><a href="#">业务合作</a></li>
                    <li id="lan"></li>
                    <li><a href="#">历届年会</a></li>
                    <li id="lan"></li>
                    <li><a href="#">会员之家</a></li>
                </ul>
                <div class="box4">
                    <p></p>
                    <span>
                        <input type="text" name="" id="">
                    </span>
                    <a href=""></a>
                </div>
            </div>
            <div class="box5">
                <div class="box6">
                    <h1>
                        <p></p>
                        <span>用户登录</span>
                        <nav>User Login</nav>
                    </h1>
                    <h2>
                        <form action="../api/user.api.php?act=userlogin"method='post'>
                        <span>
                            <div class="box7">用户名</div>
                            <div class="box8">
                                    <input type="text" name="user">
                            </div>
                            <div class="box9">
                                    请填写用户名
                            </div>
                        </span>
                        <div class="box10">
                            <p>密码</p>
                           <h2>
                               <input type="password" name="password">
                           </h2>
                           <h3>密码错误</h3>

                        </div>
                        <div class="box11"> 
                            <a href="#" class="box12"><input type="submit"name='up'value='登录' style="background:none;border:none;color:white"></a>
                            <a href="http://localhost/pro1/index4.php" class="box13" >免费注册</a>
                            <a href="#" class="box14">找回密码</a>
                        </div>
                    </form>
                    </h2>
                    
                </div> 
                <div class="box15">

                </div>
                

            </div>
                <footer>
                    <h1></h1>
                    <p>地址：上海市李冰路151号 (201203)&emsp;电话：86-51320288-5427/5415&emsp;传真：86-21-51320287</p>
                </footer>

    </div>
    
</body>
<?php
function demo($user){
$var='<script>alert("'.$user.'")</script>';
echo $var;
}
if (isset($_POST['up'])) {
    define('PATH','../txt/a.txt');
   $var=file_get_contents(PATH);
   $arr=json_decode($var);
   $_user=$_POST['user'];
   $_password=$_POST['password'];
   $bool=false;
   for ($i=0; $i < count($arr); $i++) { 
       if ($arr[$i]->user==$_user&&$arr[$i]->password==$_password) {
          demo('登录成功');
           $bool=true;
           break;
       }
   }
   if (!$bool) {
      demo('登录失败');
   }
}
?>

</html>