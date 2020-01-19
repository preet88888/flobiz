<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>lpu.in</title>
</head>

<body>
<?php
session_start();
if($_POST)
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'fozbil');
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$query="SELECT * FROM `data` WHERE `username`='$uname'";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);//we don't use while loop because we need only one row
if($row['username']==$uname)
{
if($row['password']==$pass)
{
echo "welcome user";
$_SESSION['uname']=$row['username'];
$_SESSION['id']=$row['id'];
header('location:navigation.php');	
}
else
{
echo "incorrect password";
	}}	
	else
	{
	echo "inavalid user";
	}}
else
{

	header('location:login.php');
}
?>
</body>
</html>