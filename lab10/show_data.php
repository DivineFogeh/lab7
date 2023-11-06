<?php
require 'vendor/autoload.php'; // Include the Azure SDK for PHP

use Azure\Storage\Blob\BlobRestProxy;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=webtechstorage1;AccountKey=EUluiINM7OGl3WssBRpho7cNpZSzDjN0n5/ew7Le44YBhiieO0LFPqeA4iv1VzcPpWj2nfbikAn8+AStMfcfkg==";

$blobClient = BlobRestProxy::createBlobService($connectionString);

$containerName = 'webtechcontainer';
$blobName = 'data.txt';

if ($blobClient->doesBlobExist($containerName, $blobName)) {
    // Read the blob's content
    $blobData = $blobClient->getBlob($containerName, $blobName);

    // Output the data as a table
    $data = $blobData->getContentStream();

    echo '<table>';
    while (($line = fgets($data)) !== false) {
        echo '<tr><td>' . htmlspecialchars($line) . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'Blob not found.';
}
?>
