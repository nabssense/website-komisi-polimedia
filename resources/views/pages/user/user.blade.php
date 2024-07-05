@extends('layouts.main')
@include('partials.navbar')
@section('container')
    {{-- Mobile Akun --}}
    <div
        class="w-full h-full p-4 relative bg-netral-100 rounded-2xl lg:hidden flex flex-col justify-start items-start overflow-clip gap-4 pt-16">
        <a href="{{ route('user.profile')}}"
            class="{{ $active === 'User' ? 'bg-netral-200 rounded-lg' : '' }} w-full h-fit  py-4 px-4 border-b bg-netral-100 justify-start items-center gap-4 inline-flex ">
            <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}"
                alt="{{ auth()->user()->fullname }}" class="rounded-full w-12">
            <div class="w-full h-fit flex-col justify-start items-start inline-flex overflow-hidden">
                <div class="truncate text-left self-stretch text-neutral-900 text-lg font-bold font-THICCCBOI leading-H4">
                    {{ auth()->user()->fullname }}</div>
                <div class="text-left self-stretch text-stone-500 text-base font-normal font-THICCCBOI leading-B1">
                    {{ auth()->user()->user_type }}</div>
            </div>
        </a>
        <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-2">
            @if (auth()->user()->user_type === 'Mahasiswa')
                <a href="/kelola-website"
                    class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} bg-netral-100 text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-2xl ph ph-kanban"></i>
                    <div class="text-netral-900 font-medium Heading4">Kelola Website
                    </div>
                </a>
            @endif
            <form action="{{ route('auth.masuk.logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit"
                    class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-2xl ph ph-sign-out"></i>
                    <div class="text-netral-900 font-medium Heading4">Keluar</div>
                </button>
            </form>
        </div>
    </div>
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
                } else {
                    pageUserProfile(); // Redirect to the user profile page
                }
            }

            // Optionally, also check screen size on resize
            window.addEventListener('resize', redirectToUserPage);
        });
    </script>
@endsection
