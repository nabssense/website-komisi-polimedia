@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-soft-base flex-col justify-start items-start gap-8 inline-flex">
    <div class="self-stretch h-14 justify-start items-center gap-6 inline-flex">
        <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
            <button onclick="goBack()" class="text-32 text-netral-800 ph-bold ph-arrow-left"></button>
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola Kabinet</div>
            <div class="py-3 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Tambah Kabinet</div>
                <i class="text-32 text-primary-base ph ph-plus"></i>
            </div>
        </div>
    </div>
    <div class="justify-start items-start gap-9 inline-flex">
        <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Kabinet saat ini</div>
            <div class="justify-end items-end gap-4 inline-flex">
                <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">KOBRA</div>
            </div>
        </div>
        <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Anggota Kepungursan</div>
            <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">400 orang</div>
        </div>
        <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start inline-flex">
            <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Anggota Kepungursan Aktif</div>
            <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">40 orang</div>
        </div>
    </div>
    <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
        <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
            <thead class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                <tr class="w-full justify-center items-center inline-flex flex-row">
                    
                    <th class="w-full h-fit grow shrink basis-5/12 justify-start gap-4 items-center inline-flex">
                        <i class="text-32 ph ph-square"></i>
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Info Kabinet</div>
                    </th>
                    <th class="w-full grow shrink basis-3/12 flex">
                        <div class="text-start text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Anggota Kepengurusan</div>
                    </th>
                    <th class="w-full grow shrink basis-4/12 flex">
                    </th>
                </tr>
            </thead>
            <tbody class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                <tr onclick="window.location.href='/kelola-kabinet-pilih';" class="w-full h-fit flex-row justify-start items-center flex cursor-pointer">
                    
                        <td class="w-full h-full grow shrink basis-5/12 flex flex-row gap-4 justify-start items-center">
                                <div class="justify-start items-center flex">
                                    <i class="text-32 ph ph-square"></i>
                                </div>
                                <div class="justify-center items-center flex">
                                    <div class="text-netral-900 text-5xl font-semibold font-THICCCBOI leading-10">9</div>
                                </div>
                                <div class=" overflow-clip  object-fill bg-netral-100 shadow-card-m p-2 rounded-lg justify-center items-center flex relative">
                                    <img class="aspect-auto object-bottom" src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}" />
                                </div>
                                <div class="h-full  flex-col justify-center items-center inline-flex">
                                    <div class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-7">KOBRA</div>
                                    <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">2021 - 2022</div>
                                </div>
                            
                        </td>
                        <td class="w-full h-full flex grow shrink basis-3/12 flex-row gap-4 justify-start items-center">
                            <div class="h-full justify-start items-center gap-4 flex">
                                <div class=" self-stretch flex-col justify-center items-start inline-flex">
                                    <div class="grow shrink basis-0 text-netral-900 text-lg font-normal font-THICCCBOI leading-7">40 Orang</div>
                                </div>
                            </div>
                        </td>
                        <td class="w-full h-full flex grow shrink basis-4/12 flex-row gap-4 justify-start items-center">
                            <div class="w-full h-fit grow shrink basis-0  justify-end items-center gap-4 flex">
                                <a href="/kelola-kabinet-pilih" class="py-1 rounded-full justify-center items-center gap-2 flex">
                                    <div class="text-center text-rose-600 text-lg font-medium font-THICCCBOI leading-7">Ubah</div>
                                    <i class="text-2xl text-rose-600 ph ph-pencil-simple"></i>
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
            <div class="text-center text-netral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lihat Selengkapnya</div>
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