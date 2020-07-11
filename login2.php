<html>
<body bgcolor="pink"> 
<font color="black">
<center><h1>Company Canteen Management System</h1></center></font>
<hr>
<style>
body{
background:url('8.jpg');
background-size:cover;
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
font-size:15px;
margin-right:10px;
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
	
	
		<li><a>REPORT</a>
		<ul>
			<li><a href="display.php">MEAL REPORT</a></li>
			<li><a href="feedback.html">FEEDBACK REPORT</a></li>
		</ul>
	</li>
	
	<li><a href="contact.php">CONTACT US</a></li>
	<li><a href="feedback.html">FEEDBACK</a></li>
</ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
<center>
    <form action="login2.php" method="post">
    <div class="login2-box">
        
        <br>
        <p>
			<font color="white" size="5"><label><b>USERNAME:</b></label></font>
            <input type="text" placeholder="Username" name="username">
        </p>
        <p>
		<font color="white" size="5"><label><b>PASSWORD:</b></label></font>
            <input type="password" placeholder="Password" name="password">
        </p>
        <p>
        <input type="submit" value="Login" name="login">
        </P>
    </div>
</form>
</center>
</body>
</html>
<?php
    include('dbcon.php');   
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password';";
        $run=mysqli_query($con,$qry);
        $row=mysqli_num_rows($run);
        if($row <1)
            {   
                ?>
                <script>
                alert('username and password not match');
               
                </script>
                <?php
            }
            else 
            {
                $data=mysqli_fetch_assoc($run);

                $id=$data['id'];

               {
				   
	echo "login success!!! welcome";
	}
	
	header("refresh:3;url=feedbackD.php");
				
            }

    }
?>