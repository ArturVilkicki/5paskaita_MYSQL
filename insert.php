<?php 
include 'config.php';
include 'forma.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	if (empty($id)) {
		echo "Prasome ivesti id";
	} elseif (empty($name)) {
		echo "Prasome ivesti varda";
	} elseif (empty($surname)) {
		echo "Prasome ivesti pavarde";
	} else {
		$conn = new mysqli($servername, $username, $password, $db);
		if ($conn->connect_error) {
    			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "INSERT INTO pirkejai (ID, vardas, pavarde)VALUES ('$id', '$name', '$surname')";

		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>