<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>	This is the title.</title>
	<style type="text/css">
		.left {
			width: 200px;
			height:200px;
			margin:10px;
			border:solid 1px;
			float: left;
			}
		.noleft{
			width: 200px;
			height:200px;
			border:solid 1px;
			background:#ccc;
			clear: both;
			}
			#login {
			width:300px;
			height:200px;
			position:absolute;
			left:50%;
			top:50%;
			margin-left:-150px;
			margin-top: -100px;
			background:#BABABA;}
	</style>
</head>

<body>
<div id="login"> 登录框</div>
<div class="left">Frame1</div>
<div class="left">Frame2</div>
<div class="noleft">Frame3</div>
<br/>
<div class="noleft">Frame3</div>
<br/>
<div class="noleft">Frame3</div>
<br/>
<div class="noleft">Frame3</div>
</body>
</html>
