<?php
session_start();
if (!isset($_SESSION['name'])){
	#echo $_SESSION['name'];
	echo "<script> alert('login please') </script>";
	header('Location: login.php');
	die();

}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>

</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<h1>Add Hotels</h1>
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" label="name" required>
		</div>
		<div>
			<label for="price">Price</label>
			<input type="text" name="price" label="price" required>
		</div>
		<div>
			<label for="bed">Bed Number</label>
			<input type="text" name="bed" label="bed" required>
		</div>
		<div>
			<label for="imagelink">Image link</label>
			<input type="text" name="imagelink" label="imagelink" required>
		</div>
		<button type="submit">ADD</button>
		<a href="logout.php" id="logout">Logout</a>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// collect value of input field
			$name = $_REQUEST['name'];
			$bed = $_REQUEST['bed'];
			$price = $_REQUEST['price'];
			$imglink = $_REQUEST['imagelink'];
			$conn = new mysqli('localhost','root','','ktg');
			// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}

			$sql = "INSERT INTO hotels (name, price, bed_num,img_link)
			VALUES ('$name', $price,$bed,'$imglink')";
			if ($conn->query($sql) === TRUE) {
			echo "hotel added succesfully";
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			}
			?>

	</form>

</body>

<style>

html,body{
	height:100%;
	width:100%;
	background-image: url('https://images.pexels.com/photos/1291766/pexels-photo-1291766.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260');
	background-size:cover;
	background-position:center;
	font-family: sans-serif;

}

body{
	display:grid;
	place-content:center;
}

form{
	display:grid;
	place-items:center;
	text-align:left;
	background: white; 
	padding:50px;
}
div{
	margin:5px;
	display:grid;
	grid-template-columns: 1fr 1fr;
}
#logout,button{
	margin:20px;
	background:white;
	border: 1px solid #444;
	padding:5px 20px 5px 20px;

}



</style>
</html>