<?php
require 'vendor/autoload.php'; // Include the Azure SDK for PHP

use Azure\Storage\Blob\BlobRestProxy;
use Azure\Storage\Blob\Models\CreateBlockBlobOptions;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=webtechstorage1;AccountKey=<?php
require 'vendor/autoload.php'; // Include the Azure SDK for PHP

use Azure\Storage\Blob\BlobRestProxy;
use Azure\Storage\Blob\Models\CreateBlockBlobOptions;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=webtechstorage1;AccountKey=YOUR_ACCOUNT_KEY";

$blobClient = BlobRestProxy::createBlobService($connectionString);

$containerName = 'webtechcontainer';
$blobName = 'data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $newData = $first_name . ' ' . $last_name;

    // Save data to Azure Blob Storage
    $options = new CreateBlockBlobOptions();
    $options->setContentType('text/plain');
    $blobClient->createBlockBlob($containerName, $blobName, $newData, $options);

    echo "Data saved successfully.";
} else {
    echo "Invalid request.";
}
?>
";

$blobClient = BlobRestProxy::createBlobService($connectionString);

$containerName = 'webtechcontainer';
$blobName = 'data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $newData = $first_name . ' ' . $last_name;

    // Save data to Azure Blob Storage
    $options = new CreateBlockBlobOptions();
    $options->setContentType('text/plain');
    $blobClient->createBlockBlob($containerName, $blobName, $newData, $options);

    echo "Data saved successfully.";
} else {
    echo "Invalid request.";
}
?>
