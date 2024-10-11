<?php
// Specify the file path
$filename = 'accounts.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Read the file and return each line as an array element
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // If the file is not empty, return the lines as JSON
    if ($lines !== false) {
        echo json_encode($lines);
    } else {
        echo json_encode([]);
    }
} else {
    // If the file doesn't exist, return an empty array
    echo json_encode([]);
}
?>
