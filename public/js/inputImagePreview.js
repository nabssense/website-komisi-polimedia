document.querySelectorAll('input[type="file"]').forEach(input => {
    input.addEventListener('change', function() {
        const imgPreviewId = this.getAttribute('id').replace('image-input-', ''); // Get unique ID suffix
        const imgPreview = document.querySelector('#image-preview-' + imgPreviewId);
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            imgPreview.src = '';
            imgPreview.classList.add('hidden');
        }
    });
    
    input.addEventListener('click', function() {
        if (this.value) {
            this.value = null;  // Reset input value to allow the same file to be selected again
            const imgPreviewId = this.getAttribute('id').replace('image-input-', ''); // Get unique ID suffix
            const imgPreview = document.querySelector('#image-preview-' + imgPreviewId);
            imgPreview.src = '';
            imgPreview.classList.add('hidden');
        }
    });
});
