<?php
mysql_connect("localhost","root","") or die(mysql_error());
echo "hello1";
mysql_select_db("bikeshop") or die(mysql_error());
echo "hello1";
mysql_query("insert into newuser values('abc','def','ghi','jkl','mno','pqr')");
echo "hello1";
$result=mysql_query("select * from newuser");
echo "hello1";
echo "<table border=2><br>";

echo "<tr><th>FirstName</th><th>LastName</th><th>Username</th><th>Password</th><th>Email</th><th>'contactno</th></tr>";

while($row=mysql_fetch_array($result))
{

	echo "<tr><td>";
	echo $row['firstname'];
	echo "</td><td>";
	echo $row['lastname'];
	echo "</td><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['password'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['contactno'];
	echo "</td></tr>";
}
   echo "</table>";
?>