<!DOCTYPE html>
<html>
<body>

<?php
session_start();
 
if(!session_is_registered(myusername)){
  header("location:log.php");
}
?>
