<?php
	$address = "136 Lake Haven Way";
	echo($address);
	?>
<?php
	$array = array(
		"Charles Dickens" => "1870",
		"William Thackeray" => "1863",
		"Anthony Trollope" => "1882",
		"Gerard Manley Hopkins" => "1889");
	foreach ($array as $author => $year) {
		echo "<li>$author died in $year</li>";
	};

	?>

<?php
	$shoes = $_GET['shoes'];
	echo($shoes);
	?>


