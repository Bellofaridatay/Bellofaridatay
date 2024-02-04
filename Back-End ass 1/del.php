<?php


include("config.php");


function query_fxn($uname){

    $dbc = conn();
  
    $query = "SELECT * FROM userinfo WHERE userid='".$uname."'";
  
    $res = $dbc->query($query);
  
    if ($res->num_rows > 0) return FALSE;
      
         else return TRUE;
  
  }
  



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $uname = test($_POST['uname']);

    $res = query_fxn($uname);

    if($res) echo $uname . ', does not exist.';
    

    else{
         
        $dbc = conn();
  
        $query = "DELETE FROM userinfo WHERE userid='".$uname."'";
     
        $dbc->query($query);

        echo $uname . ', deleted successfully.';

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
  <h2>Delete User</h2>
  <div class="input-container">
   <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" required>
  </div>

  <button type="submit" class="btn">Delete</button>


</form>

</body>
</html>