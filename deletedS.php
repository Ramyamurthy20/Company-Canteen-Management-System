
<html>
<center>
<font size="7" color="blue">

<?php
//connect with mysql 
$con=mysqli_connect('127.0.0.1','root','');

//select te database
mysqli_select_db($con,'company');

//select query
$sql="DELETE FROM south WHERE Emp_id='$_GET[emp_id]'";

//Execute the query
if(!mysqli_query($con,$sql))
{
	echo'Not updated';
}
else
{
	echo'deleted successfully';
}
header("refresh:3;url=home2.php");

?>
</center>
</font>
</html>