<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: patient-login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="patient-login.css">
</head>
<body>
<div class="center">
		
		<form method="post">
			<h1>Patient Signup</h1>
			<div class="txt_field">
			<input type="text" name="user_name">
			<span></span>
          <label>Username</label>
			</div>
			<div class="txt_field">
			<input  type="password" name="password">
			<span></span>
          <label>Password</label>
			</div>
			<input  type="submit" value="Signup">
			<div class="signup_link">
          	Already a member?
			<a href="patient-login.php">Login</a>
</div>
		</form>
	</div>
</body>
</html>

	