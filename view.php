<!DOCTYPE html>
<html>
<head>
	<title>Duomenu baze</title>
</head>
<body>
	<form method="POST">
	<label>ID</label>
	<input type="text" name="id"><br>

	<label>Vardas</label>
	<input type="text" name="name"><br>

	<label>Pavarde</label>
	<input type="text" name="surname"><br>

	<input type="submit" name="submit">
</form>
<?php
foreach ($pirkejai as $pirk) {
	echo "ID: " .$pirk['ID'] . "<br/>"
	."Vardas: " .$pirk['vardas'] . "<br/>"
	."Pavarde: " .$pirk['pavarde'] . "<br/>";
}
?>



</body>
</html>