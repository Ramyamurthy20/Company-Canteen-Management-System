<html>
<center>
<font size="7" color="blue">

<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo'Not connected to server';
}
if(!mysqli_select_db($con,'company'))
{
	echo'Database not selected';
}
$Name=$_POST['sname'];
$Emp_id=$_POST['id'];
$Snacks=$_POST['snacks'];
$Beverages=$_POST['bev'];
$Quantity=$_POST['num'];
$Select_Employee=$_POST['emp'];
$Date=$_POST['date'];
$Description=$_POST['des'];
$sql="INSERT INTO snacks(Name,Emp_id,Snacks,Beverages,Quantity,Select_Employee,Date,Description) VALUES('$Name','$Emp_id','$Snacks','$Beverages','$Quantity','$Select_Employee','$Date','$Description')";
if(!mysqli_query($con,$sql))
{
	echo'order not placed';
}
else
{
	echo' order confirmed';
}
header("refresh:3;url=home2.php");
?>
</center>
</font>
</html>