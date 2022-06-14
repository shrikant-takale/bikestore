<?php include("includes/header.php");
include("admenu.php");
include("includes/connection.php");
?>
<html>
<head>
<title>Users Record
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body >
<div id="content" style="height=100%;width=100%">
<br><h1><center>Users Record</center></h1>
<?php
echo "<table class=imagetable align=center border=2>";
echo "<th>Customer Name</th><th>Email</th><th>Contact Number</th>";
$result=mysql_query("select * from customer") or die(mysql_error());
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row['firstname']."  ".$row['lastname'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['contactno'];
	echo "</td></tr>";
}
?>
</table>
</body>
</html>
<?php include("includes/footer.php");?>