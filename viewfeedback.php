<?php include("includes/header.php");
include("admenu.php");
include("includes/connection.php");
?>
<html>
<head>
<title>Customer FeedBack
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body >
<div id="content" style="height=100%;width=100%">
<br><h1><center>Customer FeedBack</center></h1>
<?php
echo "<table class=imagetable align=center border=2>";
echo "<th>Customer Name</th><th>Email</th><th>FeedBack Message</th>";
$result=mysql_query("select * from feedback") or die(mysql_error());
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row['uname'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['feed'];
	echo "</td></tr>";
}
?>
</table>
</body>
</html>
<?php include("includes/footer.php");?>