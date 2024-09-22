<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <div class="admin-options">
        <a href="provide_login_rights.php" class="btn">Provide Login Rights</a>
        <a href="schedule_exam.php" class="btn">Schedule Exam</a>
        <a href="upload_questions.php" class="btn">Upload Questions</a>
        <a href="view_results_admin.php" class="btn">Publish Results</a>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
