

<?php
include('score.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Score Range</title>
</head>
<body>
    <h2>Student Score and Range</h2>

    <p>Student Score: <?php echo $studentScore; ?></p>
    <p>Score Range: <?php echo $scoreRange; ?></p>
</body>
</html>

<?php
// Function to get the score range
function getScoreRange($score) {
    if ($score >= 90 && $score <= 100) {
        return 'Excellent';
    } elseif ($score >= 80 && $score < 90) {
        return 'Very Good';
    } elseif ($score >= 70 && $score < 80) {
        return 'Good';
    } elseif ($score >= 60 && $score < 70) {
        return 'Satisfactory';
    } elseif ($score >= 0 && $score < 60) {
        return 'Needs Improvement';
    } else {
        return 'Invalid score';
    }
}

// Example student score
$studentScore = 85;

// Get the score range
$scoreRange = getScoreRange($studentScore);

?>
