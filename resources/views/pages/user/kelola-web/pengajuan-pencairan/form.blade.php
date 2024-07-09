@extends('layouts.main')
@section('container')
<div class="w-screen h-screen step p-4 lg:p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex"
    id="step1">
    {{-- Main Content --}}
    <form action="{{ route('kelola.pencairan.store') }}" method="POST" enctype="multipart/form-data"
        class="w-full max-w-960 h-full flex-col justify-start items-start gap-8 inline-flex">
        {{-- 1 --}}
        @csrf
        <div class="h-fit justify-start items-center gap-4 inline-flex">
            <button type="button" onclick="pageBeranda()" class="ph ph-x text-32"></button>
            <div class="w-full text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Form Pengajuan</div>
        </div>
        {{-- Main Content --}}
        <div
            class="w-full h-full justify-start items-start gap-8 flex flex-col flex-1  overflow-x-scroll cursor-pointer scrollbar-hidden ">
            <input type="hidden" name="period_id" value="{{ old('period_id', $periodId) }}">
            {{-- Profil --}}
            <div class="w-full justify-start items-center gap-2 bg-netral-200 p-2 rounded-lg inline-flex relative">
                <div class="flex-none" href="{{ route('user.profile')}}">
                    <img src="{{ strpos($user->profile_picture, 'https://ui-avatars.com') === 0
                        ? $user->profile_picture
                        : Storage::url($user->profile_picture) }}"
                        alt="{{ $user->fullname }}" class="rounded-full w-12 lg:w-20">
                </div>
                <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1"
                    onclick="event.stopPropagation();">
                    <div class="w-full justify-start items-center gap-2 inline-flex ">
                        <div class="justify-start items-center gap-2 flex">
                            <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                {{ $user->fullname }}</p>
                        </div>
                    </div>
                    <p class="w-fit text-neutral-900 font-medium Body2">
                        {{ $user->edu_program }}</p>
                    <p class="w-fit text-neutral-900 font-medium Body2">
                        {{ $user->nim }}</p>
                </div>
            </div>
            <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                <div class="input-text-label">
                    Skema
                </div>
                <!-- Input Field -->
                <select name="scholarship_type" id="" class="input-text">
                    <option class="text-netral-200 " value="">-- Pilih Skema --</option>
                    <option {{ old('scholarship_type') == 'KIPK-PENUH' ? 'selected' : '' }}>
                        KIPK-PENUH
                    </option>
                    <option {{ old('scholarship_type') == 'KIPK-UKT' ? 'selected' : '' }}>
                        KIPK-UKT
                    </option>
                </select>
                @error('scholarship_type')
                    <div id="scholarship_type-error" class="text-danger-base font-normal Heading4">{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="w-fit h-fit flex-col justify-start items-start gap-1 flex">
                <div class="input-text-label">
                    Unggah Surat Pernyataan
                </div>
                <div class="w-full h-fit flex flex-row items-end gap-4">
                    <div class="w-40 h-40 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                        <input name="statement_letter" class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl" type="file" id="image-input-1" accept="file/*">
                        <img id="image-preview-1" src="{{ old('statement_letter') ? asset('storage/' . old('statement_letter')) : (isset($scholarshipFunding) ? asset('storage/' . $scholarshipFunding->statement_letter) : '') }}" class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ isset($scholarshipFunding->statement_letter) ? '' : 'hidden' }}">
                        <i href="#" class="ph ph-plus text-7xl"></i>
                        <i href="#" class="ph-fill ph-file text-7xl hidden"></i>
                        <label for="image-input-1" class="text-neutral-900 Body1 font-medium">Pilih File</label>
                    </div>
                </div>
                <div id="file-name-1" class="w-full flex text-stone-700 font-normal Body1"></div> <!-- Nama file ditampilkan di sini -->
                <div class="w-full flex text-stone-700 font-normal Body1">Ukuran Maksimal 4MB</div>
                @error('statement_letter')
                    <div id="image-error" class="text-danger-base font-normal Heading4">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                <div class="input-text-label">
                    Keikutsertaan Program MBKM
                </div>
                <!-- Input Field -->
                <select name="mbkm_program" id="" class="input-text">
                    <option class="text-netral-200 " value="">-- Pilih Program --</option>
                    <option value="KIPK-PENUH" {{ old('mbkm_program') == 'MSIB' ? 'selected' : '' }}>
                        MSIB
                    </option>
                    <option value="KIPK-PENUH" {{ old('mbkm_program') == 'WKM' ? 'selected' : '' }}>
                        WKM
                    </option>
                    <option value="KIPK-PENUH" {{ old('mbkm_program') == 'Tidak Pernah' ? 'selected' : '' }}>
                        Tidak Pernah
                    </option>
                </select>
                @error('mbkm_program')
                    <div id="mbkm_program-error" class="text-danger-base font-normal Heading4">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="w-full h-fit justify-start items-start gap-4 inline-flex flex-col">
                <div id="toggle-btn1"
                    onclick="toggleSwitch('toggle-btn1', 'toggle-status1', 'toggle-value1', 'toggle-icon-inner1', 'gambar-headline1');"
                    class="w-full h-fit flex-col justify-start items-center inline-flex relative">
                    <div class="w-full input-text-label">Pernah Mengikuti
                            Keaktifan Kegiatan Kemahasiswaan
                    </div>
                    <div class="relative flex flex-row items-center w-full cursor-pointer">
                        <div id="toggle-status1"
                            class="w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            {{ old('student_activity', 'Tidak Pernah') }}</div>
                        <input type="hidden" name="student_activity" id="toggle-value1" value="{{ old('student_activity', 'Tidak Pernah') }}">
                    </div>
                    <div id="toggle-icon" class="absolute right-0 items-center justify-center flex h-full">
                        <i id="toggle-icon-inner1" class="text-32 cursor-pointer {{ old('student_activity') == 'Pernah' ? 'ph-fill ph-toggle-right' : 'ph ph-toggle-left' }}"></i>
                    </div>
                </div>

                <div id="gambar-headline1"
                    class="w-full bg-netral-200 rounded-lg p-4 flex-col justify-start items-start gap-8 {{ old('student_activity') == 'Pernah' ? '' : 'hidden' }}">
                    <div class="w-fit h-fit flex-col justify-start items-start gap-1 flex">
                        <div class="input-text-label">
                            Unggah Sertifikat Atau Surat Tugas Kegiatan Kemahasiswaan
                        </div>
                        <div class="w-full h-fit flex flex-row items-end gap-4">
                            <div class="w-40 h-40 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="activity_certificate" class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl" type="file" id="image-input-2" accept="file/*" >
                                <img id="image-preview-2"  src="{{ old('activity_certificate') ? asset('storage/' . old('activity_certificate')) : (isset($scholarshipFunding) ? asset('storage/' . $scholarshipFunding->activity_certificate) : '') }}"  class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ isset($scholarshipFunding->activity_certificate) || old('activity_certificate') ? '' : 'hidden' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input-2" class="text-neutral-900 Body1 font-medium">Pilih File</label>
                            </div>
                        </div>
                        <div id="file-name-2" class="w-full flex text-stone-700 font-normal Body1"></div> <!-- Nama file ditampilkan di sini -->
                        <div class="w-full flex text-stone-700 font-normal Body1">Ukuran Maksimal 4MB</div>
                        @error('activity_certificate')
                            <div id="image-error" class="text-danger-base font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="w-full h-fit justify-start items-start gap-4 inline-flex flex-col">
                <div id="toggle-btn2"
                    onclick="toggleSwitch('toggle-btn2', 'toggle-status2', 'toggle-value2', 'toggle-icon-inner2', 'gambar-headline2');"
                    class="w-full h-fit flex-col justify-start items-center inline-flex relative">
                    <div class="w-full input-text-label">Pernah Mengikuti Kompetisi
                    </div>
                    <div class="relative flex flex-row items-center w-full cursor-pointer">
                        <div id="toggle-status2"
                            class="w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            {{ old('competition_status', 'Tidak Pernah') }}</div>
                        <input type="hidden" name="competition_status" id="toggle-value2" value="{{ old('competition_status', 'Tidak Pernah') }}">
                    </div>
                    <div id="toggle-icon" class="absolute right-0 items-center justify-center flex h-full">
                        <i id="toggle-icon-inner2" class="text-32 cursor-pointer {{ old('competition_status') == 'Pernah' ? 'ph-fill ph-toggle-right' : 'ph ph-toggle-left' }}"></i>
                    </div>
                </div>

                <div id="gambar-headline2"
                    class="w-full bg-netral-200 rounded-lg p-4 flex-col justify-start items-start gap-8 {{ old('competition_status') == 'Pernah' ? '' : 'hidden' }}">
                    {{-- Full Name --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">
                            Nama Lomba
                        </div>
                        <input type="text" name="competition_name" placeholder="Cth: Nama Lomba/Kompetisi" id="name" class="input-text" value="{{ old('competition_name', '') }}">
                        @error('competition_name')
                            <div class="text-primary-base font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Full Name --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">
                            Tingkat
                        </div>
                        <input type="text" name="competition_level" placeholder="Cth: Internasional, Nasional, Fakultas" id="competition_level" class="input-text" value="{{ old('competition_level', '') }}">
                        @error('competition_level')
                            <div class="text-primary-base font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Full Name --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">
                            Pencapaian
                        </div>
                        <input type="text" name="competition_rank" placeholder="Cth: Juara 1, Juara Harapan, Final Four, 16 Besar, Partisipan Lomba" id="competition_rank" class="input-text" value="{{ old('competition_rank', '') }}">
                        @error('competition_rank')
                            <div class="text-primary-base font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="w-fit h-fit flex-col justify-start items-start gap-1 flex">
                        <div class="input-text-label">
                            Unggah Sertifikat Kompetisi
                        </div>
                        <div class="w-full h-fit flex flex-row items-end gap-4">
                            <div class="w-40 h-40 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="competition_certificate" class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl" type="file" id="image-input-3" accept="file/*">
                                <img id="image-preview-3"src="{{ old('competition_certificate') ? asset('storage/' . old('competition_certificate')) : (isset($scholarshipFunding) ? asset('storage/' . $scholarshipFunding->competition_certificate) : '') }}" class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ isset($scholarshipFunding->competition_certificate) || old('competition_certificate') ? '' : 'hidden' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input-3" class="text-neutral-900 Body1 font-medium">Pilih File</label>
                            </div>
                        </div>
                        <div id="file-name-3" class="w-full flex text-stone-700 font-normal Body1"></div> <!-- Nama file ditampilkan di sini -->
                        <div class="w-full flex text-stone-700 font-normal Body1">Ukuran Maksimal 4MB</div>
                        @error('competition_certificate')
                            <div id="image-error" class="text-danger-base font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

        </div>

        {{-- Button --}}
        <div class="w-full gap-4 flex flex-col">
            <button class="btn-primary w-full" id="next-btn" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('input[type="file"]').forEach((input) => {
            input.addEventListener('change', function (e) {
                const fileName = e.target.files[0].name;
                const fileId = e.target.id.split('-')[2]; // Dapatkan ID input file
                document.getElementById(`file-name-${fileId}`).textContent = fileName;
                const preview = document.getElementById(`image-preview-${fileId}`);
                if (preview) {
                    preview.src = URL.createObjectURL(e.target.files[0]);
                    preview.classList.remove('hidden');
                }
            });
        });
    });

    function toggleSwitch(btnId, statusId, valueId, iconInnerId, headlineId) {
        const btn = document.getElementById(btnId);
        const status = document.getElementById(statusId);
        const value = document.getElementById(valueId);
        const icon = document.getElementById(iconInnerId);
        const headline = document.getElementById(headlineId);
        if (status.textContent.trim() === 'Tidak Pernah') {
            status.textContent = 'Pernah';
            value.value = 'Pernah';
            icon.classList.remove('ph-toggle-left', 'ph');
            icon.classList.add('ph-toggle-right', 'ph-fill');
            headline.classList.remove('hidden');
        } else {
            status.textContent = 'Tidak Pernah';
            value.value = 'Tidak Pernah';
            icon.classList.remove('ph-toggle-right', 'ph-fill');
            icon.classList.add('ph-toggle-left', 'ph');
            headline.classList.add('hidden');
        }
    }

    function pageBeranda() {
        window.location.href = '{{ url('beranda') }}';
    }
</script>
@endsection
