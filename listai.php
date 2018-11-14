<?php
include 'config.php';
//include 'index.php';


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	foreach ($pirkejai as $pirk) {
	echo "ID: " .$pirk['ID'] . "<br/>"
	."Vardas: " .$pirk['vardas'] . "<br/>"
	."Pavarde: " .$pirk['pavarde'] . "<br/>";
}

	?>
</body>
</html>