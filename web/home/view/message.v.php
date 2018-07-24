<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/message.css">
</head>
<body>
    <div class="box1">
        <div class="box2">
                <span></span>
                <h1>
                    游客您好！您还没有<a href="login.html">登录</a>
                    若您还不是会员请先免费<a href="register.html">注册</a>
                </h1>
                <h2>
                    <a href="message.html" class="c">留言板</a>
                    <a href="#" class="d">订阅</a>
                    <a href="#" class="e">加入收藏</a>
                    <a href="#" class="f">论坛</a>
                    <a href="#" class="g">English</a>
                </h2>
        </div>
        <div class="box3">
            <ul>
                   <li><a href="index.html">关于分会</a></li>
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
                    <span><input type="text" name="" id=""></span>
                    <a href=""></a>
                </div>
            </div>
            <div class="box5">
                <div class="box6">
                    <span>
                        <h1></h1>
                        <h2><p>留言板</p></h2>
                        <h3></h3>
                        <h4></h4>
                        <h5></h5>
                    </span>
                    <div class="box7">
                        <div class="box8">
                            <div class="box9">
                                <div class="box10">
                                    <div class="arrow"> </div>
                        <?php
                        include_once"../model/dbclass.php";
                        class Message{
                            public function message(){
                                $db=new Db();
                                if (isset($_POST['up'])){
                                        $content=$_POST['content'];
                                        $mn=$db->find("select messageB_Content from message where messageB_Content='$content'");
                                        $sql="insert into message(messageB_Content) values('$content')";
                                        $re= mysqli_query($db->conn,$sql);
                                        echo $mn["messageB_Content"];
                                }
                            }
                        }
                        $message=new Message();
                        $message->message();
                        ?>
                                     <!-- <h2>张三 于 2011-01-04 14:52:41 问 :</h2>
                                     <p>据悉，2010年下半年以来，衣柜企业整体销售形势不容乐观。</p>
                                     <h3>admin 于 2011-01-04 14:52:41 答 :</h3>
                                     <span>在一些主流卖场里，即使排名前十名的企业也未必能盈利即使能盈利。在这种情况下，企业纷纷打出了涨价牌，实属无奈之举。</span>
                                     <div class="m"></div>
                                     <h4>张三 于 2011-01-04 14:52:41 问 :</h4>
                                     <h5>湖南未来一周仍维持低温雨雪天气?</h5>
                                     <div class="arrow1"> </div>
                                     <h6>张三 于 2011-01-04 14:52:41 问 :</h6>
                                     <div class="l">湖南未来一周仍维持低温雨雪天气。湖南未来一周仍维持低温雨雪天气</div>
                                     <div class="k"></div>
                                     <div class="h">张三 于 2011-01-04 14:52:41 问 :</div>
                                     <div class="p">湖南未来一周仍维持低温雨雪天气</div>
                                     <div class="o"></div>
                                     <div class="i">张三 于 2011-01-04 14:52:41 问 :</div>
                                     <div class="u">我想买台，请问湘潭市在哪买？谢谢。</div>
                                     <div class="y"></div>
                                     <div class="t">admin 于 2011-01-04 14:52:41 答 :</div>
                                     <div class="r">您好！感谢您对中广欧特斯的关注与支持！请与我们区域经理联系，电话：13757812297.杨经理</div> -->
                                     <div class="w"></div>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                    <div class="box29">
                            <a href="#" class="box30">首页</a>
                            <a href="#" class="box31">上一页</a>
                            <a href="#">1</a>
                            <a href="#" class="box32">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">7</a>
                            <a href="#">8</a>
                            <a href="#" class="nex">下一页</a>
                            <a href="#" class="last">尾页</a>
                            <a href="#">...</a>
                        </div>

                </div>
                <div class="box33">
                        <div class="box34"></div>
                        <div class="box35"></div>
                        </div>
        
                </div>
                <div class="box36">
                    <p></p>
                    <a href="#">
                        <img src="images/friends_r1_c4.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="images/friends_r1_c6.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="images/friends_r1_c8.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="images/friends_r1_c11.jpg" alt="">
                    </a>
                </div>
                <footer>
                    <h1></h1>
                    <p>地址：上海市李冰路151号 (201203)&emsp;电话：86-51320288-5427/5415&emsp;传真：86-21-51320287</p>
                </footer>
                <div class="final">
                   <span>
                       <h1></h1>
                       <h2>
                       </h2>
                       <h3>
                           <nav>我要发言</nav>
                           <a href=""class="lk"></a>
                       </h3>
                   </span>
                  <div class="box52">
                        <div class="lm"></div>
                        <div class="lp">
                            <form action="" method="post">
                                <span>
                                <textarea name="content" id="" cols="" rows=""></textarea>
                                 </span>
                                <p>
                                    <input type="text">
                                </p>
                                <p>
                                    <input type="text">
                                </p>
                                <p>
                                    <input type="text">
                                </p>
                                <p>
                                    <input type="text">
                                </p>
                            
                           <div class="nh">
                               <div class="box50"></div>
                               <a href="#">看不清？请刷新</a>
                             </div>
                             <div class="po">
                               <a href="#"><input type="submit" name="up"value="发表留言"></a>
                             </div>
                             </form>
                        </div>
                        <div class="box51"></div>
                        <div class="box53"></div>
                        <div class="box54"></div>
                        <div class="box55"></div>
                  </div>
                  <div class="box56">
                      <a href="#"></a>
                  </div>
                   
            </div>

            </div>
    </div>
    
</body>

</html>