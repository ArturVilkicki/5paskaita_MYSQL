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
	."Pavarde: " .$pirk['pavarde'] . "<br/>"
	."<a href='update.php?id=$pirk[ID]'>Edit</a>" . "<br/>"
	."<a href='delete.php?id=$pirk[ID]&name=$pirk[vardas]&surname=$pirk[pavarde]'>Delete</a>" ."<br/>";
	}
	?>
</body>
</html>