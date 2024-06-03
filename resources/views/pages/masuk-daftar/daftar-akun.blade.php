@extends('layouts.main')
@section('container')
<div class="bg-netral-100 w-full h-screen relative">
    <div id="divFull" class="w-screen h-screen bg-netral-100 shadow justify-start items-start absolute z-50 inline-flex flex-col">
        <div id="navbar" class="w-full h-fit">
            @include('partials.navbar-login')
        </div>
    
        {{-- Main Content --}} <div id="MainContent" class="w-full h-full self-stretch px-560 flex-col justify-center items-center gap-8 inline-flex">
            <div id="MainContent2" class="w-full h-fit max-w-1480 grow shrink basis-0 py-12 flex-col justify-center items-center gap-4 flex">
                <div class="w-full h-fit p-8 bg-netral-100 rounded-3xl shadow-card flex-col justify-start items-start gap-5 flex">
                    <div class="w-full h-fit justify-start items-center flex flex-row gap-4">
                        <a href="/masuk-akun"><i class="text-32 text-neutral-900 ph-bold ph-arrow-left"></i></a>
                        <div class="self-stretch  text-zinc-900 text-3xl font-extrabold font-['THICCCBOI'] leading-10">
                        Daftar Akun</div>
                    </div>
                    <div class="self-stretch h-fit  flex-col justify-start items-start gap-4 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Lengkap
                                </div>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Masukkan nama lengkapmu" id=""
                                class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Email
                                </div>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Masukkan email kamu" id=""
                                class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kata sandi
                                    </div>
                            </div>
                            <div class="w-full justify-center items-center flex flex-row relative">
                                <input type="password" name="password" placeholder="Masukkan kata sandi kamu" id="password" 
                                class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                <div href="/berita" class="h-full justify-center items-center cursor-pointer"><i  id="showPassword"  class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center cursor-pointer"></i></div>
                            </div>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Konfirmasi kata sandi
                                    </div>
                            </div>
                            <div class="w-full justify-center items-center bg-emerald-300 flex flex-row relative">
                                <input type="password" name="confirmPassword" placeholder="Ketik ulang kata sandi kamu" id="password2"
                                class="w-full pt-2 pb-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                <div href="/berita" class="h-full justify-center items-center cursor-pointer"><i id="showPassword2" class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        {{-- Button --}} <button id="buttonAsli"
            class="w-full h-full py-12 bg-primary-base rounded-tl-4xl rounded-tr-4xl flex-col justify-center items-center flex">
            <div id="text-btn" class="text-center text-white text-5xl font-extrabold font-['THICCCBOI'] leading-10">Daftar</div>
            {{-- Animation Teks 1 --}}
            <div id="text-btn-content" class="w-full h-full hidden justify-center items-center gap-2 flex-col">
                <div id="text-btn-1" class="w-full h-full hidden  justify-center items-center gap-2 flex-col">
                    <div class=" text-center text-white text-9xl font-extrabold font-['THICCCBOI'] leading-10">Welcome To</div>
                </div>
                {{-- Animation Teks 2 --}}
                <div id="text-btn-2" class="w-full h-full hidden  justify-center items-center gap-2 flex-col">
                    <div class=" text-center  text-white text-9xl font-extrabold font-['THICCCBOI'] leading-10">Website Komisi Polimedia</div>
                </div>
            </div>
            <div id="text-skip" class="grow shrink basis-0 bottom-0 hidden justify-end items-end gap-2 flex-col">
                <a  href="/beranda" class="text-center text-white text-opacity-20 text-base font-normal font-['THICCCBOI'] leading-10 ">Lewati, Langsung ke beranda</a>
            </div>
            
        </button>
    </div>
        {{-- Page Beranda --}}    <div id="pageBeranda" class="bg-netral-100 w-full h-full overflow-hidden absolute z-10">
            @include('partials.navbar')
            <div class="w-full h-full flex-col gap-32 mt-24 justify-start items-start z-10 ">
                {{-- Section 1 Headline Berita --}}
                <div class="w-full xl:px-56 px-8 py-8 bg-red-600 justify-center items-center gap-16 flex">
                    <div class="w-full h-96 justify-center relative flex">
                        <div class="w-[1480px] h-96 bg-yellow-300 rounded-3xl justify-center items-center relative">
                            <div class="w-full top-[360px] gap-4 absolute justify-center items-center inline-flex">
                                <div class="w-16 h-2 relative bg-primary-base rounded-2xl"></div>
                                <div class="w-8 h-2 relative bg-rose-100 rounded-2xl"></div>
                                <div class="w-8 h-2 relative bg-rose-100 rounded-2xl"></div>
                                <div class="w-8 h-2 relative bg-rose-100 rounded-2xl"></div>
                            </div>
                            <div class="w-full top-[40%] absolute justify-center items-center gap-[96%] inline-flex">
                                <div class="p-4 bg-white rounded-full shadow justify-start items-start gap-2.5 flex">
                                    <div class="w-8 h-8 relative"></div>
                                </div>
                                <div class="p-4 bg-white rounded-full shadow justify-start items-start gap-2.5 flex">
                                    <div class="w-8 h-8 relative"></div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
                {{-- Section 2 Logo Identitas --}}
                <div class="xl:px-56 px-8 py-12 xl:justify-center justify-start bg-primary-100 items-center gap-12 flex flex-wrap">
                    <img class="w-fit h-32" src="{{ url('img/Logo-Polimedia.png') }}" alt="" />
                    <img class="aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                    <img class="w-fit h-32" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                </div>
                {{-- Section 3 Berita --}}
                <div class="w-full h-fit xl:px-56 px-4 py-16 bg-white flex-col justify-center items-center gap-12 flex flex-wrap">
                    <div class="max-w-[1480px] w-full text-neutral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Berita
                    </div>
                    <div class="max-w-[1480px] w-full flex-col justify-start items-center gap-16 flex">
                        {{-- Card Berita --}}
                        <div class="gap-8 bg-yellow-300 justify-center items-center">
                            <div class="w-full flex max-w-1480 flex-wrap gap-8 bg-red-300 justify-center">
                                <a href="/berita-detail"
                                    class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                                <div
                                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                            </div>
                                        </div>
                                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                            <div
                                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                                29 Juli 2022</div>
                                            <div
                                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                                SBMPN</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                                <div
                                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                            </div>
                                        </div>
                                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                            <div
                                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                                29 Juli 2022</div>
                                            <div
                                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                                SBMPN</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                                <div
                                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                            </div>
                                        </div>
                                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                            <div
                                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                                29 Juli 2022</div>
                                            <div
                                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                                SBMPN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                            <div class="text-center text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lihat
                                Selengkapnya
                            </div>
                        </div>
                        
                    </div>
                </div>
                {{-- Section 4 Tanya Jawab --}}
                <div class="w-full xl:px-56 px-4 py-16 bg-red-300 flex-col justify-center items-center gap-12 flex flex-wrap">
                    <div class="max-w-[1480px] w-full text-neutral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Tanya
                        Jawab</div>
                    <div class="max-w-[1480px] w-full flex-col justify-start items-center gap-16 flex flex-wrap">
                        <div class="self-stretch justify-start items-start gap-8 inline-flex flex-wrap">
                            {{-- Card Tanya Jawab --}}
                            <div
                                class="grow shrink basis-0 h-fit py-6 bg-white rounded-lg shadow flex-col justify-start items-start gap-8 inline-flex">
                                <div class="self-stretch h-fit  px-6 flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                            <i class="text-5xl ph ph-user-circle"></i>
                                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                    <div
                                                        class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                        Muhammad Alif</div>
                                                    <div
                                                        class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                        -</div>
                                                    <div
                                                        class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">
                                                        Mahasiswa</div>
                                                </div>
                                                <div
                                                    class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                                    9 menit lalu</div>
                                            </div>
                                            <i class="text-2xl ph-fill ph-dots-three-outline-vertical"></i>
                                        </div>
                                        <div class="self-stretch h-fit  flex-col justify-start items-start gap-2 flex">
                                            <div
                                                class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                                Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                                bisa mengetahui rinciannya?</div>
                                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                                <a href="#"
                                                    class="px-4 bg-indigo-200 rounded-full justify-start items-center py-1 flex">
                                                    <div
                                                        class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                        Pencairan KIPK</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="grow shrink basis-0 h-fit py-6 bg-white rounded-lg shadow flex-col justify-start items-start gap-8 inline-flex">
                                <div class="self-stretch h-fit  px-6 flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                            <i class="text-5xl ph ph-user-circle"></i>
                                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                    <div
                                                        class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                        Muhammad Alif</div>
                                                    <div
                                                        class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                        -</div>
                                                    <div
                                                        class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">
                                                        Mahasiswa</div>
                                                </div>
                                                <div
                                                    class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                                    9 menit lalu</div>
                                            </div>
                                            <i class="text-2xl ph-fill ph-dots-three-outline-vertical"></i>
                                        </div>
                                        <div class="self-stretch h-fit  flex-col justify-start items-start gap-2 flex">
                                            <div
                                                class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                                Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                                bisa mengetahui rinciannya?</div>
                                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                                <div
                                                    class="px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                                    <div
                                                        class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                        Pencairan KIPK</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="grow shrink basis-0 h-fit py-6 bg-white rounded-lg shadow flex-col justify-start items-start gap-8 inline-flex">
                                <div class="self-stretch h-fit  px-6 flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                            <i class="text-5xl ph ph-user-circle"></i>
                                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                    <div
                                                        class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                        Muhammad Alif</div>
                                                    <div
                                                        class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                        -</div>
                                                    <div
                                                        class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">
                                                        Mahasiswa</div>
                                                </div>
                                                <div
                                                    class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                                    9 menit lalu</div>
                                            </div>
                                            <i class="text-2xl ph-fill ph-dots-three-outline-vertical"></i>
                                        </div>
                                        <div class="self-stretch h-fit  flex-col justify-start items-start gap-2 flex">
                                            <div
                                                class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                                Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                                bisa mengetahui rinciannya?</div>
                                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                                <div
                                                    class="px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                                    <div
                                                        class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                        Pencairan KIPK</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-8 py-3 bg-primary-base rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-white text-2xl font-medium font-THICCCBOI leading-9">Lihat Selengkapnya
                        </div>
                    </div>
                </div>
                @include('partials.content-tentang-komisi')
                @include('partials.footer')
        </div>
    </div>



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

            // Show Password
            const passwordField2 = document.getElementById('password2');
            const togglePasswordButton2 = document.getElementById('showPassword2');

            let passwordVisible2 = false;

            togglePasswordButton2.addEventListener('click', function() {
            if (passwordVisible2) {
                passwordField2.type = 'password'; // Sembunyikan password
                togglePasswordButton2.classList.remove('ph-fill');
                togglePasswordButton2.classList.remove('text-primary-base');
                
            } else {
                passwordField2.type = 'text'; // Tampilkan password
                togglePasswordButton2.classList.add('text-primary-base');
                togglePasswordButton2.classList.add('ph-fill');
            }
            passwordVisible2 = !passwordVisible2;
            });





        // Button
            document.addEventListener("DOMContentLoaded", function() {
                var button = document.getElementById("buttonAsli");

                button.addEventListener("click", function() {
                    // Animasi Opacity to 0
                    document.getElementById("MainContent").classList.add("body-opacity-0");
                    document.getElementById("navbar").classList.add('body-opacity-0');
                    document.getElementById("text-btn").classList.add('body-opacity-0');
                    
                        document.getElementById("text-btn").addEventListener("animationend", function() {
                        // Animasi Opacity to 0
                        // Tampilkan elemen onlybuttonFull dan tambahkan animasi slide-in
                        document.getElementById("MainContent").classList.add('body-height-0');
                        document.getElementById("MainContent2").classList.add('body-height-0');
                        document.getElementById("buttonAsli").classList.add('btn-Rounded');
                        document.getElementById("navbar").classList.add('navbar-height-0');
                        
                            document.getElementById("buttonAsli").addEventListener("animationend", function() {
                            // Menunda penghapusan kelas 'hidden' dari elemen 'text-btn-1' dengan setTimeout
                            setTimeout(function() {
                            document.getElementById("text-btn-content").classList.add('show-btn-1');
                            document.getElementById("text-btn-content").classList.remove('hidden');
                            document.getElementById("text-btn-1").classList.add('show-btn-1',  'flex');
                            document.getElementById("text-btn-1").classList.remove('hidden');
                            document.getElementById("text-skip").classList.add('show-btn-1');
                            document.getElementById("text-skip").classList.remove('hidden');
                            }, 3 * 1000); // Mengatur penundaan selama 1000 milidetik (1 detik), ubah sesuai kebutuhan
                        

                                document.getElementById("text-btn-1").addEventListener("animationend", function() {
                                // Menunda penghapusan kelas 'hidden' dari elemen 'text-btn-1' dengan setTimeout
                                setTimeout(function() {
                                    document.getElementById("text-btn-1").classList.add('hide-btn-1');
                                    document.getElementById("text-skip-1").classList.add('hide-btn-1');
                                }, 1 * 1000); // Mengatur penundaan selama 1000 milidetik (1 detik), ubah sesuai kebutuhan
                            

                                    document.getElementById("text-btn-1").addEventListener("animationend", function() {
                                    // Menunda penghapusan kelas 'hidden' dari elemen 'text-btn-1' dengan setTimeout
                                    setTimeout(function() {
                                        document.getElementById("text-btn-2").classList.add('show-btn-2', 'flex');
                                        document.getElementById("text-btn-2").classList.remove('hidden');
                                    }, 800); // Mengatur penundaan selama 1000 milidetik (1 detik), ubah sesuai kebutuhan
                                

                                    document.getElementById("text-btn-2").addEventListener("animationend", function() {
                                        // Menunda penghapusan kelas 'hidden' dari elemen 'text-btn-1' dengan setTimeout
                                        setTimeout(function() {
                                            document.getElementById("text-btn-2").classList.add('hide-btn-2');
                                            document.getElementById("text-skip").classList.add('hide-btn-2');
                                            document.getElementById("divFull").classList.add('tutup-btn');
                                        }, 3 * 1100); // Mengatur penundaan selama 1000 milidetik (1 detik), ubah sesuai kebutuhan\

                                
                                        document.getElementById("divFull").addEventListener("animationend", function() {
                                            // Setelah animasi selesai terakhir, redirect ke halaman /beranda
                                            setTimeout(function() {
                                            window.location.href = "/beranda";
                                            }, 6 * 900);
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });


// document.getElementById("navbar").addEventListener("animationend", function() {
    
//     // Tutup
//     document.getElementById("navbar").classList.add('hidden');
//     document.getElementById("navbar").classList.add('hidden');

//     // document.getElementById("divButton").classList.remove("hidden");
//     // document.getElementById("onlybuttonFull").classList.add("slide-in");
// });


// document.getElementById("divFull").addEventListener("animationend", function() {
//     // animasi Opacity to 0
//     // Tampilkan elemen onlybuttonFull dan tambahkan animasi slide-in


    
//     document.getElementById("onlybuttonFull").classList.remove("hidden");
//     document.getElementById("onlybuttonFull").classList.add("slide-in");
// });



// document.getElementById("divButton").addEventListener("animationend", function() {
//     // Setelah animasi fade-out berakhir, sembunyikan elemen divButton
//     document.getElementById("divButton").classList.add("hidden");
// });



                        
        </script>
@endsection
