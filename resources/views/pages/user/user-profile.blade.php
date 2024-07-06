@extends('layouts.main')
@include('partials.navbar')
@section('container')
    @extends('partials.user-navigation')
@section('user-content')
    <div class="w-full h-full col-span-9 p-8 flex-col justify-start items-start gap-8 hidden lg:flex">
        <div class="text-start text-neutral-900 Heading3 font-extrabold">Personal Info</div>
        <div class="w-full h-fit flex flex-row gap-8">
            <div
                class="w-fit h-fit rounded-lg py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 flex flex-col shadow-card-m">
                <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}"
                    alt="{{ auth()->user()->fullname }}" class="w-360 aspect-square object-cover rounded-full">
                <button id="ubahPicProfilButton" onclick="togglePopUpShow('ubahPicProfilPopup')" type="button"
                    class="w-full flex btn-secondary-sm px-4">Ubah</button>
            </div>


            <div class="w-full   h-fit flex-col grid grid-cols-12 grid-rows-1 justify-start items-start gap-2">
                <div class=" grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">Nama Lengkap</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->fullname }}</div>
                    </div>
                    <div class="w-fit py-1 justify-center items-center gap-3 flex">
                        {{-- Ubah --}}
                        <div class="w-fit flex flex-row">
                            <button id="ubahNamaButton" onclick="togglePopUpShow('ubahNamaPopup')" type="button"
                                class="option-button text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Ubah</button>

                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">Email</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->email }}</div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">NIM/NIP</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->nim }}
                        </div>
                    </div>
                </div>

                <div class="h-fit grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">NIK</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->nik }}</div>
                    </div>
                </div>
                <div class="h-fit grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">Nomor Whatsapp</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->number_wa }}</div>
                    </div>
                </div>
                <div class="h-fit grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">Domisili Kampus</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->regional_campus }}</div>
                    </div>
                </div>
                <div class="h-fit grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">Program Pendidikan</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                            {{ auth()->user()->edu_program }}</div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 justify-start items-start gap-2">
                    <div class="col-span-4 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-THICCCBOI leading-7">Kata Sandi</div>
                    </div>
                    <div class="col-span-7 h-fit py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">************************
                        </div>
                    </div>
                    <div class="w-fit py-1 justify-center items-center gap-3 flex">
                        {{-- Ubah --}}
                        <div class="w-fit flex flex-row">
                            <button id="ubahPasswordButton" onclick="togglePopUpShow('ubahPasswordPopup')" type="button"
                                class="option-button text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Ubah</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Ubah Pop Up --}}
<div id="ubahPicProfilPopup" onclick="event.stopPropagation();"
    class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
    <div class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
        <form action="{{ route('user.update.profile-picture') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
            role="none">
            @csrf
            @method('PATCH')
            <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                <div class="input-text-label">
                    Ubah Foto Profil
                </div>
                <div class="w-full h-fit rounded-lg justify-start items-center gap-4 flex flex-col">
                    <div
                        class="w-full aspect-square bg-white px-6 py-4 rounded-full border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                        <input name="profile_picture" class="w-full h-full z-10 opacity-0 absolute cursor-pointer "
                            type="file" id="image-input-1" accept="image/*">
                        <img id="image-preview-1"
                            src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? '' : Storage::url(auth()->user()->profile_picture) }}"
                            class="w-full h-full object-cover absolute top-0 bg-white rounded-full {{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? 'hidden' : '' }}">
                        <i href="#" class="ph ph-plus text-7xl"></i>
                        <label for="image-input-1" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                    </div>
                    @error('profile_picture')
                        <div class="text-red-500 font-normal Heading4">
                            {{ $message }}
                        </div>
                    @enderror
                    <button id="hapusGambarButton"
                        class="w-full flex btn-secondary-sm px-4 {{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? 'hidden' : '' }}"
                        type="button">
                        Hapus Gambar
                    </button>
                    <input type="hidden" id="remove-profile-picture" name="remove_profile_picture" value="0">
                </div>
            </div>
            <div class="w-full flex flex-row gap-2">
                <button class="w-full flex btn-secondary-sm px-4" type="button"
                    onclick="togglePopUpShow('ubahPicProfilPopup')">
                    Tutup
                </button>
                <button class="w-full flex btn-primary-sm px-4" type="submit"
                    onsubmit="togglePopUpShow('ubahPicProfilPopup')">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
{{-- Pop Up --}}
<div id="ubahPasswordPopup"
    class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
    <div class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
        <form action="{{ route('update-password') }}" method="POST" onclick="event.stopPropagation();"
            class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
            role="none">
            @csrf
            <div class="w-full flex flex-col gap-4">
                <div class="w-full text-start Heading3">Ubah Kata Sandi</div>
                <div class="w-full flex flex-wrap gap-2">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">Kata Sandi Baru</div>
                        <div class="w-full justify-center items-center flex flex-row relative">
                            <input type="password" id="passwordInput" name="password"
                                placeholder="Masukkan kata sandi kamu"
                                class="input-text @error('password') border-red-500 @enderror">
                            <div class="h-full justify-center items-center cursor-pointer"
                                onclick="togglePassword('passwordInput', 'showPassword')">
                                <i id="showPassword"
                                    class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="w-full flex flex-wrap gap-2">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">Ulang Kata Sandi Baru</div>
                        <div class="w-full justify-center items-center flex flex-row relative">
                            <input type="password" id="REpasswordInput" name="password_confirmation"
                                placeholder="Masukkan kata sandi kamu"
                                class="input-text @error('password') border-red-500 @enderror">
                            <div class="h-full justify-center items-center cursor-pointer"
                                onclick="togglePassword('REpasswordInput', 'REshowPassword')">
                                <i id="REshowPassword"
                                    class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-row gap-2">
                <button type="button" class="w-full flex btn-secondary-sm px-4"
                    onclick="togglePopUpShow('ubahPasswordPopup')">Tutup</button>
                <button type="submit" class="w-full flex btn-primary-sm px-4">Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- Pop Up --}}
<div id="ubahNamaPopup"
    class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
    <div class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
        <form action="{{ route('update-fullname') }}" method="POST" onclick="event.stopPropagation();"
            class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
            role="none">
            @csrf
            <div class="self-stretch h-fit flex-col justify-start items-start flex">
                <div class="input-text-label">
                    Nama Lengkap
                </div>
                <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama kamu"
                    value="{{ auth()->user()->fullname }}"
                    class="input-text
                            @error('fullname') border-red-500 @enderror">
                @error('fullname')
                    <div id="email-error" class="text-red-500 font-normal Heading4">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="w-full flex flex-row gap-2">
                <button class="w-full flex btn-secondary-sm px-4" type="reset"
                    onclick="togglePopUpShow('ubahNamaPopup')">
                    Tutup
                </button>
                <button class="w-full flex btn-primary-sm px-4" type="submit"
                    onclick="togglePopUpShow('ubahNamaPopup')">
                    Simpan
                </button>
            </div>

        </form>
    </div>
</div>

{{-- MOBILE SCREEN --}}
@section('user-content-mobile')
    {{-- Mobile --}}
    <div class="w-full h-full flex-col justify-start items-start gap-4 px-4 py-8 flex lg:hidden">
        <div class="w-full flex flex-row items-center gap-4">
            <a type="button" href="/user" class="text-32 text-neutral-900 ph ph-arrow-left cursor-pointer"></a>
            <div class="text-start text-neutral-900 Heading2 font-extrabold">Personal Info</div>
        </div>
        <div class="w-full h-fit flex flex-col gap-8">
            <div
                class="w-full h-fit rounded-lg py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 flex flex-col shadow-card-m">
                <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}"
                    alt="{{ auth()->user()->fullname }}" class="w-32 rounded-full aspect-square object-cover">
                <button class="btn-secondary w-full" onclick="togglePopUpShow('ubahPicProfilPopup')">
                    Ubah Gambar
                </button>
            </div>
            {{-- Input Field --}}
            <div class="self-stretch h-fit flex-col justify-start items-start gap-2 md:gap-4 flex">
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            Nama Lengkap
                        </div>
                    </div>
                    <input type="text" onclick="togglePopUpShow('ubahNamaPopup')"
                        placeholder="Masukkan nama lengkap kamu" value="{{ auth()->user()->fullname }}"
                        class="input-text ">
                    @error('email')
                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            NIM/NIP
                        </div>
                    </div>
                    <input type="text" disabled placeholder="Masukkan NIM/NIP kamu" value="{{ auth()->user()->nim }}"
                        class="input-text
                               ">
                    @error('email')
                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            NIK
                        </div>
                    </div>
                    <input type="text" disabled placeholder="Masukkan NIK kamu" value="{{ auth()->user()->nik }}"
                        class="input-text
                               ">
                    @error('email')
                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            Nomor Whatsapp
                        </div>
                    </div>
                    <input type="text" disabled placeholder="Masukkan nomor whatsapp kamu"
                        value="{{ auth()->user()->number_wa }}" class="input-text">
                    @error('email')
                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            Email
                        </div>
                    </div>
                    <input type="email" disabled placeholder="Masukkan email kamu" value="{{ auth()->user()->email }}"
                        class="input-text
                               ">
                    @error('email')
                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            Program Pendidikan
                        </div>
                    </div>
                    <input type="text" disabled placeholder="Masukkan program pendidikan kamu"
                        value="{{ auth()->user()->email }}" class="input-text
                               ">
                    @error('email')
                        <div id="email-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>

                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            Kata Sandi Baru
                        </div>
                    </div>
                    <div class="w-full justify-center items-center flex flex-row relative">
                        <input onclick="togglePopUpShow('ubahPasswordPopup')" type="password" id="passwordInput2"
                            name="password_confirmation" placeholder="Masukkan kata sandi kamu" id="password"
                            class=" @error('password') border-red-500 @enderror input-text">
                        <div class="h-full justify-center items-center cursor-pointer"
                            onclick="togglePassword('passwordInput2', 'showPassword2')"><i id="showPassword2"
                                class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 font-normal Body1">
                            Ulang Kata Sandi Baru
                        </div>
                    </div>
                    <div class="w-full justify-center items-center flex flex-row relative">
                        <input onclick="togglePopUpShow('ubahPasswordPopup')" type="password" id="REpasswordInput2"
                            name="password" placeholder="Masukkan kata sandi kamu" id="password"
                            class=" @error('password') border-red-500 @enderror input-text">
                        <div class="h-full justify-center items-center cursor-pointer"
                            onclick="togglePassword('REpasswordInput2', 'showPassword2')"><i id="REshowPassword2"
                                class="py-3 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('hapusGambarButton').addEventListener('click', function() {
            var imageInput = document.getElementById('image-input');
            var imagePreview = document.getElementById('image-preview');
            var hiddenInput = document.getElementById('remove-profile-picture');

            imageInput.value = ''; // Clear the file input
            imagePreview.src = ''; // Clear the image preview
            imagePreview.classList.add('hidden'); // Hide the image preview
            hiddenInput.value = '1'; // Set hidden input value to indicate image removal
        });
    </script>
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
    <script>
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                const imgPreviewId = this.getAttribute('id').replace('image-input-',
                ''); // Get unique ID suffix
                const imgPreview = document.querySelector('#image-preview-' + imgPreviewId);
                const file = this.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imgPreview.src = e.target.result;
                        imgPreview.classList.remove('hidden');
                    }
                    reader.readAsDataURL(file);
                } else {
                    imgPreview.src = '';
                    imgPreview.classList.add('hidden');
                }
            });

            input.addEventListener('click', function() {
                if (this.value) {
                    this.value = null; // Reset input value to allow the same file to be selected again
                    const imgPreviewId = this.getAttribute('id').replace('image-input-',
                    ''); // Get unique ID suffix
                    const imgPreview = document.querySelector('#image-preview-' + imgPreviewId);
                    imgPreview.src = '';
                    imgPreview.classList.add('hidden');
                }
            });
        });
    </script>
    <script src="{{ asset('js/inputPassword.js') }}"></script>

@endsection
