document.querySelector('#image-input').addEventListener('change', function() {
    const imgPreview = document.querySelector('#image-preview');
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

document.querySelector('#image-input').addEventListener('click', function() {
    if (this.value) {
        this.value = null;  // Reset input value to allow the same file to be selected again
        const imgPreview = document.querySelector('#image-preview');
        imgPreview.src = '';
        imgPreview.classList.add('hidden');
    }
});
