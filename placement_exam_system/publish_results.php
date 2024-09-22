<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Simulate results fetching from the database (replace with actual database query)
$results = [
    ['name' => 'John Doe', 'score' => 85, 'rank' => 1],
    ['name' => 'Jane Smith', 'score' => 78, 'rank' => 2],
    ['name' => 'Mike Lee', 'score' => 65, 'rank' => 3],
];

// Check if the admin clicked the "publish results" button
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update the status of results in the database as published
    // Example query: UPDATE results SET status = 'published'

    echo "<script>alert('Results have been published successfully!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View & Publish Results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>View Results</h2>
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

    <form id="publish-results-form" method="POST" action="">
        <button type="button" onclick="confirmPublishResults()">Publish Results</button>
    </form>

    <script src="js/scripts.js"></script>
</body>
</html>
