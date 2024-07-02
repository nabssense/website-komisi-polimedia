@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
<div class="w-full  h-fit px-56 py-8 bg-soft-base flex-col justify-center items-center gap-4 inline-flex">
    <div class="w-full max-w-1480 h-14 justify-start items-center gap-6 inline-flex">
        <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
            <button onclick="goBack()" class="text-32 text-netral-800 ph ph-arrow-left"></button>
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola Tentang Komisi</div>
            <a href="/kelola-komisi-ubah" class="py-3 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Ubah</div>
                <i class="text-32 text-primary-base ph ph-pencil"></i>
            </a>
        </div>
    </div>
    @include('partials.tentang-komisi-content')
    {{-- <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
        <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
            <thead class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                <tr class="w-full justify-center items-center inline-flex flex-row gap-8">
                    
                    <th class="w-full h-fit grow shrink basis-3/12 justify-start gap-4 items-center inline-flex">
                        <i class="text-32 ph ph-square"></i>
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Info Komisi</div>
                        
                    </th>
                    <th class="w-full grow shrink basis-4/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Tentang Komisi</div>
                    </th>
                    <th class="w-full grow shrink basis-2/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Gambar</div>
                    </th>
                    <th class="w-full grow shrink basis-3/12 flex">
                        <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9"></div>
                    </th>
                </tr>
            </thead>
            <tbody class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                <tr onclick="window.location.href='/kelola-kabinet-pilih';" class="w-full h-fit flex-row justify-start items-center gap-8 flex cursor-pointer">
                    
                        <td class="w-full h-full grow shrink basis-3/12 flex flex-row gap-4 justify-start items-start">
                            <div class="w-full bg-blue-400 flex flex-col">
                                <div class="justify-start items-center flex">
                                    <i class="text-32 ph ph-square"></i>
                                </div>
                                <div class="h-48 w-48 overflow-clip  object-fill bg-soft-base rounded-lg justify-start items-end flex relative">
                                    <img class="aspect-auto object-bottom" src="{{ url('img/Kabinet/KOBRA/KETUA-WAKIL.png') }}" />
                                </div>
                                <div class="w-full h-full flex-col justify-center items-center inline-flex">
                                    <div class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-7">Komunitas Bidikmisi</div>
                                    <div class="self-stretch text-netral-900 text-lg font-normal font-THICCCBOI leading-7">Membidik Prestasi Membangun Negeri</div>
                                    <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">2016</div>
                                </div>
                            </div>
                        </td>
                        <td class="w-full flex grow shrink basis-4/12">
                            <div class="grow shrink basis-0 text-netral-900 text-lg font-normal font-THICCCBOI leading-7">40 Dictum nibh enim at quam massa venenatis. Erat et nulla posuere egestas varius lorem odio iaculis ut. In ....</div>
                        </td>
                        <td class="w-full flex grow shrink basis-2/12">
                            <div class="h-fit w-fit overflow-clip  object-fill bg-soft-base rounded-lg justify-center items-center flex relative">
                                <img class="aspect-auto object-bottom" src="{{ url('img/Logo-Polimedia.png') }}" />
                            </div>
                        </td>
                        <td class="w-full h-full flex grow shrink basis-3/12 flex-row gap-4 justify-start items-center">
                            <div class="w-full h-fit bg-emerald-400 justify-end items-center gap-4 flex flex-wrap">
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
    </div> --}}
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