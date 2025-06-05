const input = document.getElementById('upload-photo');
    const preview = document.getElementById('preview-image');

    input.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    function resetPreview() {
        preview.src = "";
        input.value = "";
    }