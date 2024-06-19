@extends('layouts.main')
@section('container')
    {{-- STEP 1 --}}<div
        class="w-full h-full step p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">
        
        {{-- Main Content --}}
        <div class="w-full max-w-960  h-full self-stretch px-8 flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Tambah Akun</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0  justify-start items-start gap-8 flex flex-row flex-1">
                <div class="w-full h-fit flex-col justify-start items-start gap-4 inline-flex">
                
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Lengkap
                            </div>
                        </div>
                        <input type="text" name="nama-kabinet" placeholder="Cth: Muhammad Nabil Musyaffa" id=""
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">NIM
                            </div>
                        </div>
                        <input type="number" name="nama-kabinet" placeholder="Cth: 20240090" id=""
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Email
                            </div>
                        </div>
                        <input type="email" name="nama-kabinet" placeholder="Cth: 20240090@polimedia.ac.id" id=""
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Program Pendidikan
                            </div>
                        </div>
                        <input type="text" name="nama-kabinet" placeholder="Cth: Teknologi Rekayasa Multimedia" id=""
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Angkatan
                            </div>
                        </div>
                        <input type="number" name="nama-kabinet" placeholder="Cth: 2020" id=""
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kata Sandi
                            </div>
                        </div>
                        <input type="" name="nama-kabinet" placeholder="Default : KOMIS1Pol!Medi4" id=""
                            class="w-full py-3 bg-netral-200  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-100 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-100 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="w-full h-fit px-4 py-3 bg-gray-200 rounded-xl justify-start items-center gap-4 inline-flex">
                        <i class="text-2xl ph-fill ph-info"></i>
                        <div class="grow shrink basis-0"><div class="text-neutral-950 text-lg font-normal font-THICCCBOI leading-7">Kata sandi bawaan sistem adalah K0M1S!PoliMedia. Setelah membuat akun ini, silahkan beritahu pengguna akun untuk masuk dengan akun ini dan wajib untuk segera mengganti katasandi bawaan dengan katasandi yang unik & aman dari pengguna akun.</div></div>
                    </div>
                    <div id="toggle-button" class="w-full h-fit flex-col justify-start items-center inline-flex relative">
                        <div class="w-full justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Status Akun</div>
                        </div>
                        <div class="relative flex flex-row items-center w-full cursor-pointer">
                            <div id="toggle-text" class="w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">Aktif</div>
                        </div>
                        <div id="toggle-icon" class="absolute right-0 items-center justify-center flex h-full">
                            <i id="toggle-icon-inner" class="text-32 ph-fill ph-toggle-right cursor-pointer"></i>
                        </div>
                    </div>
                </div>
            </div>


            {{-- 3 --}}
            <div class="h-fit w-full  justify-start items-start gap-4 flex">
                {{-- <button onclick="previousStep()" class="w-fit h-fit px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 flex">
                        <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Sebelumnya</div>
                    </button> --}}
                <button onclick="nextStep()"
                    class="w-full h-fit px-8 py-3 bg-primary-base rounded-full justify-center items-center gap-6 flex">
                    <div class="text-center text-white text-2xl font-medium font-THICCCBOI leading-9">Simpan</div>
                </button>
            </div>
        </div>
    </div>
    
@endsection
