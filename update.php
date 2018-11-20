
<?php
	include 'config.php';

		if (isset($_GET['id'])) {
			$sql = "SELECT * FROM pirkejai WHERE id='" . $_GET['id'] . "'";
			$result = mysqli_query($conn,$sql);
			$data = $result->fetch_assoc();
			//var_dump($_GET['id']);


		}
		if (isset($_POST['submit'])) {
			$id = $_POST['id'];
			$vardas = $_POST['name'];
			$pavarde = $_POST['surname'];
			$sql = "UPDATE pirkejai SET vardas ='$vardas', pavarde ='$pavarde' WHERE ID='$id'";
			$data = mysqli_query($conn,$sql);
			if ($data) {
				echo "Record updated succesfully";
			}else{
				echo "Record not updated";
			}
		}else{
			echo "Click on insert button to save changes";
		}
		


	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<label>ID</label>
		<input type="text" name="id" value="<?php echo $_GET['id'];?>"><br>

		<label>Vardas</label>
		<input type="text" name="name" value=""><br>

		<label>Pavarde</label>
		<input type="text" name="surname" value=""><br>

		<input type="submit" name="submit" value="update">
	</form>
	
</body>
</html>

