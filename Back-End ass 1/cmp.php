<?php

$courses = [];
$scores = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted
   // $ncourse = $_POST["ncourse"];

    $courses = $_POST["courses"];
    $scores = $_POST["scores"];

}

?>


<!DOCTYPE html>
<html>
<head>
<title>Course Registration Input</title>
</head>
<body>

<h2>Course Registration Input</h2>

<?php
 // echo "Number of Courses: $ncourse";

  echo "The courses you've entered: ";

  foreach ($courses as $x){
    echo $x;
  }

?>

</body>
</html>