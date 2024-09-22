<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $exam_date = $_POST['exam_date'];

    // TODO: Save the exam date to the database

    $success = 'Exam scheduled successfully for ' . $exam_date;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Exam</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Schedule Exam</h2>
    <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
    <form action="" method="POST">
        <label for="exam_date">Exam Date:</label>
        <input type="date" id="exam_date" name="exam_date" required>
        <button type="submit">Schedule Exam</button>
    </form>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
