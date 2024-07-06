@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div id="divFull" class="w-full h-full bg-netral-100 shadow justify-start items-start gap-0 relative  ">

        <form id="form-login" method="POST" action="{{ route('auth.masuk.login') }}"
            class="w-full h-full pt-20 md:pt-32 flex flex-col gap-8 z-50">
            @csrf
            {{-- Main Content --}}
            <div id="MainContent"
                class="w-full h-full lg:h-fit px-4 md:px-8 lg:px-32 xl:px-72 flex-col justify-center items-center flex lg:flex-none">
                <div id="MainContent2"
                    class="w-full h-full max-w-1480 flex-col justify-center items-center gap-2 md:gap-4 flex">
                    <div
                        class="w-full h-fit p-4 md:p-6 bg-netral-100 rounded-3xl shadow-card flex-col justify-start items-start gap-2 md:gap-4 flex">
                        <p class="w-full  text-netral-900 font-extrabold Heading1 line-clamp-1">
                            Masukkan akun anda</p>
                        <div class="w-full h-fit  flex-col justify-start items-start  md:gap-4 flex">

                            <div class="self-stretch h-fit flex-col justify-start items-start gap-2 md:gap-4 flex">
                                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                    <div class="input-text-label">
                                        Email
                                    </div>
                                    <input type="email" id="email" name="email" placeholder="Masukkan email kamu"
                                        value="{{ old('email') }}"
                                        class="input-text
                                                    @error('email') border-red-500 @enderror">
                                    @error('email')
                                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}
                                        </div>
                                    @enderror
                                    @error('credentials')
                                        <div id="credentials-error" class="text-red-500 font-normal Heading4">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                    <div class="input-text-label">
                                        Kata sandi
                                    </div>
                                    <div class="w-full justify-center items-center flex flex-row relative">
                                        <input type="password" id="password" name="password"
                                            placeholder="Masukkan kata sandi kamu" id="password"
                                            class="input-text @error('password') border-red-500 @enderror">
                                        <div class="h-full justify-center items-center cursor-pointer">
                                            <i id="showPassword"
                                                class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <a href="/" class="self-stretch h-10 pt-3 flex-col justify-start items-start gap-2 flex">
                                <div class="self-stretch justify-end items-center inline-flex">
                                    <div class="text-right text-zinc-500 font-normal Heading4">
                                        Lupa kata sandi?</div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="self-stretch justify-center items-center gap-2  md:gap-12 flex flex-col md:flex-row">
                        <div class="w-full text-center md:text-start text-netral-900 font-normal Heading4 line-clamp-2">
                            Belum punya akun?</div>
                        <a type="button" href="/daftar-akun"
                            class="btn-tertiary w-fit text-right text-rose-900 font-semibold Heading4">Daftar
                            Dulu
                        </a>
                    </div>
                </div>
            </div>

            {{-- Button --}}
            <button type="submit" id="buttonAsli"
                class="w-full h-fit lg:h-full py-8 lg:py-8 bg-primary-base rounded-t-5xl flex-col justify-center items-center flex">
                <div id="text-btn" class="justify-center items-center gap-8 flex flex-row">
                    <div class="text-center text-white font-extrabold Heading1">Masuk</div>
                    <i class="text-5xl text-netral-100 ph-fill ph-sign-in"></i>
                </div>
                {{-- Animation Teks 1 --}}
                <div id="text-btn-content" class="w-full h-full hidden justify-center items-center gap-2 flex-col">
                    <div id="text-btn-1" class="w-full h-full hidden justify-center items-center gap-2 flex-col">
                        <div class=" text-center text-white text-5xl lg:text-9xl font-extrabold font-THICCCBOI">
                            Welcome To</div>
                    </div>
                    {{-- Animation Teks 2 --}}
                    <div id="text-btn-2" class="w-full h-full hidden justify-center items-center gap-2 flex-col">
                        <div class=" text-center  text-white text-32 lg:text-8xl font-extrabold font-THICCCBOI">
                            Website Komisi Polimedia</div>
                    </div>
                </div>
                <div id="text-skip" class="grow shrink basis-0 bottom-0 hidden justify-end items-end gap-2 flex-col">
                    <a href="/beranda" class="text-center text-white text-opacity-60 font-normal Body1">Lewati,
                        Langsung ke beranda</a>
                </div>
            </button>
        </form>

        {{-- Page Beranda --}}
        <div class="w-full h-full fixed flex flex-col">
            @include('partials.beranda.headline-news-section')
            {{-- Section 2 Logo --}}
            @include('partials.beranda.logo-section')
            {{-- Section 3 Berita --}}
            @include('partials.berita-content')
            {{-- Section 4 Forum Diskusi --}}
            @include('partials.forum-diskusi.index')
        </div>
    </div>



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
        // 
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector('form'); // Select the form element

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form submission

                const formData = new FormData(form);

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json',
                        },
                        body: formData // Send form data as-is (no need for JSON.stringify)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            runButtonAnimation(); // Run animation if login successful
                            setTimeout(() => {
                                window.location.href =
                                "{{ route('beranda.index') }}"; // Redirect after animation
                            }, 13500); // Adjust timing based on your animation duration
                        } else {
                            // Handle validation errors
                            Object.keys(data.errors).forEach(key => {
                                const errorContainer = document.getElementById(`${key}Error`);
                                if (errorContainer) {
                                    errorContainer.textContent = data.errors[key][
                                    0]; // Display first error message
                                }
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });

            });

            function runButtonAnimation() {
                // Implement your button animation logic here
                // This function should handle the animation of your button as per your design
                // Jalankan animasi tombol seperti yang telah Anda definisikan
                document.getElementById("MainContent").classList.add("body-opacity-0");
                document.getElementById("navbar").classList.add('body-opacity-0');
                document.getElementById("text-btn").classList.add('body-opacity-0');


                document.getElementById("text-btn").addEventListener("animationend", function() {
                    document.getElementById("buttonAsli").classList.add('h-0');
                    document.getElementById("form-login").classList.remove('gap-8', 'pt-20', 'md:pt-32');
                    document.getElementById("MainContent").classList.add('body-height-0');
                    document.getElementById("MainContent2").classList.add('body-height-0');
                    document.getElementById("buttonAsli").classList.add('btn-Rounded', 'h-full');
                    document.getElementById("navbar").classList.add('navbar-height-0');

                    document.getElementById("buttonAsli").addEventListener("animationend", function() {
                        setTimeout(function() {
                            document.getElementById("text-btn-content").classList.add(
                                'show-btn-1');
                            document.getElementById("text-btn-content").classList.remove(
                                'hidden');
                            document.getElementById("text-btn-1").classList.add(
                                'show-btn-1', 'flex');
                            document.getElementById("text-btn-1").classList.remove(
                                'hidden');
                            document.getElementById("text-skip").classList.add(
                                'show-btn-1');
                            document.getElementById("text-skip").classList.remove('hidden');
                        }, 2400);

                        document.getElementById("text-btn-1").addEventListener("animationend",
                            function() {
                                setTimeout(function() {
                                    document.getElementById("text-btn-1").classList.add(
                                        'hide-btn-1');
                                    document.getElementById("text-skip-1").classList
                                        .add('hide-btn-1');
                                }, 1200);

                                document.getElementById("text-btn-1").addEventListener(
                                    "animationend",
                                    function() {
                                        setTimeout(function() {
                                            document.getElementById("text-btn-2")
                                                .classList.add('show-btn-2',
                                                    'flex');
                                            document.getElementById("text-btn-2")
                                                .classList.remove('hidden');
                                        }, 800);

                                        document.getElementById("text-btn-2")
                                            .addEventListener("animationend", function() {
                                                setTimeout(function() {
                                                    document.getElementById(
                                                            "text-btn-2")
                                                        .classList.add(
                                                            'hide-btn-2');
                                                    document.getElementById(
                                                            "text-skip")
                                                        .classList.add(
                                                            'hide-btn-2');
                                                    document.getElementById(
                                                            "form-login")
                                                        .classList.add(
                                                            'tutup-btn');
                                                }, 3300);

                                                document.getElementById("form-login")
                                                    .addEventListener("animationend",
                                                        function() {
                                                            // Setelah animasi selesai, redirect ke halaman beranda
                                                            setTimeout(function() {
                                                                window.location
                                                                    .href =
                                                                    "{{ route('beranda.index') }}";
                                                            }, 60 * 900);
                                                        });
                                            });
                                    });
                            });
                    });
                });
            }
        });
    </script>
@endsection
@section('after-script')
    <script src="{{ asset('js/searchField.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/inputField.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
@endsection
