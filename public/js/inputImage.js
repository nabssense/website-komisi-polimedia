document.addEventListener('DOMContentLoaded', function() {
     document.getElementById('image-input').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            document.getElementById('image-preview').src = URL.createObjectURL(file);
            document.getElementById('image-preview').classList.remove('hidden');
            document.querySelector('.ph-plus').classList.add('hidden');
            document.querySelector('label[for="image-input-1"]').classList.add('hidden');
        }
    });
});

