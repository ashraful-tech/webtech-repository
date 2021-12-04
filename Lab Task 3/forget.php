<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>              
</head>       
<body>
	<br />
	<div class="container" style="width: 350px;">
		<h3 align="center">Change Password</h3>
		<br />

		<form method="POST" action="">
			
			<br />
			<label>Current password</label>
			<input type="text" name="cur_pass" class="form-control" /> <br />

			<label>Password</label>
			<input type="text" name="password" class="form-control" /> <br />

			<label>Re-Type Password</label>
			<input type="text" name="password1" class="form-control" /> <br />

			<!-- <select></select> -->
			<!-- <input type="checkbox" name="checkbox">
			Remember me -->

			<br />
			<input type="submit" name="submit" value="submit">

		</form>
	</div>

</body>
</html>

<?php

if (isset($_POST['submit'])) {

	$cur_pass = $_POST['cur_pass'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];

	if (empty($cur_pass)) {
		echo "Password can't empty";

		if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i", $cur_pass )) {
			echo "Password Invalid<br>";
	}
}
	
	if (empty($password)) {
		echo "Password cant empty";

		if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i", $password, $password1 )) {
		echo "<br>Password type Invalid<br>";

		if ($_POST['password'] != $_POST['password1']) {
		echo "<br>Password did not match<br>";
	}

	else 
		echo "Okay";
	}
	}

	

	// echo $cur_pass ."<br>";
	// echo $password ."<br>";
	// echo $password1 ."<br>";


}
?>