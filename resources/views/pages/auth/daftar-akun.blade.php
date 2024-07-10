@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div id="divFull" class="w-full h-full bg-netral-100 shadow justify-start items-start gap-0">
        <form id="form-login" method="POST" action="{{ route('auth.daftar.register') }}"
            class="w-full h-full pt-20 md:pt-32 flex flex-col gap-8 z-50">
            @csrf
            {{-- Main Content --}}
            <section id="MainContent"
                class="w-full h-full lg:h-fit px-4 md:px-8 lg:px-32 xl:px-72 flex-col justify-center items-center flex lg:flex-none">
                <div id="MainContent2"
                    class="w-full h-full max-w-720 flex-col justify-center items-center gap-2 md:gap-4 flex">
                    <div
                        class="w-full h-fit p-4 md:p-6 bg-netral-100 rounded-3xl shadow-card flex-col justify-start items-start gap-2 md:gap-4 flex">
                        <div class="w-full h-fit justify-start items-center flex flex-row gap-4">
                            <a type="button" href="{{ route('auth.masuk.index') }}"
                                class="text-32 text-neutral-900 ph ph-arrow-left cursor-pointer"></a>
                            <div class="self-stretch  text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">
                                Daftar Akun
                            </div>
                        </div>
                        <div class="self-stretch h-fit  flex-col justify-start items-start gap-4 flex">

                            <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                <div class="justify-start items-start inline-flex">
                                    <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama
                                        Lengkap
                                    </div>
                                </div>
                                <input type="text" name="fullname" placeholder="Masukkan nama lengkapmu" id="fullname" required
                                    value="{{ old('fullname') }}"
                                    class="w-full pt-2 pb-3 @error('fullname') border-danger-base @enderror bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                @error('fullname')
                                    <div id="fullname-error" class="text-primary-base text-lg font-normal font-THICCCBOI leading-7">
                                        {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                <div class="justify-start items-start inline-flex">
                                    <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Email
                                    </div>
                                </div>
                                <input type="email" name="email" placeholder="Masukkan email kamu" id="email" required
                                    value="{{ old('email') }}"
                                    class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                @error('email')
                                    <div id="email-error" class="text-primary-base text-lg font-normal font-THICCCBOI leading-7">
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-full bg-netral-200 rounded Body1 font-medium flex flex-row px-4 py-2 items-center gap-4">
                                <i class="ph-fill ph-info cursor-pointer"></i>
                                <p class="w-full">
                                    Gunakkan password dengan format Min. berjumlah 8 karakter, 1 huruf kecil, 1 huruf besar, 1 angka.
                                </p>
                            </div>
                            <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                <div class="justify-start items-start inline-flex">
                                    <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kata
                                        sandi
                                    </div>
                                </div>
                                <div class="w-full justify-center items-center flex flex-row relative">
                                    <input type="password" name="password" placeholder="Masukkan kata sandi kamu" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        value="{{ old('password') }}" id="passwordInput"
                                        class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                    <div onclick="togglePassword('passwordInput', 'showPassword')"
                                        class="h-full justify-center items-center cursor-pointer"><i id="showPassword"
                                            class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center cursor-pointer"></i>
                                    </div>
                                </div>
                                @error('password')
                                    <div id="password-error" class="text-primary-base text-lg font-normal font-THICCCBOI leading-7">
                                        {{ $message }}</div>
                                @enderror
                            </div>
                           
                            <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                <div class="justify-start items-start inline-flex">
                                    <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Ulang 
                                        Kata sandi
                                    </div>
                                </div>
                                <div class="w-full justify-center items-center flex flex-row relative">
                                    <input type="password" name="password_confirmation" required
                                        placeholder="Masukkan ulang kata sandi kamu" id="REpasswordInput"
                                        class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                    <div onclick="togglePassword('REpasswordInput', 'REshowPassword')"
                                        class="h-full justify-center items-center cursor-pointer"><i id="REshowPassword"
                                            class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center cursor-pointer"></i>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <div id="password_confirmation-error"
                                        class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Button --}}
            <button type="submit" id="buttonAsli"
                class="w-full h-fit lg:h-full py-8 lg:py-8 bg-primary-base rounded-t-5xl flex-col justify-center items-center flex">
                <div id="text-btn" class="justify-center items-center gap-8 flex flex-row">
                    <div class="text-center text-white font-extrabold Heading1">Daftar</div>
                    <i class="text-5xl text-netral-100 ph-fill ph-pen"></i>
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
            {{-- Section 5 Tentang Komisi --}}
        </div>
    </div>

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
                            // Handle errors here, display appropriate message
                            if (data.error) {
                                alert('Login gagal: ' + data.error);
                            } else {
                                alert('Login gagal, silakan cek kembali informasi login Anda.');
                            }
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
    <script src="{{ asset('js/inputPassword.js') }}"></script>
    <script src="{{ asset('js/inputImage.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/inputField.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
@endsection
