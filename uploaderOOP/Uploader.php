<?php

class Uploader {   
    public $status;
    
    public function __construct($file) {
    }    
    
    public function isUploaded() {
        if ( isset($_FILES['photo']['name']) && 0 == $_FILES['photo']['error'] ) {
            //echo "File Uploaded" . "\n";
            return $this->status = true;  
            } else {
              //  echo "File Not uploaded" . "\n";
            return $this->status = false;
        }
    }

    public function upload()  {
        if( 4000000 > $_FILES['photo']['size']) {
            $types = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        
            if (in_array($_FILES['photo']['type'], $types)) {

                if ( move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . '/img/' . basename($_FILES['photo']['name'])) ) {
                    echo "File Uploaded" . "\n";  
                } else {
                    echo "File Not uploaded" . "\n";
                }
            } else {
                echo 'Filetype is not supported';
            }
        } else {
        echo 'Upload failed: ' . $_FILES['photo']['error'];
    }

    } 

}



// - Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
// - Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное