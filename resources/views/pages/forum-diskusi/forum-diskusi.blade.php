@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-soft-base flex-col justify-start items-center gap-8 inline-flex relative">
    <div class="self-stretch justify-start items-center gap-4 inline-flex">
        <div class="grow shrink basis-0 text-zinc-900 text-5xl font-extrabold font-THICCCBOI leading-10">Forum Diskusi</div>
        <button onclick="pageForumDiskusiAjukanPertanyaan()" class="px-8 py-3 bg-primary-base rounded-full justify-center items-center gap-6 flex">
            <div class="text-center text-white text-2xl font-medium font-THICCCBOI leading-9">Ajukan Pertanyaan</div>
        </button>
    </div>
    {{-- Search Bar dll --}}
    <div class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex">
        <div class="self-stretch justify-center items-start gap-4 inline-flex ">
            <div class="grow shrink basis-0 h-fit bg-white rounded-full border justify-start items-center flex relative">
                <input  id="searchText" oninput="toggleClearButton()" type="text" class="rounded-full grow shrink basis-0 px-6 py-2 border text-zinc-800 text-lg font-normal font-['THICCCBOI'] leading-7 focus:outline-none focus:border-primary-base focus:font-semibold focus:text-netral-800" placeholder="Cari Berita">
                <button id="clearButton" onclick="clearSearchText()" type="reset" class="hidden mx-6 w-fit text-xl text-netral-900 ph ph-x absolute right-0 "></button>
            </div>
            
            <div class="relative inline-block text-left">
                <button type="button" class="option-button px-6 py-2 bg-white rounded-full border border-neutral-800 justify-start items-center gap-8 flex">
                    <div class="justify-start items-center gap-3 flex">
                        <i class="text-xl text-netral-900 ph ph-funnel-simple"></i>
                        <div class="text-zinc-800 text-lg font-normal font-['THICCCBOI'] leading-7">Urutkan</div>
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
            <div class="relative inline-block text-left">
                <button type="button" class="option-button px-6 py-2 bg-white rounded-full border border-neutral-800 justify-start items-center gap-8 flex">
                    <div class="justify-start items-center gap-3 flex">
                        <i class="text-xl text-netral-900 ph ph-square-half"></i>
                        <div class="text-zinc-800 text-lg font-normal font-['THICCCBOI'] leading-7">Kategori</div>
                    </div>
                    <i class="text-xl text-netral-900 ph ph-caret-down"></i>
                </button>
                <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                        <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4" role="none">
                            <div class="w-full flex flex-col">
                                <div class="grow shrink basis-0 m-4 h-fit bg-white rounded-full border justify-start items-center flex relative">
                                    <input  id="searchText" oninput="toggleClearButton()" type="text" class="rounded-full grow shrink basis-0 px-6 py-2 border text-zinc-800 text-lg font-normal font-['THICCCBOI'] leading-7 focus:outline-none focus:border-primary-base focus:font-semibold focus:text-netral-800" placeholder="Cari Kategori">
                                    <button id="clearButton" onclick="clearSearchText()" type="reset" class="hidden mx-6 w-fit text-xl text-netral-900 ph ph-x absolute right-0 "></button>
                                </div>
                                <button href="#" class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                                    <div class="ph ph-check-circle text-2xl"></div>Ubah
                                </button>
                                <button href="#" class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                                    <div class="ph ph-check-circle text-2xl"></div>Ubah
                                </button>
                                <button href="#" class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900" role="menuitem">
                                    <div class="ph ph-check-circle text-2xl"></div>Ubah
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
            
        </div>
        {{-- Filter dll --}}
        <div class=" w-full h-fit justify-start items-center gap-8 inline-flex">
            <div class="px-9 py-1 rounded-full flex-col justify-center items-center gap-6 inline-flex">
                <div class="text-center text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Filter</div>
            </div>
            <div class="w-full h-fit overflow-scroll justify-start items-center gap-4 flex overflow-x-scroll parent cursor-pointer scrollbar-hidden">
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
                <div class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Beli</div>
                </div>
            </div>
        </div>
    </div>

    
    {{-- Main Content --}} <div class="w-full h-fit self-stretch justify-center items-start gap-8 inline-flex">

        {{-- Left Content --}} <div class="h-fit w-full self-stretch rounded-3xl flex-col justify-start items-start gap-4 inline-flex">
            <div class="self-stretch px-6 py-4 bg-netral-100 rounded-lg justify-start items-center gap-4 inline-flex">
                <div class="grow shrink basis-0 text-neutral-900 text-3xl font-semibold font-THICCCBOI leading-10">Pertanyaan</div>
            </div>
            <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                <div class="self-stretch h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                    <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                        <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                            <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                <i class="text-5xl ph ph-user-circle"></i>
                                <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                    <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                        <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                        <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                        <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                    </div>
                                    <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                </div>
                                <i class="text-32 ph ph-dots-three-vertical"></i>
                            </div>
                            <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                                <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                        <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start gap-8 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                                <div class="h-7 justify-start items-start gap-1 flex">
                                    <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">0</div>
                                    <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">Jawaban</div>
                                </div>
                            </div>
                            <div class="self-stretch h-16 px-6 flex-col justify-center items-start gap-2 flex">
                                <div class="self-stretch text-zinc-900 text-lg font-normal font-THICCCBOI leading-7">Belum Ada Jawaban</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="rounded-full justify-start items-center gap-1 flex">
                                        <i class="text-32 ph ph-chat-teardrop-text"></i>
                                        <div class="px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">Berikan jawaban atau tanggapan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="self-stretch h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                    <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-8 flex">
                        <div class="self-stretch h-fit flex-col justify-center items-start gap-6 flex">
                            <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                <i class="text-5xl ph ph-user-circle"></i>
                                <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                    <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                        <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                        <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                        <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                    </div>
                                    <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                </div>
                                <i class="text-32 ph ph-dots-three-vertical"></i>
                            </div>
                            <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                                <div class="self-stretch text-neutral-900 text-2xl font-normal font-THICCCBOI leading-H4">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                                <div class="h-48 rounded-2xl overflow-clip">
                                    <img class="h-full" src="{{ url('img/Kabinet/KOBRA/All-Team.png') }}" alt="">
                                </div>
                                <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                    <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div onclick="pageForumDiskusiPertanyaan()" class="w-full h-fit flex-col justify-center items-center gap-8 flex">
                        <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">
                            <div class="self-stretch px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                                <div class="h-fit justify-start items-start gap-1 flex">
                                    <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">3</div>
                                    <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">Jawaban</div>
                                </div>
                            </div>
                            <div class="w-full h-fit  px-6 flex-col justify-center items-center gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="w-full h-fit flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                            <div class="justify-start items-center gap-2 flex">
                                                <div class="text-zinc-900 text-base font-semibold font-THICCCBOI leading-normal">Bapak Suhaili</div>
                                                <i class="text-xl ph-fill text-blue-700 ph-seal-check"></i>
                                            </div>
                                            <div class="text-zinc-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                            <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Pembina Komunitas Bidikmisi Polimedia</div>
                                        </div>
                                        <div class="self-stretch justify-start items-start gap-4 inline-flex">
                                            <div class="grow shrink basis-0 text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                        </div>
                                    </div>
                                    <i class="text-32 ph ph-dots-three-vertical"></i>
                                </div>
                                <div class="w-full text-zinc-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                                <div class="w-full h-fit justify-start items-center gap-4 inline-flex">
                                    <div class=" rounded-full justify-start items-center gap-2 flex">
                                        <i class="text-32 text-primary-base ph ph-heart"></i>
                                        <div class="px-4 py-2 bg-rose-100 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">30 org merasa terbantu</div>
                                        </div>
                                    </div>
                                    <div class="rounded-full justify-start items-center gap-1 flex">
                                        <i class="text-32 ph ph-chat-teardrop-text"></i>
                                        <div class="px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">Berikan jawaban atau tanggapan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="self-stretch h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                    <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                        <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                            <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                <i class="text-5xl ph ph-user-circle"></i>
                                <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                    <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                        <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                        <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                        <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                    </div>
                                    <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                </div>
                                <i class="text-32 ph ph-dots-three-vertical"></i>
                            </div>
                            <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                                <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                        <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="self-stretch h-32 flex-col justify-start items-start gap-8 flex">
                        <div class="self-stretch h-32 flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                                <div class="h-7 justify-start items-start gap-1 flex">
                                    <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">0</div>
                                    <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">Jawaban</div>
                                </div>
                            </div>
                            <div class="self-stretch h-16 px-6 flex-col justify-center items-start gap-2 flex">
                                <div class="self-stretch text-zinc-900 text-lg font-normal font-THICCCBOI leading-7">Belum Ada Jawaban</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="rounded-full justify-start items-center gap-1 flex">
                                        <i class="text-32 ph ph-chat-teardrop-text"></i>
                                        <div class="px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">Berikan jawaban atau tanggapan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Right Content --}} <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch py-2 bg-rose-100 rounded justify-start items-start gap-4 inline-flex">
                <div class="w-2 h-fit relative bg-primary-base rounded"></div>
                <div class="grow shrink basis-0 text-zinc-900 text-3xl font-extrabold font-THICCCBOI leading-10">Terpopuler</div>
            </div>
            <div class="h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                    <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                </div>
                                <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                            </div>
                            <i class="text-32 ph ph-dots-three-vertical"></i>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                            <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                    <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                    <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                </div>
                                <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                            </div>
                            <i class="text-32 ph ph-dots-three-vertical"></i>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                            <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                    <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Drag Touch
    let mouseDown = false;
    let startX, scrollLeft;
    const slider = document.querySelector('.parent');

    const startDragging = (e) => {
        mouseDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    }

    const stopDragging = (e) => {
        mouseDown = false;
    }

    const move = (e) => {
        e.preventDefault();
        if (!mouseDown) {
            return;
        }
        const x = e.pageX - slider.offsetLeft;
        const scroll = x - startX;
        slider.scrollLeft = scrollLeft - scroll;
    }

    // Add the event listeners
    slider.addEventListener('mousemove', move, false);
    slider.addEventListener('mousedown', startDragging, false);
    slider.addEventListener('mouseup', stopDragging, false);
    slider.addEventListener('mouseleave', stopDragging, false);
    

    // Hide Button X
    function toggleClearButton() {
        var inputField = document.getElementById("searchText");
        var clearButton = document.getElementById("clearButton");

        // Periksa apakah nilai di dalam input field kosong
        if (inputField.value.trim() === "") {
                clearButton.classList.add(''); // Sembunyikan tombol jika kosong
            } else {
                clearButton.classList.remove('hidden','flex'); // Tampilkan tombol jika tidak kosong
            }
        }

    
    // Clear Search
    function clearSearchText() {
        document.getElementById("searchText").value = "";
        toggleClearButton();
        }
        
    
    // 
    const container = document.querySelector('.flex');

    new ResizeObserver(() => {
        const items = document.querySelectorAll('.flex-shrink-0');
        items.forEach((item) => {
            item.classList.add('flex-grow');
            item.style.flexBasis = '';
        });
        const reference = items[0].getBoundingClientRect();

        const last = items[items.length - 1];
        const lastRect = last.getBoundingClientRect();

        for (const item of Array.from(items).toReversed()) {
            const itemRect = item.getBoundingClientRect();
            if (itemRect.top === lastRect.top) {
                item.classList.remove('flex-grow');
                item.style.flexBasis = `${reference.width}px`;
            }
        }
    }).observe(container);
</script>

@include('partials.footer')
@endsection
