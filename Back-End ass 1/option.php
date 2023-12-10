<!DOCTYPE html>
<html>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numbCourses = $_POST["numbCourses"];


    echo "<h2>Course Registration</h2>";
    //echo "<form method='post' action='"($_SERVER["PHP_SELF"])."'>";
    
    for ($i = 1; $i <= $numbCourses; $i++) {

        echo "Course $i: <input type='text' name='course'><br>";



     }

   
 }   
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="fname">Enter the number of courses you want to register:</label><br>
  <input type="number" name="numbCourses" ><br>

  <input type="submit" value="Register"><br>


</form> 

</body>
</html>