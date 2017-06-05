<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$foo = 'hello world!';
	$foo = ucwords($foo);
	$bar = 'hello world!';
	$bar = ucwords($bar);
	$bar = ucwords(strtolower($bar));
	echo"$foo <br>$bar";
echo"</b>";
?>
</body>
</html>