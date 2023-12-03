<!DOCTYPE html>
<html>
<body>

<h2></h2>

<?php

//$course = $_GET['course'];


//print $course[$i]."<br>";

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $courses = $_POST["course"];

    for ($i = 1; $i <= $courses; $i++)  {

       //$result=$course;
        echo $i;
    }

}

?>

<a href="create.php"> Register</a>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the amount of course you want to register:</label><br>
  <input type="number" name="courses" ><br>

  <input type="submit" value="register"><br>

  

</form> 





</body>
</html>