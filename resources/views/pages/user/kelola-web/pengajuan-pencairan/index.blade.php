@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div class="w-full h-fit px-32 py-32 bg-soft-base flex-col justify-center items-center gap-8 flex">
        <div class="w-full max-w-1480 flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full h-fit  justify-start items-center gap-6 inline-flex">
                <a href="/kelola-website" class="text-32 text-netral-800 ph ph-arrow-left"></a>
                <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola
                    Pengajuan Pencairan</div>
                    {{-- Kategori --}}
                <div class="w-fit flex flex-row">
                    <button id="menuButton" onclick="toggleDropdownPopUp()" type="button" class="btn-popup option-button">
                        <i class="ph ph-square-half"></i>
                        <div class="">Periode</div>
                        <i class=" text-netral-900 ph ph-caret-down"></i>
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
                                    <div class="w-full flex flex-col gap-2 overflow-scroll">
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
            <div class="w-full justify-start items-start gap-9 inline-flex">
                
                
                <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Pengajuan</div>
                    <div class="justify-end items-end gap-4 inline-flex">
                        <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">
                            {{ $scholarshipFundings->count() }}</div>
                    </div>
                </div>
            </div>

            <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
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
                        @forelse ($scholarshipFundings ?? [] as $funding)
                            <tbody
                                class="self-stretch px-4 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-8">
                                <tr
                                    class="w-full h-fit flex-row justify-start items-start gap-8 py-8 flex cursor-pointer border-b-2 border-netral-200">
                                    <td
                                        class="w-full h-full grow shrink basis-3/12 flex flex-row gap-4 justify-start items-start">
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
                                                    class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-7">
                                                    {{ $funding->user->fullname }}</div>
                                                <div
                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->edu_program }}</div>
                                                <div
                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->nim }}</div>
                                                <div
                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->bank_account }}</div>
                                                <div
                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->address }}</div>
                                                <div
                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $funding->user->study_program }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-full flex flex-col gap-4 grow shrink basis-3/12">
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Skema</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->scholarship_type }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Unggah Surat Pernyataan</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->statement_letter }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Keikutsertaan Program MBKM</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->mbkm_program }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Keaktifan Kegiatan Kemahasiswaan</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->student_activity }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Unggah Sertifikat atau Surat Tugas Kegiatan Kemahasiswaan</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->activity_certificate }}</div>
                                        </div>
                                    </td>
                                    <td class="w-full h-full  flex flex-col gap-4 grow shrink basis-2/12 items-start">
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Pernah Mengikuti Kegiatan Lomba dalam 1 Tahun Terakhir</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->competition_status }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Nama Lomba</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->competition_name }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Tingkat</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->competition_level }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Peringkat</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->competition_rank }}</div>
                                        </div>
                                        <div class="w-full h-full justify-start items-startflex flex-col">
                                            <div
                                                class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">
                                                Unggah Sertifikat Lomba</div>
                                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                                {{ $funding->competition_certificate }}</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @empty
                            <div
                                class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
                                <!-- Tampilkan pesan jika tidak ada data -->
                                <p>Tidak ada pengajuan pencairan yang tersedia.</p>
                            </div>
                        @endforelse
                    </table>
                </div>


                <div class="h-14 px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-netral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                        Selengkapnya
                    </div>
                </div>
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
