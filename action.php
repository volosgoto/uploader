<?php
//print_r($_FILES);

$uploadPath = __DIR__ . '/img/';
$fileNameTmp = $_FILES['photo']['tmp_name'] ?? [];
$fileNameUploadet = $_FILES['photo']['name'] ?? '';
$uploadFile = $uploadPath . basename($fileNameUploadet) ?? '';

function uploadFile($uploadPath, $fileNameTmp, $uploadFile) {
    if ( isset($_FILES['photo']['name']) && 0 == $_FILES['photo']['error'] ) {
        $types = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        
        if (in_array($_FILES['photo']['type'], $types)) {
            
            if ( move_uploaded_file($fileNameTmp, $uploadFile) ) {
                echo "File Uploaded";
            } else {
            echo "File Not uploaded";
            }
        } else {
            echo 'Filetype is not supported';
        }
    }
}

uploadFile($uploadPath, $fileNameTmp, $uploadFile);