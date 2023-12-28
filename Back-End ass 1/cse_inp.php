<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted
    $numCourses = $_POST["numCourses"];

}

?>


<!DOCTYPE html>
<html>
<head>
<title>Course Registration Input</title>
</head>
<body>

<h2>Course Registration Input</h2>

<form method='post' action='cmp.php'>

<?php


for ($i = 1; $i <= $numCourses; $i++) {

    echo "Course $i: <input type='text' name='courses[]' placeholder='Course Name' required>";

    echo " Score: <input type='number' name='scores[]' placeholder='Enter Score' min='0' max='100' required><br>";


}


?>

<input type='hidden' name="ncourse" value="<?php echo $numCourses; ?>">

<br><input type='submit' value='Calculate Overall Score'>

</form>






</body>
</html>