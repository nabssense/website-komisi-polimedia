<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        <link rel="icon" href="{{ url('img/Logo-Komisi.svg') }}" />
        <link rel="shortcut icon" href="{{ url('img/Logo-Komisi.svg') }}" />

        <!-- Fonts -->
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        @vite('resources/css/app.css')
        {{-- Phosphor Icons --}}
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
    </head>
    <body class="m-0 p-0 h-screen">
        <div class="pt-24">
            <div class="w-full h-fit px-56 py-8 bg-white flex-col justify-center items-center gap-8 inline-flex">
                <div class="self-stretch text-netral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Akun</div>
                <div class="self-stretch bg-white rounded-2xl shadow-lg justify-start items-start gap-8 inline-flex">
                    <div class="w-360 p-8 bg-white rounded-2xl flex-col justify-start items-start gap-8 inline-flex">
                        <div class="w-full self-stretch pb-4 border-b border-neutral-900 justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start gap-1 inline-flex">
                                <div class="self-stretch text-neutral-900 text-lg font-extrabold font-THICCCBOI leading-7">Muhammad Nabil</div>
                                <div class="self-stretch text-stone-500 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                            </div>
                        </div>
                        <div class="w-full self-stretch h-48 flex-col justify-start items-start gap-4 flex">
                            <a href="/akun" class="{{ $active === 'Akun' ? "bg-gray-300 self-stretch px-4 py-3  rounded-lg justify-start items-center gap-3 inline-flex" : '' }} self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                                <i class="text-4xl ph ph-user-circle"></i>
                                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Profil</div>
                            </a>
                            <a href="/kelola-web" class="{{ $active === 'Kelola Website' ? "bg-gray-300 self-stretch px-4 py-3  rounded-lg justify-start items-center gap-3 inline-flex" : '' }} self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                                <i class="text-4xl ph ph-kanban"></i>
                                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Kelola Website</div>
                            </a>
                            <a  class="self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                                <i class="text-4xl ph ph-sign-out"></i>
                                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Keluar</div>
                            </a>
                        </div>
                    </div>
                    @yield('content-akun')
                </div>
            </div>
            @yield('container')
        </div>

    </body>
</html>


<div class="w-full bg-yellow-400 px-8 py-2 justify-start items-center gap-4 flex flex-row">
    {{-- <div class="left-0 z-10 absolute rounded-full justify-center items-center inline-flex">
        <div class="w-fit h-fit pl-4 pr-6 py-3 bg-komisi-orange-base rounded-full justify-center items-center gap-2 flex">
            <div class="w-fit h-fit relative">
                    <img class="h-11 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            </div>
            <div class="text-right text-white text-2xl font-extrabold font-THICCCBOI leading-9">2021-2022
            </div>
        </div>
    </div> --}}
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator ">
        <div class="w-6 h-6  bg-blue-500 rounded-full"></div>
        
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    
    <div class="w-full rounded-full flex flex-col justify-start items-start year-indicator ">
        <div class="w-6 h-6 bg-green-500 rounded-full hidden"></div>
        <div class="w-fit px-4 py-2 h-fit bg-komisi-orange-base rounded-full flex justify-center items-center gap-2">
            <img class="h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            <div class="w-fit h-fit pr-2 text-right text-white text-2xl font-extrabold font-THICCCBOI leading-9">2021-2022</div>
        </div>
        {{-- <div class="w-fit py-2 h-fit bg-komisi-orange-base rounded-full flex justify-center items-center gap-2">
                <img class="h-12  aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                <div class="w-fit h-fit text-right text-white text-2xl font-extrabold font-THICCCBOI leading-9">2021-2022</div>
        </div> --}}
        {{-- <div class="left-0 top-0 z-40  justify-center items-center inline-flex bg-emerald-400">
            <div class="w-fit h-fit pl-4 pr-6 py-3 bg-komisi-orange-base rounded-full justify-center items-center gap-2 flex flex-row">
                <img class="h-11 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                <div class="w-fit h-fit bg-red-500  text-right text-white text-2xl font-extrabold font-THICCCBOI leading-9">2021-2022</div>
            </div>
        </div> --}}
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
    <div class="py-2 rounded-full justify-start items-start flex">
        <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
    </div>
    <div class="py-3 rounded-full flex-col justify-start items-start inline-flex year-indicator">
        <div class="w-6 h-6  bg-neutral-900 rounded-full"></div>
    </div>
</div>
{{-- List Tahun --}}