<?php

include('functionClass.php');

$pi = 3.142;


$area = $len = $persq = $areasq = "";
$areac = $circum = $rad = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

$len = test($_POST['len']);
$rad = test($_POST['rad']);

if($rad == "")$rad = $areac = $circum = "";

else{
  $areac = $pi * ($rad ** 2);
  $circum = 2 * $pi * $rad;
}

if($len == "")$len = $persq = $areasq = "";


  else{
    $areasq = powFxn($len,3);
    $persq = 2 * $len;
  }



//print("The area of the square is $area cm^2");

}


function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  function brfxn($count){

    for ($i = 1; $i <= $count; $i++)echo "<br>";
  }


?>







<!DOCTYPE html>
<html>
<body>

<h2>Area of a Square</h2>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the length of the Square:</label><br>
  <input type="text" name="len" value="<?php print $len; ?>"><br>

  <label for="fname">The Area of a Square is:</label><br>
  <input type="text" value="<?php print $areasq; ?>"><br>

  <label for="fname">The Perimeter of a square is:</label><br>
  <input type="text" value="<?php print $persq; ?>"><br><br>
  

  <label for="fname">Enter the Radius of a circle:</label><br>
  <input type="text" name="rad" value="<?php echo $rad; ?>"><br>

  <label for="fname">The Area of a circle is:</label><br>
  <input type="text" value="<?php echo $areac; ?>"><br>

  <label for="fname">The Circumference of a circle is:</label><br>
  <input type="text" value="<?php echo $circum; ?>"><br><br>

  <input type="submit" value="Calculate"><br>

</form> 


</body>
</html>