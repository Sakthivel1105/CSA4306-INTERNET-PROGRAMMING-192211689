<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Simulated result data (replace with actual database queries)
$results = [
    ['name' => 'John Doe', 'score' => 85, 'rank' => 1],
    ['name' => 'Jane Smith', 'score' => 78, 'rank' => 2],
    ['name' => 'Mike Lee', 'score' => 65, 'rank' => 3],
];

// Handle result publication
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update the results as "published" in the database
    // Example query: UPDATE results SET status = 'published'
    echo "<script>alert('Results published successfully!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Results</h2>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Score</th>
            <th>Rank</th>
        </tr>
        <?php foreach ($results as $result) { ?>
        <tr>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['score']; ?></td>
            <td><?php echo $result['rank']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <form method="POST">
        <button type="submit">Publish Results</button>
    </form>
</body>
</html>
