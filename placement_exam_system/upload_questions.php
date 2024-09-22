<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $questions = $_POST['questions'];

    // TODO: Save the questions to the database

    $success = 'Questions uploaded successfully.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Questions</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Upload Questions</h2>
    <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
    <form action="" method="POST">
        <textarea name="questions" placeholder="Enter exam questions here..." required></textarea>
        <button type="submit">Upload Questions</button>
    </form>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
