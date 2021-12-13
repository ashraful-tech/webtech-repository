<?php

$error = '';
$message = '';

$usernameErr = '';
$passErr = '';

if (isset($_POST['submit'])) {


	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conpassword = $_POST['confirm_password'];
	$gender = $_POST['gender'];
	$dob	= $_POST['gender'];

	if(!preg_match("/^\w{5,}$/", $username)) {
		$usernameErr = "User name must contain alpha numaric, period, dash or underscore <br>";  //[0-9A-Za-z_]
	}

	if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i", $password )) {
		$passErr = "Password Invalid";
	}

	if (!$password === $conpassword) {
    echo "success!";
	}
	else {
   echo "Does not match";
	}

	if(file_exists('registration.json'))  
           {  
                $current_data = file_get_contents('registration.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'    =>$name, 
                     'email'    =>$email,
                     'username'    =>$username,    
                     'password'  =>$password, 
                     'gender' => $gender,
                     'dob' => $dob,
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('registration.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }
           else  
           {  
                $error = 'JSON File does not exist';  
           }    
      }
      
?>

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
		<h3 align="center">Registration</h3>
		<br />

		<p><span class="error">* required field</span></p>
		<form method="POST" action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

			<?php if (isset($error)) {
				echo $error;
			} ?>
			
			<br />
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="" required> <br />

			<label>Email</label>
			<input type="email" name="email" class="form-control" required="email" value="">
			<br />
			<label>User Name</label>
			<input type="text" name="username" class="form-control" / required="username">
			<span class="error">*<?php echo $usernameErr ; ?> </span>

			<br />
			<label>Password</label>
			<input type="password" placeholder="password" id="password" name="password" required>
			<br />
			<label>Confirm Password</label>
        	<input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>

			<span class="error">*<?php echo $passErr ; ?> </span> <br />

			<label>Gender</label> <br />
			<input type="radio" name="gender" id="male" value="gender"> Male </input>
			<input type="radio" name="gender" id="female" value="gender"> Female </input>
			<input type="radio" name="gender" id="other" value="gender"> Other </input>
			<br />

			<label>Date of Birth</label> <br/>
			<input type="date" name="dob"><br />

			<input type="checkbox" name="checkbox">
			Remember me

			<br />
			<input type="submit" name="submit" value="submit">
			<input type="submit" name="reset" value="reset">

		</form>
	</div>

</body>
</html>




