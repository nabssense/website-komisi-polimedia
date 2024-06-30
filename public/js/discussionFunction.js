function toggleDropdownPopUp(slug) {
    const dropdown = document.getElementById(`menuDropdown-${slug}`);
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        dropdown.classList.add('flex');
        // Add event listener for scrolling
        window.addEventListener('scroll', () => hideDropdown(slug), {
            once: true
        });
    } else {
        dropdown.classList.add('hidden');
        dropdown.classList.remove('flex');
        // Remove event listener for scrolling
        window.removeEventListener('scroll', () => hideDropdown(slug));
    }
}

function hideDropdown(slug) {
    const dropdown = document.getElementById(`menuDropdown-${slug}`);
    dropdown.classList.add('hidden');
    dropdown.classList.remove('flex');
}

function confirmDelete(slug) {
    // Tampilkan pop-up konfirmasi penghapusan
    const alertDelete = document.getElementById(`alertDelete-${slug}`);
    const dropdown = document.getElementById(`menuDropdown-${slug}`);

    if (dropdown) {
        dropdown.classList.add('hidden');
        dropdown.classList.remove('flex');
    }

    alertDelete.classList.remove('hidden');
    alertDelete.classList.add('flex');

    // Tambahkan event listener untuk tombol "Iya" pada pop-up konfirmasi
    const confirmButton = alertDelete.querySelector(`#confirm-delete-button-${slug}`);
    confirmButton.addEventListener('click', () => {
        const deleteForm = document.getElementById(`deleteForm-${slug}`);
        deleteForm.submit();
    });
}

function hideAlertDelete(slug) {
    const alertDelete = document.getElementById(`alertDelete-${slug}`);
    alertDelete.classList.add('hidden');
    alertDelete.classList.remove('flex');
}