<?php include("includes/header.php");
include("admenu.php");
include("includes/connection.php");
?>
<html>
<head>
<title>Bike Price
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body >
<form action="insert.php" method=post>
<div id="content" style="height=100%;width=100%">
<br><center><h2>Insert</h2></center>
<br><table class="imagetable" border=1 align=center>
<tr><td>Ray</td><td><input type=text name=ray></td></tr>
<tr><td>R15</td><td><input type=text name=r15></td></tr>
<tr><td>Crux</td><td><input type=text name=crux></td></tr>
<tr><td>YBR</td><td><input type=text name=ybr></td></tr>
<tr><td>FZ</td><td><input type=text name=fz></td></tr>
<tr><td>Fazer</td><td><input type=text name=fazer></td></tr>
<tr><td>Vmax</td><td><input type=text name=vmax></td></tr>
<tr><td>SZ</td><td><input type=text name=sz></td></tr>
</table>
<center><input type=submit></center>
</form>
</body>
</html>
<?php include("includes/footer.php");?>