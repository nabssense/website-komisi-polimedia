function openZoom(index) {
    const overlay = document.getElementById(`overlay-${index}`);
    overlay.classList.add('opacity-100', 'pointer-events-auto');
    disableBackgroundInteraction(true);
}

function closeZoom(index) {
    const overlay = document.getElementById(`overlay-${index}`);
    overlay.classList.remove('opacity-100', 'pointer-events-auto');
    disableBackgroundInteraction(false);
}

function disableBackgroundInteraction(disable) {
    const backgroundElements = document.querySelectorAll('body > *:not(#overlay-*)');
    backgroundElements.forEach(el => {
        if (disable) {
            el.classList.add('pointer-events-none');
        } else {
            el.classList.remove('pointer-events-none');
        }
    });
}
