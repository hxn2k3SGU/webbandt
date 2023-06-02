<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Responsive Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	margin:0px;
}
#wrapper{
	border:#FF0000 solid 2px;
	
}

#header{
	height:150px;
	width:100%;
	background-color:#66CC00;
}
#header div{
	color:#FF0000;
}
#mid{
	background-color:#666666;
	color:#FF0000;

}
#topmenu{
	font-size:14px;
	font-family:Georgia, "Times New Roman", Times, serif;
	border:#000000 solid 3px;
}
#topmenu div{
	border:#FF0000 solid 1px;
	display:inline;
	margin-right:30px;
	padding:5px 15px;
}

#topmenu div:hover{
	background-color:#66CC00
}
#leftmenu{
	width:20%;
	float:left;
	background-color:#99CC00;
	border:solid 2px #990033
	
}
#leftmenu div{
	border-bottom: #FF0000 solid 1px;
}
#leftmenu div:hover{
	background-color:#999999;
}
#content{
	width:79.3%;
	float:right;
	border:#FF0000 solid 2px;
	color:#FF0000;
}

#footer{
	height:150px;
	width:100%;
	background-color:#6666FF;
	clear:both;
	line-height:150px;
	text-align:center;
	font-size:36px;
	
	
}
/* Moblie*/
@media only screen and (max-width: 900px) and (min-width: 320px){
  #topmenu{
		
		background-color:#00FFFF;
		
	}
	#topmenu div{
		display:block;
		width:100%;
	}
	
}
@media only screen  and (min-width: 320px) and (max-width: 900px){
	#content{
		width:78.3%;
	}
}
@media only screen  and (min-width: 905px) and (max-width: 1200px){
	#content{
		width:79.1%;
	}
}
/* Màn hình laptop hoặc desktop lớn*/
@media (min-width: 1200px) {
}

/* Màn hình máy tính bảng lớn hoặc máy tính màn hình trung bình */
@media (min-width: 992px) and (max-width: 1199px) {
}

/* Màn hình máy tính bảng nhỏ hoặc máy tính màn hình nhỏ */
@media (min-width: 768px) and (max-width: 991px) {
}

/* Màn hình máy tính bảng rất nhỏ hoặc điện thoại di động */
@media (max-width: 767px) {
}

/* Điện thoại di động hoặc màn hình cực nhỏ */
@media (max-width: 480px) {
}

</style>
</head>

<body>
<div id="wrapper">
	<div id="header">
	<?php require('giaodien/header.php'); ?>
	</div>
	<?php require('giaodien/menu.php'); ?>
	<div id="mid">
		<div id="leftmenu">
			<a href='index.php?id=1&vitri=t'><div>Một</div></a>
			<a href='index.php?id=2&vitri=l'><div>Hai</div></a>
			<a href='index.php?id=3&vitri=r'><div>Ba</div></a>
			<a href='index.php?id=4&vitri=c'><div>Bốn</div></a>
		</div>
		<div id="content">
			<?php
				include('giaodien\Content.php');
			?>
		</div>
	</div>
	<div id="footer">Footer</div>
</div>
</body>
</html>
