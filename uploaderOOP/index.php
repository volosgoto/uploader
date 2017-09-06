<?php
    require __DIR__ . '/action.php';
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка файла</title>
</head>
<body>
<h2>Загрузка файла</h2>
    <form action="" enctype="multipart/form-data" method="post">
        <p>Загрузите ваши фотографии на сервер</p>
        <input type="hidden" name="MAX_FILE_SIZE" value="4000000" />  
        <p><input type="file" name="photo" value="Выбрать">
        <input type="submit" value="Отправить"></p>
    </form>
</body>
</html>