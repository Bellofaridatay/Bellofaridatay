<!DOCTYPE html>
<html>
<head>
<title>Course Registration and Score Calculation</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted
    $numCourses = $_POST["numCourses"];
    $totalScore = 0;

    // Display the course registration and score calculation form
    echo "<h2>Course Registration and Score Calculation</h2>";
    echo "<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>";

    for ($i = 1; $i <= $numCourses; $i++) {
        echo "Course $i: ";
        echo "<input type='text' name='course[]' placeholder='Course Name'>";
        echo " Score: ";
        echo "<input type='number' name='score[]' placeholder='Enter Score' min='0' max='100'><br>";
    }

    echo "<br><input type='submit' value='Calculate Overall Score'>";
    echo "</form>";

    // Process the entered scores and calculate overall score
    if (isset($_POST["course"]) && isset($_POST["score"])) {
        $courses = $_POST["course"];
        $scores = $_POST["score"];

        // Ensure arrays have the same length
        if (count($courses) == count($scores)) {
            echo "<h3>Overall Score:</h3>";
            echo "<ul>";

            for ($i = 0; $i < count($courses); $i++) {
                echo "<li>$courses[$i]: $scores[$i]</li>";
                $totalScore += $scores[$i];
            }

            echo "</ul>";
            echo "<p><strong>Total Overall Score:</strong> $totalScore</p>";
        } else {
            echo "<p style='color: red;'>Error: Number of courses and scores do not match.</p>";
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter the number of courses you want to register: <input type="number" name="numCourses" min="1">
    <input type="submit" value="Submit">
</form>

</body>
</html>