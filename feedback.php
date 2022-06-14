<?php
include("includes/connection.php");
$name=$_REQUEST['txt1'];
$email=$_REQUEST['txt2'];
$feed=$_REQUEST['txt3'];
mysql_query("insert into feedback values('$name','$email','$feed')") or die(mysql_error());
echo "<script>alert('Thank you for your feedback')</script>";
{
	include('main.php');
}
?>