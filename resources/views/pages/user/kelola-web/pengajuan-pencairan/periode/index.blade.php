@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div class="w-full h-fit px-4 md:px-8 xl:px-16 py-20 md:py-32  bg-netral-200 flex-col justify-center items-center gap-8 flex">
        <div class="w-full max-w-1480 flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
                <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
                    <a href="{{ route('kelola.pencairan.index') }}" class="text-32 text-netral-800 ph ph-arrow-left"></a>
                    <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola
                        Periode</div>
                    <a href="{{ route('kelola.pencairan.periode.show') }}" class="btn-primary">Tambah Periode
                        <i class=" ph ph-plus"></i>
                    </a>
                </div>

            </div>
            <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
                <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                    <thead
                        class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                        <tr class="w-full justify-center items-center inline-flex flex-row gap-8">
                            <th class="w-full h-fit grow shrink basis-5/12 justify-start gap-4 items-center inline-flex">
                                {{-- <i class="text-32 ph ph-square"></i> --}}
                                <div class="text-start text-neutral-900 Heading3 font-semibold">Info Periode
                                </div>

                            </th>
                            <th class="w-full grow shrink basis-3/12 flex">
                                <div class="text-start text-neutral-900 Heading3 font-semibold">Info Pengajuan
                                </div>
                            </th>
                            <th class="w-full grow shrink basis-3/12 flex">
                                <div class="text-start text-neutral-900 Heading3 font-semibold">Lomba</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody
                        class="self-stretch px-4 py-4 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex">
                        @foreach ($periods as $period)
                            <tr
                                class="w-full h-fit flex-row justify-start items-center gap-8 py-2 flex cursor-pointer border-b-2 border-netral-200">
                                <td
                                    class="w-full h-full grow shrink basis-5/12 flex flex-col gap-2 justify-start items-start">
                                        <div class="text-netral-900 Heading4 font-semibold">
                                            {{ $period->name }}</div>
                                            <img class="w-48" src="{{ $period->getImagePathAttribute() }}" alt="">
                                </td>
                                <td class="w-full grow shrink basis-3/12 flex">
                                    <div class="text-netral-900 Heading4 font-semibold">
                                        {{ $period->start_date }}</div>
                                </td>
                                <td class="w-full grow shrink basis-3/12 flex">
                                    <div class="text-netral-900 Heading4 font-semibold">
                                        {{ $period->end_date }}</div>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn-secondary">Lihat
                        Selengkapnya
                </button>
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
