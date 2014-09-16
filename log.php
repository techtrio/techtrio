<!DOCTYPE html>
<html>
<body>

<?php
session_start();

	
$con=mysqli_connect("mysql.serversfree.com","u703792508_host","piyush","u703792508_pesit");
// Check connect
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$username=$_POST['username1'];
$password=$_POST['pass'];

$login=mysqli_query($con,"SELECT * FROM user WHERE USERNAME='$username' && PASSWORD='$password'");

if(mysqli_num_rows($login)==1){
echo "login successful";
$_SESSION['username'] = $_POST['username1'];

header("location:index1.php");}
else
{
	header("location:indexerr.php");}
?> 
</body>
</html>
