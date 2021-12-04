<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>              
</head>       
<body>
	<br />
	<div class="container" style="width: 250px;">
		<h3 align="center">Login to</h3>
		<br />

		<p><span class="error">* required field</span></p>
		<form method="POST" action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			
			<br />
			<label>User name</label>
			<input type="text" name="username" class="form-control" / required="username"> <br />
			<!-- <span class="error">*<?php echo $usernameErr ; ?> </span> <br /> -->

			<label>Password</label>
			<input type="password" name="password" class="form-control" / required="password" > 
			
			<br />

			<!-- <select></select> -->
			<input type="checkbox" name="checkbox">
			Remember me

			<br />
			<input type="submit" name="submit" value="submit">
			<a href="forget.php">forget password </a>

		</form>
	</div>

</body>
</html>


<?php

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!preg_match("/^\w{5,}$/", $username)) {
		$usernameErr = "User name must contain alpha numaric, period, dash or underscore <br>";  //[0-9A-Za-z_]
	}

	if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i", $password )) {
		echo "Password Invalid";
	}


}
?>