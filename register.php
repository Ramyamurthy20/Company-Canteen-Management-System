<html>
 
<body bgcolor="pink"> 
<font color="black">
<center><h1>Company Canteen Management System</h1></center></font>
<hr>
<style>
body{

}
ul{
margin:0px;
padding:0px;
list-style:none;
}
ul li{
float:left;
width:160px;
height:50px;
background:black;
opacity:.8;
line-height:40px;
text-align:center;
font-size:14px;
margin-right:5px;
}
ul li a{
text-decoration:none;
color:Skyblue;
display:block;
}
ul li a:hover{
background-color:orange;
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;
}
</style>
<ul>
	<li><a href="home.php">HOME</a></li>
	<li><a href="about.php">ABOUT US</a></li>
	<li><a href="login.php">LOGIN</a></li>
	
		
	
	<li><a href="contact.php">CONTACT US</a></li>
	
</ul>
</html>
<br>
<br>




<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="3.jpg">
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<button type="Reset" class="btn">Reset</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>