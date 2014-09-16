<?php
	// Inialize session
	session_start();
	
	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['username']))
		{
			header('Location: index.php');
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pesit-BSC Hostel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="topPanel">
  <ul>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="http://www.free-css.com/">Clients</a></li>
    <li><a href="http://www.free-css.com/">Support</a></li>
    <li><a href="http://www.free-css.com/">About us</a></li>
    <li class="active">Home</li>
  </ul>
 <div id="topPanel1">
  
<a href="http://www.pes.edu/"><img src="images/logo1.png" title="pes.edu" alt="pes.edu" width="114" height="150" border="0" /></a></div>
<div id="headingPanel">
<h2 style="text-align:center;font-family:arial;color:#26156E;"><font size="6">PES Institute of Technology,Bangalore South Campus<br><center><h3 style="text-align:center;font-family:arial;color:#26156E;"><font size="4"><br>(Formerly,PES School Of Engineering)</font></h3></center></font></h2></div>
  <div id="headerPanelfast">
    <h3 style="font-family:arial;color:blue;"></h3>
    <a href="carpenting.php">&nbsp;</a></div>
  <div id="headerPanelsecond">
    <h3 style="font-family:arial;color:green;"></h3>
    <p style="font-family:arial;color:green;"></p>
    <a href="plumbing.php">&nbsp;</a></div>
  <div id="headerPanelthird">
    <h3 style="font-family;color:black;"></h3>
    <p style="font-family:arial;color:black;"></p>
    <a href="electrical.php">&nbsp;</a></div>
  <div id="headerPanelfourth">
    <h3 style="font-family;color:black;"></h3>
    <p style="font-family:arial;color:black;"></p>
    <a href="others.php">&nbsp;</a></div>
</div>
<div id="bodyPanel1">
  <h2 style="font-family:arial;color:black;">WELCOME <?php echo $_SESSION['username']; ?></h2><br>
  <p>This complaint forum is developed dedicately for the students of PESIT-BSC Boys Hostel students only.All students residing in the hostel can register there complaint regarding room related problems here,which will be send directly to the authority and the action will be taken as per rules and regulations.</p>
  
  
</div>

 
</div>
</body>
</html>
