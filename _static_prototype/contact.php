<?php
// Simple backend handler to simulate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    // Simulate processing delay
    sleep(1);
    
    // In a real scenario, you would mail() or save to DB
    // mail("admin@hypervsnclone.com", "New Subscriber", "Email: $email");
    
    // JSON Response
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'message' => "Thank you! $email has been subscribed."]);
    exit;
}
?>
