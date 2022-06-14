<?php include("includes/header.php");
include("includes/menu1.php");?>
<html>
<head>
<title>Contact Us
</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<form action="feedback.php" method=post>
<div id="content">
<br><center><h2>Shree Yamaha Motors Pvt. Ltd.</h2>
<h3>Mumbai,Maharastra</h3></center>
<table align=center>
<tr><td>Your name:</td><td><input type=text name=txt1 size=60></td></tr>
<tr><td>Email:</td><td><input type=text name=txt2 size=60></td></tr>
<tr><td>Feedback:</td><td><TEXTAREA cols=44 rows=5 name=txt3 wrap="physical"></TEXTAREA></td></tr>
<tr><td></td><td><input type=submit value=Send></td></tr></table>
<center>Disclaimer: Kindly do not post any defamatory, infringing, obscene, indecent, 
discriminatory or unlawful material or information.</center><center>Shree Yamaha Motors Ltd reserves 
the right to remove without notice any content received from users.</center>

</div>
</form>
</body>
</html>
<?php include("includes/footer.php");?>