<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/base.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
<link href="css/header.css" rel="stylesheet" type="text/css">
</head>

<style>
	.header{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		width: auto;
		box-shadow: 0 2px 7px black;
	}
	.header-head{
		width: auto;
		height: 66px;
		background: black;
	}
	.header-main{
		background: rgb(62,55,98);
	}
	.header-main-contain{
		padding: 0 20%;
		box-sizing: border-box;
		display: flex;
	}
	.header-main-logo{
		width: 20%;
	}
	.header-main-logo img{
		width: 100%;
	}
	.header-main-search{
		width: 60%;
		display: flex;
		padding: 4% 0 0 2%;
		box-sizing: border-box;
		
	}
	.header-main-search input{
		width: 80%;
		height: 40px;
		padding: 5px;
		border-right: none;
		border-top-left-radius: 14px;
		border-bottom-left-radius: 14px;
		font-size: 18px;
		font: bold;
		font-weight: 500;
		color: rgb(104,71,158);
	}
	.header-main-search button{
		width: 10%;
		height: 40px;
		padding: 1%;
		border-left: none;
		border-top-right-radius: 14px;
		border-bottom-right-radius: 14px;
		background: rgb(219,96,143);
		color: white;
		
	}
	.header-main-search button:hover{
		
		background: rgba(219,96,143,0.8);
	}
	.header-main-right{
		display: flex;
		box-sizing: border-box;
		padding-top: 4%;
	}
	.header-main-right-cart{
		width: 33%
	}
	.header-main-right-user-img{
		display: flex;
		width: 33%
		
	}
	.header-main-right-user-img i{
		color: white;
		transition: 0.3s;
	}
	.header-main-right-user-img i:hover{
		color: rgb(219,96,143);
	}
	.header-main-right-cart i{
		color: white;
		transition: 0.3s;
	}
	.header-main-right-cart i:hover{
		color: rgb(219,96,143);
	}
	.header-main-right-user-img .avatar{
		max-width: 40%;
		max-height: 100%;
	}
	.header-main-right-login-logout{
		width: 100px;
		display: flex;
	}
	.header-main-right-login-logout button{
		background-color: transparent;
		height: 40px;
		border: none;
		color: white;
		font-size: 20px;
		font-weight: 700px;
		font: bold;
		padding: 0;
	}
	.header-main-right-login-logout button:hover{
		color: gray;
	}
	.header-main-right-login-logout .btn-logout{
		display: none;
	}
</style>
<body>
	<div class="header" id="myHeader">
		<div class="header-head"></div>
		<div class="header-main">
			<div class="header-main-contain">
				<div class="header-main-logo">
					<a href="#"><img src="../pic/logo.jpg" alt="logo" height="100px" width="200px"></a>
				</div>
				<div class="header-main-search">
					<input type="text" placeholder="Tìm kiếm">
					<button><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
				<div class="header-main-right">
					<div class="header-main-right-user-img">
						<a href="#"><i class="fa-regular fa-user fa-2x"></i></a>
<!--						<img class="avatar" src="../pic/avatar.png">-->
					</div>
					<div class="header-main-right-cart">
						<a href="#"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
					</div>
					<div class="header-main-right-login-logout">
						<button class="btn-login" >Log in</button>
						<button class="btn-logout"><i class="fa-solid fa-right-from-bracket fa-2x"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>