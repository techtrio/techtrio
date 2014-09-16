<!DOCTYPE html>
<html>
<body>
<?php
$con=mysqli_connect("mysql.serversfree.com","u703792508_host","piyush","u703792508_pesit");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();
$sql="INSERT INTO others  (NAME,ROOM_NO,ISSUES,COMPLAINED_T)
VALUES
('$_POST[name1]','$_POST[room]','$_POST[other]',CURDATE())";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "your complaint has been registered successfully.please click on the link below if you want to post more complaint.";


mysqli_close($con);
?> 
<a href="index1.php">Click here</a>
</body>
</html>
