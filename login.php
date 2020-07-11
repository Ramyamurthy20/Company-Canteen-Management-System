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
	<li><a href="register.php">REGISTRATION </a></li>
	
	
	
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
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
       
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
			<button type="reset" class="btn">Reset</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>



</body>
</html>