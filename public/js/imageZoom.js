    function openZoom(index) {
        const overlay = document.getElementById(`overlay-${index}`);
        overlay.classList.add('opacity-100', 'pointer-events-auto');
    }

    function closeZoom(index) {
        const overlay = document.getElementById(`overlay-${index}`);
        overlay.classList.remove('opacity-100', 'pointer-events-auto');
    }
