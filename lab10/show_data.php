<?php
// Specify the path to the non-public folder where data.txt is stored
$file_path = '/path/to/private-folder/data.txt';

if (file_exists($file_path)) {
    // Read the file into an array
    $file_contents = file($file_path, FILE_IGNORE_NEW_LINES);
    
    // Output the data as a table
    echo '<table>';
    foreach ($file_contents as $line) {
        echo '<tr><td>' . htmlspecialchars($line) . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'File not found.';
}
?>
