<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../css/index.css">
<body>
    <div class="boxbig">

    </div>
    <div class="content">
            <header>
                <div class="box">
                        <h1>
                                麦香蛋糕-蛋糕配送中心
                                <p>登录
                                    <em>|</em>
                                    注册
                                </p>
                            </h1>
                            <h2>
                                <ul>
                                    <li><a href="#">我的账户&emsp;|</a></li>
                                    <li><a href="#"><i>补交货款&emsp;</i>|</a></li>
                                    <li><a href="#"><i>付款方式&emsp;</i>|</a></li>
                                    <li><a href="#">配送说明&emsp;|</a></li>
                                    <li><a href="#">订单查询&emsp;|</a></li>
                                    <li><a href="#">常见问题&emsp;</a></li>
                                </ul>
                            </h2>
                </div>
            </header>
            <div class="nav">
                <a href="#">
                </a>
            </div>
            <div class="nav_input">
                <h1>
                    <a href="#">
                        <img src="../images/logo.png" width="200px">
                    </a>
                </h1>
                <h2>
                    <div class="nav_input_search">
                        <div class="nav_input_searchfind">
                            <input type="text" class="input">
                        </div>
                        <input type="submit" value="搜索" class="find">
                        <ul>
                            <li><a href="#" >生日蛋糕</a></li>
                            <li><a href="#">巧克力蛋糕</a></li>
                            <li><a href="#" style="color:#C00;">多层蛋糕</a></li>
                            <li><a href="#">冰激凌蛋糕</a></li>
                            <li><a href="#">祝寿蛋糕</a></li>
                        </ul>
                    </div>
                </h2>
                <h3>
                    <a href="#">
                        <i></i>
                        <p>我的购物车</p>
                        <p>></p>
                    </a>
                </h3>
            </div>
            <div class="nav_content">
                <dl>
                    <dt>全部商品分类</dt>
                    <dd>
                        <a href="#">首页</a>
                    </dd>
                    <dd>
                        <a href="#">鲜奶蛋糕</a>
                    </dd>
                    <dd>
                        <a href="#">水果蛋糕</a>
                    </dd>
                    <dd>
                        <a href="#">儿童蛋糕</a>
                    </dd>
                    <dd>
                        <a href="#">个性蛋糕</a>
                    </dd>
                    <dd>
                        <a href="#">翻糖蛋糕</a>
                    </dd>
                    <dd>
                        <a href="#">情趣蛋糕</a>
                    </dd>
                    <dd>
                        <a href="#">榴莲蛋糕</a>
                    </dd>
                    <dd class="number">
                        4006-036-808
                    </dd>
                </dl>

            </div>
            <div class="img">
                <ul style="left:0px"id="ul">
                    <li>
                        <a href="#">
                            <img src="../images/20130706hogqij.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20130706mmkcca.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20130706kzaaiv.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20130706unqpbu.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20130706vtksuo.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20130706zfqaef.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20151012fnszug.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/20151012hmkofy.jpg" width="1300px" height="400px">
                        </a>
                    </li>
                </ul>
                <dl style="left:0px">
                    <dt><p id="yellow" style="left:0px"></p></dt>
                    <dt></dt>
                    <dt></dt>
                    <dt></dt>
                    <dt></dt>
                    <dt></dt>
                    <dt></dt>
                    <dt></dt>
                </dl>
                <div class="nav_list">
                
                </div>
            </div>
    </div>
</body>
<script>
    window.onload=function(){
        var ul=document.getElementById('ul');
        var img=document.getElementById('ul').getElementsByTagName('img');
        var lineyellow=document.getElementById('yellow');
        var time=null;
        var time1=null;
        var times=2000;
        var speed=-1300;
        var speed1=35;
        function demo(){
            time=setInterval(function(){
             ul.style.left = parseInt(ul.style.left)+speed+"px";
            if(parseInt(ul.style.left)==-10400){
                ul.style.left=0;
            }
           },times);
        }
        function demo1(){
            time1=setInterval(function(){
            lineyellow.style.left = parseInt(lineyellow.style.left)+speed1+"px";
            if(parseInt(lineyellow.style.left)==280){
                lineyellow.style.left=0;
            }
           },times);
        }
        demo1();
        for(var i=0;i<img.length;i++){
            img[i].onmousemove=function(){
                clearInterval(time);
                clearInterval(time1);
            }
            img[i].onmouseout=function(){
                demo();
                demo1();
            }
        }
        demo();
        for(var j=0;j<lineyellow.length;j++){
            lineyellow[j].onmousemove=function(){
                clearInterval(time1);
                clearInterval(time);
                lineyellow[j].index=j;
                ul.style.left=this.index*(-1300)+'px';
            }
            lineyellow[j].onmouseout=function(){
                demo1();
                demo();
            }
        }
    }
</script>
</html>

