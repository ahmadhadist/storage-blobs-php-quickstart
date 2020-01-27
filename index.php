<?php
$connectionString = "DefaultEndpointsProtocol=https;AccountName=awanwebap;AccountKey=u7s32wWQrmt7TjiFPOfFykLmNxwD/dKe3nM/o7BYznoLAJlfP8OQxjVXpgPggF8IdF5fbbRPdIeGx97ovgYviA==";
$containerName = "blockblobs";

//create blob client
$blobClient = BlobRestProxy::createBlobService($connectionString);
  
if (isset($_POST['submit'])) {
  $fileToUpload = $_FILES["fileToUpload"]["name"];
  $content = fopen($_FILES["fileToUpload"]["tmp_name"], "r");
  echo fread($content, filesize($fileToUpload));
    
  $blobClient->createBlockBlob($containerName, $fileToUpload, $content);
  header("Location: index.php");
} 
  
$listBlobsOptions = new ListBlobsOptions();
$listBlobsOptions->setPrefix("");
$result = $blobClient->listBlobs($containerName, $listBlobsOptions);
;
?>
