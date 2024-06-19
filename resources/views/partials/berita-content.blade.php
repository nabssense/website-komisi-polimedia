    <div class="w-full h-fit px-4 md:px-8 xl:px-16 {{ $active === 'Beranda' ? 'py-16' : '' }} pt-24 md:pt-32 pb-24 bg-white flex-col justify-start items-center gap-8 inline-flex ">
        <div class="w-full max-w-1480 text-neutral-900 font-extrabold Heading1 flex">Berita
        </div>
        {{-- Search Bar dll --}}
        
        <section class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex ">
            @if ( $active === 'Beranda')
            
            @else
            <div class="w-full justify-start items-start gap-4 flex md:flex-row xs:flex-col">
                <div class="w-full h-fit bg-white rounded-full border justify-start items-center flex-col flex relative">
                    <input id="searchText" oninput="toggleClearButton()" type="text"
                        class="w-full rounded-full grow shrink basis-0 px-6 py-2 border text-zinc-800 text-lg font-normal font-THICCCBOI leading-7 focus:outline-none focus:border-primary-base focus:font-semibold focus:text-netral-800"
                        placeholder="Cari Berita">
                    <button id="clearButton" onclick="clearSearchText()" type="reset"
                        class="hidden mx-6 w-fit text-xl text-netral-900 ph ph-x absolute right-0 "></button>
                </div>
                {{-- Urutkan --}}
                <div class="w-full flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                    <div class="relative inline-block text-left">
                        <button type="button"
                            class="option-button px-6 py-2 bg-white rounded-full border border-neutral-800 justify-start items-center gap-8 flex">
                            <div class="justify-start items-center gap-3 flex">
                                <i class="text-xl text-netral-900 ph ph-funnel-simple"></i>
                                <div class="text-zinc-800 text-lg font-normal font-THICCCBOI leading-7">Urutkan
                                </div>
                            </div>
                            <i class="text-xl text-netral-900 ph ph-caret-down"></i>
                        </button>
                        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                            role="menu" aria-orientation="vertical" tabindex="-1">
                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4"
                                    role="none">
                                    <div class="text-start w-full px-4 py-8 text-2xl font-THICCCBOI text-netral-900">
                                        Urutkan</div>
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
                    <div class="relative inline-block text-left">
                        <button type="button"
                            class="option-button px-6 py-2 bg-white rounded-full border border-neutral-800 justify-start items-center gap-8 flex">
                            <div class="justify-start items-center gap-3 flex">
                                <i class="text-xl text-netral-900 ph ph-square-half"></i>
                                <div class="text-zinc-800 text-lg font-normal font-THICCCBOI leading-7">Kategori
                                </div>
                            </div>
                            <i class="text-xl text-netral-900 ph ph-caret-down"></i>
                        </button>
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
            <div class=" w-full h-fit justify-start items-center gap-8 inline-flex ">
                <div class="px-0 py-1 rounded-full flex-col justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Filter
                    </div>
                </div>
                <div
                    class="w-full h-fit justify-start items-center gap-4 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden ">
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                    <div
                        class="px-9 py-2 bg-white rounded-full border border-stone-300 flex-col justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Beli
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Content Berita --}}
        <section class="w-full max-w-1480 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 flex-wrap gap-3 md:gap-8  justify-center">
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
            <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="aspect-square flex">
                        <img class="w-full h-full object-cover rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="w-full justify-start items-start flex flex-col">
                    <div
                        class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                        Mahasiswa Polimedia Raih Prestasi Juara Street Photo Prestasi Juara Street Photo</div>
                    <div
                        class="grow shrink basis-0 text-netral-600 font-normal Body2">
                        29 Juli 2022</div>
                    <div
                        class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                        SBMPN</div>
                </div>
            </button>
        </section>
        <button class="btn-secondary">Lihat Selengkapnya
        </button>
    </div>

    {{-- Fungsi Option Card --}}
    <script>
        const optionButtons = document.querySelectorAll('.option-button');

        // Loop melalui setiap tombol opsi dan tambahkan event listener
        optionButtons.forEach(function(optionButton) {
            optionButton.addEventListener('click', function() {
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
                closeButton.addEventListener('click', function() {
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
