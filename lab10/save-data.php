<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Data to append to the file
    $data = $first_name . ' ' . $last_name . "\n";

    // Specify the path to the non-public folder
    $file_path = '/path/to/private-folder/data.txt';

    // Append data to the file
    file_put_contents($file_path, $data, FILE_APPEND);

    echo "Data saved successfully.";
} else {
    echo "Invalid request.";
}
?>
