@extends('layouts.main')
@section('container')
    {{-- STEP 1 --}}<div
        class="w-screen h-screen step p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">
        
        {{-- Main Content --}}
        <div class="w-full max-w-960  h-full self-stretch px-8 flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-zinc-900 text-2xl font-extrabold font-THICCCBOI leading-9">Ubah Tentang Komisi</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0  justify-start items-start gap-8 flex flex-row flex-1">
                <div class="w-full h-fit self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="w-full h-fit flex flex-row overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                        <div class="w-fit  min-w-360 h-fit  flex-col justify-start items-start gap-1 flex">
                            <div class="w-full justify-start items-start inline-flex">
                                <div class=" text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Logo Komunitas
                                </div>
                            </div>
                            <div class="w-full justify-start items-start gap-1 flex relative">
                                <div class="w-fit  justify-start items-center flex">
                                    <div
                                        class="w-40 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex ">
                                        <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                        <label for="fileinput"
                                            class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                            Gambar</label>
                                    </div>
                                </div>
                                <div class="w-full  h-full p-4 justify-start items-center flex flex-wrap">
                                    <div
                                        class="w-full flex  text-wrap text-stone-700 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        Masukkan logo dengan ukuran horizontal dan dengan format svg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Komunitas
                            </div>
                        </div>
                        <input type="text" name="nama-kabinet" placeholder="Cth: KOBRA" id=""
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Deskripsi Komunitas
                            </div>
                        </div>
                        <input type="text" name="nama-kabinet" placeholder="Cth: 9" id=""
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Slogan Komunitas
                            </div>
                        </div>
                        <input type="text" name="nama-kabinet" placeholder="Cth: 9" id=""
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="w-full h-fit flex flex-row overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                        <div class="w-fit  min-w-360 h-fit  flex-col justify-start items-start gap-1 flex">
                            <div class="w-full justify-start items-start inline-flex">
                                <div class=" text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Gambar Pendukung
                                </div>
                            </div>
                            <div class="w-full justify-start items-start gap-1 flex relative">
                                <div class="w-fit  justify-start items-center flex">
                                    <div
                                        class="w-96 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex ">
                                        <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                        <label for="fileinput"
                                            class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                            Gambar</label>
                                    </div>
                                </div>
                                <div class="w-full  h-full p-4 justify-start items-center flex flex-wrap">
                                    <div
                                        class="w-full flex  text-wrap text-stone-700 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        Masukkan logo dengan ukuran horizontal dan dengan format svg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- 3 --}}
            <div class="h-fit w-full pt-4 border-t-2 border-netral-200 justify-start items-start gap-4 flex">
                <button onclick=""
                    class="w-full h-fit px-8 py-3 bg-primary-base rounded-full justify-center items-center gap-6 flex">
                    <div class="text-center text-white text-2xl font-medium font-THICCCBOI leading-9">Simpan</div>
                </button>
            </div>
        </div>
    </div>
    
@endsection