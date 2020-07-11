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
$Emp_id=$_POST['1'];
$Name=$_POST['2'];
$Email=$_POST['3'];
$Phonenumber=$_POST['4'];
$Message=$_POST['5'];
$sql="INSERT INTO feedback(Emp_id,Name,Email,Phonenumber,Message) VALUES('$Emp_id','$Name','$Email','$Phonenumber','$Message')";
if(!mysqli_query($con,$sql))
{
	echo'feedback not recevied';
}
else
{
	echo'feedback recevied';
}
header("refresh:5;url=home2.php");
?>
</center>
</font>
</html>