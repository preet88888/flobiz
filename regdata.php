<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
if($_POST)//if we apply this condition no-one can hack your page
{

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'flobiz');
    $uname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$query="SELECT  * FROM `data` where `username`='$uname'";//if username will match username
	$data=mysqli_query($con,$query);
	$num_rows=mysqli_num_rows($data);//it will tell no. of rows if you will put that name which already have in table then it will output 1 if it doesn't have then it will give 0 as output
	if($num_rows>0)
	{
	echo "username already exists";	
	}
	else
	{
	$query="INSERT INTO `data`(`firstname`,`lastname`,`email`,`username`,`password`,`cpassword`) VALUES     ('$fname','$lname','$email','$uname','$pass','$cpass')";
	$data=mysqli_query($con,$query);
	echo"thank you for register please login to continue";	
	}}
	else
	{
	//echo 	'error';//it will give error we try to reach register
	header('location:login.php');//if we try to reach register page it will still on the for page
	}
?>
</body>
</html>