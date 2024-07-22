@extends('layouts.main')

@section('container')
    <div class="w-screen h-screen step p-4 md:p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex"
        id="step1">
        {{-- Main Content --}}
        <form action="{{ route('kelola.akun.update', $user->id) }}" method="POST" enctype="multipart/form-data"
            class="w-full max-w-960 h-full self-stretch flex-col justify-start items-start gap-8 inline-flex">
            {{-- CSRF Token --}}
            @csrf
            @method('PUT')

            {{-- Back Button --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" type="button" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Edit Akun</div>
            </div>

            {{-- Select User Type --}}
            <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                <div class="input-text-label">
                    Tipe Akun
                </div>
                <select name="user_type" id="user_type" class="input-text">
                    <option class="text-netral-200" value="">-- Pilih Tipe Akun --</option>
                    @foreach ($user_types as $type)
                        <option value="{{ $type }}"
                            {{ (old('user_type') ?? $user->user_type) == $type ? 'selected' : '' }}>
                            {{ $type }}
                        </option>
                    @endforeach
                </select>
                @error('user_type')
                    <div class="text-danger-base font-normal Heading4">{{ $message }}</div>
                @enderror
            </div>

            {{-- Image Upload --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0 justify-start items-start gap-8 flex flex-row flex-1">
                <div class="w-full h-fit self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="w-full h-fit flex-col justify-start items-start gap-1 flex">
                        <div class="input-text-label">
                            Gambar
                        </div>
                        <div class="w-fit h-fit rounded-lg justify-start items-center gap-4 flex flex-col">
                            <div
                                class="w-40 aspect-square bg-white px-6 py-4 rounded-full border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="profile_picture" class="w-full h-full z-10 opacity-0 absolute cursor-pointer"
                                    type="file" id="image-input-1" accept="image/*">
                                <img id="image-preview-1"
                                    src="{{ old('profile_picture') ?? (filter_var($user->profile_picture, FILTER_VALIDATE_URL) ? $user->profile_picture : Storage::url($user->profile_picture)) }}"
                                    class="w-full h-full object-cover absolute top-0 bg-white rounded-full {{ filter_var($user->profile_picture, FILTER_VALIDATE_URL) ? 'hidden' : '' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input-1" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                            </div>
                            @error('profile_picture')
                                <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                            @enderror
                            <button id="hapusGambarButton"
                                class="w-full flex btn-secondary-sm px-4 {{ filter_var($user->profile_picture, FILTER_VALIDATE_URL) ? 'hidden' : '' }}"
                                type="button">
                                Hapus Gambar
                            </button>
                            <input type="hidden" id="remove-profile-picture" name="remove_profile_picture" value="0">
                        </div>
                    </div>
                    @error('profile_picture')
                        <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                    @enderror

                    {{-- Full Name --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">Nama Lengkap</div>
                        <input type="text" name="fullname" placeholder="Cth: KOBRA" id="fullname" class="input-text"
                            value="{{ old('fullname') ?? $user->fullname }}">
                        @error('fullname')
                            <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NIM/NIP --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">NIM/NIP</div>
                        <input type="number" name="nim" placeholder="Cth: 9" id="nim" class="input-text"
                            value="{{ old('nim') ?? $user->nim }}">
                        @error('nim')
                            <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Program Studi --}}
                    <div id="prodi" class="self-stretch h-fit flex-col justify-start items-start flex"
                        style="{{ (old('user_type') ?? $user->user_type) == 'Pembina Komisi' ? 'display:none' : '' }}">
                        <div class="input-text-label">Prodi</div>
                        <input type="text" name="edu_program" placeholder="Cth: Teknologi Rekayasa Multimedia"
                            class="input-text" value="{{ old('edu_program') ?? $user->edu_program }}">
                        @error('edu_program')
                            <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div id="email" class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">Email</div>
                        <input type="email" name="email" placeholder="Cth: blabla@email.com" class="input-text"
                            value="{{ old('email') ?? $user->email }}">
                        @error('email')
                            <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                        @error('credentials')
                            <div class="text-primary-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div id="toggle-btn1"
                        class="toggle-btn w-full h-fit flex-col justify-start items-center inline-flex relative">
                        <div class="w-full justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Status</div>
                        </div>
                        <div class="relative flex flex-row items-center w-full cursor-pointer">
                            <div id="toggle-status1"
                                class="toggle-status w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                {{ old('status') ?? $user->status }}
                            </div>
                            <input type="hidden" name="status" id="toggle-value1" class="toggle-value"
                                value="{{ old('status') ?? $user->status }}">
                        </div>
                        <div class="toggle-icon absolute right-0 items-center justify-center flex h-full">
                            <i id="toggle-icon-inner1"
                                class="text-32 {{ old('status') ?? $user->status ? 'ph-fill ph-toggle-right' : 'ph ph-toggle-left' }} cursor-pointer"></i>
                        </div>
                    </div>

                    {{-- Admin --}}
                    <div id="toggle-btn2"
                        class="toggle-btn w-full h-fit flex-col justify-start items-center inline-flex relative">
                        <div class="w-full justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Akses Admin
                            </div>
                        </div>
                        <div class="relative flex flex-row items-center w-full cursor-pointer">
                            <div id="toggle-status2"
                                class="toggle-status w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                {{ old('admin') ?? $user->admin }}
                            </div>
                            <input type="hidden" name="admin" id="toggle-value2" class="toggle-value"
                                value="{{ old('admin') ?? $user->admin }}">
                        </div>
                        <div class="toggle-icon absolute right-0 items-center justify-center flex h-full">
                            <i id="toggle-icon-inner2" class="text-32 {{ old('admin') ?? $user->admin ? 'ph-fill ph-toggle-right' : 'ph ph-toggle-left' }} cursor-pointer"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="h-fit w-full justify-start items-start gap-4 flex">
                <button type="submit" class="btn-primary w-full">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        // Ambil elemen toggle dan tambahkan event listener pada saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn1 = document.getElementById('toggle-btn1');
            const toggleBtn2 = document.getElementById('toggle-btn2');

            toggleBtn1.addEventListener('click', function() {
                toggleSwitch(toggleBtn1);
            });

            toggleBtn2.addEventListener('click', function() {
                toggleSwitch(toggleBtn2);
            });
        });

        // Fungsi untuk melakukan toggle switch
        function toggleSwitch(toggleContainer) {
            const toggleText = toggleContainer.querySelector('.toggle-status');
            const toggleValue = toggleContainer.querySelector('.toggle-value');
            const toggleIcon = toggleContainer.querySelector('.toggle-icon i');

            if (toggleText.textContent.trim() === 'Tidak Aktif') {
                toggleValue.value = 'Aktif';
                toggleText.textContent = 'Aktif';
                toggleIcon.classList.remove('ph-toggle-left', 'ph');
                toggleIcon.classList.add('ph-toggle-right', 'ph-fill');
            } else {
                toggleValue.value = 'Tidak Aktif';
                toggleText.textContent = 'Tidak Aktif';
                toggleIcon.classList.remove('ph-toggle-right', 'ph-fill');
                toggleIcon.classList.add('ph-toggle-left', 'ph');
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('hapusGambarButton').addEventListener('click', function() {
                document.getElementById('remove-profile-picture').value = '1';
                document.getElementById('image-preview-1').src = '';
                document.getElementById('image-preview-1').classList.add('hidden');
            });
        });
    </script>
@endsection
