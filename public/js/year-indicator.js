document.addEventListener("DOMContentLoaded", function() {
    const prevBtn = document.querySelector('#prev-btn');
    const nextBtn = document.querySelector('#next-btn');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const yearIndicators = document.querySelectorAll('.year-indicator');
    let currentIndex = 0;

    function showCarouselItem(index) {
        carouselItems.forEach((item, i) => {
            if (i === index) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
        updateYearIndicators(index);
    }

    function showPrevItem() {
        if (currentIndex > 0) {
            currentIndex--;
            showCarouselItem(currentIndex);
            updateNavButtons();
        }
    }

    function showNextItem() {
        if (currentIndex < carouselItems.length - 1) {
            currentIndex++;
            showCarouselItem(currentIndex);
            updateNavButtons();
        }
    }

    function updateNavButtons() {
        if (currentIndex === 0) {
            prevBtn.classList.add('disabled', 'opacity-10');
        } else {
            prevBtn.classList.remove('disabled', 'opacity-10');
        }

        if (currentIndex === carouselItems.length - 1) {
            nextBtn.classList.add('disabled', 'opacity-10');
        } else {
            nextBtn.classList.remove('disabled', 'opacity-10');
        }
    }

    function updateYearIndicators(index) {
        // Mengambil penanda tahun yang sesuai dengan indeks carousel
        const currentYearIndicator = yearIndicators[index];
        
        // Menghapus kelas 'active' dari semua penanda tahun
        yearIndicators.forEach(indicator => {
            indicator.classList.add('hidden');
        });
        
        // Menambahkan kelas 'active' hanya pada penanda tahun yang sesuai
        currentYearIndicator.classList.remove('hidden');
        }
        function updateYearIndicators(index) {
            yearIndicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.remove('hidden');
                } else {
                    indicator.classList.add('hidden');
                }
            });
        }

        prevBtn.addEventListener('click', showPrevItem);
        nextBtn.addEventListener('click', showNextItem);

        showCarouselItem(currentIndex);
        updateNavButtons();
    });