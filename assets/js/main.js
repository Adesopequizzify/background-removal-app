document.addEventListener('DOMContentLoaded', function() {
  const imageInput = document.getElementById('imageInput');
  const preview = document.getElementById('preview');
  const modal = document.getElementById('modalContainer');
  const closeBtn = document.querySelector('.close');
  const removeBackgroundBtn = document.getElementById('removeBackground');
  const spinner = document.getElementById('spinner');
  const downloadButton = document.getElementById('downloadButton');

  imageInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function(e) {
        preview.src = e.target.result;
        modal.style.display = 'block';
      };

      reader.readAsDataURL(file);
    } else {
      preview.src = '#';
    }
  });

  closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
    window.location.reload();
  });

  window.addEventListener('click', function(event) {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });

  removeBackgroundBtn.addEventListener('click', function() {
    spinner.style.display = 'block';
    removeBackgroundBtn.style.display = 'none';

    const apiKey = '6cbd42dcc001a83c576d2fc605ff34dfff17a58478901e46cf704be52aa453f917669e5f3fd90a43eb5ec57afa9b655f';
    const apiUrl = 'https://clipdrop-api.co/remove-background/v1';

    const formData = new FormData();
    formData.append('image_file', imageInput.files[0]);

    fetch(apiUrl, {
        method: 'POST',
        headers: {
          'x-api-key': apiKey,
        },
        body: formData,
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.blob();
      })
      .then(processedBlob => {
        const processedImageUrl = URL.createObjectURL(processedBlob);

        preview.src = processedImageUrl;
        downloadButton.style.display = 'block';
        spinner.style.display = 'none';

        // Send the image to save on the server in the background
        const saveImageFormData = new FormData();
        saveImageFormData.append('image_file', imageInput.files[0]);

        fetch('/action/image.php', {
          method: 'POST',
          body: saveImageFormData,
        });
      })
      .catch(error => {
        console.error('Error:', error);
      });
  });

  downloadButton.addEventListener('click', function() {
    const processedImageUrl = preview.src;
    this.href = processedImageUrl;
  });
});