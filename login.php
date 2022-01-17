

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<h1>Login</h1>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" label="email" required>
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" label="password" required>
		</div>
		<button type="submit">Login</button>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// collect value of input field
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			
			$conn = new mysqli('localhost','root','','ktg');
			// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

			$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
			$result = $conn->query($sql);
			if ($result-> num_rows > 0) {
				echo "login succesful";
				session_start();
				while($row = $result->fetch_assoc()){
					$dbname = $row['name'];
					$_SESSION['name'] = $dbname;
				}
				header("Location: dashboard.php");
				die();
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
button{
	margin:20px;
	background:white;
	border: 1px solid #444;
	padding:5px 20px 5px 20px;

}

</style>
</html>