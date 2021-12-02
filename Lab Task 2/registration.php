<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
</head>
<body>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>">
    
    <label>Name</label>
    <input type="name" name="name" id="name" value=""><br>

    <label>Email</label>
    <input type="text" name="email" id="email" value=""><br>

    <label>Date of Birth</label> <br>
    <label>dd</label> <input type="text" name="dd" placeholder="dd/mm/yyyy"><br>
    <label>Gender</label>
    <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <br>

    <label>Degree</label>
    <input type="checkbox" id="ssc" name="degree[]">
    <label for="ssc">SSC</label>
    <input type="checkbox" id="hsc" name="degree[]">
    <label for="hsc">HSC</label>
    <input type="checkbox" id="bsc" name="degree[]">
    <label for="bsc">BSC</label>
    <input type="checkbox" id="msc" name="degree[]">
    <label for="msc">MSC</label><br>

    <label for="bloodgrp">Blood Group:</label>
    <select name="bloodgrp" id="bloodgrp">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O-">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    </select><br>

    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset">
  </form>

</body>
</html>

<?php 

if (isset($_POST['submit'])){

  if (empty($_POST['name'])) {
    echo "Name is required";
  }
  elseif (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
    echo "Only letters and white space allowed";
  }
  else
  {
    echo $_POST['name'];
  }

  if (empty($_POST['email'])) {
    echo "<br>Email is required";
  }
  elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    "Invalid email format";
  }
  else
  {
    echo "<br>".$_POST['email'];
  }
  if (empty($_POST["dd"])) {
    echo "<br>Date is required";
  }
  elseif (!preg_match("/[0-9]{4}/",$_POST['dd'])) {
    echo "Invalid email format";
  }
  else{
    echo "<br>".$_POST['dd'];
  }

  if (empty($_POST['gender'])) {
    echo "<br>Gender is required";
  }
  else{
    echo "<br>".$_POST['gender'];
  }
  if(isset($_POST['degree'])){
       if (count($_POST['degree']) < 2){
   echo "<br>please select at least two fields";
          }
          if (empty($_POST['bloodgrp'])) {
            echo "<br< Blood Group required";
          }
          else
          {
            echo "<br>".$_POST['bloodgrp'];
          }

}

}
?>