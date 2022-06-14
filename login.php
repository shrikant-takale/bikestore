<?php include("includes/header.php");
include("includes/menu1.php");
?>
<html>
<head>
<title>Login
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body >
<div id="content" style="height=100% width=100%">
<form action="loginsuccess.php" method=post>
<br>
<table  border=0 width=20% align=center><tr><td><center><h3>Login</h3></center></td></tr>
</table>
<table class="imagetable" border=1 align=Center width=30% height=15%>
<tr><td>Username:</td><td><input type=text name=username></td></tr>
<tr><td>Password</td><td><input type=password name=password></td></tr>
<tr><td>Select Account Type</td><td><input type=radio name=radio1 value="customer">Customer
<input type=radio name=radio1 value="admin">Admin</td></tr></table>
<br><table align=Center >
<tr><td><input type=submit value="Login">
<a href="main.php"><input type=reset value=Cancel></a></td></tr>
</table>
</form>
<?php include("includes/footer.php");?></div>
</body>
</html>