<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>医药协会首页</title>
    <link rel="stylesheet" href="css/index.v.css">
</head>

<body>
    <div class='denglu'></div>
    <div class="main">
        <header class='head'>
            <img src="images/top_r1_c1.jpg" alt="">
            <div class='right'>
                <div class='login'>
                    游客您好!您还没有 <a href="login.php">登录</a> ,若你不是会员请先免费 <a href="register.php">注册</a>
                </div>
                <div class="list">
                    <ul>
                        <li style="background:url(images/top_r4_c4.jpg) no-repeat"><a href="message.html">留言板</a></li>
                        <li style="background:url(images/top_r4_c6.jpg) no-repeat"><a href="#">订阅</a></li>
                        <li style="background:url(images/top_r4_c8.jpg) no-repeat"><a href="#">加入收藏</a></li>
                        <li style="background:url(images/top_r4_c10.jpg) no-repeat"><a href="#">论坛</a></li>
                        <li style="background:url(images/top_r4_c12.jpg) no-repeat"><a href="#">English</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class='menu'>
            <ul>
                <li><a href='index.html'>关于分会</a></li>
                <li class="line"></li>
                <li><a href='#'>行业动态</a></li>
                <li class="line"></li>
                <li><a href='#'>学术交流</a></li>
                <li class="line"></li>
                <li><a href='#'>业务合作</a></li>
                <li class="line"></li>
                <li><a href='#'>历届年会</a></li>
                <li class="line"></li>
                <li><a href='#'>会员之家</a></li>
            </ul>
            <div class="search">
                <p></p>
                <span><input name="" type="text" /></span>
                <a href="#"></a>
            </div>
        </div>
        <div class="body">
            <div class="img">
                <i style="left:0">
                    <img src="images/header_r1_c1.jpg" width="745px" height="260px">
                    <img src="images/timg.jpeg" width="745px" height="260px">
                    <img src="images/timg (1).jpeg" width="745px" height="260px">
                    <img src="images/u=2337485920,4066388129&fm=27&gp=0.jpg" width="745px" height="260px">
                </i>
               
                <ul id="ul">
                    <li>1<span style="left:0" id="span"></span></li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>           
                <ul class="list">
                    <li class="login"></li><!-- 会员登录-->
                    <li class="ab">
                        <h5>样品分会入会申请</h5>
                        <h6>Applicaction for Membership</h6>
                    </li>
                    <li class="ab">
                        <h5>生物样本库论坛</h5>
                        <h6>Biological sample bank Forum</h6>
                    </li>
                    <li class='ab'>
                        <h5>历届练会入口</h5>
                        <h6>Previous annual corporation meetings</h6>
                    </li>
                </ul>            
        </div>
        <div class="body1">
            <div class='body1_left'>
                <div class="body1_left_title">
                    <h1></h1>                    
                    <h5><p>关于分会</p>
                    <a href="#"><img src="images/more.jpg" alt=""></a>
                    </h5>  
                </div>
                <div class="body1_left_boder_left"></div>
                <div class="body1_left_main">
                    <img src="images/about_fh_pic.jpg" alt="">
                    <a href="#"><p>中国医药生物技术协会成立于1993年，由原卫生部部长陈敏章等发起，得到当时的医药管理部门的大力支持…</p></a>
                </div>
                <div class="body1_left_boder_right"></div>
                <div class="body1_left_boder_left_bottom"></div>
                <div class="body1_left_boder_bottom"></div>
                <div class="body1_left_boder_right_bottom"></div>
            </div>
            <div class='body1_middle'>
                <div class="body1_middle_title">
                    <h1></h1>
                    <h5>行业动态</h5>
                    <h2></h2>
                    <div class="body1_middle_title_a">
                        <div class="body1_middle_title_a_more">
                            <a href="#"><img src="images/more.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="body1_middle_title_b"></div>
                </div>
                <div class="body1_middle_list">
                    <ul> 
                        <?php
                        // function showLinks(){
                        //     $rows=[
                        //         ['id'=>'1','title'=>'郜恒骏教授赴华'],
                        //         ['id'=>'2','title'=>'中美将共建心血管和代谢类疾病生物'],
                        //         ['id'=>'3','title'=>'上海市2012年度"科技创新行动计划"…'],
                        //         ['id'=>'4','title'=>'郜恒骏教授赴华中科技大学同同济医学…'],
                        //         ['id'=>'5','title'=>'中美将共建心血管和代谢类疾病生物'],
                        //         ['id'=>'6','title'=>'上海市2012年度"科技创新行动计划"…'],
                        //     ];
                        //     for ($i=0; $i<count($rows);$i++){
                        //         next($rows[$i]);
                        //         list($id,$value)=each($rows[$i]);
                        //         echo'<li><a href="content.html">'.$value.'</a></li>';     
                        //     }
                        // }
                        // function showLinks($arr){
                        //     for ($i=0; $i<count($arr);$i++){
                        //         echo'<li><a href="?id='.$arr[$i]['id'].'">'.$arr[$i]['title'].'</a></li>';
                        //     }
                        // }
                        $rows=[
                            ['id'=>'1','title'=>'郜恒骏教授赴华'],
                            ['id'=>'2','title'=>'中美将共建心血管和代谢类疾病生物'],
                            ['id'=>'3','title'=>'上海市2012年度"科技创新行动计划"…'],
                            ['id'=>'4','title'=>'郜恒骏教授赴华中科技大学同同济医学…'],
                            ['id'=>'5','title'=>'中美将共建心血管和代谢类疾病生物'],
                            ['id'=>'6','title'=>'上海市2012年度"科技创新行动计划"…'],
                        ];
                        // function showLinks($arr){
                        //     foreach ($arr as $key =>$value){
                        //         echo'<li><a href="?id='.$value['id'].'">'.$value['title'].'</a></li>';
                        //     }
                        // }
                         function showLinks($arr){
                            $brr="";
                            foreach ($arr as $key =>$value){
                               $brr.='<li><a href="?id='.$value['id'].'">'.$value['title'].'</a></li>';
                            }
                            return $brr;
                        }
                        echo showLinks($rows);
                         ?>
                    </ul>
                </div>
                <div class='body1_middle_main'>
                    <div class="body1_middle_main_img">
                        <img src="images/hydt_pic_r1_c1.jpg" alt="">
                        <h5>分会赴湖北省肿瘤医</h5>
                        <p>周主任从生物样本库中的建设原则总体设计、…<a href='#'>详细>></a></p>
                    </div>
                </div>
                <div class='body1_middle_main'>
                    <div class="body1_middle_main_img">
                        <img src="images/hydt_pic_r1_c1.jpg" alt="">
                        <h5>分会赴湖北省肿瘤医</h5>
                        <p>周主任从生物样本库中的建设原则总体设计、…<a href='#'>详细>></a></p>
                    </div>
                </div>
            </div>
            <div class='body1_right'>
                <div class='body1_right_title'>
                    <h1></h1>
                    <h5></h5>
                    <h2><p>分会新闻</p>
                        <a href="#"><img src="images/more.jpg" alt=""></a>
                    </h2>
                </div>
                <div class='body1_right_border_right'></div>
                <div class='body1_right_main'>
                    <img src="images/news_fh.jpg" alt="">
                    <h2>郜恒骏教授赴华中科技…</h2>
                    <p>周主任从生物样本库中的建设原则总体设计、…<a href='#'>详细>></a></p>
                </div>
                <div class="body1_right_border_left"></div>
                <div class="body1_right_border_right_bottom"></div>
                <div class="body1_right_border_bottom"></div>
                <div class="body1_right_border_left_bottom"></div>
            </div>
            
        </div>
        <div class="body2">
            <ul>
                <li>
                    <h5>网络联盟</h5>
                    <h6>Network alliance</h6>
                </li>
                <li>
                    <h5>法律法规</h5>
                    <h6>Laws and regulations</h6>
                </li>
                <li>
                    <h5>资源中心</h5>
                    <h6>Resource center</h6>
                </li>
                <li>
                    <h5>电子期刊</h5>
                    <h6>Electronic periodicals</h6>
                </li>
            </ul>
            <div class="body2_middle">
                <div class="body2_middle_title">
                    <h1></h1>
                    <h5>业务合作</h5>
                    <h2></h2>
                    <div class="body2_middle_title_a">
                        <div class="body2_middle_title_a_more">
                            <a href="#"><img src="images/more.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="body2_middle_title_b"></div>
                </div>
                <div class="body2_middle_main">
                    <ul>
                        <li><img src="images/ywhz_pic_r1_c1.jpg" alt=""></li>
                        <li><img src="images/ywhz_pic_r1_c12.jpg" alt=""></li>
                        <li><img src="images/ywhz_pic_r1_c15.jpg" alt=""></li>
                        <li><img src="images/ywhz_pic_r1_c19.jpg" alt=""></li>
                        <li><img src="images/ywhz_pic_r1_c23.jpg" alt=""></li>
                    </ul>
                    <div class="body2_middle_main_news">
                        <h5>分会赴湖北省</h5>
                        <h6>周主任从生物样本库中的建设原则总体设计、功能区域周主任从生物样本库中的建设原则总体设计功能任从生物样本库区域…<a href="#">详细>></a></h6>
                    </div>
                </div>
            </div>
            <div class='body2_right'>
                <div class='body1_right_title'>
                    <h1></h1>
                    <h5></h5>
                    <h2><p>学术交流</p>
                        <a href="#"><img src="images/more.jpg" alt=""></a>
                    </h2>
                </div>
                <div class='body1_right_border_right'></div>
                <div class='body2_right_main'>
                    <div class="body2_right_main_head">
                        <img src="images/pic1.jpg" alt="">
                        <h5>行业动态标题</h5>
                        <h6>郜教授呼吁大家摆脱为了发…<a href="#">详细>></a></h6>
                    </div>
                    <ul>
                        <?php
                        $frr=[
                            ['id'=>'1','title'=>'郜恒骏教授赴华中科技…'],
                            ['id'=>'2','title'=>'中美将共建心血管和代…'],
                            ['id'=>'3','title'=>'上海市2012年度"科技的'],
                            ['id'=>'4','title'=>'第一次中国123断技术'],
                        ];
                        function learn($arr){
                            foreach ($arr as $key => $value){
                                echo ' <li><a href='.$value['id'].'"?id="><p>'.$value['title'].'</p></a><span>12.7.02</span></li>';
                             }
                        }
                        learn($frr);
                       
                        ?>
                    </ul>
                </div>
                <div class="body1_right_border_left"></div>
                <div class="body1_right_border_right_bottom"></div>
                <div class="body1_right_border_bottom"></div>
                <div class="body1_right_border_left_bottom"></div>
            </div>
        </div>
        <div class="body3">
            <div class="body3_left">
                <div class="body3_left_title">
                    <h1></h1>                    
                    <h5><p>会员之家</p>
                    <a href="#"><img src="images/more.jpg" alt=""></a>
                    </h5>  
                </div>
                <div class="body3_left_boder_left"></div>
                <div class='body3_left_main'>
                    <ul>
                        <?php
                        $arr=[
                            ['id'=>'1','title'=>'第一次中国分子诊断技术'],
                            ['id'=>'2','title'=>'郑州大学第五届研究生学'],
                            ['id'=>'3','title'=>'第三届上海功能基因组与…'],
                            ['id'=>'4','title'=>'第一次中国分子诊断技术'],
                            ['id'=>'5','title'=>'郑州大学第五届研究生学']
                        ];
                        function user($arr){
                            for ($i=0; $i <count($arr);$i++) { 
                               echo' <li><a href="?id='.$arr[$i]['id'].'">'.$arr[$i]['title'].'</a></li>';
                            }
                        }
                        user($arr);
                        ?>
                    </ul>
                </div>
                <div class="body3_left_boder_right"></div>
                <div class='body3_left_border_right_bottom'></div>
                <div class="body3_left_border_bottom"></div>
                <div class="body3_left_border_left_bottom"></div>
            </div>
            <div class="body3_img"></div>
            <div class="body3_right">
                <div class='body1_right_title'>
                    <h1></h1>
                    <h5></h5>
                    <h2><p>资源中心</p>
                        <a href="#"><img src="images/more.jpg" alt=""></a>
                    </h2>
                </div>
                <div class="body3_right_border_left"></div>
                <div class="body3_right_main">
                    <ul>
                        <?php
                         $hrr=[
                            ['id'=>'1','title'=>'郜恒骏教授赴华中科技大学同…'],
                            ['id'=>'2','title'=>'中美将共建心血管和代谢类疾…'],
                            ['id'=>'3','title'=>'上海市2012年度"科技创新行…'],
                            ['id'=>'4','title'=>'郜恒骏教授赴华中科技大学同…'],
                            ['id'=>'5','title'=>'中美将共建心血管和代谢类疾…']
                        ];
                        function resource($arr){
                            $grr="";
                            for ($i=0; $i <count($arr) ; $i++) { 
                                 $grr.=' <li><a href="?id='.$arr[$i]['id'].'">'.$arr[$i]['title'].'</a></li>';
                            }
                            return $grr;
                        }
                       echo resource($hrr);
                        ?>
                    </ul>
                </div>
                <div class="body3_right_border_right"></div>
                <div class="body3_right_border_left_bottom"></div>
                <div class='body3_right_border_bottom'></div>
                <div class='body3_right_border_right_bottom'></div>
            </div>
        </div>
        <div class="bottom">
            <img src="images/friends_r1_c1.jpg" class="bottom_img1">
            <img src="images/friends_r1_c4.jpg" class="bottom_img2">
            <img src="images/friends_r1_c6.jpg" class="bottom_img2">
            <img src="images/friends_r1_c8.jpg" class="bottom_img2">
            <img src="images/friends_r1_c11.jpg" class="bottom_img2">
        </div>
        <footer>
            <img src="images/footer_logo.jpg" class="img">
            <p>地址：上海市李冰路151号(201203) 电话:86-51320288-5427/5415 传真：86-51320288</p>
        </footer>
        <div class="piaofu">
            <div class='piaofu_title'>
                <h1></h1>
                <p></p>
                <h5><p>通知</p>
                    <div class="close">关闭</div>
                </h5>
            </div>
            <div class="piaofu_border_left"></div>
            <div class="piaofu_main">
                <h4>通知标题</h4>
                <h5>2012年12月21日</h5>
                <p>郜教授呼吁大家摆脱为了发郜教授呼吁大家摆脱为了发郜教授呼吁大家摆脱为了发郜教郜教授呼吁…<a href="#">详细>></a></p>
            </div>
            <div class="piaofu_border_right"></div>
            <div class="piaofu_border_left_bottom"></div>
            <div class='piaofu_border_bottom'></div>
            <div class="piaofu_border_right_bottom"></div>
        </div>
    </div>
</body>
<script>
    window.onload=function(){
        var a=document.getElementsByClassName("piaofu");
        var b=document.getElementsByClassName("close");
        var i=document.getElementsByTagName("i");
        var li=document.getElementById("ul").getElementsByTagName("li");
        var gery=document.getElementById("span");
        b[0].onclick=function(){
            a[0].style.display="none";
        }
        var time=null;
        var time1=null;
        var times=1500;
        var speed=-750;
        var speed1=24;
        function demo(){
            time=setInterval(function(){
             i[0].style.left = parseInt(i[0].style.left)+speed+"px";
            if(parseInt(i[0].style.left)==-3000){
                i[0].style.left=0;
            }
           },times);
        }
        function demo1(){
            time1=setInterval(function(){
                gery.style.left = parseInt(gery.style.left)+speed1+"px";
                if(parseInt(gery.style.left)==96){
                gery.style.left=0;
            }
           },times);
        }
        demo1();
        demo();
        i[0].onmouseover=function(){
            clearInterval(time);
            clearInterval(time1);
        }
        i[0].onmouseout=function(){
            demo();
            demo1();
        }
        for(var j=0;j<li.length;j++){
            li[j].index=j;
            li[j].onmouseout=function(){
            demo();
            demo1();
            }
            li[j].onmouseover=function(){
                for(var k=0;k<li.length;k++){
                    li[k].style.backgroundColor="rgba(0, 0, 0,0.2)";
                    this.style.backgroundColor="rgba(0, 0, 0,0.6)";
                    this.onmouseout=function(){
                        this.style.backgroundColor="rgba(0, 0, 0,0.2)";
                    }
                }
                i[j].style.left=this.index*(-750)+"px";
                clearInterval(time);
                clearInterval(time1);
            }
        }
    }
</script>
</html>
<dl>
            <?php neyyw($new); ?>
        </dl>
        <dl>
           <?php neyyw($new1);  ?>
        </dl>
        <dl>
            <?php neyyw($new2);  ?>
        </dl>
        <dl>
            <?php neyyw($new3);  ?>
        </dl>
        <dl>
            <?php neyyw($new4);  ?>
        </dl>