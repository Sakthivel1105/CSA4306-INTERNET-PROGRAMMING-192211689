<?php
session_start();
if (!isset($_SESSION['candidate_logged_in'])) {
    header('Location: candidate_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Candidate Dashboard</h1>
    <div class="candidate-options">
        <a href="attempt_exam.php" class="btn">Attempt Exam</a>
        <a href="view_results_candidate.php" class="btn">View Results</a>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
