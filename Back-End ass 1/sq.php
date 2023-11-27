<?php


$area = $per = -1;
$persq = -1;


if($_SERVER["REQUEST_METHOD"] == "POST"){

$per = test($_POST['len']);

$area = $per * 2;
$persq = $per * 4;

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

<h2>Area of a Square</h2>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the length of the Square:</label><br>
  <input type="text" name="len" value="<?php if($per != -1)echo $per; ?>"><br>

  <label for="fname">The Area of a Square is:</label><br>
  <input type="text" value="<?php if($area != -1)echo $area; ?>"><br>

  <label for="fname">The Perimeter of a square is:</label><br>
  <input type="text" value="<?php if($persq != -1)echo $persq; ?>"><br>

  <input type="submit" value="Calculate"><br>

</form> 


</body>
</html>