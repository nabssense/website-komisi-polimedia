@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-soft-base flex-col justify-start items-start gap-8 inline-flex">
    <div class="self-stretch h-14 justify-start items-center gap-6 inline-flex">
        <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
            <a href="/kelola-website" class="text-32 text-netral-800 ph-bold ph-arrow-left"></a>
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola Pengajuan Pencairan</div>
            <button onclick="window.location.href='/kelola-berita-tambah'" class="py-3 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Eksport Excel</div>
                <i class="text-32 text-primary-base ph ph-plus"></i>
            </button>
            <button onclick="window.location.href='/kelola-berita-tambah'" class="py-3 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Atur Periode</div>
                <i class="text-32 text-primary-base ph ph-plus"></i>
            </button>
        </div>
        
    </div>
    <div class="justify-start items-start gap-9 inline-flex">
        <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Pengajuan</div>
            <div class="justify-end items-end gap-4 inline-flex">
                <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">100</div>
            </div>
        </div>
        <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Pengajuan Tahun 24/25</div>
            <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">400 </div>
        </div>
    </div>
    <div class="relative inline-block text-left">
        <button type="button" class="option-button px-6 py-2 bg-white rounded-full border border-neutral-800 justify-start items-center gap-8 flex">
            <div class="justify-start items-center gap-3 flex">
                <i class="text-xl text-netral-900 ph ph-funnel-simple"></i>
                <div class="text-zinc-800 text-lg font-normal font-THICCCBOI leading-7">Tahun 23/24</div>
            </div>
            <i class="text-xl text-netral-900 ph ph-caret-down"></i>
        </button>
        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden" role="menu" aria-orientation="vertical" tabindex="-1">
            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4" role="none">
                    <div class="text-start w-full px-4 py-8 text-2xl font-THICCCBOI text-netral-900">Urutkan</div>
                    <div class="w-full flex flex-col">
                        <button href="#" class="flex flex-row justify-between items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                            Ubah<div class="ph ph-radio-button text-2xl"></div>
                        </button>
                        <button href="#" class="flex flex-row justify-between items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                            Ubah<div class="ph ph-radio-button text-2xl"></div>
                        </button>
                        <button href="#" class="flex flex-row justify-between items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                            Ubah<div class="ph ph-radio-button text-2xl"></div>
                        </button>
                    </div>
                    <div class="w-full flex flex-col p-4 gap-4">
                        <button class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900" role="menuitem">Batalkan</button>
                        <button href="#" class="block w-full text-center px-4 py-3 bg-primary-base rounded-full text-xl font-THICCCBOI text-netral-100 hover:bg-primary-500" role="menuitem">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
        <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
            <thead class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                <tr class="w-full justify-center items-center inline-flex flex-row gap-8">
                    
                    <th class="w-full h-fit grow shrink basis-3/12 justify-start gap-4 items-center inline-flex">
                        <i class="text-32 ph ph-square"></i>
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Info Mahasiswa</div>
                        
                    </th>
                    <th class="w-full grow shrink basis-3/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Info Pengajuan</div>
                    </th>
                    <th class="w-full grow shrink basis-2/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Lomba</div>
                    </th>
                    <th class="w-full grow shrink basis-3/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9"></div>
                    </th>
                </tr>
            </thead>
            <tbody class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-8">
                <tr onclick="window.location.href='/kelola-kabinet-pilih';" class="w-full h-fit flex-row justify-start items-start gap-8 py-8 flex cursor-pointer border-b-2 border-netral-200">
                    <td class="w-full h-full grow shrink basis-3/12 flex flex-row gap-4 justify-start items-start">
                        <div class="justify-start items-center flex">
                            <i class="text-32 ph ph-square"></i>
                        </div>
                        <div class="w-full h-full flex flex-col gap-4">
                            <div class="w-32 h-32 overflow-clip  object-fill bg-netral-100 shadow-card-m p-2 rounded-lg justify-center items-center flex relative">
                                <img class="w-full h-fit aspect-auto object-bottom" src="{{ url('img/Kabinet/KOBRA/Muhammad-Alif.png') }}" />
                            </div>
                            <div class="w-full h-full flex-col justify-center items-center inline-flex gap-2">
                                <div class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-7">Muhammad Nabil Musyaffa</div>
                                <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">20240090</div>
                                <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">085155330033</div>
                                <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">317000000000000</div>
                                <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">JAKARTA</div>
                                <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">Teknologi Rekayasa Multimedia</div>
                            </div>
                        </div>
                        
                    </td>
                    <td class="w-full flex flex-col gap-4 grow shrink basis-3/12">
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Skema</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">KIPK-PENUH</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Unggah Surat Pernyataan</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">https://drive.google.com/open?id=1CWrK0pGHSRennMgHybGpGIdplz4NvWo_</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Keikutsertaan Program MBKM</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">MSIB</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Keaktifan Kegiatan Kemahasiswaan</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">ORMAWA, Kegiatan Pada Unit Lingkungan Polimedia (Event Prodi, UKM, BSO, ODD)</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Unggah Sertifikat atau Surat Tugas Kegiatan Kemahasiswaan</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">https://drive.google.com/open?id=1Z6un42teNSt7Eej_0l4rlqtFl16H7S0s, https://drive.google.com/open?id=1clJGWWEYcSJsCgjYSxq2dVHljI3n_jVu, https://drive.google.com/open?id=1_tqS-vNGW2Thrw8IOD1uoUqWbxHqwa0g</div>
                        </div>
                        
                    </td>
                    <td class="w-full h-full  flex flex-col gap-4 grow shrink basis-2/12 items-start">
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Pernah Mengikuti Kegiatan Lomba dalam 1 Tahun Terakhir</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">PERNAH</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Nama Lomba</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">Lomba MTQ Politeknik</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Tingkat</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">Nasional</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Peringkat</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">JUARA 1</div>
                        </div>
                        <div class="w-full h-full justify-start items-startflex flex-col">
                            <div class="text-netral-500 text-base font-normal font-THICCCBOI leading-7 capitalize">Unggah Sertifikat Lomba</div>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">https://drive.google.com/open?id=1TJc7otOyB-cG_djmesvZAJpFpOYaNOSm</div>
                        </div>
                    </td>
                    <td class="w-full h-full  flex grow shrink basis-3/12 flex-row gap-4 justify-start items-center">
                        <div class="w-full h-fit  justify-end items-center gap-4 flex flex-wrap">
                            <a href="/kelola-kabinet-pilih" class="py-1 rounded-full justify-center items-center gap-2 flex">
                                <div class="text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Ubah</div>
                                <i class="text-2xl text-rose-600 ph ph-pencil-simple"></i>
                            </a>
                            <a href="/kelola-kabinet-pilih" class="py-1 rounded-full justify-center items-center gap-2 flex">
                                <div class="text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Hapus</div>
                                <i class="text-2xl text-rose-600 ph ph-trash-simple"></i>
                            </a>
                            <a href="/kelola-kabinet-pilih" class="py-1 px-6 bg-primary-100 rounded-full justify-center items-center gap-2 flex">
                                <div class="text-center text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Lihat</div>
                                <i class="text-2xl text-netral-900 ph ph-eye"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div class="h-14 px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
            <div class="text-center text-netral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat Selengkapnya</div>
        </div>
    </div>
</div>

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