<html>
<head>
<title>Displaying feedback details</title>
</head>
<body bgcolor="peachpuff">
<center>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
	<th>Emp_id</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phonenumber</th>
	<th>Message</th>

<?php
//create the connection with MYSQL database
$con=mysqli_connect('127.0.0.1','root','');

//select database
if(!mysqli_select_db($con,'company'))
{
	echo"Database not selected";
}

//select query
$sql="SELECT * FROM feedback";

//execute the SQL query
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($records))
{
	echo"<tr>";
	echo"<td>".$row['Emp_id']."</td>";
	echo"<td>".$row['Name']."</td>";
	echo"<td>".$row['Email']."</td>";
	echo"<td>".$row['Phonenumber']."</td>";
	echo"<td>".$row['Message']."</td>";
	
}

?>
</table>
</center>
</body>
<b>
<div class="pagination">
  
   <a href="home.php" target="new page">BACK</a>
 

</div>
</b>

</html>