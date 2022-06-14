<?php include("includes/header.php");
include("includes/menu1.php");?>
<html>
<head>
<title>Registerd</title>
<link rel="stylesheet" href="style1.css">
</head>
<div id="content" height=100% width=100%>
<br>
<?php
include("includes/connection.php");
$t1=$_REQUEST['txt1'];
$t2=$_REQUEST['txt2'];
$t3=$_REQUEST['txt3'];
$t4=$_REQUEST['txt4'];
$t5=$_REQUEST['txt5'];
$t6=$_REQUEST['txt6'];
$t7=$_REQUEST['txt7'];
$t8=$_REQUEST['radio1'];
$c=0;$v=0;
echo "$t8";
if($t1=="" && $t2=="" && $t3=="" && $t4=="" && $t5=="" && $t6=="" && $t7=="")
{
	echo "<a href='signup.php'><h1 style='color:red'><center>Fill All Details</center></a></h1>";
	$c=1;
}
else 
{
	if(ereg("^[_a-zA-Z0-9]+(\.[_a-zA-Z0-9]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$",$t6))
	{
	}
	else
	{	
		echo "<a href=signup.php><center><h1>Wrong Email-id entered</h1></center></a>";
		$c=1;
	}
	if(!strstr($t4,$t5))
	{
		echo "<a href=signup.php><center><h1>password do not match</h1></center></a>";
		$c=1;		
	}
	if(!$t8)
	{
		echo "null";
	}
	/*$q=mysql_query("select * from newuser") or die(mysql_error());
	while($row=mysql_fetch_array($q))
	{

	}*/
}
if($c==0)
{
	if(strstr($t8,"customer"))
	{
		echo "hello1";
		mysql_query("insert into customer values('$t1','$t2','$t3','$t4','$t6','$t7')") or die(mysql_error());
		{
			echo "<a href='login.php'><h1><center>Register Successfully Login Now</center></a></h1>";
		}
	}
	else if(strstr($t8,"admin"))
	{
		echo "hello2";
		mysql_query("insert into admin values('$t1','$t2','$t3','$t4','$t6','$t7')") or die(mysql_error());
		{
			echo "<a href='login.php'><h1><center>Register Successfully Login Now</center></a></h1>";
		}		
	}
}
?>
<?php include("includes/footer.php");?></div>
</body>
</html>