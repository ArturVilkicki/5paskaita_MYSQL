<?php



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
	."Pavarde: " .$pirk['pavarde'] . "<br/>" . "<button type='submit' name='submit'><a href ='edit.php?id='>EDIT</a></button>" . "<br/>";
}

	?>

	
</body>
</html>