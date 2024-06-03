@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="w-full h-fit xl:px-56 px-8 pt-8 pb-24 bg-white flex-col justify-start items-center gap-8 inline-flex">
        <div class="w-full max-w-1480 text-neutral-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">Berita</div>
        {{-- Data Wrap Test --}}
        {{-- <div class="w-full bg-blue-700 p-20">
        <div class="flex flex-wrap gap-6 bg-red-400 justify-start">
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">1</div>
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">2</div>
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">3</div>
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">4</div>
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">5</div>
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">6</div>
          <div class="flex-shrink-0 flex-grow basis-1/4 bg-white text-center">7</div>
        </div>
        </div> --}}
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
        {{-- Content Card Berita --}}
        <div class="gap-8 bg-yellow-300 justify-center items-center">
            <div class="w-full flex max-w-1480 flex-wrap gap-8 bg-red-300 justify-center">
                <a href="/berita-detail" class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </a>
                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                    <div class="h-fit flex-col justify-start items-start gap-3 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                            <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                <div
                                    class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                    Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                            </div>
                        </div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div
                                class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                29 Juli 2022</div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                SBMPN</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
            <div class="text-center text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lihat Selengkapnya
            </div>
        </div>
    </div>

    {{-- Fungsi Option Card --}}
    <script>
        const optionButtons = document.querySelectorAll('.option-button');

        // Loop melalui setiap tombol opsi dan tambahkan event listener
        optionButtons.forEach(function(optionButton) {
            optionButton.addEventListener('click', function () {
                // Dapatkan menu terkait
                const optionMenu = this.nextElementSibling;
                // Toggle tampilan menu
                optionMenu.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            });

            // Ambil tombol tutup terkait
            const closeButton = optionButton.nextElementSibling.querySelector('.close-button');
            if (closeButton) {
                // Tambahkan event listener untuk tombol tutup
                closeButton.addEventListener('click', function () {
                    // Dapatkan menu terkait
                    const optionMenu = this.parentNode.parentNode.parentNode.parentNode;
                    // Sembunyikan menu
                    optionMenu.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                });
            }
            // Tambahkan event listener untuk tombol "Batalkan 2"
            document.addEventListener('click', function(event) {
                // Cek apakah yang diklik adalah tombol "Batalkan 2"
                if (event.target.classList.contains('close-button-bg')) {
                    // Dapatkan menu terkait dengan tombol "Batalkan 2"
                    const optionMenu = event.target.closest('.option-card-menu');
                    // Sembunyikan menu
                    optionMenu.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
    </script>

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
