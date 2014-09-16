<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Administration</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<script type="text/javascript">

function yesnoCheck(){
	 document.getElementById('formpanelcarp').style.visibility='hidden';
      document.getElementById('formpanelplum').style.visibility='hidden';
      document.getElementById('formpanelelec').style.visibility='hidden';
	document.getElementById('formpanelother').style.visibility='hidden';
	if(document.getElementById('carp').checked){
	   document.getElementById('formpanelcarp').style.visibility='visible';}
else if(document.getElementById('plum').checked){
	   document.getElementById('formpanelplum').style.visibility='visible';}
else if(document.getElementById('elec').checked){
	   document.getElementById('formpanelelec').style.visibility='visible';}
else if(document.getElementById('other').checked){
	   document.getElementById('formpanelother').style.visibility='visible';}

}
</script>
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
<div id="head">
<center><font size="4" style="font-family:arial;color:#26156E;">Select one of the following Complaint designations to view:</font></center></div>
<div id="radiopanel">
Carpenting
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="carp"/><br><br>
Plumbing&nbsp;&nbsp;&nbsp;
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="plum"/><br><br>
Electrical&nbsp;&nbsp;&nbsp;
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="elec"/><br><br>
others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="other"/><br><br>
</div>
<div id="formpanelcarp" style="visibility:hidden">
<form id="issues1" action="disp.php" method="post">
Date: <input type="date" name="date"><br>
<input type="submit" value=" view carpenting issues" name="carp"><br>
</form>
</div>
<div id="formpanelplum" style="visibility:hidden">
<form id="issues1" action="disp1.php" method="post">
Date: <input type="date" name="date"><br>
<input type="submit" value="view plumbing issues" name="plumb"><br>
</form>
</div>
<div id="formpanelelec" style="visibility:hidden">
<form id="issues1" action="disp2.php" method="post">
Date: <input type="date" name="date"><br>
<input type="submit" value="view electrical issues" name="elec"><br>
</form>
</div>
<div id="formpanelother" style="visibility:hidden">
<form id="issues1" action="disp3.php" method="post">
Date: <input type="date" name="date"><br>
<input type="submit" value="view other issues" name="other"><br>
</form>
</div>
</body>
<html>
