@extends('layouts.main')
@include('partials.navbar')
@section('container')
    {{-- Mobile Akun --}}
    <div
        class="w-full h-full py-20 md:py-28 lg:py-32 relative bg-netral-100 rounded-2xl lg:hidden flex flex-col justify-start items-start overflow-clip gap-4 pt-16">
        {{-- <div class="w-full p-4 flex flex-row items-center gap-4">
            <a type="button" href="/" class="text-32 text-neutral-900 ph ph-arrow-left cursor-pointer"></a>
            <div class="text-start text-neutral-900 Heading3 font-extrabold">Kembali</div>
        </div> --}}
        <a href="{{ route('user.profile') }}"
            class="{{ $active === 'User' ? 'bg-netral-200 rounded-lg' : '' }} w-full h-fit  py-4 px-4 border-b bg-netral-100 justify-start items-center gap-4 inline-flex ">
            <img src="{{ strpos(auth()->user()->profile_picture, 'https://ui-avatars.com') === 0 ? auth()->user()->profile_picture : Storage::url($user->profile_picture) }}"
                alt="{{ auth()->user()->fullname }}" class="rounded-full w-12 aspect-square object-cover">
            <div class="w-full h-fit flex-col justify-start items-start inline-flex overflow-hidden">
                <div class="truncate text-left self-stretch text-neutral-900 text-lg font-bold font-THICCCBOI leading-H4">
                    {{ auth()->user()->fullname }}</div>
                <div class="text-left self-stretch text-stone-500 text-base font-normal font-THICCCBOI leading-B1">
                    {{ auth()->user()->user_type }}</div>
            </div>
        </a>
        <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-2">
            @if (auth()->user()->user_type === 'Pembina Komisi' || auth()->user()->user_type === 'Admin')
                <a href="/kelola-website"
                    class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} bg-netral-100 text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-2xl ph ph-kanban"></i>
                    <div class="text-netral-900 font-medium Heading4">Kelola Website
                    </div>
                </a>
            @endif
            <button onclick="togglePopUpShow('keluarAkunAlert')"
                class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                <i class="text-2xl ph ph-sign-out"></i>
                <div class="text-netral-900 font-medium Heading4">Keluar</div>
            </button>

        </div>
    </div>
    {{-- Pop Up --}}
    <div id="keluarAkunAlert"
        class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
        <div class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
            <form action="{{ route('auth.masuk.logout') }}" method="POST" onclick="event.stopPropagation();"
                class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4">
                @csrf
                <div class="self-stretch h-fit flex-col justify-start items-start flex" role="none"
                    onclick="event.stopPropagation();">
                    <div class="w-full Heading4 text-center">Kamu yakin ingin keluar?</div>
                </div>
                <div class="w-full flex flex-row gap-2">
                    <button id="confirm-delete-button" onclick="" type="submit"
                        class="w-full flex btn-secondary-sm px-4">
                        Iya, Keluar
                    </button>
                    <button id="cancel-delete-button" type="button" onclick="togglePopUpShow('keluarAkunAlert')"
                        class="w-full flex btn-primary-sm px-4">
                        Tidak
                    </button>
                </div>
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
    {{-- // Show Password --}}
    <script>
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
    {{--  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function redirectToUserPage() {
                if (window.innerWidth <= 640) { // Tailwind's 'sm' breakpoint is 640px
                    window.location.href = "{{ route('user') }}"; // Redirect to the user page
                } else {
                    window.location.href = "{{ route('user.profile') }}"; // Redirect to the user profile page
                }
            }

            // Optionally, also check screen size on resize
            window.addEventListener('resize', redirectToUserPage);
        });
    </script>
    {{-- toogle --}}
    <script>
        function togglePopUpShow(popupId) {
            var popup = document.getElementById(popupId);
            if (popup.classList.contains('hidden')) {
                popup.classList.remove('hidden');
            } else {

                popup.classList.add('hidden');
            }
        }
    </script>
@endsection
