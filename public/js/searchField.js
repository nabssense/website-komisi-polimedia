document.addEventListener("DOMContentLoaded", function () {
    toggleClearButton(); // Check initial value when the page loads
});

function toggleClearButton() {
    var searchText = document.getElementById('searchText');
    var clearButton = document.getElementById('clearButton');
    if (searchText.value) {
        clearButton.classList.remove('hidden');
    } else {
        clearButton.classList.add('hidden');
    }
}

function clearSearchText() {
    var searchText = document.getElementById('searchText');
    var clearButton = document.getElementById('clearButton');
    searchText.value = '';
    clearButton.classList.add('hidden');
    searchText.focus(); // Optional: refocus on the input field
}
