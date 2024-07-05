let mouseDown = false;
let startX, scrollLeft;

const startDragging = (e, slider) => {
    e.preventDefault();
    mouseDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
};

const stopDragging = () => {
    mouseDown = false;
};

const move = (e, slider) => {
    e.preventDefault();
    if (!mouseDown) return;
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2; // Sesuaikan kecepatan scroll
    slider.scrollLeft = scrollLeft - walk;
};

const enableDragging = (slider) => {
    slider.addEventListener('mousedown', (e) => startDragging(e, slider), false);
    slider.addEventListener('mouseup', stopDragging, false);
    slider.addEventListener('mouseleave', stopDragging, false);
    slider.addEventListener('mousemove', (e) => move(e, slider), false);
};

// Terapkan enableDragging ke semua elemen dengan kelas 'parent'
document.querySelectorAll('.parent').forEach(slider => enableDragging(slider));
