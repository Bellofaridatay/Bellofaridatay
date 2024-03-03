<?php
//include_once ("connect.php");

session_start();
auth();


function auth(){
    if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
        header("Location: sign2.php");
        exit;
    }
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<p>Welcome</p>

<a href="logout.php">Click to Logout</a>

</body>
</html>