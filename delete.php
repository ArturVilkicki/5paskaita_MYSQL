<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM pirkejai WHERE ID='$id'";
$data = mysqli_query($conn,$sql);
if ($data) {
	echo "Record deleted from table";
} else{
	echo "NOt DELETED";
}

?>