<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$email = 'emailmu@yahoo.com';
	$domain = strstr($email, '@');
	echo $domain."<br>";
	$email = strstr($email, 'm');
	echo $email;
echo"</b>";
?>
</body>
</html>