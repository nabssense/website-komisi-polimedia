  // JavaScript to toggle dropdown visibility
  var dropdownButton = document.getElementById('kategori-dropdown');
  dropdownButton.addEventListener('click', function() {
      var kategoriDropdown = document.getElementById('kategori-dropdown');
      var kategoriInput = document.getElementById('kategori-input');
      var isClickInside = kategoriDropdown.contains(event.target) || kategoriInput.contains(event.target);
      if (!isClickInside) {
          kategoriDropdown.classList.add('hidden');
      }
  });

  // JavaScript to handle dropdown item click
  var dropdownItems = document.querySelectorAll('#kategori-dropdown > div > div > div > button');
  dropdownItems.forEach(function(item) {
      item.addEventListener('click', function() {
          var value = item.getAttribute('data-value');
          document.getElementById('kategori-input').value = value;
          document.getElementById('kategori-dropdown').classList.add('hidden');
      });
  });

  // JavaScript to toggle dropdown visibility on input field click
  document.getElementById('kategori-input').addEventListener('click', function() {
      document.getElementById('kategori-dropdown').classList.toggle('hidden');

          // JavaScript to show dropdown when tabbing into input field
      document.getElementById('kategori-input').addEventListener('keydown', function(event) {
          if (event.key === 'Tab') {
              event.preventDefault();
              document.getElementById('kategori-dropdown').classList.remove('hidden');
          }
      });
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