<div class="w-full h-fit px-4 md:px-8 xl:px-16 {{ $active === 'Beranda' ? 'py-16' : 'py-8' }} bg-soft-base flex-col justify-center items-center inline-flex ">
    <div class="w-full max-w-1480 h-fit bg-soft-base flex-col justify-center items-center gap-8 inline-flex relative">
        <div class="w-full justify-start items-center gap-4 flex flex-col md:flex-row">
            <div class="w-full Heading1 font-extrabold">Forum Diskusi
            </div>
            <button onclick="pageForumDiskusiAjukanPertanyaan()"
                class="btn-primary">Ajukan Pertanyaan
            </button>
        </div>
        {{-- Search Bar dll --}}
        
        <div class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex">
            @if ( $active === 'Beranda')
            @else
            <div class="w-full justify-center items-start gap-4 flex flex-row">
                <div class="w-full h-fit">
                    <input id="searchText" oninput="toggleClearButton()" type="text" class="searchbar"
                        placeholder="Cari Berita">
                    <button id="clearButton" onclick="clearSearchText()" type="reset" class="hidden mx-6 w-fit text-xl text-netral-900 ph ph-x absolute right-0 "></button>
                </div>
                {{-- Urut & Kategori --}}
                <div class="w-fit bg-lime-400 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                    {{-- Button Selection --}}
                    <div class="w-fit flex flex-row">
                        <button type="button" class="btn-popup option-button">
                            <div class="justify-start items-center gap-3 flex">
                                <i class=" ph ph-funnel-simple"></i>
                                <div class="">Urutkan</div>
                            </div>
                            <i class=" ph ph-caret-down"></i>
                        </button>
                        {{-- Pop Up --}}
                        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                            role="menu" aria-orientation="vertical" tabindex="-1">
                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4"
                                    role="none">
                                    <div class="text-start w-full px-4 py-8 text-2xl font-THICCCBOI text-netral-900">
                                        Urutkan
                                    </div>
                                    <div class="w-full flex flex-col">
                                        <button href="#"
                                            class="flex flex-row justify-between items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900"
                                            role="menuitem">
                                            Ubah<div class="ph ph-radio-button text-2xl"></div>
                                        </button>
                                        <button href="#"
                                            class="flex flex-row justify-between items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900"
                                            role="menuitem">
                                            Ubah<div class="ph ph-radio-button text-2xl"></div>
                                        </button>
                                        <button href="#"
                                            class="flex flex-row justify-between items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900"
                                            role="menuitem">
                                            Ubah<div class="ph ph-radio-button text-2xl"></div>
                                        </button>
                                    </div>
                                    <div class="w-full flex flex-col p-4 gap-4">
                                        <button
                                            class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900"
                                            role="menuitem">Batalkan</button>
                                        <button href="#"
                                            class="block w-full text-center px-4 py-3 bg-primary-base rounded-full text-xl font-THICCCBOI text-netral-100 hover:bg-primary-500"
                                            role="menuitem">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-fit flex flex-row">
                        <button type="button" class="btn-popup option-button">
                            <div class="justify-start items-center gap-3 flex">
                                <i class="ph ph-square-half"></i>
                                <div class="">Kategori</div>
                            </div>
                            <i class="text-xl text-netral-900 ph ph-caret-down"></i>
                        </button>
                        {{-- Pop Up --}}
                        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                            role="menu" aria-orientation="vertical" tabindex="-1">
                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4"
                                    role="none">
                                    <div class="w-full flex flex-col">
                                        <div
                                            class="grow shrink basis-0 m-4 h-fit bg-white rounded-full border justify-start items-center flex relative">
                                            <input id="searchText" oninput="toggleClearButton()" type="text"
                                                class="rounded-full grow shrink basis-0 px-6 py-2 border text-zinc-800 text-lg font-normal font-THICCCBOI leading-7 focus:outline-none focus:border-primary-base focus:font-semibold focus:text-netral-800"
                                                placeholder="Cari Kategori">
                                            <button id="clearButton" onclick="clearSearchText()" type="reset"
                                                class="hidden mx-6 w-fit text-xl text-netral-900 ph ph-x absolute right-0 "></button>
                                        </div>
                                        <button href="#"
                                            class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900"
                                            role="menuitem">
                                            <div class="ph ph-check-circle text-2xl"></div>Ubah
                                        </button>
                                        <button href="#"
                                            class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900"
                                            role="menuitem">
                                            <div class="ph ph-check-circle text-2xl"></div>Ubah
                                        </button>
                                        <button href="#"
                                            class="flex flex-row items-center gap-3 w-full text-start px-4 py-3 h-fit border-b-2 border-netral-200 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-gray-900"
                                            role="menuitem">
                                            <div class="ph ph-check-circle text-2xl"></div>Ubah
                                        </button>
                                    </div>
                                    <div class="w-full flex flex-col p-4 gap-4">
                                        <button
                                            class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900"
                                            role="menuitem">Batalkan</button>
                                        <button href="#"
                                            class="block w-full text-center px-4 py-3 bg-primary-base rounded-full text-xl font-THICCCBOI text-netral-100 hover:bg-primary-500"
                                            role="menuitem">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{-- Filter dll --}}
            <div class=" w-full h-fit justify-start items-center gap-8 inline-flex">
                <div class="py-1 rounded-full flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Filter
                    </div>
                </div>
                <div
                    class="w-full h-fit justify-start items-center gap-4 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden ">
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                    <button
                        class="btn-popup ">Beli
                    </button>
                </div>
            </div>
        </div>
        

        {{-- Main Content --}}
        <div class="w-full h-fit self-stretch justify-center items-start gap-4 flex flex-col lg:flex-row ">
            {{-- Left Content --}}
            <section
                class=" w-full h-fit self-stretch rounded-3xl flex-col justify-start items-start gap-4 flex">
                <div class="w-full py-4 px-6 bg-netral-100 rounded justify-start items-start flex text-netral-900 font-semibold Heading2">
                    Pertanyaan
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                    <div
                        class="self-stretch h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                        <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                            <div
                                                class="text-neutral-900 font-semibold Body1">
                                                Muhammad Alif</div>
                                            <div
                                                class="text-neutral-900 font-semibold Body1">
                                                -</div>
                                            <div
                                                class="w-fit text-netral-500 font-normal Body1">
                                                Mahasiswa</div>
                                        </div>
                                        <div
                                            class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                            9 menit lalu</div>
                                    </div>
                                    <i class="text-32 ph ph-dots-three-vertical"></i>
                                </div>
                                <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                                    <div
                                        class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa
                                        mengetahui rinciannya?</div>
                                    <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                        <div
                                            class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                            <div
                                                class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">
                                                Pencairan KIPK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                <div
                                    class="self-stretch px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                                    <div class="h-7 justify-start items-start gap-1 flex">
                                        <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">0
                                        </div>
                                        <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                            Jawaban</div>
                                    </div>
                                </div>
                                <div class="self-stretch h-16 px-6 flex-col justify-center items-start gap-2 flex">
                                    <div
                                        class="self-stretch text-netral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Belum Ada Jawaban</div>
                                    <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                        <div class="rounded-full justify-start items-center gap-1 flex">
                                            <i class="text-32 ph ph-chat-teardrop-text"></i>
                                            <div
                                                class="px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2 flex">
                                                <div
                                                    class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                    Berikan jawaban atau tanggapan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="w-full h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                        <div class="w-full h-fit px-6 flex-col justify-start items-start gap-8 flex">
                            <div class="w-full h-fit flex-col justify-center items-start gap-6 flex">
                                <div class="w-full justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="w-full justify-start items-start gap-2 inline-flex">
                                            <div
                                                class="text-neutral-900 font-semibold Body1">
                                                Muhammad Alif</div>
                                            <div
                                                class="text-neutral-900 font-semibold Body1">
                                                -</div>
                                            <div
                                                class="w-fit text-netral-500 font-normal Body1">
                                                Mahasiswa</div>
                                        </div>
                                        <div
                                            class="w-fit text-neutral-900 font-medium Body1">
                                            9 menit lalu</div>
                                    </div>
                                    <i class="text-32 ph ph-dots-three-vertical"></i>
                                </div>
                                <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                                    <div
                                        class="w-full text-neutral-900 font-normal Heading4">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa
                                        mengetahui rinciannya?</div>
                                    <div class="h-48 rounded-2xl overflow-clip">
                                        <img class="h-full" src="{{ url('img/Kabinet/KOBRA/All-Team.png') }}"
                                            alt="">
                                    </div>
                                    <div
                                        class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                        <div class="text-neutral-900 font-medium Body2">
                                            Pencairan KIPK</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div onclick="pageForumDiskusiPertanyaan()"
                            class="w-full h-fit flex-col justify-center items-center gap-8 flex cursor-pointer">
                            <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">
                                <div
                                    class="w-full px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                                    <div class="h-fit justify-start items-start gap-1 flex">
                                        <div class="text-neutral-900 font-semibold Heading4">3
                                        </div>
                                        <div class="text-neutral-900 font-semibold Heading4">
                                            Jawaban</div>
                                    </div>
                                </div>
                                <div class="w-full h-fit  px-6 flex-col justify-center items-center gap-4 flex">
                                    <div class="w-full justify-start items-center gap-2 inline-flex">
                                        <i class="text-5xl ph ph-user-circle"></i>
                                        <div class="w-full h-fit flex-col justify-center items-start inline-flex">
                                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                                <div class="justify-start items-center gap-2 flex">
                                                    <div
                                                        class="text-netral-900 font-semibold Body1">
                                                        Bapak Suhaili</div>
                                                    <i class="text-xl ph-fill text-blue-700 ph-seal-check"></i>
                                                </div>
                                                <div
                                                    class="text-netral-900 font-semibold Body1">
                                                    -</div>
                                                <div
                                                    class="w-fit text-netral-500 font-normal Body1">
                                                    Pembina Komunitas Bidikmisi Polimedia</div>
                                            </div>
                                            <div class="w-full justify-start items-start gap-4 inline-flex">
                                                <div
                                                    class="w-fit text-neutral-900 font-medium Body1">
                                                    9 menit lalu</div>
                                            </div>
                                        </div>
                                        <i class="text-32 ph ph-dots-three-vertical"></i>
                                    </div>
                                    <div class="w-full text-neutral-900 font-normal Heading4">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa
                                        mengetahui rinciannya?</div>
                                    <div class="w-full h-fit justify-start items-center gap-4 inline-flex">
                                        <div class="w-fit h-fit rounded-full justify-start items-center gap-2 flex">
                                            <i class="text-32 text-primary-base ph ph-heart"></i>
                                            <button class=" py-2 rounded-full justify-start items-start flex text-primary-base font-medium Body1">
                                                    30 org merasa terbantu
                                            </button>
                                        </div>
                                        <div class="w-full rounded-full justify-start items-center gap-1 flex">
                                            <i class="text-32 ph ph-chat-teardrop-text"></i>
                                            <div class="w-full px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2 flex text-netral-500 font-medium Body1">
                                                    Berikan jawaban atau tanggapan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-full h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                        <div class="w-full h-fit px-6 flex-col justify-start items-start gap-6 flex">
                            <div class="w-full h-fit flex-col justify-center items-start gap-4 flex">
                                <div class="w-full justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="w-full justify-start items-start gap-2 inline-flex">
                                            <div
                                                class="text-neutral-900 font-semibold Body1">
                                                Muhammad Alif</div>
                                            <div
                                                class="text-neutral-900 font-semibold Body1">
                                                -</div>
                                            <div
                                                class="w-fit text-netral-500 font-normal Body1">
                                                Mahasiswa</div>
                                        </div>
                                        <div
                                            class="w-full text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                            9 menit lalu</div>
                                    </div>
                                    <i class="text-32 ph ph-dots-three-vertical"></i>
                                </div>
                                <div class="w-full h-fit flex-col justify-start items-start gap-2 flex">
                                    <div
                                        class="w-full text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa
                                        mengetahui rinciannya?</div>
                                    <div class="w-full justify-start items-center gap-4 inline-flex">
                                        <div
                                            class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                            <div
                                                class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">
                                                Pencairan KIPK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-32 flex-col justify-start items-start gap-8 flex">
                            <div class="w-full h-32 flex-col justify-start items-start gap-6 flex">
                                <div
                                    class="w-full px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                                    <div class="h-7 justify-start items-start gap-1 flex">
                                        <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">0
                                        </div>
                                        <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                            Jawaban</div>
                                    </div>
                                </div>
                                <div class="w-full h-16 px-6 flex-col justify-center items-start gap-2 flex">
                                    <div
                                        class="w-full text-netral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Belum Ada Jawaban</div>
                                    <div class="w-full justify-start items-center gap-4 inline-flex">
                                        <div class="rounded-full justify-start items-center gap-1 flex">
                                            <i class="text-32 ph ph-chat-teardrop-text"></i>
                                            <div
                                                class="px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2 flex">
                                                <div
                                                    class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                    Berikan jawaban atau tanggapan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Right Content --}}
            <section class="w-full lg:max-w-360 flex-col justify-start items-start gap-6 flex">
                <div class="w-full py-4 px-6 bg-primary-100 rounded justify-start items-start flex text-netral-900 font-semibold Heading2">
                        Terpopuler
                </div>
                <div class=" h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                    <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                    <div
                                        class="text-neutral-900 font-semibold Body1">
                                        Muhammad Alif</div>
                                    <div
                                        class="text-neutral-900 font-semibold Body1">
                                        -</div>
                                    <div
                                        class="w-fit text-netral-500 font-normal Body1">
                                        Mahasiswa</div>
                                </div>
                                <div
                                    class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                    9 menit lalu</div>
                            </div>
                            <i class="text-32 ph ph-dots-three-vertical"></i>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                            <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa
                                mengetahui rinciannya?</div>
                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                <div
                                    class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                    <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">
                                        Pencairan KIPK</div>
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
                                        <div
                                            class="text-neutral-900 font-semibold Body1">
                                            Muhammad Alif</div>
                                        <div
                                            class="text-neutral-900 font-semibold Body1">
                                            -</div>
                                        <div
                                            class="w-fit text-netral-500 font-normal Body1">
                                            Mahasiswa</div>
                                    </div>
                                    <div
                                        class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                        9 menit lalu</div>
                                </div>
                                <i class="text-32 ph ph-dots-three-vertical"></i>
                            </div>
                            <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                                <div
                                    class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                    Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa
                                    mengetahui rinciannya?</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div
                                        class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                        <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">
                                            Pencairan KIPK</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Hide Button X
    function toggleClearButton() {
        var inputField = document.getElementById("searchText");
        var clearButton = document.getElementById("clearButton");

        // Periksa apakah nilai di dalam input field kosong
        if (inputField.value.trim() === "") {
            clearButton.classList.add(''); // Sembunyikan tombol jika kosong
        } else {
            clearButton.classList.remove('hidden', 'flex'); // Tampilkan tombol jika tidak kosong
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
