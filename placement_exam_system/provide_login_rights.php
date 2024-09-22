<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $candidate_username = $_POST['username'];
    $candidate_password = $_POST['password'];

    // TODO: Save the candidate credentials to the database

    $success = 'Candidate login rights provided successfully.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provide Login Rights</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Provide Login Rights to Candidate</h2>
    <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Candidate Username" required>
        <input type="password" name="password" placeholder="Candidate Password" required>
        <button type="submit">Provide Login Rights</button>
    </form>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
