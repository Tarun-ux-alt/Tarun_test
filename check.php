<?php
header('Content-Type: application/json');

// Define a fixed condition for success or failure
$success_condition = true;  // Change this to false to simulate failure

if ($success_condition) {
    // Respond with a success message
    echo json_encode(['message' => 'success']);
} else {
    // Respond with a failure message
    echo json_encode(['message' => 'failure']);
}
?>
