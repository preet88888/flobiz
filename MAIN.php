<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flobiz</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript">
function f1()
{
var fname=document.forms['form1']['fname'].value;
if(fname=="")
  {
alert('this field is required');
return false;	
  }
var lname=document.forms['form1']['lname'].value;
if(lname=="")
  {
alert('this field is required');
return false;	
  }
 var email=document.forms['form1']['email'].value;
if(email=="")
  {
alert('this field is required');
return false;	
  } 
  var uname=document.forms['form1']['uname'].value;
if(uname=="")
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
  var cpass=document.forms['form1']['cpass'].value;
if(cpass=="")
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
	}

var pass=document.forms['form1']['pass'].value;
if(pass.length<=8)
{
alert('Password should be strong..');
return false;
}
var pass=document.forms['form1']['pass'].value;
var cpass=document.forms['form1']['cpass'].value;

if(pass==cpass)
  {
alert('Succesfully register');
  }
  else
  { alert('wrong password please confirm again')
	return false;	
  }
}
</script>
</head>


<body>
<div id="main">
<div id="center">

<div id="left"><img  src="image/sd.jpg" height="462" width="350"></div>
<div id="reg">
<h2>Registration</h2>
<form action="regdata.php" method="post" name="form1"  onSubmit="return f1()" enctype="multipart/form-data">
<input type="text" name="fname" id="fname" placeholder="First Name" required>
<input type="text" name="lname" id="lname" placeholder="Last Name" required>
<input type="text" name="email" id="email" placeholder="Email" required>
<input type="text" name="uname" id="uname" placeholder="User Name" required>
<input type="Password" name="pass" id="pass" placeholder="Password" required>
<input type="Password" name="cpass" id="cpass" placeholder=" Confirm Password" required>
<input type="submit" value="Submit">
</form></div></div>
</div>
</body>
</html>