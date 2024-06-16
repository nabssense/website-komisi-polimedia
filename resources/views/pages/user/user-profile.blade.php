@extends('layouts.user-navigation')
@section('user-content')
<div class="w-full h-full col-span-9 p-8 flex-col justify-start items-start gap-8 flex">
    <div class="text-start text-neutral-900 text-2xl font-extrabold font-['THICCCBOI'] leading-9">Personal Info</div>
    <div class="w-full h-fit flex flex-row gap-8">
        <div onclick="()" class="w-fit h-fit rounded-lg py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 flex flex-col shadow-card-m">
            <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}" 
            alt="{{ auth()->user()->fullname }}" class="w-360 rounded-lg">
            <button class="w-full h-full bg-primary-100 rounded-lg px-4 py-2 flex-col justify-center items-center flex gap-1">
                <div class="text-center self-stretch text-netral-900 text-xl font-normal font-['THICCCBOI'] leading-B1">Ubah</div>
            </button>
        </div>
        <div class="w-full   h-fit flex-col grid grid-cols-12 grid-rows-1 justify-start items-start gap-2">
            <div class=" grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Nama Lengkap</div>
                </div>
                <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">
                        {{ auth()->user()->fullname }}</div>
                </div>
                <div class="w-fit py-1 justify-center items-center gap-3 flex">
                    {{-- Pop Up Card --}}
                    <div class="relative inline-block text-left">
                        <button type="button"
                            class="option-button text-center text-rose-600 text-lg font-medium font-['THICCCBOI'] leading-7">Ubah</button>
                        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                            role="menu" aria-orientation="vertical" tabindex="-1">
                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                <div class="flex flex-col bg-netral-100 rounded-2xl w-480 h-fit justify-center items-center overflow-clip"
                                    role="none">
                                    <div
                                        class="text-start w-full  px-4 py-4 text-2xl font-bold font-THICCCBOI text-netral-900">
                                        Ubah</div>
                                    <form action="" method="POST" class="w-full flex flex-col px-4 gap-8">
                                        @csrf
                                        @method('PUT')
                                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                            <div class="justify-start items-start inline-flex">
                                                <div
                                                    class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                                    Nama Lengkap
                                                </div>
                                            </div>
                                            <input type="text" name="fullname" placeholder="Masukkan nama lengkapmu"
                                                id="" value="{{  auth()->user()->fullname }}"
                                                class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                        </div>
                                        <div class="w-full flex flex-col gap-4">
                                            <button type="button"
                                                class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900"
                                                role="menuitem">Batalkan</button>
                                            <button type="submit" href="#"
                                                class="block w-full text-center px-4 py-3 bg-primary-base rounded-full text-xl font-THICCCBOI text-netral-100 hover:bg-primary-500"
                                                role="menuitem">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">NIM/NIP</div>
                </div>
                <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">{{ auth()->user()->nim }}
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Email</div>
                </div>
                <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">
                        {{ auth()->user()->email }}</div>
                </div>
            </div>
            <div class="h-fit grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Program Pendidikan</div>
                </div>
                <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">
                        {{ auth()->user()->edu_program }}</div>
                </div>
            </div>
            <div class="grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Kata Sandi</div>
                </div>
                <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                    <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">************************
                    </div>
                </div>
                <div class="w-fit py-1 justify-center items-center gap-3 flex">
                    {{-- Pop Up Card --}}
                    <div class="relative inline-block text-left">
                        <button type="button"
                            class="option-button text-center text-rose-600 text-lg font-medium font-['THICCCBOI'] leading-7">Ubah</button>
                        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                            role="menu" aria-orientation="vertical" tabindex="-1">
                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                <div class="flex flex-col bg-netral-100 rounded-2xl w-480 h-fit justify-center items-center overflow-clip"
                                    role="none">
                                    <div
                                        class="text-start w-full px-4 py-4 text-2xl font-bold font-THICCCBOI text-netral-900">
                                        Ubah</div>
                                    <form class="w-full flex flex-col px-4 gap-8">
                                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                                            <div class="justify-start items-start inline-flex">
                                                <div
                                                    class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                                    Kata sandi
                                                </div>
                                            </div>
                                            <div class="w-full justify-center items-center flex flex-row relative">
                                                <input type="password" name="password"
                                                    placeholder="Masukkan kata sandi kamu" id="password"
                                                    class="w-full pt-2 pb-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                                <div href="/berita"
                                                    class="h-full justify-center items-center cursor-pointer"><i
                                                        id="showPassword"
                                                        class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full flex flex-col gap-4">
                                            <button type="button"
                                                class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900"
                                                role="menuitem">Batalkan</button>
                                            <button type="submit" href="#"
                                                class="block w-full text-center px-4 py-3 bg-primary-base rounded-full text-xl font-THICCCBOI text-netral-100 hover:bg-primary-500"
                                                role="menuitem">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection