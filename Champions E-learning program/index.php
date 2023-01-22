<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:signup.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>E-Learning</title>
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	.servicebody
	{
		
	}
	html
	{
		scroll-behavior: smooth;
	}
	</style>
</head>
<body onload="myfunction()">
		   <div id="loading"></div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 style="color: white;margin-top: 10px;" id="myhead">Champions E-Learning Program</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#work">Works</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li> <a href="">Carrier</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">
							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div    class="text">  <!--   jquery typed effect -->
						</div>
							<div class="cta-div">
								<a href="" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">Start Learning</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="https://www.facebook.com/bhavesh.ranjan.792/?modal=admin_todo_tour" class="fa fa-facebook"></a>
								<a href="https://twitter.com_bhavesh_ranjan/" class="fa fa-twitter"></a>
								<a href="https://www.instagram.com/_bhavesh_ranjan" class="fa fa-instagram"></a>
								<a href="https://www.linkedin.com/in/bhavesh-ranjan-1083501a1/" class="fa fa-linkedin"></a>
							</div>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
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

         <!---Login Ends------->

         <!---Our Services Section Start------->
         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">EXERCISE</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		</div>
<
         	</div>
         </div>
     </div>
			<section class="work" id="work"><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">OUR WORK</h2>
				<p class="text-center">join us to improve your works join us to improve your works</p>
				<div class="container-fluid">
					<!---first row start-->
					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work1.png" title="this is a sky image">
								<img src="img/work1.png" class="img-responsive">
							</a>							
						</div>						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work2.png" title="this is a sky image">
								<img src="img/work2.png" class="img-responsive">
							</a>							
						</div>						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work3.png" title="this is a sky image">
								<img src="img/work3.png" class="img-responsive">
							</a>							
						</div>						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work4.png" title="this is a sky image">
								<img src="img/work4.png" class="img-responsive">
							</a>							
						</div>						
					</div>					
					<!---first row ends-->


					<!-------second row starts  --->					
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work5.png" title="this is a sky image">
								<img src="img/work5.png" class="img-responsive">
							</a>							
						</div>						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work6.png" title="this is a sky image">
								<img src="img/work6.png" class="img-responsive">
							</a>							
						</div>						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work7.png" title="this is a sky image">
								<img src="img/work7.png" class="img-responsive">
							</a>							
						</div>						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work8.png" title="this is a sky image">
								<img src="img/work8.png" class="img-responsive">
							</a>							
						</div>						
					</div>					
					<!---second row ends-->					
				</div>
			</section>
			<!---Our Team Section Start------->
			<br><br><br>
			<div class="container text-center" id="our-members">
				<h2><b>MEMBERS</b></h2>
				<p>
					These are our excellent member .you can contact anyone anytime <br> and all are experts and well experience
				</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img src="img/bhavesh.jpeg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Bhavesh Ranjan</h4>
									<h4 class="team-member-designation">Team Leader</h4>
									<ul class="social-list">
										<li><a href="https://www.facebook.com/bhavesh.ranjan.792" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/_bhavesh_ranjan" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-member text-center">
								<img src="img/kaushal.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Kaushal Raj</h4>
									<h4 class="team-member-designation">Team Member</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-member text-center">
								<img src="img/shubham.jpeg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Shubham Kr. Jaiswal</h4>
									<h4 class="team-member-designation">Team Member</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-member text-center">
								<img src="img/gaurav.jpeg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Kumar Gaurav</h4>
									<h4 class="team-member-designation">Team Member</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									you can ask the regarding the issues.we will <br>solve that together for sure
								</p>								
							</div>
						</div>	
					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">
								<?php 
								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }
									mysqli_select_db($con,'uniquedeveloper');
									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>
								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>
							<?php } ?>
								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
												Champions E-learning program is an online E-learning website <br>
												here you can learn programming languages,Tech News and improve your coding skill	
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>
					</div>
				</div>
			</section>

<div class="row text-center">
	<h2><b>CONTACT US</b></h2><br><br>
	<center>
	<div class="card" style="width: 30rem;">
  <div class="card-body border-info">
   
   <form action="contactus.php" method="post">>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="contactemail" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">message</label>
    <input type="text" name="message" class="form-control"  placeholder="Enter your message">
  </div>  
  <button type="submit" name="consubmit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div></center>
</div>
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
<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>