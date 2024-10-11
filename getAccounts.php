<?php
// Read the accounts.txt file
$filename = 'accounts.txt';
if (file_exists($filename)) {
    // Get the contents of the file as an array
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Output the array in JSON format
    echo json_encode($lines);
} else {
    echo json_encode([]);
}
?>