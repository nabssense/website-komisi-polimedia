@extends('layouts.main')
@section('container')
<div id="divFull" class="w-screen h-screen  shadow justify-start items-start absolute z-50 inline-flex flex-col">
    <div id="navbar" class="w-full h-fit">@include('partials.navbar-login')</div>
    <form method="POST" action="{{ route('auth.daftar.register') }}" class="w-full h-full flex flex-col">
        @csrf
        {{-- Main Content --}} <div id="MainContent"
            class="w-full h-full self-stretch px-560 sm:px-16 flex-col justify-center items-center gap-8 inline-flex">
            <div id="MainContent2"
                class="w-full h-fit max-w-1480 grow shrink basis-0 py-12 flex-col justify-center items-center gap-4 flex">
                <div
                    class="w-full h-fit p-8 bg-netral-100 rounded-3xl shadow-card flex-col justify-start items-start gap-5 flex">
                    <div class="w-full h-fit justify-start items-center flex flex-row gap-4">
                        <button type="button" onclick="pageMasuk()"><i class="text-32 text-neutral-900 ph-bold ph-arrow-left"></i></button>
                        <div class="self-stretch  text-zinc-900 text-3xl font-extrabold font-['THICCCBOI'] leading-10">
                            Daftar Akun</div>
                    </div>
                    <div class="self-stretch h-fit  flex-col justify-start items-start gap-4 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Lengkap
                                </div>
                            </div>
                            <input type="text" name="fullname" placeholder="Masukkan nama lengkapmu" id=""
                                class="w-full pt-2 pb-3 @error('fullname') border-danger-base @enderror bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            @error('fullname')
                                <div class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Email
                                </div>
                            </div>
                            <input type="email" name="email" placeholder="Masukkan email kamu" id=""
                                class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            @error('email')
                                <div class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kata sandi
                                </div>
                            </div>
                            <div class="w-full justify-center items-center flex flex-row relative">
                                <input type="password" name="password" placeholder="Masukkan kata sandi kamu" id="password"
                                    class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                <div href="/berita" class="h-full justify-center items-center cursor-pointer"><i
                                        id="showPassword"
                                        class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center cursor-pointer"></i>
                                </div>
                            </div>
                            @error('password')
                                <div class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start hidden">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Edu Program
                                </div>
                            </div>
                            <div class="w-full justify-center items-center flex flex-row relative">
                                <input type="hidden" name="edu_program" placeholder="Masukkan kata sandi kamu" id="edu_program" value="Umum"
                                    class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            </div>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start hidden">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Tipe User
                                </div>
                            </div>
                            <div class="w-full justify-center items-center flex flex-row relative">
                                <input type="hidden" name="tipe-user" placeholder="Masukkan kata sandi kamu" id="tipe-user" value="Umum"
                                    class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            </div>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start hidden">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Status
                                </div>
                            </div>
                            <div class="w-full justify-center items-center flex flex-row relative">
                                <input type="hidden" name="status" placeholder="Masukkan kata sandi kamu" id="status" value="Active"
                                    class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            </div>
                        </div>
                        
                        {{-- <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Konfirmasi
                                    kata sandi
                                </div>
                            </div>
                            <div class="w-full justify-center items-center bg-emerald-300 flex flex-row relative">
                                <input type="password" name="confirmPassword" placeholder="Ketik ulang kata sandi kamu"
                                    id="password2"
                                    class="w-full pt-2 pb-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                <div href="/berita" class="h-full justify-center items-center cursor-pointer"><i
                                        id="showPassword2"
                                        class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                        @enderror --}}
                    </div>

                </div>
            </div>
        </div>

        {{-- Button --}}
        <button id="buttonAsli" type="submit" class="w-full h-full py-12 bg-primary-base rounded-tl-4xl rounded-tr-4xl flex-col justify-center items-center flex">
            <div id="text-btn" class="text-center text-white text-5xl font-extrabold font-['THICCCBOI'] leading-10">Daftar
            </div>
            {{-- Animation Teks 1 --}}
            <div id="text-btn-content" class="w-full h-full hidden justify-center items-center gap-2 flex-col">
                <div id="text-btn-1" class="w-full h-full hidden  justify-center items-center gap-2 flex-col">
                    <div class=" text-center text-white text-9xl font-extrabold font-['THICCCBOI'] leading-10">Welcome To
                    </div>
                </div>
                {{-- Animation Teks 2 --}}
                <div id="text-btn-2" class="w-full h-full hidden  justify-center items-center gap-2 flex-col">
                    <div class=" text-center  text-white text-9xl font-extrabold font-['THICCCBOI'] leading-10">Website
                        Komisi Polimedia</div>
                </div>
            </div>
            <div id="text-skip" class="grow shrink basis-0 bottom-0 hidden justify-end items-end gap-2 flex-col">
                <a href="/beranda"
                    class="text-center text-white text-opacity-20 text-base font-normal font-['THICCCBOI'] leading-10 ">Lewati,
                    Langsung ke beranda</a>
            </div>
        </button>
    </form>
</div>
    {{-- Page Beranda --}}




    {{-- Button --}}
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
                        window.location.href = "{{ route('beranda.index') }}"; // Redirect after animation
                    }, 13500); // Adjust timing based on your animation duration
                } 
                    else {
                    alert('Login gagal'); // Show generic error message if no specific errors returned
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
                document.getElementById("MainContent").classList.add('body-height-0');
                document.getElementById("MainContent2").classList.add('body-height-0');
                document.getElementById("buttonAsli").classList.add('btn-Rounded');
                document.getElementById("navbar").classList.add('navbar-height-0');
    
                document.getElementById("buttonAsli").addEventListener("animationend", function() {
                    setTimeout(function() {
                        document.getElementById("text-btn-content").classList.add('show-btn-1');
                        document.getElementById("text-btn-content").classList.remove('hidden');
                        document.getElementById("text-btn-1").classList.add('show-btn-1', 'flex');
                        document.getElementById("text-btn-1").classList.remove('hidden');
                        document.getElementById("text-skip").classList.add('show-btn-1');
                        document.getElementById("text-skip").classList.remove('hidden');
                    }, 3000);
    
                    document.getElementById("text-btn-1").addEventListener("animationend", function() {
                        setTimeout(function() {
                            document.getElementById("text-btn-1").classList.add('hide-btn-1');
                            document.getElementById("text-skip-1").classList.add('hide-btn-1');
                        }, 1000);
    
                        document.getElementById("text-btn-1").addEventListener("animationend", function() {
                            setTimeout(function() {
                                document.getElementById("text-btn-2").classList.add('show-btn-2', 'flex');
                                document.getElementById("text-btn-2").classList.remove('hidden');
                            }, 800);
    
                            document.getElementById("text-btn-2").addEventListener("animationend", function() {
                                setTimeout(function() {
                                    document.getElementById("text-btn-2").classList.add('hide-btn-2');
                                    document.getElementById("text-skip").classList.add('hide-btn-2');
                                    document.getElementById("divFull").classList.add('tutup-btn');
                                }, 3300);
    
                                document.getElementById("divFull").addEventListener("animationend", function() {
                                    // Setelah animasi selesai, redirect ke halaman beranda
                                    setTimeout(function() {
                                    window.location.href = "{{ route('beranda.index') }}";
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