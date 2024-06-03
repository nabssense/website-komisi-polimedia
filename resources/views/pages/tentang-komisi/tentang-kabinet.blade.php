@extends('layouts.main')
@include('partials.navbar-kabinet')
@section('container')
    <div class="w-full h-fit flex-col justify-center items-center gap-0 inline-flex">
        {{-- 1 Detail Kabinet --}}
        <div class="w-full h-fit xl:px-24 pt-8 pb-36 bg-white flex-col justify-start items-center gap-12 flex">
            <div class="self-stretch h-fit flex-col justify-start items-center gap-4 flex">
                <div class="w-48 h-14 justify-center items-center inline-flex">
                    <img src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                </div>
                <div class="self-stretch text-center text-zinc-900 text-5xl font-extrabold font-THICCCBOI ">Kolaborasi,
                    Optimis, Berprestasi, Realistis, Apresiasif</div>
            </div>
            <div class="justify-center items-start gap-12 inline-flex flex-wrap">

                <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 rounded-xl  w-720 h-480 transform origin-bottom"
                    src="{{ url('img/Kabinet/KOBRA/ALL-COWO-1.jpg') }}" alt="" />

                <div class="rounded-2xl flex-col justify-center items-start gap-2.5 inline-flex">
                    <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 rounded-xl w-720 h-480 transform origin-bottom"
                        src="{{ url('img/Kabinet/KOBRA/ALL-CEWE-1.jpg') }}" alt="" />
                </div>
            </div>
        </div>

        {{-- 2 Meet Our Team --}}
        <div class="w-full h-fit py-96 bg-neutral-800 flex-col justify-center items-center flex hover-animation">
            <div class="w-full h-fit  justify-center items-center gap-12 overflow-hidden inline-flex">
                <div
                    class="w-fit self-stretch text-center text-white font-THICCCBOI xl:text-9xl xl:leading-H1-H2-H3 text-5xl font-extrabold leading-H4">
                    Meet our
                </div>
                <div class=" overflow-clip xl:h-192 h-16 bg-white flex-col justify-start items-start inline-flex">
                    <div
                        class="moving-animation w-[396px] xl:h-192 h-16 bg-white flex-col justify-start items-start inline-flex">
                        <div class="h-fit w-fit bg-white px-8 justify-start items-center gap-8 inline-flex">
                            <div
                                class=" text-center text-neutral-900 xl:text-9xl font-extrabold font-THICCCBOI xl:leading-H1-H2-H3 text-5xl leading-H4">
                                Team</div>
                        </div>
                        <div class="h-fit w-fit bg-white px-8 justify-start items-center gap-8 inline-flex">
                            <div
                                class="text-center text-neutral-900 xl:text-9xl font-extrabold font-THICCCBOI xl:leading-H1-H2-H3 text-5xl leading-H4">
                                Mate</div>
                        </div>
                        <div class="h-fit w-fit bg-white px-8 justify-start items-center gap-8 inline-flex">
                            <div
                                class="text-center text-neutral-900 xl:text-9xl font-extrabold font-THICCCBOI xl:leading-H1-H2-H3 text-5xl leading-H4">
                                Family</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            // Baca isi file SVG
            $svgContent = file_get_contents(public_path('img/Kabinet/KOBRA/Logo-Gram-Kabinet-Kobra.svg'));

            // Analisis isi SVG untuk mendapatkan semua data path dan warna fill
            preg_match_all(
                '/<path\s+[^>]*\bd=["\']([^"\']+)["\'][^>]*\bfill=["\']([^"\']+)["\']/i',
                $svgContent,
                $matches,
                PREG_SET_ORDER,
            );

            // Mengambil semua data path dan warna fill
            $pathDataWithFill = [];

            foreach ($matches as $match) {
                $pathDataWithFill[] = [
                    'path' => $match[1], // Data path
                    'fill' => $match[2], // Data fill
                ];
            }
        @endphp
        {{-- 3 Anggota Kepengurusan --}}
        <div class="self-stretch h-fit py-32 bg-neutral-950 flex-col justify-start items-center gap-32 flex">
            {{-- Section 1 Row --}}
            <div class="w-full h-fit flex-col  justify-start items-center gap-32 inline-flex ">
                <div class="w-full h-fit flex-col justify-start items-center gap-12 inline-flex ">
                    <div class="self-stretch h-28 flex-col justify-start items-center flex">
                        <div class="text-center text-white text-5xl font-extrabold font-THICCCBOI leading-10">Divisi
                            HRD</div>
                        <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Meet The
                            TeamMeet The TeamMeet The TeamMeet The TeamMeet The Team</div>
                    </div>
                    {{-- Row --}}
                    <div class="w-full justify-center px-4 items-start gap-8 inline-flex flex-wrap ">
                        {{-- Card --}}
                        <div class="w-fit h-fit flex-col justify-start items-center gap-4 inline-flex group">
                            <div class="w-720 h-480 relative ">
                                <div class="left-12 z-10 top-6 absolute justify-end items-center inline-flex">
                                    <svg class="h-10" viewbox="0 0 64 64">
                                        @foreach ($pathDataWithFill as $pathInfo)
                                            : ?>
                                            <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                            <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                                fill="{{ $pathInfo['fill'] }}" />
                                        @endforeach
                                    </svg>
                                </div>
                                <div class="justify-center items-center flex">
                                    <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-fit h-fit sm:w-fit sm:h-fit lg:w-fit lg:h-fit relative transform origin-bottom z-10"
                                    src="{{ url('img/Kabinet/KOBRA/KETUA-WAKIL.png') }}" alt="" />
                                </div>
                                
                                <div
                                    class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[240px] h-[160px] sm:w-[455px] sm:h-[320px] lg:w-[700px] lg:h-480 bg-white -skew-x-2 pt-32 left-2 top-0 z-0 absolute flex-col justify-center items-center inline-flex">
                                </div>
                            </div>
                            <div class="self-stretch text-white text-6xl font-extrabold font-THICCCBOI leading-120%">
                                Say Hi to Our Team</div>
                        </div>

                        <div class="w-fit inline-flex flex-wrap justify-center gap-8 h-fit">
                            {{-- Card Personal --}}
                            <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                                <div class="w-348 h-480 justify-center items-center relative">
                                    <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                        <svg class="h-10" viewbox="0 0 64 64">
                                            @foreach ($pathDataWithFill as $pathInfo)
                                                : ?>
                                                <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                                <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                                    fill="{{ $pathInfo['fill'] }}" />
                                            @endforeach
                                        </svg>
                                    </div>
                                    <div
                                        class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                        <div class="text-center text-white text-2xl font-bold font-THICCCBOI leading-9">
                                            Ketua</div>
                                    </div>
                                    <div class="h-full justify-center items-end flex">
                                        <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-fit h-fit relative z-10 transform origin-bottom"
                                            src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                                    </div>
                                    <div
                                        class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-start items-start flex">
                                    <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                        Irawan</div>
                                    <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                        Desain Grafis</div>
                                </div>
                            </div>
                            {{-- Card Personal --}}
                            <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                                <div class="w-348 h-480 justify-center items-center relative">
                                    <div
                                        class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                                    </div>
                                    <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                        <svg class="h-10" viewbox="0 0 64 64">
                                            @foreach ($pathDataWithFill as $pathInfo)
                                                : ?>
                                                <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                                <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                                    fill="{{ $pathInfo['fill'] }}" />
                                            @endforeach
                                        </svg>
                                    </div>
                                    <div
                                        class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                        <div class="text-center text-white text-2xl font-bold font-THICCCBOI leading-9">
                                            Wakil Ketua</div>
                                    </div>
                                    <div class="h-full justify-center items-end flex">
                                        <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-fit h-fit relative z-10 transform origin-bottom"
                                        src="{{ url('img/Kabinet/KOBRA/Muhammad-Alif.png') }}" alt="" />
                                    </div>
                                    <div
                                        class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-start items-start flex">
                                    <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                        Irawan</div>
                                    <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                        Desain Grafis</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>




            <div class="w-full h-fit  px-32 flex-col justify-center items-center gap-12 flex">
                <div class="self-stretch h-12 flex-col justify-start items-center flex">
                    <div class="text-center text-white text-3xl font-semibold font-THICCCBOI leading-10">Anggota Divisi
                        HRD</div>
                </div>
                <div class="w-full  justify-center items-start gap-8 inline-flex flex-wrap">
                    {{-- Card Personal --}}
                    <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                        <div class="w-348 h-480 justify-center items-center relative">
                            <div class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                            <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                <svg class="h-10" viewbox="0 0 64 64">
                                    @foreach ($pathDataWithFill as $pathInfo)
                                        : ?>
                                        <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                        <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                            fill="{{ $pathInfo['fill'] }}" />
                                    @endforeach
                                </svg>
                            </div>
                            <div
                                class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                <div class="text-center text-white text-2xl font-extrabold font-THICCCBOI leading-9">
                                    Ketua</div>
                            </div>
                            <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-348 h-480 relative z-10 transform origin-bottom"
                                src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                            <div
                                class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                Irawan</div>
                            <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                Desain Grafis</div>
                        </div>
                    </div>

                    {{-- Card Personal --}}
                    <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                        <div class="w-348 h-480 justify-center items-center relative">
                            <div class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                            <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                <svg class="h-10" viewbox="0 0 64 64">
                                    @foreach ($pathDataWithFill as $pathInfo)
                                        : ?>
                                        <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                        <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                            fill="{{ $pathInfo['fill'] }}" />
                                    @endforeach
                                </svg>
                            </div>
                            <div
                                class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                <div class="text-center text-white text-2xl font-extrabold font-THICCCBOI leading-9">
                                    Ketua</div>
                            </div>
                            <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-348 h-480 relative z-10 transform origin-bottom"
                                src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                            <div
                                class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                Irawan</div>
                            <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                Desain Grafis</div>
                        </div>
                    </div>

                    {{-- Card Personal --}}
                    <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                        <div class="w-348 h-480 justify-center items-center relative">
                            <div class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                            <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                <svg class="h-10" viewbox="0 0 64 64">
                                    @foreach ($pathDataWithFill as $pathInfo)
                                        : ?>
                                        <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                        <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                            fill="{{ $pathInfo['fill'] }}" />
                                    @endforeach
                                </svg>
                            </div>
                            <div
                                class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                <div class="text-center text-white text-2xl font-extrabold font-THICCCBOI leading-9">
                                    Ketua</div>
                            </div>
                            <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-348 h-480 relative z-10 transform origin-bottom"
                                src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                            <div
                                class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                Irawan</div>
                            <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                Desain Grafis</div>
                        </div>
                    </div>

                    {{-- Card Personal --}}
                    <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                        <div class="w-348 h-480 justify-center items-center relative">
                            <div class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                            <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                <svg class="h-10" viewbox="0 0 64 64">
                                    @foreach ($pathDataWithFill as $pathInfo)
                                        : ?>
                                        <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                        <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                            fill="{{ $pathInfo['fill'] }}" />
                                    @endforeach
                                </svg>
                            </div>
                            <div
                                class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                <div class="text-center text-white text-2xl font-extrabold font-THICCCBOI leading-9">
                                    Ketua</div>
                            </div>
                            <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-348 h-480 relative z-10 transform origin-bottom"
                                src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                            <div
                                class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                Irawan</div>
                            <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                Desain Grafis</div>
                        </div>
                    </div>

                    {{-- Card Personal --}}
                    <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                        <div class="w-348 h-480 justify-center items-center relative">
                            <div class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                            <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                <svg class="h-10" viewbox="0 0 64 64">
                                    @foreach ($pathDataWithFill as $pathInfo)
                                        : ?>
                                        <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                        <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                            fill="{{ $pathInfo['fill'] }}" />
                                    @endforeach
                                </svg>
                            </div>
                            <div
                                class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                <div class="text-center text-white text-2xl font-extrabold font-THICCCBOI leading-9">
                                    Ketua</div>
                            </div>
                            <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-348 h-480 relative z-10 transform origin-bottom"
                                src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                            <div
                                class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                Irawan</div>
                            <div class="text-center text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                Desain Grafis</div>
                        </div>
                    </div>
                    {{-- Card Personal --}}
                    <div class="w-fit h-fit flex-col justify-start items-center gap-5 inline-flex group">
                        <div class="w-348 h-480 justify-center items-center relative">
                            <div class="w-80 h-96 left-0 top-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                            <div class="right-[24px] z-10 top-[24px] absolute justify-end items-center inline-flex">
                                <svg class="h-10" viewbox="0 0 64 64">
                                    @foreach ($pathDataWithFill as $pathInfo)
                                        : ?>
                                        <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                                        <path class="group-hover:fill-white" d="{{ $pathInfo['path'] }}"
                                            fill="{{ $pathInfo['fill'] }}" />
                                    @endforeach
                                </svg>
                            </div>
                            <div
                                class="px-4 py-1 left-0 top-[24px] absolute z-10 bg-primary-base justify-center items-center inline-flex">
                                <div class="text-center text-white text-2xl font-extrabold font-THICCCBOI leading-9">
                                    Ketua</div>
                            </div>
                            <img class="group-hover:scale-110 group-hover:ease-in group-hover:duration-500 w-348 h-480 relative z-10 transform origin-bottom"
                                src="{{ url('img/Kabinet/KOBRA/Putra-Irawan.png') }}" alt="" />
                            <div
                                class="group-hover:bg-netral-700 group-hover:ease-in group-hover:duration-500 w-[330px] h-480 bg-white -skew-x-2 pt-32 left-2 top-0  z-0 absolute flex-col justify-center items-center inline-flex">
                            </div>
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="text-center text-white text-2xl font-normal font-THICCCBOI leading-9">Putra
                                Irawan</div>
                            <div class="text-center  text-stone-400 text-lg font-medium font-THICCCBOI leading-7">
                                Desain Grafis</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- FUll Skuad  --}}

    <div class="w-full h-fit aspect-auto justify-center items-start relative flex">
        <img src="{{ url('img/Kabinet/KOBRA/All-team.png') }}" class="w-full h-fit aspect-auto">
        <div class="w-full h-full flex flex-col justify-start items-start absolute top-0">
            <div class=" w-full h-full justify-center items-center flex flex-col bg-netral-100 pt-24 pb-24 gap-4">
                <div class="text-center text-netral-900 text-8xl font-normal font-THICCCBOI leading-120%">We Are Kobra & We Are Komisi
                </div>
                <div class="text-center text-netral-900 text-3xl font-light font-THICCCBOI leading-120% ">
                    Team, Mate, & Family</div>
            </div>
            
            <img src="{{ url('img/Background-Komisi-1.png') }}" class="w-full aspect-auto">
            
            <img src="{{ url('img/Background-Komisi.png') }}" class="w-full aspect-auto">
            
        </div>
        {{-- <div class="w-full h-fit justify-center items-start top-0 absolute flex"> --}}
            
        {{-- </div> --}}
    </div>
    


@endsection
