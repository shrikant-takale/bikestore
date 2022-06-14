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
<form action="update.php" method=post>
<div id="content" style="height=100%;width=100%">
<br><center><h2>Update</h2></center>
<center>Note:click on radio button and enter price in the text box</center>
<table class="imagetable" border=1 align=center>
<tr><td><input type=radio name=r2 value="ray">Ray</td><td><input type=text name=ray></td></tr>
<tr><td><input type=radio name=r2 value="r15">R15</td><td><input type=text name=r15></td></tr>
<tr><td><input type=radio name=r2 value="crux">Crux</td><td><input type=text name=crux></td></tr>
<tr><td><input type=radio name=r2 value="ybr">YBR</td><td><input type=text name=ybr></td></tr>
<tr><td><input type=radio name=r2 value="fz">FZ</td><td><input type=text name=fz></td></tr>
<tr><td><input type=radio name=r2 value="fazer">Fazer</td><td><input type=text name=fazer></td></tr>
<tr><td><input type=radio name=r2 value="vmax">Vmax</td><td><input type=text name=vmax></td></tr>
<tr><td><input type=radio name=r2 value="sz">SZ</td><td><input type=text name=sz></td></tr>
</table>
<center><input type=submit></center>
</form>
</body>
</html>
<?php include("includes/footer.php");?>
