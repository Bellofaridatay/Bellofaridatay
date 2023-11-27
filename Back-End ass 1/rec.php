<?php


$area = -1;
$perl = -1;
$perw = -1;
$peri = -1;



if($_SERVER["REQUEST_METHOD"] == "POST"){

$perl = test($_POST['len']);
$perw = test($_POST['wid']);

$area = $perl * $perw;
$peri = ($perl + $perw) * 2;


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

<h2>Area of a Rectangle</h2>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the length of the Rectangle:</label><br>
  <input type="text" name="len" value="<?php if($perl != -1)echo $perl; ?>"><br>

  <label for="fname">Enter the width of the Square:</label><br>
  <input type="text" name="wid" value="<?php if($perw != -1)echo $perw; ?>"><br>

  <label for="fname">The area of a rectangle is:</label><br>
  <input type="text" value="<?php if($area != -1)echo $area; ?>"><br>

  <label for="fname">The Perimeter of a rectangle is:</label><br>
  <input type="text" value="<?php if($peri != -1)echo $peri; ?>"><br>

  <input type="submit" value="Calculate"><br>
  
</form>

</body>
</html>