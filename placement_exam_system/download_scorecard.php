<?php
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="scorecard.txt"');

// Simulate fetching the result from the database
$result = [
    'name' => 'John Doe',
    'score' => 85,
    'rank' => 1,
    'feedback' => 'Excellent performance!',
];

echo "Scorecard\n";
echo "---------\n";
echo "Student Name: " . $result['name'] . "\n";
echo "Score: " . $result['score'] . "\n";
echo "Rank: " . $result['rank'] . "\n";
echo "Feedback: " . $result['feedback'] . "\n";
?>
