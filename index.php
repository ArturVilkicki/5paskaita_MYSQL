<?php
include 'config.php';
// Create connection

//mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM pirkejai ORDER BY ID"; /*SELECT * FROM products ORDER BY id jeigu eiles tvarka */
$result = mysqli_query($conn, $sql);
$pirkejai = [];
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        
        array_push($pirkejai, $row);
        
    }
    
} else {
    $err = "Pirkeju nerasta";
}
mysqli_close($conn);
include "listai.php";


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