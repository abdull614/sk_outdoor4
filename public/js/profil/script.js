document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('upload-photo');
    const preview = document.getElementById('preview-image');
    const initials = document.getElementById('initials');

    if (input && preview) {
        input.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // Tampilkan img
                    if (initials) initials.style.display = 'none'; // Sembunyikan inisial
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
