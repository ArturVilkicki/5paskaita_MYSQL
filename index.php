<?php
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM pirkejai"; /*SELECT * FROM products ORDER BY id jeigu eiles tvarka */
$result = mysqli_query($conn, $sql);
$pirkejai = [];
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //echo "<table width='100%'>";
    //echo "<tr><td>ID</td><td>Name</td><td>PRICE</td><td>DESCRIPTION</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        //$total+=$row["price"];
        array_push($pirkejai, $row);
        //echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["description"] . "</td></tr>";
    }
    //echo "</table>";
} else {
    $err = "Pirkeju nerasta";
}
mysqli_close($conn);
include "view.php";
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
if (isset($_POST['submit'])) {
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