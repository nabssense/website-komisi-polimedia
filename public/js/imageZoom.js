function openZoom(id) {
    const overlay = document.getElementById(`overlay-${id}`);
    if (overlay) {
        overlay.style.opacity = '1';
        overlay.style.pointerEvents = 'auto';
    }
}

function closeZoom(id) {
    const overlay = document.getElementById(`overlay-${id}`);
    if (overlay) {
        overlay.style.opacity = '0';
        overlay.style.pointerEvents = 'none';
    }
}