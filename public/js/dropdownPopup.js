// Fungsi Option Card

const optionButtons = document.querySelectorAll('.option-button');

// Loop melalui setiap tombol opsi dan tambahkan event listener
optionButtons.forEach(function(optionButton) {
    optionButton.addEventListener('click', function () {
        // Dapatkan menu terkait
        const optionMenu = this.nextElementSibling;
        // Toggle tampilan menu
        optionMenu.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    });

    // Ambil tombol tutup terkait
    const closeButton = optionButton.nextElementSibling.querySelector('.close-button');
    if (closeButton) {
        // Tambahkan event listener untuk tombol tutup
        closeButton.addEventListener('click', function () {
            // Dapatkan menu terkait
            const optionMenu = this.parentNode.parentNode.parentNode.parentNode;
            // Sembunyikan menu
            optionMenu.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }

    // Ambil tombol tutup terkait untuk closeButtonBg
    const closeButtonBg = optionButton.nextElementSibling.querySelector('.close-button-bg');
    if (closeButtonBg) {
        // Tambahkan event listener untuk tombol tutup closeButtonBg
        closeButtonBg.addEventListener('click', function () {
            // Dapatkan menu terkait
            const optionMenuBg = this.parentNode;
            // Sembunyikan menu
            optionMenuBg.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }
});
