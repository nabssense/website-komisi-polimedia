@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-soft-base flex-col justify-start items-start gap-8 inline-flex">
    <div class="self-stretch h-14 justify-start items-center gap-6 inline-flex">
        <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
            <a href="/kelola-website" class="text-32 text-netral-800 ph-bold ph-arrow-left"></a>
            <div class="grow shrink basis-0 text-zinc-900 text-3xl font-extrabold font-THICCCBOI leading-10">Daftar Akun</div>
            <div class="py-3 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Tambah Akun</div>
                <i class="text-32 text-primary-base ph ph-plus"></i>
            </div>
        </div>
    </div>
    <div class="justify-start items-start gap-9 inline-flex">
        <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Total Akun Mahasiswa</div>
            <div class="justify-end items-end gap-4 inline-flex">
                <div class="text-zinc-900 text-3xl font-extrabold font-['THICCCBOI'] leading-10">100</div>
            </div>
        </div>
        <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Total Akun Umum</div>
            <div class="text-zinc-900 text-3xl font-extrabold font-['THICCCBOI'] leading-10">400 orang</div>
        </div>
        
    </div>
    <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
        <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
            <thead class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                <tr class="w-full justify-center items-center inline-flex flex-row gap-4">
                    <th class="w-full h-fit grow shrink basis-4/12 justify-start gap-4 items-center inline-flex">
                        <i class="text-32 ph ph-square"></i>
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Akun</div>
                    </th>
                    <th class="w-full grow shrink basis-4/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Email</div>
                    </th>
                    <th class="w-full grow shrink basis-1/12 flex justify-center">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Aktif</div>
                    </th>
                    <th class="w-full grow shrink basis-3/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9"></div>
                    </th>
                </tr>
            </thead>
            <tbody class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                <tr class="w-full h-fit flex-row justify-start items-center gap-4 flex relative">
                    <td class="w-full h-full basis-4/12 flex flex-row gap-4 justify-start items-center">
                        <div class="justify-start items-center flex">
                            <i class="text-32 ph ph-square"></i>
                        </div>
                        <div class="h-20 w-20 overflow-clip  object-fill bg-soft-base rounded-lg justify-center items-end flex relative">
                            <img class="aspect-auto object-bottom" src="{{ url('img/Kabinet/KOBRA/KETUA-WAKIL.png') }}" />
                        </div>
                        <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                            <div class="self-stretch text-zinc-900 text-lg font-semibold font-THICCCBOI leading-7">Putra Irawan</div>
                            <div class="self-stretch text-zinc-900 text-base font-normal font-THICCCBOI leading-normal">Ketua</div>
                            <div class=" text-zinc-900 text-base font-normal font-THICCCBOI leading-normal">Anggota Komisi</div>
                        </div>
                    </td>
                    
                    <td class="w-full h-full flex basis-4/12 overflow-hidden">
                        <p class=" text-zinc-900 text-lg font-normal font-['THICCCBOI'] leading-7 text-wrap">nabilafbilafbilafbilafbilaffa7@gmail.com</p>
                    </td>
                    <td class="w-full flex basis-1/12 justify-center">
                        <i class="text-5xl ph ph-toggle-left"></i>
                    </td>
                    <td class="w-full h-full flex basis-3/12 flex-row gap-4 justify-start items-center">
                        <div class="w-full h-fit justify-end items-center gap-4 flex flex-wrap">
                            <a href="/kelola-kabinet-pilih" class="py-1 rounded-full justify-center items-center gap-2 flex">
                                <div class="text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Ubah</div>
                                <i class="text-2xl text-rose-600 ph ph-pencil-simple"></i>
                            </a>
                            <a href="/kelola-kabinet-pilih" class="py-1 rounded-full justify-center items-center gap-2 flex">
                                <div class="text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Hapus</div>
                                <i class="text-2xl text-rose-600 ph ph-trash-simple"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="h-14 px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
            <div class="text-center text-zinc-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lihat Selengkapnya</div>
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