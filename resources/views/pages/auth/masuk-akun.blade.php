@extends('layouts.main')
@section('container')
        <div id="divFull" class="w-screen h-screen shadow justify-start items-start absolute z-50 inline-flex flex-col">
            <div id="navbar" class="w-full h-fit">@include('partials.navbar-login')</div>
            
            <form method="POST" action="{{ route('auth.masuk.login') }}" class="w-full h-full flex flex-col">
                @csrf
                {{-- Main Content --}} 
                <div id="MainContent" class="w-full h-fit self-stretch px-560 sm:px-16 flex-col justify-center items-center gap-8 inline-flex">
                    <div id="MainContent2" class="w-full h-fit max-w-1480 grow shrink basis-0 py-12 flex-col justify-center items-center gap-4 flex">
                        <div class="w-full h-fit p-8 bg-netral-100 rounded-3xl shadow-card flex-col justify-start items-start gap-5 flex">
                            <div class="self-stretch  text-zinc-900 text-3xl font-extrabold font-['THICCCBOI'] leading-10">
                                Masukkan akun anda</div>
                            <div class="self-stretch h-fit  flex-col justify-start items-start gap-8 flex">

                                <div class="self-stretch h-fit pt-3 flex-col justify-start items-start gap-4 flex">
                                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                        <div class="justify-start items-start inline-flex">
                                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                                Email
                                            </div>
                                        </div>
                                        <input type="email" id="email" name="email" placeholder="Masukkan email kamu"
                                            value="{{ old('email') }}" 
                                            class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-netral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7
                                                    @error('email') border-red-500 @enderror @error('credentials') border-red-500 @enderror">
                                        @error('email')
                                            <div id="email-error" class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                                        @enderror
                                 @error('credentials')
                                     <div id="credentials-error" class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                                 @enderror
                                    </div>
                                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                        <div class="justify-start items-start inline-flex">
                                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                                Kata
                                                sandi
                                            </div>
                                        </div>
                                        <div class="w-full justify-center items-center flex flex-row relative">
                                            <input type="password" id="password" name="password" placeholder="Masukkan kata sandi kamu" id="password" 
                                                class="w-full pt-2 pb-3 @error('password') border-red-500 @enderror bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-netral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                            <div href="/berita" class="h-full justify-center items-center cursor-pointer"><i
                                                    id="showPassword"
                                                    class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                                            </div>
                                        </div>
                                        @error('password')
                                            <div class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <a href="/"
                                    class="self-stretch h-10 pt-3 flex-col justify-start items-start gap-2 flex">
                                    <div class="self-stretch justify-end items-center inline-flex">
                                        <div
                                            class="text-right text-zinc-500 text-lg font-normal font-['THICCCBOI'] leading-7">
                                            Lupa kata sandi?</div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="self-stretch px-8 justify-center items-center gap-12 inline-flex">
                            <div class="grow shrink basis-0 text-zinc-900 text-lg font-normal font-['THICCCBOI'] leading-7">
                                Kamu
                                calon mahasiswa? dan belum punya akun?</div>
                            <button type="button" onclick="pageDaftar()"
                                class="text-right text-rose-900 text-lg font-semibold font-['THICCCBOI'] leading-7">Daftar
                                Dulu
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <button type="submit" id="buttonAsli" class="w-full h-full py-12 bg-primary-base rounded-t-5xl flex-col justify-center items-center flex">
                    <div id="text-btn"
                        class="text-center text-white text-5xl font-extrabold font-['THICCCBOI'] leading-10">Masuk</div>
                    {{-- Animation Teks 1 --}}
                    <div id="text-btn-content" class="w-full h-full hidden justify-center items-center gap-2 flex-col">
                        <div id="text-btn-1" class="w-full h-full hidden  justify-center items-center gap-2 flex-col">
                            <div class=" text-center text-white text-9xl font-extrabold font-['THICCCBOI'] leading-10">
                                Welcome To</div>
                        </div>
                        {{-- Animation Teks 2 --}}
                        <div id="text-btn-2" class="w-full h-full hidden  justify-center items-center gap-2 flex-col">
                            <div class=" text-center  text-white text-9xl font-extrabold font-['THICCCBOI'] leading-10">
                                Website Komisi Polimedia</div>
                        </div>
                    </div>
                    <div id="text-skip" class="grow shrink basis-0 bottom-0 hidden justify-end items-end gap-2 flex-col">
                        <a href="/beranda"
                            class="text-center text-white text-opacity-20 text-base font-normal font-['THICCCBOI'] leading-10 ">Lewati,
                            Langsung ke beranda</a>
                    </div>
                </button>
            </form>
            {{-- Page Beranda --}}
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
                            window.location.href = "{{ route('beranda.index') }}"; // Redirect after animation
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