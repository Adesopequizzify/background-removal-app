<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image |TechQue-Tools</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="/assets/css/bg.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
  <header class="header header-style">
    <div class="header-content">
        <h1>Background Magic</h1>
        <p>Unleash the power to remove backgrounds.</p>
    </div>
    <div class="header-image">
        <img src="/assets/images/down.png" alt="Background Removal Icon">
    </div>
</header>
<div class="container">
        <form id="imageUploadForm" class="card">
            <h2>Upload Image</h2>
            <label for="imageInput" class="custom-file-icon">
              
                <input type="file" id="imageInput" accept="image/*">
                <span><i class="fa fa-cloud-upload"></i> Upload Image</span>
            </label>
        </form>
    </div>
    <div id="modalContainer" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Image Preview</h2>
            <img id="preview" src="#" alt="Image Preview">
            <button id="removeBackground" class="modal-button">Remove Background</button>
            <div id="spinner" class="spinner"></div>
            <a id="downloadButton" class="download-button" download>Download</a>
        </div>
    </div>
        <footer class=" ad bg-dark text-white py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>&copy; 2023 TechQue. All Rights Reserved</p>
              </div>
              <div class="col-md-6 text-center">
                <a href="https://www.facebook.com/Official.Adesope" class="text-white mx-3"><i class="fab fa-facebook"></i></a>
                <a href="https://github.com/adesopequizzify" class="text-white mx-3"><i class="fab fa-github"></i></a>
                <a href="https://twitter.com/adesopemuiz3" class="text-white mx-3"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </footer>
    <script src="/assets/js/main.js"></script>
</body>
</html>
