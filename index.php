<?php 
	if(filter_has_var(INPUT_POST, "submit")){
		$title = htmlspecialchars($_POST["title"]);
		$short = htmlspecialchars($_POST["short"]);
		$long = htmlspecialchars($_POST['long']);
		$icon = $_FILES['icon']['name'];
		$tempIcon = $_FILES['icon']['tmp_name'];
		$graphic = $_FILES['graphic']['name'];
		$tempGraphic = $_FILES['graphic']['tmp_name'];
		$video = htmlspecialchars($_POST['promo']);
		$policy = htmlspecialchars($_POST['policy']);
		$apk = $_FILES['apk']['name'];
		$tempApk = $_FILES['apk']['tmp_name'];
		$name = htmlspecialchars($_POST['user']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);


		$conn = mysqli_connect("localhost","root", '123456', 'freeapp');


		$uppr_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$lower_case = "abcdefghijklmnopqrstuvwxyz";
		$number = "1234567890";
		$generate_uppr_case = substr(str_shuffle($uppr_case), 0, 2);
		$generate_lower_case = substr(str_shuffle($lower_case), 0, 2);
		$generate_number = substr(str_shuffle($number), 0, 2);
		$mixed = "$generate_uppr_case$generate_lower_case$generate_number";
		$generte_mixed = substr(str_shuffle($mixed), 0, 6);


		//echo md5($generte_mixed);
		$user_id = substr($title, 0, 3) . '@' . date("m.y") . '_' . substr(str_shuffle($number), 0, 3);
		//echo $user_id;



		if(mysqli_connect_errno()){
			echo "failed to connect MySQL: " .mysqli_connect_errno();
		}
		$i = 0;
		$screenshotsName = '';
		while ($i < count($_FILES['screenshots']['name'])) {
			$tempScreenshots = $_FILES['screenshots']['tmp_name'][$i];
			$screenshots = $_FILES['screenshots']['name'][$i];
			$screenshots_name = $user_id . '_' . $screenshots;
			move_uploaded_file($tempScreenshots, "screenshots/$screenshots_name");
			$screenshotsName = $screenshotsName . $screenshots_name . ', ';
			$i++;
		}
		$apk_name = $user_id . '_' . $apk;
		$icon_name = $user_id . '_'. $icon;
		$graphic_name = $user_id.'_'. $graphic;
		move_uploaded_file($tempApk, "apk/$apk_name");
		move_uploaded_file($tempIcon, "icon/$icon_name");
		move_uploaded_file($tempGraphic, "graphic/$graphic_name");
		$sql = "INSERT INTO `upload-form`(`title`, `short`, `longDis`, `screenshots`, `icon`, `graphic`, `video`, `policy`, `apk`, `name`, `email`, `phone`, `userId`, `status`) VALUES ('$title','$short','$long','$screenshotsName','$icon_name','$graphic_name','$video','$policy','$apk_name','$name','$email','$phone','$user_id', 'Pending....')";

		$sqlLogin = "INSERT INTO `login`(`name`, `email`, `userId`, `password`, `phone`) VALUES ('$name', '$email', '$user_id', '$generte_mixed', '$phone')" ;
		$run = mysqli_query($conn, $sql);
		$run_login = mysqli_query($conn, $sqlLogin);

		$subject  = 'Username And Password';
		$body = '<h4>User ID: </h4><p>' . $user_id .'</p>
			<h4> Password: </h4><p>' . $generte_mixed. '</p>';
		$mail = "mittapallyn.min18@itbhu.ac.in";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-Type:text/html;charset-UTF-8" . "\r\n";
		$headers  .= "From: ". "Freeapp" .'<'.$mail.'>'."\r\n";

		mail($email, $subject, $body, $headers);
//linear-gradient(45deg,#9fbaa8,#31354c)
		echo "<script>alert('Upload Successfully')</script>";
	}
 ?>

<!DOCTYPE>
<html>
<head>
      <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EntWik: Upload apps for free</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
			margin: auto;
			font-weight: bold;
			padding-left: 20px;
			font-size: 15px;
			color: #212121;
		}
		#nav a:hover{
			color: #757575;
			font-weight: bold;
		}
		.cont{
			width: 50%;
		    margin: auto;
		    margin-top: 50px;
			color: #212121;
			text-align: center;
		}
		
		.cont p {
		    	font-family: 'Montserrat', sans-serif;
				font-size: 47px;
				font-weight: 700;
				margin: 20px 0;
				line-height: 55px;
		}
		
		.cont span{
			font-size: 30px;
			font-weight: 500;
			line-height: 35px;
		}
		
		.cont img {
			display: block;
			margin-bottom: 20px;
			margin-left: auto;
			margin-right: auto;
		}
		
		.form{
			position: absolute;
			margin: auto;
			left: 0; right: 0;
			font-size: 16px;
			font-weight: bold;
			font-family: 'Montserrat', sans-serif;
			color: #B3E5FC;
			height: 60px;
			width: 200px;
			border:0;
			background-color: #0288D1;
			border-radius: 100px;
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
			background-image: url(wall.jpg);
			background-size: cover;
			background-attachment: fixed;
			transition: 0.3s;
		}
		.box{
			width: 50%;
			margin: auto;
			padding: 50px;
			padding: 30px;
			margin-top: 30px;
			border-radius: 0px;
			box-shadow: 0 5px 8px 0 rgba(0, 0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
			background: rgba(0,0,0,.1); 
		}
		.upload-form{
			width: 100%;
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
			border-radius: 30px;
			background: #09a7fd;
			outline: none;
			color: #fff;
			width: 250px;
			font-weight: bold;
			font-family: 'Montserrat', sans-serif;
		}
		
		.priv {
			display: none;
			background-color: white; 
			width: 300px; 
			border: solid grey 1px; 
			position: absolute; 
			left: 0px; bottom: 20px; 
			margin: auto;
			padding: 0 10px;
			color: black;
		}
		
		.priv p {
			margin:0;
			font-size: 8px;
			line-height: 9px;
		}
		
		.hover a:hover .priv{
			display: block;
		}
	</style>
</head>
<body>
	<nav id="nav">

		<ul>
			<li><a href=""><img src="logo.png" alt="Upload apps for free" style="width: 150px;"></a></li>
			<li><a href="index.php" id="active" style="color: #757575;">HOME</a></li>
			<li style="float: right; margin-right:30px;"><a href="login.php" >LOGIN</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<li><a href="faq.php">FAQ</a></li>
		</ul>
	</nav>
	<div class="cont">
	    <img src="logo3.png" alt="Upload apps for free" style="width: 100px;">
		<p>Upload your applications to Play Store for free with</p>
		<img src="logo2.png" alt="Upload apps for free" style="width: 190px;">
		<p><span>Start uploading now!</span></p>
		<button class="form" style="height: 55px;">UPLOAD  <i class="fa fa-upload"></i></button>
	</div>
	<div class="upload-box">
		<div class="hide-upload-btn"><i class="fas fa-times"></i></div>
		<div class="box">
			<h1 class="upload-form" style="padding: 30px; padding-bottom: 0px; ">Upload Here!</h1>
			<form method="post" action="#" enctype="multipart/form-data">
				<div class="upload-form" style="overflow: auto; height: 70%; box-sizing: border-box; padding-right: 50px; padding-bottom: 20px;">
					<div>
						<label style="font-weight: bold;">Title*</label><br>
						<input style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" type="text" name="title" placeholder="Enter Title of Your App" required="" autocomplete="off">
					</div>
					<div>
						<label style="font-weight: bold;">Short Description*</label>
						<textarea style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" rows="2" placeholder="Write a short description about the app" name="short" required="" autocomplete="off"></textarea>
					</div>
					<div>
						<label style="font-weight: bold;">Long Description*</label>
						<textarea style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none ;outline: none;" rows="5" placeholder="Write some description about the app" name="long" required="" autocomplete="off"></textarea>
					</div>
					<div>
	      				<label style="font-weight: bold;">Screenshots*</label><br>
	      				<input style="outline: none;" type="file" name="screenshots[]" required="" multiple=""><br>
	      				<small style="line-height: 17px;">Select all screenshots</small>
	    			</div>
	    			<div>
	      				<label style="font-weight: bold;">Icon*</label><br>
	      				<input style="outline: none;" type="file" name="icon" required=""><br>
	      				<small style="line-height: 17px;" >Select icon(512x512)</small>
	    			</div>
					<div>
	      				<label style="font-weight: bold;">Featured Graphic*</label><br>
	      				<input style="outline: none;" type="file" name="graphic" required=""><br>
	      				<small style="line-height: 17px;" >Select featured graphic</small>
	    			</div> 
	    			<div>
						<label style="font-weight: bold;">Promo Video</label><br>
						<input style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" type="text" name="promo" placeholder="https://">
						<small style="line-height: 17px;">Enter the promo video link</small>
					</div>   			
					<div>
						<label style="font-weight: bold;">Privacy Policy</label><br>
						<input style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" type="text" name="policy" placeholder="https://">
						<small style="line-height: 17px;">Enter the privacy policy link</small>
					</div>
					<div>
						<label style="font-weight: bold;">APK File*</label><br>
	      				<input style="outline: none;" type="file" name="apk" required=""><br>
	      				<small style="line-height: 17px;" >Select APK file</small>
					</div>
					<div>
						<label style="font-weight: bold;">Developer Details*</label>
						<div style="width: 80%; margin: auto;">
							<div>
								<label style="font-weight: bold;">Name</label><br>
								<input type="text" style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" name="user" placeholder="Enter Developer's Name" required="" autocomplete="on">
							</div>
							<div>
								<label style="font-weight: bold;">Email</label><br>
								<input type="email" style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" name="email" placeholder="Enter Developer's Email" required="" autocomplete="on">
							</div>
							<div>
								<label style="font-weight: bold;">Phone Number</label><br>
								<input type="text" style="padding: 10px; width: 100%; font-size: 14px; border-radius: 20px; border: none; outline: none;" name="phone" placeholder="Enter Developer's Phone Number" required="" autocomplete="on">
							</div>
						</div>
					</div>
					<input type="checkbox" name="" id="policy" required="">
					<label class="hover" for="policy">I agree to the terms and conditions.<a href="#" target="blank" style="position: relative;">(Privacy Policy)<div class="priv" >
					     <h4 style="margin:0">Privacy Policy</h4>
						 <p>1. Your application will be  uploaded to Google Play Store only through the official Google Console account of EntWik.com.
<br>2. After accepting to EntWik.com's Privacy Policy, the creator is entitled to a 50% share of the revenue or total earning of Rs.50,000(whichever is lower)generated by the application through advertisement or in-app purchases or sale of the application.
<br>3. EntWik.com has the right to make changes in an application (and other content related to it) before uploading it on Google Play Store if it violates or seems to violate any of the terms of use or rules regarding applications uploaded on Google Play Store.
<br>4. EntWik.com holds the right to make changes in your application if it seems to be a clone of or have too much resemblance to an existing application on Google Play Store.
<br>5. EntWik.com has the right to add or change the existing Google AdMob codes in your application for generating revenue.
<br>6. Any user or uploader to EntWik.com does not have the right to place any Google AdMob codes in their application.
<br>7. In case of any legal dispute over a particular application the creator of the application holds the sole responsibility to the application and EntWik.com has responsibility over the actions of the application or it's creator.
<br>8. If an application uploaded to EntWik.com doesn't abide by the rules of Google Play Store or has any legal trouble or issues related to copyright EntWik.com holds the right to indefinitely stall the upload of the application to Google Play Store. 
<br>9. After uploading the application to EntWik.com, EntWik.com holds the sole right to distribution and circulation of the application through any media.</p>
					</div></a></label><br>
					
					<small>* Marked fields are mandatory.</small><br>
					<button style="padding: 16px; font-weight: bold; margin-top: 2px; border: none; border-radius: 6px; outline: none; background: #0288D1; color: #E0E0E0; font-family: 'Montserrat', sans-serif;" name="submit">SUBMIT</button>
				</div>
			</form>
		</div>
	</div>
 
	<script type="text/javascript">
		$(".form").on("click",function(){
			$(".upload-box").toggleClass("showed");
		});
		$(".hide-upload-btn").on("click",function(){
			$(".upload-box").toggleClass("showed");
		});
	</script>


</body>
</html>
