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

$result = mysqli_query($con,"SELECT * FROM carpenting WHERE COMPLAINED_T='$_POST[date]'");
echo "<table border='1'>
<tr>
<th>NAME</th>
<th>ROOM NO.</th>
<th>ISSUES</th>
<th>COMPLAINED TIME</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['NAME'] . "</td>";
  echo "<td>" . $row['ROOM_NO'] . "</td>";
  echo "<td>" . $row['ISSUES'] . "</td>";
  echo "<td>" . $row['COMPLAINED_T'] . "</td>";
  echo "</tr>";
  }
echo "</table>";



mysqli_close($con);
?> 
<script>
function printpage()
{
window.print();
}
</script>

<br><br>
<input type="button" value="Print this page" onclick="printpage()" />

</body>
</html>

