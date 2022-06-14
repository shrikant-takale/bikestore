<?php
include("includes/connection.php");
$t1=$_REQUEST['ray'];
$t2=$_REQUEST['r15'];
$t3=$_REQUEST['crux'];
$t4=$_REQUEST['ybr'];
$t5=$_REQUEST['fz'];
$t6=$_REQUEST['fazer'];
$t7=$_REQUEST['vmax'];
$t8=$_REQUEST['sz'];
if($t1=="" && $t2=="" && $t3=="" && $t4=="" && $t5=="" && $t6=="" && $t7=="")
{
	echo "<script>alert('fields are empty')</script>";
	include('insertbike.php');
}
else
{
	mysql_query("DELETE FROM bikes") or die(mysql_error());
	mysql_query("insert into bikes values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')") or die(mysql_error());
	echo "<script>alert('value inserted successfully')</script>";
	include('adminpage.php');	
}
?>