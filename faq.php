<!DOCTYPE>
<html>
<head>
	<title>FAQ's|EntWik</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="icon" type="image/png" href="logo3.png">
	<style type="text/css">
		html {
		  	-webkit-box-sizing: border-box;
		  	box-sizing: border-box;
		}
		body{
			font-family: 'Montserrat', sans-serif;
			line-height: 2.9em;
			color: #000;
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
		.container {
  			margin: auto;
  			padding: 4rem;
  			width: 48rem;
  			background: rgba(255,255,255,0.5);
  			box-shadow: 0 5px 8px 0 rgba(0, 0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
  			margin-bottom: 67px;
  			margin-top: 24px;
		}
		h3 {
  			font-size: 1.75rem;
  			color: #373d51;
  			padding: 1.3rem;
  			margin: 0;
		}
		.accordion a {
		  	position: relative;
		  	display: -webkit-box;
		  	display: -webkit-flex;
		  	display: -ms-flexbox;
		  	display: flex;
		  	-webkit-box-orient: vertical;
		  	-webkit-box-direction: normal;
		  	-webkit-flex-direction: column;
		  	-ms-flex-direction: column;
		  	flex-direction: column;
		  	width: 100%;
		  	padding: 1rem 3rem 1rem 1rem;
		  	color: #7288a2;
		  	font-size: 1.15rem;
		  	font-weight: 400;
		  	border-bottom: 1px solid #e5e5e5;
		}
		.accordion a:hover,
		.accordion a:hover::after {
		  	cursor: pointer;
		  	color: #03b5d2;
		}
		.accordion a:hover::after {
  			border: 1px solid #03b5d2;
		}
		.accordion a.active {
  			color: #03b5d2;
  			border-bottom: 1px solid #03b5d2;
		}
		.accordion a::after {
		  	font-family: 'Ionicons';
		  	content: '\f218';
		  	position: absolute;
		  	float: right;
		  	right: 1rem;
		  	font-size: 1rem;
		  	color: #7288a2;
		  	padding: 5px;
		  	width: 30px;
		  	height: 30px;
		  	-webkit-border-radius: 50%;
		  	-moz-border-radius: 50%;
		  	border-radius: 50%;
		  	border: 1px solid #7288a2;
		  	text-align: center;
		}
		.accordion a.active::after {
		  	font-family: 'Ionicons';
		  	content: '\f209';
		  	color: #03b5d2;
		  	border: 1px solid #03b5d2;
		}
		.accordion .content {
		  	opacity: 0;
		  	padding: 0 1rem;
		  	max-height: 0;
		  	border-bottom: 1px solid #e5e5e5;
		  	overflow: hidden;
		  	clear: both;
		  	-webkit-transition: all 0.2s ease 0.15s;
		  	-o-transition: all 0.2s ease 0.15s;
		  	transition: all 0.2s ease 0.15s;
		}
		.accordion .content p {
		  	font-size: 1rem;
		  	font-weight: 300;
		}
		.accordion .content.active {
		  	opacity: 1;
		  	padding: 1rem;
		  	max-height: 100%;
		  	-webkit-transition: all 0.35s ease 0.15s;
		  	-o-transition: all 0.35s ease 0.15s;
		  	transition: all 0.35s ease 0.15s;
		}
		::-webkit-scrollbar{
			width: 0px; 
		}
		::-webkit-scrollbar-thumb{
			border-radius: 10px;
			background-color: transparent;
		}
	</style>
</head>
<body>
	<nav id="nav">

		<ul>
			<li><a href=""><img src="logo.png" alt="Upload apps for free" style="width: 150px;"></a></li>
			<li><a href="index.php" id="active" >HOME</a></li>
			<li style="float: right; margin-right:30px;"><a href="login.php" >LOGIN</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<li><a href="faq.php" style="color: #757575;">FAQ</a></li>
		</ul>
	</nav>
	<div class="container">

  	<h2>Frequently Asked Questions</h2>

  	<div class="accordion">
	    <div class="accordion-item">
	      	<a>My app is not uploaded on Play Store yet. What do I do?</a>
	      	<div class="content">
	        	<p>App is generally uploaded within 1 week of submission. If it is not uploaded even after a week you can contact us via mail or phone.</p>
	      	</div>
	    </div>
	    <div class="accordion-item">
	      	<a>How do i check the status of my app or update/fix bugs?</a>
	      	<div class="content">
	        	<p>On submission of app, id and password are generated for your upload. You can use these details to login and checking status, updates, etc.</p>
	      	</div>
	    </div>
	    <div class="accordion-item">
	      	<a>How do i upload app on playstore for free?</a>
	      	<div class="content">
	        	<p>Visit homepage of EntWick.com and press upload button. You have to fill basic details and provide apk file to us. We will handle the rest.</p>
	      	</div>
	    </div>
	    <div class="accordion-item">
	      	<a>What do i do if i forget my username and password?</a>
	      	<div class="content">
	        	<p>Once your app is submitted, your username and password is emailed to your registered email id.</p>
	      	</div>
	    </div>
  	</div>
  
	</div>

	<script type="text/javascript">
		const items = document.querySelectorAll(".accordion a");
		function toggleAccordion(){
			this.classList.toggle('active');
			this.nextElementSibling.classList.toggle('active');
		}
		items.forEach(item => item.addEventListener('click', toggleAccordion));
	</script>
</body>
</html>