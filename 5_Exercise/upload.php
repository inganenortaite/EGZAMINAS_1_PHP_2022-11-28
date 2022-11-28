<?php

$error = $_FILES['my_file']['error'];

if ($error !== UPLOAD_ERR_OK) {
    echo 'File upload error!';
    die();
}

if (!is_dir('Storage/Inga/')) {
    mkdir('Storage/Inga/', 0777);
}
$fileName = $_POST['filename'];
$fileTmpPath = $_FILES['my_file']['tmp_name'];
$fileInfo = pathinfo($_FILES['my_file']['name']);
$fileExt = $fileInfo['extension'];
$fileStoragePath = sprintf('Storage/Inga/%s', $fileName . '.' . $fileExt);

if (move_uploaded_file($fileTmpPath, $fileStoragePath)) {
    echo 'File uploaded successfully!';
}

header ("refresh:2; url=index.php");