<?php


$area = $per = -1;
$percl = -1;
$pi = 3.142;


if($_SERVER["REQUEST_METHOD"] == "POST"){

$per = test($_POST['rad']);

$area = $per * $per * $pi ;
$percl = 2 * $pi * $per;

//print("The area of the square is $area cm^2");

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
<body>

<h2>Area of a circle</h2>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the radius of a circle:</label><br>
  <input type="text" name="rad" value="<?php if($per != -1)echo $per; ?>"><br>

  <label for="fname">The area of a circle is:</label><br>
  <input type="text" value="<?php if($area != -1)echo $area; ?>"><br>

  <label for="fname">The perimeter of a circle is:</label><br>
  <input type="text" value="<?php if($percl != -1)echo $percl; ?>"><br>


  <input type="submit" value="Calculate">
</form> 


</body>
</html>