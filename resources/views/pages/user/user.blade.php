@extends('layouts.main')
@include('partials.navbar')
@section('container')
@include('partials.user-navigation')
{{-- Fungsi Option Card --}}
<script>
    const optionButtons = document.querySelectorAll('.option-button');

    // Loop melalui setiap tombol opsi dan tambahkan event listener
    optionButtons.forEach(function(optionButton) {
        optionButton.addEventListener('click', function() {
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
            closeButton.addEventListener('click', function() {
                // Dapatkan menu terkait
                const optionMenu = this.parentNode.parentNode.parentNode.parentNode.parentNode;
                // Sembunyikan menu
                optionMenu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        }
        // Tambahkan event listener untuk tombol "Batalkan 2"
        document.addEventListener('click', function(event) {
            // Cek apakah yang diklik adalah tombol "Batalkan 2"
            if (event.target.classList.contains('close-button-bg')) {
                // Dapatkan menu terkait dengan tombol "Batalkan 2"
                const optionMenu = event.target.closest('.option-card-menu');
                // Sembunyikan menu
                optionMenu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');

                function pageUserProfile();  
            }
        });
    });
</script>

<script>
    // Show Password
    const passwordField = document.getElementById('password');
    const togglePasswordButton = document.getElementById('showPassword');

    let passwordVisible = false;

    togglePasswordButton.addEventListener('click', function() {
        if (passwordVisible) {
            passwordField.type = 'password'; // Sembunyikan password
            togglePasswordButton.classList.remove('ph-fill');
            togglePasswordButton.classList.remove('text-primary-base');

        } else {
            passwordField.type = 'text'; // Tampilkan password
            togglePasswordButton.classList.add('text-primary-base');
            togglePasswordButton.classList.add('ph-fill');
        }
        passwordVisible = !passwordVisible;
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function redirectToUserPage() {
            if (window.innerWidth <= 640) { // Tailwind's 'sm' breakpoint is 640px
               pageUser(); // Redirect to the user page
            }
            else {
                pageUserProfile(); // Redirect to the user profile page
                }
        }

        // Optionally, also check screen size on resize
        window.addEventListener('resize', redirectToUserPage);
    });
</script>
@endsection