<?php

session_start();

//$uname = $_SESSION['uname'];




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
    <input class="input-field" type="text" placeholder="<?php echo $_SESSION['fname']; ?>" name="fname" required>
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="<?php echo $_SESSION['oname'];?>" name="oname">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="<?php echo $_SESSION['lname']; ?>" name="lname" required>
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="number" placeholder="<?php echo $_SESSION['age']; ?>" name="age" required>
  </div>
  

  <button type="submit" class="btn">Update Account</button>
</form>

</body>
</html>
