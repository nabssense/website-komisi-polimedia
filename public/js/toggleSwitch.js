var toggleButton = document.getElementById('toggle-button');
var toggleText = document.getElementById('toggle-text');
var toggleIcon = document.getElementById('toggle-icon-inner');
var gambarHeadline = document.getElementById('gambar-headline');

toggleButton.addEventListener('click', function() {
    if (toggleText.textContent === 'Tidak Aktif') {
        toggleText.textContent = 'Aktif';
        toggleIcon.classList.remove('ph', 'ph-toggle-left');
        toggleIcon.classList.add('ph-fill', 'ph-toggle-right');
        gambarHeadline.classList.remove('hidden');
        gambarHeadline.classList.add('flex');
    } else {
        toggleText.textContent = 'Tidak Aktif';
        toggleIcon.classList.remove('ph-fill','ph-toggle-right');
        toggleIcon.classList.add('ph', 'ph-toggle-left');
        gambarHeadline.classList.add('hidden');
        gambarHeadline.classList.remove('flex');
    }
});



  // Show Toggle Headline



     // Show Toggle Only
    //  var toggleButtonOnly = document.getElementById('toggle-button-only');
    //  var toggleTextOnly = document.getElementById('toggle-text-only');
    //  var toggleIconOnly = document.getElementById('toggle-icon-inner-only');
   
    //  toggleButtonOnly.addEventListener('click', function() {
    //      if (toggleTextOnly.textContent === 'Tidak Aktif') {
    //          toggleTextOnly.textContent = 'Aktif';
    //          toggleIconOnly.classList.remove('ph', 'ph-toggle-left');
    //          toggleIconOnly.classList.add('ph-fill', 'ph-toggle-right');
             
    //      } else {
    //          toggleTextOnly.textContent = 'Tidak Aktif';
    //          toggleIconOnly.classList.remove('ph-fill','ph-toggle-right');
    //          toggleIconOnly.classList.add('ph', 'ph-toggle-left');
             
    //      }
    //  });