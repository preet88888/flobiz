<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fozbil</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript">
function f1()
{
 var email=document.forms['form1']['email'].value;
if(email=="")
  {
alert('this field is required');
return false;	
  } 
  var pass=document.forms['form1']['pass'].value;
if(pass=="")
  {
alert('this field is required');
return false;	
  }
  var email=document.forms['form1']['email'].value
var re1=/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
var x1=re1.test(email);
if(x1==false)
{
	alert('invalid email')
	return false;
	}}
</script>
</head>

<body>

<div id="main">
<div id="center">

<div id="left"><img  src="image/sd.jpg" height="462" width="350"></div>
<div id="reg">
<h2>LogIn</h2>
<form action="datalog.php" method="post" name="form1"  onSubmit="return f1()" enctype="multipart/form-data">

<input type="text" name="email" id="email" placeholder="Email" required>
<input type="Password" name="pass" id="pass" placeholder="Password" required>
<input type="submit" value="Submit">
</form></div></div>
</div>
</div>
</body>
</html>