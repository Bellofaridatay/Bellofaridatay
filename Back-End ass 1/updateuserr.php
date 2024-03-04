<?php

session_start();
include("config.php");

$uname = $_SESSION['uname'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $fname = test($_POST['fname']);
  $lname = test($_POST['lname']);
  $oname = test($_POST['oname']);
  $age = test($_POST['age']);

  $query = "UPDATE userinfo SET FirstName='".$fname."', LastName='".$lname."', MiddleName='".$oname."', age='".$age."' WHERE userid='".$uname."'";
  
  $dbc = conn();
  
  $res = $dbc->query($query);

  if($res)echo "$fname, profile updated successfully!!!";
  

}




function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" style="max-width:500px;margin:auto">
  
<h2>Update User Record</h2>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" value="<?php echo $_SESSION['fname']; ?>" name="fname" required>
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" value="<?php echo $_SESSION['oname'];?>" name="oname">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" value="<?php echo $_SESSION['lname']; ?>" name="lname" required>
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="number" value="<?php echo $_SESSION['age']; ?>" name="age" required>
  </div>
  

  <button type="submit" class="btn">Update Account</button>
</form>

</body>
</html>
