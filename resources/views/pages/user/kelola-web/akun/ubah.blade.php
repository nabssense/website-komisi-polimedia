@extends('layouts.main')

@section('container')
    <div class="w-screen h-screen step p-4 md:p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex"
        id="step1">
        {{-- Main Content --}}
        <form action="{{ route('kelola.akun.update', $user) }}" method="POST" enctype="multipart/form-data"
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
                                    type="file" id="image-input" accept="image/*">
                                <img id="image-preview"
                                    src="{{ old('profile_picture') ?? (filter_var($user->profile_picture, FILTER_VALIDATE_URL) ? $user->profile_picture : Storage::url($user->profile_picture)) }}"
                                    class="w-full h-full object-cover absolute top-0 bg-white rounded-full {{ filter_var($user->profile_picture, FILTER_VALIDATE_URL) ? 'hidden' : '' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                            </div>
                            @error('profile_picture')
                                <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
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
                        <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror

                    {{-- Full Name --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">Nama Lengkap</div>
                        <input type="text" name="fullname" placeholder="Cth: KOBRA" id="fullname" class="input-text"
                            value="{{ old('fullname') ?? $user->fullname }}">
                        @error('fullname')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NIM/NIP --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">NIM/NIP</div>
                        <input type="number" name="nim" placeholder="Cth: 9" id="nim_nip" class="input-text"
                            value="{{ old('nim') ?? $user->nim }}">
                        @error('nim')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Program Studi --}}
                    <div id="prodi" class="self-stretch h-fit flex-col justify-start items-start flex"
                        style="{{ (old('user_type') ?? $user->user_type) == 'Pembina Komisi' ? 'display:none' : '' }}">
                        <div class="input-text-label">Prodi</div>
                        <input type="text" name="edu_program" placeholder="Cth: Teknologi Rekayasa Multimedia"
                            class="input-text" value="{{ old('edu_program') ?? $user->edu_program }}">
                        @error('edu_program')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div id="email" class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">Email</div>
                        <input type="email" name="email" placeholder="Cth: blabla@email.com" class="input-text"
                            value="{{ old('email') ?? $user->email }}">
                        @error('email')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                        @error('credentials')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="w-full flex flex-row gap-2 justify-center items-end">
                        <div id="password" class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="input-text-label">Password</div>
                            <input type="text" name="password" value="" placeholder="Tidak dapat diubah" readonly
                                class="input-text" disabled>
                            <input type="hidden" name="password" value="K0MIS1KoBr4.">
                        </div>
                        @error('password')
                            <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn-secondary">Reset Katasandi</button>
                    </div>



                    {{-- Status --}}
                    <div id="status" class="self-stretch h-fit flex-col justify-start items-start">
                        <div class="input-text-label">Status</div>
                        <input type="text" name="status" value="Aktif" readonly class="input-text"
                            disabled>
                        <input type="hidden" name="status" value="Aktif">
                    </div>
                    @error('status')
                        <div class="text-red-500 font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="h-fit w-full justify-start items-start gap-4 flex">
                <button type="submit" class="btn-primary w-full">Simpan</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/inputImagePreview.js') }}"></script>
    <script>
        // Script untuk menyembunyikan/menampilkan bidang Prodi berdasarkan pilihan User Type
        document.getElementById('user_type').addEventListener('change', function() {
            var prodiField = document.getElementById('prodi');
            if (this.value === 'Pembina Komisi') {
                prodiField.style.display = 'none';
                prodiField.value = '0';
            } else {
                prodiField.style.display = 'block';
                prodiField.value = '';
            }
        });
    </script>
@endsection
