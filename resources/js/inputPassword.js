function togglePassword(passwordFieldId, toggleButtonId) {
    var passwordField = document.getElementById(passwordFieldId);
    var togglePasswordButton = document.getElementById(toggleButtonId);
    var passwordVisible = passwordField.type === 'text'; // Tentukan status visibility berdasarkan jenis input

    if (passwordVisible) {
        passwordField.type = 'password'; // Sembunyikan password
        togglePasswordButton.classList.remove('ph-fill');
        togglePasswordButton.classList.remove('text-primary-base');
    } else {
        passwordField.type = 'text'; // Tampilkan password
        togglePasswordButton.classList.add('text-primary-base');
        togglePasswordButton.classList.add('ph-fill');
    }
}
togglePassword('passwordInput', 'showPassword');
togglePassword('passwordInput2', 'showPassword2');
togglePassword('REpasswordInput', 'REshowPassword');
togglePassword('REpasswordInput2', 'REshowPassword2');