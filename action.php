<?php
// print_r($_FILES);

$path = __DIR__ . '/img/';
$fileTmp = $_FILES['photo']['tmp_name'] ?? [];
$fileUploded = $_FILES['photo']['name'] ?? '';
$uploadToServer = $path . basename($fileUploded) ?? '';


function uploadToServer($path, $fileTmp, $uploadToServer) {
    
    if ( isset($_FILES['photo']['name']) && 0 == $_FILES['photo']['error'] ) {
        
        if( 4000000 > $_FILES['photo']['size']) {
        
            $types = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        
            if (in_array($_FILES['photo']['type'], $types)) {

                if ( move_uploaded_file($fileTmp, $uploadToServer) ) {
                    echo "File Uploaded" . "\n";  
                } else {
                    echo "File Not uploaded" . "\n";
                }
            } else {
                echo 'Filetype is not supported';
            }
        } else {
            echo 'Too big file size';
        }
    } else {
        echo 'Upload failed: ' . $_FILES['photo']['error'];
    }
}

uploadToServer($path, $fileTmp, $uploadToServer);