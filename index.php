
<!DOCTYPE html>
<html>
<head>
	<title>authorization</title>
</head>
<body>
	<?php
 	require('connect.php');
	if (isset($_POST['username'])&&(isset($_POST['password']))){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$email', $password')";
		$result = mysqli_query($connection, $query);
		if ($result){
			$smsg = 'ok';
		} else{
			$fmsg = 'fail';
		}

	}
	 ?>
	}
	<div class="container">
		<form class="signin" method="POST">
			<h2>Авторизация</h2>
			<input type="text" name="username" placeholder="username">
			<input type="email" name="email" placeholder="email">
			<input type="password" name="password" placeholder="password">
			<button type="submit">Submit</button>
		</form>
	</div>

</body>
</html>