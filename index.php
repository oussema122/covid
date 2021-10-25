<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');


}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>sarshub</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="style.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="owl.carousel.min.js"></script>
	<script type="text/javascript" src="owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->








 





	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	.if{
		height: 700px;
		width:100%;
	}
	</style>

</head>
<body onload="myfunction()" oncontextmenu="return false;">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">GLOBAL COVID19 CASES</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 
			</div>
		</div>
	</nav>
			
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						
							<div class="cta-div">
								<a href="" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">Everybody's going to die..</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="https://www.facebook.com/profile.php?id=100035201858963" class="fa fa-facebook"></a>
								<a href="https://twitter.com/ousemaa_" class="fa fa-twitter"></a>
								<a href="https://www.instagram.com/ousemaa_" class="fa fa-instagram"></a>
								<a href="" class="fa fa-reddit"></a>
								<a href="#" class="fa fa-linkedin"></a>
								<a href="" class="fa fa-cog"></a>
							</div>
					</div>
				</div>
			</section>

			

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control" required>

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control" required>
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

       
         
         </div>
     </div>

	
	    <iframe src="https://sarshub.vercel.app/" class="if"></iframe>


			
			
			


			



	
			
			



<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>
<script>
document.onkeydown=function(e){
	if(event.keyCode == 123)
	{
		return false;
	}
	if(e.CtrlKey && e.shiftKey && e.KeyCode == 'I'.charCodeAt(0))
	{
		return false;
	}
	if(e.CtrlKey && e.shiftKey == 'J'.charCodeAt(0))
	{
		return false;
	}
	if(e.CtrlKey && e.shiftKey == 'U'.charCodeAt(0))
	{
		return false;
	}
}
</script>
<script src="jquery.ripples-min.js" type="text/javascript"></script>
<script src="typed.min.js" type="text/javascript"></script>
<script src="main.js" type="text/javascript"></script>








</body>
</html>