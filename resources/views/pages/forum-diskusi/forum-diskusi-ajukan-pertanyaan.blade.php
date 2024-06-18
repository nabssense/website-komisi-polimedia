@extends('layouts.main')
@section('container')
    {{-- STEP 1 --}}<div
        class="w-screen h-screen step p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">
        
        {{-- Main Content --}}
        <div class="w-full max-w-960  h-full self-stretch px-8 flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Ajukan Pertanyaan</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0  justify-start items-start gap-8 flex flex-row flex-1">
                <div class="w-full h-fit self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Pertanyaan
                            </div>
                        </div>
                            <textarea type="text" name="nama-kabinet" placeholder="Cth: Muhammad Nabil Musyaffa" id="" class="w-full h-32 py-3 text-wrap bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-start gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7"></textarea>
                    </div>
                    <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kategori Pertanyaan
                            </div>
                        </div>
                        <!-- Input Field -->
                        
                        <div class="relative flex flex-row items-center w-full">
                            <input type="text" name="nama-kabinet" placeholder="Pilih Kategori" id="kategori-input" onkeydown="return false;"
                            onpaste="return false;"
                            ondrop="return false;"
                            class="w-full py-3 bg-white focus:outline-none focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                            <i class="absolute right-0 text-32 ph ph-caret-down"></i>
                        </div>
                        <div  id="kategori-dropdown" class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden" role="menu" aria-orientation="vertical" tabindex="-1">
                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4" role="none">
                                    <div class="w-full flex flex-col">
                                        <div class="grow shrink basis-0 m-4 h-fit bg-white rounded-full border justify-start items-center flex relative">
                                            <input  id="searchText" oninput="toggleClearButton()" type="text" class="rounded-full grow shrink basis-0 px-6 py-2 border text-zinc-800 text-lg font-normal font-THICCCBOI leading-7 focus:outline-none focus:border-primary-base focus:font-semibold focus:text-netral-800" placeholder="Cari Kategori">
                                            <button id="clearButton" onclick="clearSearchText()" type="reset" class="hidden mx-6 w-fit text-xl text-netral-900 ph ph-x absolute right-0 "></button>
                                        </div>
                                        <button data-value="Kategori 1" class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                                            <div class="ph ph-check-circle text-2xl"></div>Ubah
                                        </button>
                                        <button data-value="Kategori 2" class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                                            <div class="ph ph-check-circle text-2xl"></div>Ubah
                                        </button>
                                        <button data-value="Kategori 3" class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                                            <div class="ph ph-check-circle text-2xl"></div>Ubah
                                        </button>
                                    </div>
                                    <div class="w-full flex flex-col p-4 gap-4">
                                        <button class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900" role="menuitem">Batalkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit flex flex-row overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                        <div class="w-fit h-fit flex-col justify-start items-start gap-1 flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Gambar Utama
                                </div>
                            </div>
                            <div class="self-stretch justify-start items-start gap-1 inline-flex">
                                <div class="w-fit self-stretch justify-start items-center flex">
                                    <div
                                        class="w-40 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
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
                            </div>
                        </div>
                        <div class="w-fit h-fit  flex-col justify-start items-start gap-1 flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Gambar Utama
                                </div>
                            </div>
                            <div class="self-stretch justify-start items-start gap-1 inline-flex">
                                <div class="w-fit self-stretch justify-start items-center flex">
                                    <div
                                        class="w-40 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
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
                            </div>
                        </div>
                        <div class="w-fit  min-w-360 h-fit  flex-col justify-start items-start gap-1 flex">
                            <div class="w-full justify-start items-start inline-flex">
                                <div class=" text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Gambar Utama
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
                                        class="w-full flex  text-wrap text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                        Masukkan logo dengan ukuran horizontal dan dengan format svg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- 3 --}}
            <div class="h-fit w-full justify-start items-start gap-4 flex">
                <button onclick=""
                    class="w-full h-fit px-8 py-3 bg-primary-base rounded-full justify-center items-center gap-6 flex">
                    <div class="text-center text-white text-2xl font-medium font-THICCCBOI leading-9">Simpan</div>
                </button>
            </div>
        </div>
    </div>
    
@endsection
