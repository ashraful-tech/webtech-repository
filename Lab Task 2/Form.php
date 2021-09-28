<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>


	<form method="post" action=""
		<?php echo $_SERVER['PHP_SELF']; ?>

	Name: <input type="text" name="name"> <br>
	E-mail: <input type="text" name="email"><br>
	Website: <input type="text" name="website"><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
	<input type="Submit" name="Submit">
	</form>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h1> Your Data </h1>";
echo $name."<br>";
echo $email."<br>";
echo $website."<br>";
echo $comment."<br>";
<br>;
?>



</body>
</html>