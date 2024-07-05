function togglePopUpShow(popupId) {
    var popup = document.getElementById(popupId);
    if (popup.classList.contains('hidden')) {
        popup.classList.remove('hidden');
    } else {

        popup.classList.add('hidden');
    }
}