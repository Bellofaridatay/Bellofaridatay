
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<form action="/sign1.php" method="post" style="max-width:500px;margin:auto">
  <h2>Signin Form</h2>
  <div class="input-container">
   <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" required>
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pword" required>
  </div>

  <button type="submit" class="btn">sign in</button>


</form>

</body>
</html>

