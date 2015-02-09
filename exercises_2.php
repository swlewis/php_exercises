<html>
<head>
		<title>Multiply</title>
</head>
<body>
	<?php

	function multiply ($x, $y)
	{
		return $x * $y;
	}

	?>

	<p><?php echo multiply (4, 2); ?></p>
	<p><?php echo multiply (o, 4); ?></p>
	<p><?php echo multiply (900, 32); ?></p>
	<p><?php echo multiply (299999, 23); ?></p>
	
	<?php

	function divide ($x, $y)
	{
	if ($y == 0) {
		$y = $x;
	}
	return $x / $y;
	}

	?>

	<p><?php echo divide (4, 2); ?></p>
	<p><?php echo divide (900, 32); ?></p>
	<p><?php echo divide (0, 4); ?></p>
	<p><?php echo divide (4, 0); ?></p>

	<?php
