<?php

include("config.php");


function query_fxn($uname){

    $dbc = conn();
  
    $query = "SELECT * FROM userinfo WHERE uname='".$uname."'";
  
    $res = $dbc->query($query);
  
    if ($res->num_rows > 0) {
      while($row= $res->fetch_assoc()) {
        $fname = $row["FirstName"];
        $pword = $row["pass"];
        $age = $row["age"];

      }
     // $val = [TRUE,$fname]
  
        return array(FALSE,$fname,$pword,$age);
      }
  
         else return array(TRUE);
  
  }
  



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $uname = test($_POST['uname']);
    $pword = test($_POST['pword']);


    $res = query_fxn($uname);

    if($res[0]) echo 'User does not exist!!!';
    

    else{

         $pword = md5($pword);

         if($res[2] == $pword){

            echo 'Welcome, ' . $res[1] . '. Your age is ' . $res[3];
        }

        else echo 'Incorrect Password!!!';

    }

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
<link rel="stylesheet" href="style1.css">
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" style="max-width:500px;margin:auto">
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

