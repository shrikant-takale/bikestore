<?php include("includes/header.php");
include("includes/menu1.php");?>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="style1.css">
</head>
<body >
<form action="newuser.php" method=post>
<div id="content" height=100% width=100%>
<br><table align=center width=30%>
<tr><td><center><h3>Signup</h3></center></td></tr>
</table>
<center><table class="imagetable" border=1 align=center width=30%>
<tr><td>First Name</td><td><input type=text name=txt1></td></tr>
<tr><td>Last  Name</td><td><input type=text name=txt2></td></tr>
<tr><td>Username</td><td><input type=text name=txt3></td></tr>
<tr><td>Password</td><td><input type=password name=txt4></td></tr>
<tr><td>Confirm Password</td><td><input type=password name=txt5></td></tr>
<tr><td>Email</td><td><input type=text name=txt6></td></tr>
<tr><td>Contact No</td><td><input type=text name=txt7></td></tr>
<tr><td>Select account type:</td><td><input type=radio name=radio1 value="customer">Customer
<input type=radio name=radio1 value="admin">Admin</td></tr></table>
<br><center><table border=0 align=center width=0%>
<tr><td><input type=submit value="Register" ></td>
<a href="main.php"><td><input type=reset value="Cancel" ></td></a></tr>
</table></center><?php include("includes/footer.php");?></div></form>
</body>
</html>
