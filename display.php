<html>
<head>
<title>Displaying meal details</title>
</head>
<body bgcolor="peachpuff">

<font size="2"><a href="home2.php" target="new page"><b/>BACK</a></font>
<style>
body{
background:url('IMG_20190226_121003.jpg');
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
<center>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
	<th>Name</th>
	<th>Emp_id</th>
	<th>Meal_Type</th>
	<th>Select_Employee</th>
	<th>Date</th>
	<th>Description</th>
	<th>Delete</th>



<?php
//create the connection with MYSQL database
$con=mysqli_connect('127.0.0.1','root','');

//select database
if(!mysqli_select_db($con,'company'))
{
	echo"Database not selected";
}

//select query
$sql="SELECT * FROM south";

//execute the SQL query
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($records))
{
	echo"<tr>";
	echo"<td>".$row['Name']."</td>";
	echo"<td>".$row['Emp_id']."</td>";
	echo"<td>".$row['Meal_Type']."</td>";
	echo"<td>".$row['Select_Employee']."</td>";
	echo"<td>".$row['Date']."</td>";
	echo"<td>".$row['Description']."</td>";
		echo"<td><a href=deletedS.php?emp_id=".$row['Emp_id'].">Delete</a></td>";
		echo"<tr><form action=update.php method=post>";
	
}

?>
<br>
<br>
<br>
<hr>
<b><i><u>SOUTH INDIAN MEALS</u></i></b>
<br>
<br>
<br>
<br>


<html>
<head>
<title>Displaying meal details</title>
</head>
<body bgcolor="peachpuff">
 
   </div>
<center>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
	<th>Name</th>
	<th>Emp_id</th>
	<th>Meal_Type</th>
	<th>Select_Employee</th>
	<th>Date</th>
	<th>Description</th>
	<th>Delete</th>
	

<?php
//create the connection with MYSQL database
$con=mysqli_connect('127.0.0.1','root','');

//select database
if(!mysqli_select_db($con,'company'))
{
	echo"Database not selected";
}

//select query
$sql="SELECT * FROM north";

//execute the SQL query
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($records))
{
	echo"<tr>";
	echo"<td>".$row['Name']."</td>";
	echo"<td>".$row['Emp_id']."</td>";
	echo"<td>".$row['Meal_Type']."</td>";
	echo"<td>".$row['Select_Employee']."</td>";
	echo"<td>".$row['Date']."</td>";
	echo"<td>".$row['Description']."</td>";
		echo"<td><a href=deletedN.php?emp_id=".$row['Emp_id'].">Delete</a></td>";
	
}
?>
<br>
<br>
<br>
<hr>
<b><i><u>NORTH INDIAN MEALS</u></i></b>
<br>
<br>
<br>



<html>
<head>
<title>Displaying meal details</title>
</head>
<body bgcolor="peachpuff">

<center>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
	<th>Name</th>
	<th>Emp_id</th>
	<th>Snacks</th>
	<th>Beverages</th>
	<th>Select_Employee</th>
	<th>Date</th>
	<th>Description</th>
	<th>Delete</th>
	

<?php
//create the connection with MYSQL database
$con=mysqli_connect('127.0.0.1','root','');

//select database
if(!mysqli_select_db($con,'company'))
{
	echo"Database not selected";
}

//select query
$sql="SELECT * FROM snacks";

//execute the SQL query
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($records))
{
	echo"<tr>";
	echo"<td>".$row['Name']."</td>";
	echo"<td>".$row['Emp_id']."</td>";
	echo"<td>".$row['Snacks']."</td>";
	echo"<td>".$row['Beverages']."</td>";
	echo"<td>".$row['Select_Employee']."</td>";
	echo"<td>".$row['Date']."</td>";
	echo"<td>".$row['Description']."</td>";
		echo"<td><a href=deletedB.php?emp_id=".$row['Emp_id'].">Delete</a></td>";
		
	
}

?>

<br>
<br>
<br>
<hr>
<b><i><u>SNACKS INDIAN MEALS</u></i></b>
<br>
<br>
<br>

