<?php

	//Initialize Session
	session_start();

	error_reporting(E_ALL ^ E_NOTICE);

	//$name = $_SESSION['username'];
	if(isset($_SESSION['username']))
		{
			header('Location: index1.php');
		}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
p.large {line-height:150%;}
</style>
<script>
function validateForm()
{
var x=document.forms["slick-login"]["username1"].value;
var y=document.forms["slick-login"]["pass"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
else if (y==null || y=="")
  {
  alert("Please enter the password");
  return false;
  }
}

</script>
</head>
<body>
<div id="topPanel">
  <ul>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="http://www.free-css.com/">Clients</a></li>
    <li><a href="http://www.free-css.com/">Support</a></li>
    <li><a href="http://www.free-css.com/">About us</a></li>
    <li class="active">Home</li>
  </ul></div>
<div id="topPanel1">
  
<a href="http://www.pes.edu/"><img src="images/logo1.png" title="pes.edu" alt="pes.edu" width="114" height="150" border="0" /></a></div>
<div id="headingPanel">
<h2 style="text-align:center;font-family:arial;color:#26156E;"><font size="6">PES Institute of Technology,Bangalore South Campus<br><center><h3 style="text-align:center;font-family:arial;color:#26156E;"><font size="4">(Formerly,PES School Of Engineering)</font></h3></center></font></h2></div>
<div id="imgpanel">
<a href="index.php"><img src="images/hostels.jpg" title="PESIT Boys Hostel" width="453" height="604" /></a></div>
<form id="slick-login" action="log.php" onsubmit="return validateForm()" method="post">
<h3 style="text-align:left;font-family:arial;color:#26156E;"><font size="5">STUDENT LOGIN</font></h3>
<label for="username">username</label><input type="text" name="username1" class="placeholder" placeholder="username">
<label for="password">password</label><input type="password" name="pass" class="placeholder" placeholder="password">
<input type="submit" value="Log In">
<p style="font-family:arial;color:red"><font size="2">Invalid username or password</font></p></div>
</form>
<br>


<div id="testimonial">
<p class="large" style="font-family:arial;color:#800000;"><span><font size="6">Welcome Hostelites...</font><br><br><font style="color:#800000">This complaint forum is developed dedicately for the students of PESIT-BSC Boys Hostel students only.All students residing in the hostel can register there complaint regarding room related problems here,which will be send directly to the authority and the action will be taken as per rules and regulations.Please login above to register your complaint.</font></span></p></div>
</body>
</html>
