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

		<form method="POST" action="login.php">
			
			<br />
			<label>Current password</label>
			<input type="password" name="cur_pass" class="form-control" /> <br />

			<label>Password</label>
			<input type="password" name="password" class="form-control" /> <br />

			<label>Re-Type Password</label>
			<input type="password" name="password" class="form-control" /> <br />

			<!-- <select></select> -->
			<!-- <input type="checkbox" name="checkbox">
			Remember me -->

			<br />
			<input type="submit" name="submit" value="submit">

		</form>
	</div>

</body>
</html>