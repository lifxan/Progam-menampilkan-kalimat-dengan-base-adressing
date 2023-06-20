<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 
	$gaji = 10000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);

	echo "Gaji sebelum Pajak = $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp.$thp <br><br>";


	$a = 5;
	$b = 4;

	echo "$a == $b : ". ($a == $b);
	echo "<br>$a != $b : ". ($a !=$b);
	echo "<br>$a > $b : ". ($a >$b);
	echo "<br>$a < $b : ". ($a <$b);
	echo "<br>($a == $b) && ($a >$b) : ". (($a != $b) && ($a >$b));
	echo "<br>($a == $b) || ($a >$b) : ". (($a != $b) || ($a >$b));

 ?>

</body>
</html>
