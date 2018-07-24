<html>
<head>
	<title>Here is the title for 医药协会首页</title>
	<meta charset="UTF-8" />
	<meta  name="keywords" content="keyword1,keyword2, keywords"/>
	<meta name="description" content="the description of this page"/>
	<link href="./css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div id="header">
		<div class="logo">
			<img src="./images/top_r1_c1.jpg" alt="logo_image">
		</div>
		<div class="header_notes">
			<div class="welcome_notes">
				<p>游客您好，您还没有<a href="login.php">登录</a>，若您不是会员请先免费<a href="register.php">注册</a></p>
			</div>
			<div class="header_navi">
			<ul>
				<li style="list-style-image:url(./images/top_r4_c4.jpg);">留言板</li>
				<li style="list-style:none;">|</li>
				<li style="list-style-image:url(./images/top_r4_c6.jpg);">订阅</li>
				<li style="list-style:none;">|</li>
				<li style="list-style-image:url(./images/top_r4_c8.jpg);">加入收藏</li>
				<li style="list-style:none;">|</li>
				<li style="list-style-image:url(./images/top_r4_c10.jpg);">论坛</li>
				<li style="list-style:none;">|</li>
				<li style="list-style-image:url(./images/top_r4_c12.jpg);">English</li>
			</ul>
			</div>
		</div>
	</div>
	<!-- 正文开始 -->
	<div class="a1">
			<div style="float:left;">
    			<ul style="list-style:none; ">
    				<li><a href="">关于分会</a></li>
    				<li>|</li>
    				<li><a href="">行业动态</a></li>
    				<li>|</li>
    				<li><a href="">学术交流</a></li>
    				<li>|</li>
    				<li><a href="">业务合作</a></li>
    				<li>|</li>
    				<li><a href="">历届年会</a></li>
    				<li>|</li>
    				<li><a href="">会员之家</a></li>
    			</ul>
			</div>
			<div style="float:right">
				<form>
    				<input name="search" value="begin searching"/>
    				<input type="button" name="searchButt" value="搜索一下"/>
				</form>
			</div>
	</div>
	
	<div class="b1">
	
	</div>	

	<div class="cc">
		<div class="c1">
		</div>
		<div class="c2">
		</div>
		<div class="c3">
		</div>
	</div>
	
	<div class="e1"    三八女人节祝福语>
		<?php
			$rows = [
					"花语攻略"=>	[
								["id"=>"1","title"=>"国外送花礼仪之禁忌"],
								["id"=>"2","title"=>"四季婚礼的鲜花选择"],
								["id"=>"3","title"=>"送花应该知道的礼仪"],
								["id"=>"4","title"=>"郁金香送给什么人"],
							],
					"最新评价"=>	[
								["id"=>"1","title"=>"好"],
								["id"=>"2","title"=>"不错"],
								["id"=>"3","title"=>"很好"],
							],
					"蛋糕礼仪"=>	[
								["id"=>"1","title"=>"慰问祝福语"],
								["id"=>"2","title"=>"护士节祝福语"],
								["id"=>"3","title"=>"母亲节祝福语"],
								["id"=>"4","title"=>"三八女人节祝福语"],
							],
				];
			function showLinks($arr, $type) {
				$a = "";
				$a .= "<dl>"."<dt>".$type."</dt>";
				foreach($arr[$type] as $i){
					$a .= ("<dd><a href=''>".$i["title"]."</a></dd>");
				}
				$a .= "<    三八女人节祝福语/dl>";
				return $a;
			}
			echo showLinks($rows,"蛋糕礼仪");
			echo showLinks($rows,"最新评价");
			echo showLinks($rows,"花语攻略");
		?>	
	</div>

	<div>
		<h1>What ever you say and talk about...		</h1>
	</div>
</body>

</html>
