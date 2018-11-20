<?php
include 'config.php';
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
	."Pavarde: " .$pirk['pavarde'] ."<button type='edit' name='edit'>EDIT</button>" ."<br/>";
	}
	if (isset($_GET['edit'])) {
		$editID = $_GET['ID'];
		$sql = "UPDATE tasks SET status = '1' WHERE id = $editID";
        $result = $conn->query($sql);
	}
	?>
</body>
</html>