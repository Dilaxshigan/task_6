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

function confirmation(ev) {
    ev.preventDefault();

    swal({
        title: "Package Successfully Added",
        text: "Details saved",
        icon: "success",
        buttons: true,
        dangerMode: true,
    }).then((willProceed) => {
        if (willProceed) {
            ev.target.closest('form').submit(); // Corrected closest instead of closet
        }
    });
}
