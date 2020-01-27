<?php
require_once 'vendor/autoload.php';
require_once "./random_string.php";

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

if (isset($_POST['upload'])) {

    try {
        $connectionString = "DefaultEndpointsProtocol=https;AccountName=awanwebap;AccountKey=u7s32wWQrmt7TjiFPOfFykLmNxwD/dKe3nM/o7BYznoLAJlfP8OQxjVXpgPggF8IdF5fbbRPdIeGx97ovgYviA==";
        $blobClient = BlobRestProxy::createBlobService($connectionString);
    
        $createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);
    
        $createContainerOptions->addMetaData("key1", "value1");
        $createContainerOptions->addMetaData("key2", "value2");
        $container = "blockblobs";
        // $blobClient->createContainer($container, $createContainerOptions);

        $fileName = $_FILES['file']['name'];
        $imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);

        $targetDir = "upload/";
        $targetFile = $targetDir.basename($_FILES['image']['name']);
        $file = $_FILES['image']['name'];
        move_uploaded_file($file,$targetFile);
        $fileToUpload = "upload/".$files.".".$imageFileType;
        $content = fopen($fileToUpload,"r") or die("Error");
        $blobClient->createBlockBlob($container, $file, $content);
        $listBlobsOptions = new ListBlobsOptions();
        $listBlobsOptions->setPrefix($fileName);
    } catch (ServiceException $e){
        echo $e;
    }
    
    

}
include_once("awanvision.html");
?>
