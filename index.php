<?php
require_once 'vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;
use MicrosoftAzure\Storage\Blob\Models\SetBlobPropertiesOptions;



$connectionString = "DefaultEndpointsProtocol=https;AccountName=cerdikiawan;AccountKey=C9/lDSvx0F6Cl3U2F2pwr+rUIVm6j36iZ/V0OKwbvkoXaz2Luj2wFYsbBqk+JT2BXw3Q6OCIp13jvQ44/Lro6g==";
$containerName = "wadah";
$fileToUpload = "whm2.png";
$contentType = "image/png";
$content = fopen($fileToUpload, "r") or die("Unable to open file!");

// Create blob client.
$blobClient = BlobRestProxy::createBlobService($connectionString);

//$blobOption = new SetBlobPropertiesOptions();
//$blobOption->setBlobContentType($contentType);

//Upload blob
$blobClient->createBlockBlob($containerName, $fileToUpload, $content);

?>
<?php
require_once 'vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;
use MicrosoftAzure\Storage\Blob\Models\SetBlobPropertiesOptions;



$connectionString = "DefaultEndpointsProtocol=https;AccountName=awanwebap;AccountKey=u7s32wWQrmt7TjiFPOfFykLmNxwD/dKe3nM/o7BYznoLAJlfP8OQxjVXpgPggF8IdF5fbbRPdIeGx97ovgYviA==";
$containerName = "wadah";
$fileToUpload = "whm2.png";
$contentType = "image/png";
$content = fopen($fileToUpload, "r") or die("Unable to open file!");

// Create blob client.
$blobClient = BlobRestProxy::createBlobService($connectionString);

//$blobOption = new SetBlobPropertiesOptions();
//$blobOption->setBlobContentType($contentType);

//Upload blob
$blobClient->createBlockBlob($containerName, $fileToUpload, $content);
include_once("awanvision.html");
?>
