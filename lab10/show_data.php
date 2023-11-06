<?php
require 'vendor/autoload.php'; // Include the Azure SDK for PHP

use Azure\Storage\Blob\BlobRestProxy;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=webtechstorage1;AccountKey=EUluiINM7OGl3WssBRpho7cNpZSzDjN0n5/ew7Le44YBhiieO0LFPqeA4iv1VzcPpWj2nfbikAn8+AStMfcfkg==";

$blobClient = BlobRestProxy::createBlobService($connectionString);

$containerName = 'webtechcontainer';
$blobName = 'data.txt';

$blobUrl = 'https://webtechstorage1.blob.core.windows.net/webtechcontainer/data.txt';

if ($blobClient->doesBlobExist($containerName, $blobName)) {
    // Read the blob's content using the $blobUrl
    $blobData = $blobClient->getBlob($containerName, $blobName, $blobUrl);

    // Output the data as needed
    // ...
} else {
    echo 'Blob not found.';
}
?>
