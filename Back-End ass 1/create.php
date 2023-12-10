<!DOCTYPE html>
<html>
<body>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")

    $numbCourses = $_POST["numbCourses"];
    $totalScore = 0;


    echo "<h2>Course Registration</h2>";
    //echo "<form method='post' action='"($_SERVER["PHP_SELF"])."'>";
    
    for ($i = 1; $i <= $numbCourses; $i++) {

        echo "Course $i: <input type='text' name='course'><br>";
        echo " Score: <input type='number' name='score[]' ";
    }


        $courses = $_POST["course"];
        $scores = $_POST["score"];

        if (count($courses) == count($scores)) {
          echo "<h3>Overall Score:</h3>";
          echo "<ul>";

        for ($i = 0; $i < count($courses); $i++) {

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