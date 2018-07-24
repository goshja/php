
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="box1">
        <div class="box2">
                <span></span>
                <h1>
                    游客您好！您还没有<a href="login.php">登录</a>
                    若您还不是会员请先免费<a href="register.php">注册</a>
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
                    <a href="#"></a>
                </div>
            </div>
            <div class="box5">
                    <div class="box6">
                        <h1>
                            <p></p>
                            <span>免费注册</span>
                            <nav>Register</nav>
                        </h1>
                        <h2>
                            <form action="../api/user.api.php?act=userreg" method='post'>
                            <span>
                                <div class="box7">用户名</div>
                                <div class="box8">
                                    <input type="text" id="user1" name="user">
                                </div>
                                <div class="box9">
                                        3到14位的中文字符、英文字母、数字组成
                                </div>
                            </span>
                            <div class="box10">
                                <p>电子邮箱</p>
                               <h2>
                                   <input type="text" id="email">
                               </h2>
                               <h3>请准确输入您的邮箱</h3>
                            </div>
                            <div class="box11">
                                <p>密&emsp;码</p>
                                <input type="password" id="password" name='password'>
                                <h3>密码错误</h3>
                            </div>
                            <div class="box12"> 
                                <p>确认密码</p>
                                <input type="password" id="check" name='check'>
                                <h3 id="h3">输入正确</h3>
                            </div>
                            <div class="box13"> 
                                    <p>验证码</p>
                                    <input type="text" id="yanzheng">
                                    <h3>输入正确</h3>
                            </div>
                            <div class="box14">
                                <p>
                                <?php
                                // include_once("../php/fun.php");
                                // verificationcode(5);
                                // ?>
                                </p>
                                <h5>
                                    看不清？
                                    <a href="">刷新</a>
                                </h5>
                            </div>
                            <div class="box16">
                                <input type="submit"name='up' value="注册"style='border:none;background:none;color:white;margin-top:8px;'>
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
<script>
    window.onload=function(){
        var a=document.getElementById("user1");
        var b=document.getElementById("email");
        var c=document.getElementById("password");
        var d=document.getElementById("yanzheng");
        var e=document.getElementById("check");
        a.onfocus=function(){
            a.value="请输入用户名";
            a.style.color="#666";
            a.style.
            
        }
        a.onblur=function(){
            a.value="您还未输入用户名";
            a.style.color="#666";
        }
        b.onfocus=function(){
            b.value="请输入电子邮箱";
            b.style.color="#666";
        }
        b.onblur=function(){
            b.value="您还未输入电子邮箱";
            b.style.color="#666";
        }
        e.onfocus=function(){
            c.value="请输入密码";
            c.style.color="#666";
        }
        e.onblur=function(){
            if (e.value!=c.value){
                f.value=="两次密码不一致";
            }
            c.value="您还未输入密码";
            c.style.color="#666";
        }
        d.onfocus=function(){
            d.value="请输入验证码";
            d.style.color="#666";
        }
        d.onblur=function(){
            d.value="您还未输入验证码";
            d.style.color="#666";
        }

    }
</script>

</html>