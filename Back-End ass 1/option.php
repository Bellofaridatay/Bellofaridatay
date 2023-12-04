<!DOCTYPE html>
<html>
<body>

<h2></h2>

<?php

//$course = $_GET['course'];


//print $course[$i]."<br>";

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $course = $_POST["course"];

    echo "<h2>Counting up to $countTo</h2>";
    echo "<p>";

    for ($i=0; $i<=$course; $i++) {

       // $result=$course;
        echo $i;
    }
    echo "</p>";

}

?>

<a href="create.php"> Register</a>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the amount of course you want to register:</label><br>
  <input type="number" name="course" ><br>

  <input type="submit" value="register"><br>

  

</form> 





</body>
</html>