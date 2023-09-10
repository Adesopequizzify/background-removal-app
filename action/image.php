<?php
// Specify the target directory where you want to save the uploaded image
$targetDirectory = '/upload';

if (isset($_FILES['image_file'])) {
    $file = $_FILES['image_file'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        $fileName = uniqid() . '_' . basename($file['name']);
        $targetPath = $targetDirectory . $fileName;

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            echo 'Image uploaded and saved successfully!';
        } else {
            echo 'Error: Failed to save the image.';
        }
    } else {
        echo 'Error: ' . $file['error'];
    }
} else {
    echo 'Error: No file uploaded.';
}
?>