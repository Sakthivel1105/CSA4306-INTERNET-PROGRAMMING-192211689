<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: Validate credentials against the database
    if ($username === 'candidate' && $password === 'candidatepass') {
        $_SESSION['candidate_logged_in'] = true;
        header('Location: candidate_dashboard.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-form">
        <h2>Candidate Login</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Candidate Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="index.html">Back to Home</a>
    </div>
</body>
</html>
