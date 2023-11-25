<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){


$per = test($_POST['len']);

$area = $per ** 2;

print("The area of the square is $area cm^2");

}

function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>