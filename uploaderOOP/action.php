<?php
require __DIR__ . '/Uploader.php';

$fileUploded = $_FILES['photo']['name'] ?? '';

$uploader = new Uploader($fileUploded);
$uploader->isUploaded();

if ( true == $uploader->status ) {
    $uploader->upload();
}