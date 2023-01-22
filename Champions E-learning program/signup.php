<!DOCTYPE html>
<html>
<head>
	<title>Welcome Champions</title>
	<link rel="stylesheet" type="text/css" href="slide sige up.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form  action="database.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" id="username" placeholder="User name" required="">
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" placeholder="Password" required="">
					<input type="password" name="password2" id="password2" placeholder="confirm Password" required="">
					<button type="submit"  name="submit"> Sign up</button>
				</form>
			</div>
            

			<div class="login">
				<form method="POST" action="validation.php" onsubmit="return validation()">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="name" placeholder="Username" required="" onkeypress="clear()">
					<input type="password" name="pswd" placeholder="Password" required="">
					<?php 
								if(isset($_SESSION['error']))
								{
									echo "wrong username or password";
								} 
								else{ echo " ";} 
								?>
					<button type="submit">Login</button>
					
					
				</form>
			</div>
	    </div>
</body>
</html>
