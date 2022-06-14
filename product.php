<?php include("includes/header.php");
include("includes/menu2.php");
include("menu.php");
include("includes/connection.php");
$result=mysql_query("select * from bikes") or die(mysql_error());
while($row=mysql_fetch_array($result)){?>
<html>
<head>
<title>Product
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div id="content">
<br><center><h3>Our Product</h3></center>
<center><table  class="imagetable1" style="background-color:white"  width=80%>
<th><a href="yamaha-ray.php"><center>Yamaha Ray</center></a></th>
<th><a href="yamaha-yzf-r15.php"><center>Yamaha yzf-R15</center></a></th>
<th><a href="Yamaha-crux.php"><center>Yamaha crux</center></a></th>
<th><a href="Yamaha-YBR.php"><center>Yamaha YBR</center></a></th>
<tr><td><img src="yamaha/yamaha-ray.jpg" height=40%></td>
<td><img src="yamaha/yamaha-yzf-r15.jpg" height=22%></td>
<td><img src="yamaha/Yamaha-crux.jpg" height=65%></td>
<td><img src="yamaha/Yamaha-YBR.jpg" height=28%></td></tr>
<?php
echo "<tr><td><center><b>Price:Rs.".$row['ray']."/-</center></td><td><center><b>Price:Rs.".$row['r15']."/-</center></td>";
echo "<td><center><b>Price:Rs.".$row['crux']."/-</center></td><td><center><b>Price:Rs.".$row['ybr']."/-</center></td></tr></table>";

echo "<center><table  class=imagetable1 style=background-color:white width=80%>";
echo "<th><a href=Yamaha-fz.php><center>Yamaha FZ</center></a><br></th>";
echo "<th><a href=Yamaha-Fazer.php><center>Yamaha Fazer</center></a><br></th>";
echo "<th><a href=yamaha-vmax.php><center>Yamaha VMax</center></a><br></th>";
echo "<th><a href=Yamaha SZ.php><center>Yamaha SZ</center></a><br></th>";
echo "<tr><td><img src=yamaha/Yamaha-FZ.jpg height=19%></td>";
echo "<td><img src=yamaha/Yamaha-Fazer.jpg height=26%></td>";
echo "<td><img src=yamaha/yamaha-vmax.jpg height=28%></td>";
echo "<td><img src='yamaha/Yamaha SZ.jpg' height=20%></td></tr>";
echo "<tr><td><center><b>Price:Rs.".$row['fz']."/-</center></td><td><center><b>Price:Rs.".$row['fazer']."/-</center></td>";
echo "<td><center><b>Price:Rs.".$row['vmax']."/-</center></td><td><center><b>Price:Rs.".$row['sz']."/-</center></td></tr></table>";
}include("includes/footer.php");?>
</div>
</body>
</html>
