<?php include("includes/header.php");
include("includes/menu1.php");?>
<html>
<head>
<title>About
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div id="content">
<?php
include("includes/connection.php");
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$rad=$_REQUEST['radio1'];
$n=0;
if(strstr($rad,"customer"))
{
	$result=mysql_query("select * from customer") or die(mysql_error());
	$n=0;
	while($row=mysql_fetch_array($result))
	{
		if($row['username']==$user && $row['password']==$pass)
		{
			echo"<br>";
			echo "<a href=product.php><center><h1>Login Successfull</h1></center></a>";
			$n=1;
		}
	}
}
else if(strstr($rad,"admin"))
{
	$result=mysql_query("select * from admin") or die(mysql_error());
	$n=0;
	while($row=mysql_fetch_array($result))
	{
		if($row['username']==$user && $row['password']==$pass)
		{
			echo"<br>";
			echo "<a href=adminpage.php><center><h1>Login Successfull</h1></center></a>";
			$n=1;
		}
	}
}
else if($n==0)
{
	echo"<br>";
	echo "<a href=login.php><center><h1>Login Failed Please try Again</h1></center></a>";
}
?>
<?php include("includes/footer.php");?>
</div></body></html>