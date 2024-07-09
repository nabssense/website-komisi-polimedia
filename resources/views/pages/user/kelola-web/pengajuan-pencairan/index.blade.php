@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div class="w-full h-fit py-20 md:py-32 bg-netral-200 flex-col justify-center items-center gap-8 flex">
        <div class="w-full max-w-1480 flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full h-fit px-4 lg:px-0 flex-col lg:flex-row justify-start items-center gap-6 flex">
                <div class="w-full flex lg:flex-row gap-4 justify-center items-center">
                    <a href="/kelola-website" class="text-32 text-netral-800 ph ph-arrow-left"></a>
                    <div
                        class="w-full text-netral-900 Heading2 before:content-['Pencairan'] md:before:content-['Kelola_Pencairan'] font-extrabold">
                    </div>
                </div>
                {{-- Kategori --}}
                <div class="w-full lg:w-fit h-fit flex flex-wrap lg:flex-none gap-2">
                    <div class="w-fit flex flex-row">
                        <button id="menuButton" onclick="toggleDropdownPopUp()" type="button"
                            class="btn-popup option-button">
                            <i class="ph ph-square-half"></i>
                            <div class="">Periode</div>
                            <i class=" w-full text-netral-900 ph ph-caret-down"></i>
                        </button>
                        {{-- Pop Up --}}
                        <div id="menuDropdown"
                            class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                            <div onclick="toggleDropdownPopUp() "
                                class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                <div class="flex flex-col max-w-480 bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
                                    role="none" onclick="; event.stopPropagation(); ">
                                    <div class="w-full flex flex-col gap-4">
                                        <div class="w-full text-start Heading3">Periode</div>
                                        <div class="w-full max-h-480 flex flex-col gap-2 overflow-y-scroll">
                                            <button
                                                class="btn-popup-sm {{ !isset($withCategory) ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}"
                                                onclick="window.location.href='{{ route('kelola.pencairan.index') }}'">
                                                Semua
                                            </button>
                                            @if (!empty($categories))
                                                @foreach ($categories as $category)
                                                    <button
                                                        class="btn-popup-sm {{ isset($withCategory) && $withCategory->slug === $category->slug ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}"
                                                        onclick="location.href='{{ route('kelola.pencairan.kategori', $category->slug) }}'">
                                                        {{ $category->name }}
                                                    </button>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <button class="w-full flex btn-secondary-sm px-4" onclick="toggleDropdownPopUp()">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button onclick="window.location.href='{{ route('export.excel') }}'" class="btn-secondary">
                        Eksport Excel <i class="ph-fill ph-file-xls"></i>
                    </button>
                    <a href="{{ route('kelola.pencairan.periode.index') }}" class="btn-primary">Atur Periode
                        <i class=" ph ph-plus"></i>
                    </a>
                </div>

            </div>
            <div class="w-full justify-start items-start px-4 lg:px-0 gap-4 flex">
                <div class="p-4 bg-primary-100 rounded-2xl flex-col justify-start items-start flex">
                    <div class="w-full text-netral-900 Body1 font-medium">Total Pengajuan</div>
                    <div class="justify-end items-end gap-4 flex">
                        <div class="w-full text-netral-900 Heading2 font-extrabold">
                            {{ $scholarshipFundings->count() }}</div>
                    </div>
                </div>
            </div>
            {{-- Main --}}
            <div class="self-stretch h-fit p-4 bg-white lg:rounded-2xl flex-col justify-start items-center gap-8 flex">
                <!-- Loop through scholarship fundings -->
                <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
                    <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                        <thead
                            class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                            <tr class="w-full justify-center items-center inline-flex flex-row gap-8">
                                <th
                                    class="w-full h-fit grow shrink basis-3/12 justify-start gap-4 items-center inline-flex">
                                    {{-- <i class="text-32 ph ph-square"></i> --}}
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                                        Info
                                        Mahasiswa</div>
                                </th>
                                <th class="w-full grow shrink basis-3/12 flex">
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                                        Info
                                        Pengajuan</div>
                                </th>
                                <th class="w-full grow shrink basis-2/12 flex">
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                                        Lomba
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody
                            class="self-stretch px-4 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-8">
                            @forelse ($scholarshipFundings ?? [] as $funding)
                                <tr
                                    class="w-full h-fit flex-row justify-start items-start gap-8 py-8 flex cursor-pointer border-b-2 border-netral-200">
                                    <td
                                        class="w-fit flex-none h-full overflow-clip flex flex-row gap-4 justify-start items-start">
                                        <div class="w-full h-full flex flex-col gap-4">
                                            <div
                                                class="w-32 h-32 overflow-clip  object-fill bg-netral-100 shadow-card-m p-2 rounded-lg justify-center items-center flex relative">
                                                <!-- Example: Display user's profile picture -->
                                                <img class="w-full h-fit aspect-auto object-bottom"
                                                    src="{{ $funding->user->profile_picture }}" />
                                            </div>
                                            <div
                                                class="w-full h-full flex-col justify-center items-center inline-flex gap-2">
                                                <!-- Example: Display user's name, student ID, etc. -->
                                                <div
                                                    class="w-full text-netral-900 Heading4 font-semibold">
                                                    {{ $funding->user->fullname }}</div>
                                                <div
                                                    class="w-full text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->edu_program }}</div>
                                                <div
                                                    class="w-full text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->nim }}</div>
                                                <div
                                                    class="w-full text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->bank_account }}</div>
                                                <div
                                                    class="w-full text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->address }}</div>
                                                <div
                                                    class="w-full text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->study_program }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-full flex flex-col gap-4 overflow-clip">
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Skema</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->scholarship_type }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Unggah Surat Pernyataan</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->statement_letter }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Keikutsertaan Program MBKM</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->mbkm_program }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Keaktifan Kegiatan Kemahasiswaan</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->student_activity }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Unggah Sertifikat atau Surat Tugas Kegiatan Kemahasiswaan</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->activity_certificate }}</div>
                                        </div>
                                    </td>
                                    <td class="w-full h-full  flex flex-col gap-4 overflow-clip items-start">
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Pernah Mengikuti Kegiatan Lomba dalam 1 Tahun Terakhir</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->competition_status }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Nama Lomba</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->competition_name }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Tingkat</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->competition_level }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Peringkat</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->competition_rank }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="w-full text-netral-500 Heading4 font-normal capitalize">
                                                Unggah Sertifikat Lomba</div>
                                            <div class="w-full text-netral-900 Heading4 font-semibold">
                                                {{ $funding->competition_certificate }}</div>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr
                                    class="self-stretch order-last h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
                                    <!-- Tampilkan pesan jika tidak ada data -->
                                    <td class="w-full text-center text-netral-900 Heading4 font-normal">Tidak ada pengajuan pencairan yang tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <button class="btn-secondary">Lihat
                    Selengkapnya
                </button>
            </div>
        </div>
    </div>
    <script>
        function toggleDropdownPopUp() {
            const dropdown = document.getElementById('menuDropdown');
            dropdown.classList.toggle('hidden');
            dropdown.classList.toggle('flex');

            if (!dropdown.classList.contains('hidden')) {
                // Add event listener for scrolling
                window.addEventListener('scroll', hideDropdownOnScroll, {
                    once: true
                });
            } else {
                // Remove event listener for scrolling
                window.removeEventListener('scroll', hideDropdownOnScroll);
            }
        }

        function hideDropdownOnScroll() {
            const dropdown = document.getElementById('menuDropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('flex');
        }
    </script>
    <script>
        function nextStep() {
            var currentStep = document.querySelector('.step:not(.hidden)');
            currentStep.classList.add('hidden');
            var nextStep = currentStep.nextElementSibling;
            nextStep.classList.remove('hidden');
            nextStep.classList.add('inline-flex');
        }

        function previousStep() {
            var currentStep = document.querySelector('.step:not(.hidden)');
            currentStep.classList.add('hidden');
            var previousStep = currentStep.previousElementSibling;
            previousStep.classList.remove('hidden');
            previousStep.classList.add('inline-flex');
        }
    </script>

    @include('partials.footer')
@endsection
