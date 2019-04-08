<?php 
	session_start();
	if(filter_has_var(INPUT_POST, "login")){
		$password = htmlspecialchars($_POST['pass']);
		$userId = htmlspecialchars($_POST['user']);

		$conn = mysqli_connect("localhost","root", '123456', 'freeapp');

		if(mysqli_connect_errno()){
			echo "failed to connect MySQL: " .mysqli_connect_errno();
		}

		$sql = "SELECT * FROM `login` WHERE `password` = '$password' && `userId` = '$userId'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		if ($count === 1) {
			$_SESSION['user_id'] = $userId;
			$_SESSION['password'] = $password;
			header('location:dashboard.php');
		}
		else {
			echo "<script> alert('cant able to login')</script>";
		}
	}
	


 ?>
<!DOCTYPE>
<html>
<head>
      <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login|EntWick</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="icon" type="image/png" href="logo3.png">
	<style type="text/css">
		body{
			font-family: 'Montserrat', sans-serif;
			line-height: 2.9em;
			color: #000;
			overflow: hidden;
			background-image: url(wall.jpg);
			background-size: cover;
			background-position: 50% 50%;
			background-attachment: fixed;
			padding: 0;
			margin: 0;
		}
		#nav{
			background-color: #fff;
			box-shadow: 0 5px 8px 0 rgba(0, 0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
		}
		#nav ul{
			height: 70px;
			margin-left: -40px;
			text-align: left;
		}
		#nav li{
			height: 40px;
			margin: 10px;
			display: inline;
			float: left;
			cursor: pointer;
		}
		#nav a{
			text-decoration: none;
			color: #212121;
			font-weight: bold;
			padding-left: 20px;
			font-size: 15px;
		}
		#nav a:hover{
			color: #757575;
			font-weight: bold;
		}
		.cont{
			width: 10%;
		    margin: auto;
		    margin-top: 200px;
		}
		.form{
			position: absolute;
			font-size: 16px;
			font-weight: bold;
			font-family: 'Montserrat', sans-serif;
			color: #DCEDC8;
			height: 60px;
			width: 150px;
			border:0;
			background-color: #7CB342;
			border-radius: 10px;
			outline: 0;
			cursor: pointer;
		}
		.form:focus{
			outline: 0;
		}
		.upload-box{
			position: absolute;
			left: 0;
			bottom: -100%;
			width: 100%;
			height: 100vh;
			background-image: linear-gradient(45deg,#9fbaa8,#31354c);
			transition: 0.3s;
		}
		.upload-form{
			width: 40%;
			margin: auto;
		}
		.hide-upload-btn{
			color: #000;
			position: absolute;
			top: 30px;
			right: 30px;
			cursor: pointer;
			font-size: 24px;
			opacity: .7;
		}
		.showed{
			bottom: 0;
		}

		::-webkit-scrollbar{
			width: 8px; 
		}
		::-webkit-scrollbar-thumb{
			border-radius: 10px;
			background-color: #a6a6a6;
		}
		input[type="file"]::-webkit-file-upload-button
		{
			padding: 14px;
			border: none;
			border-radius: 5px;
			background: #212121;
			color: #E0E0E0;
			font-weight: bold;
			font-family: 'Montserrat', sans-serif;
		}
		
		.top{
			position: absolute;
			left: 0; right: 0;
			margin: auto;
		    top: 19%;
		}
		
		.box{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
			padding: 5px 30px;
			background: rgba(255, 255, 255,.3);
			box-sizing: border-box;
			border-radius: 0px;
			box-shadow: 0 5px 8px 0 rgba(0, 0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
		}
		.box h1{
			margin-bottom: 30px;
			text-align: left;
			color: #000;
		}
		.box .inputBox {
			position: relative;
		}
		.box .inputBox input{
			width: 100%;
			font-size: 16px;
			padding: 8px;
			background: transparent;
			border:none;
			margin-bottom: 20px;
			outline: none;
			border-bottom: 1px solid #212121;
		}
		.box .inputBox label{
			position: absolute;
			top: 0;
			left: 0;
			font-weight: 100;
			font-size: 16px;
			padding: 8px;
			padding-top: 0px;
			pointer-events: none;
			transition: .5s;
		}
		.box .inputBox input:focus ~ label,
		.box .inputBox input:valid ~ label{
			top: -40%;
			left: 0;
			color: #000;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<nav id="nav">
		<ul>
		     <li><a href=""><img src="logo.png" style="width: 150px;"></a></li>
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<li><a href="faq.php">FAQ</a></li>
		</ul>
	</nav>
	<img class="top" src="logo1.png" alt="Upload apps for free" style="width: 300px;">
	<div class="container">
		<div class="box">
			<h1>Login</h1>
			<form method="post" action="#">
				<div class="inputBox">
					<input type="text" name="user" required="">
					<label>User ID</label>
				</div>
				<div class="inputBox">
					<input type="password" name="pass" required="">
					<label>Password</label>
				</div>
				<button style="padding: 10px; font-weight: bold; margin: 10px; margin-top: 14px; border: none; border-radius: 6px; outline: none; border: 2px solid #0288D1; background-color: #0288D1; color: #C5CAE9;" name="login">Login</button>
			</form>
		</div>
	</div>
</body>
</html>
