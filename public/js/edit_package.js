function getImage(input, previewId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            // Set the image preview
            var preview = document.getElementById(previewId);
            preview.src = e.target.result;
            preview.style.display = 'block';  // Show the image preview
        };
        reader.readAsDataURL(input.files[0]);  // Read the file as a Data URL
    }
}