<?php


include("config.php");
session_start();


function query_fxn($uname){

    $dbc = conn();
  
    $query = "SELECT FirstName, MiddleName, LastName, age FROM userinfo WHERE userid='".$uname."'";
  
    $res = $dbc->query($query);


    if ($res->num_rows > 0) {
        while($row= $res->fetch_assoc()) $uname = $row["username"];

        return array(FALSE,$uname);
    }

       else return array(TRUE);

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $newLastName = test($_POST['newLastName']);
    $newFirstName = test($_POST['newFirstName']);
    $newMiddleName = test($_POST['newMiddleName']);
    $newage = test($_POST['newage']);

    $query = "UPDATE userinfo SET lname='$newLastName', fname=$newFirstName, oname=$newMiddleName, age=$newage  WHERE userid='".$uname."'";
  
    $res = $dbc->query($query);




if ($query){

    $_SESSION['fname'] = $row["newFirstName"];
    $_SESSION['oname'] = $row["newMiddleName"];
    $_SESSION['lname'] = $row["newLastName"];
    $_SESSION['age'] = $row["newage"];
    $_SESSION['uname'] = $uname;


       header("Location: formupdate1.php");
       exit();
    }
    else{
       // Handle update error
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
  <h2>Update User</h2>
  <div class="input-container">
   <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" required>
  </div>

  <button type="submit" class="btn">Update</button>


</form>

</body>
</html>