<div
    class="w-full h-fit {{ $active === 'Beranda' ? 'pt-8 lg:py-16' : '' }} px-4 md:px-8 xl:px-16 py-16 md:py-32 bg-netral-100 flex-col justify-center items-center inline-flex ">
    {{-- Button Fix --}}
    <a href="/forum-diskusi/create"
        class="{{ $active === 'Beranda' ? 'hidden' : '' }} btn-primary w-fit fixed bottom-18 right-2 z-50 lg:hidden drop-shadow-2xl">
        <i class="ph ph-plus"></i>
        <div class="before:content-['Pertanyaan'] md:before:content-['Ajukan_Pertanyaan']"></div>
    </a>
    <div class="w-full max-w-1480 h-fit flex-col justify-center items-center gap-4 lg:gap-8 flex ">
        <div
            class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 {{ $active === 'Beranda' ? 'flex' : 'hidden' }} flex-col md:flex-row lg:flex ">
            <p class="w-full Heading1 font-extrabold {{ $active === 'Beranda' ? 'flex' : 'hidden' }}  lg:flex">Berita
            </p>
        </div>
        {{-- Search Bar dll --}}

        <div class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex">
            @if ($active === 'Beranda')
            @else
                <div class="w-full px-4 md:px-0 xl:px-0 justify-center items-start gap-4 flex flex-col md:flex-row ">
                    <form method="GET" action="{{ route('forum-diskusi.index') }}"
                        class="w-full h-fit m-0 flex justify-center relative">
                        <input id="searchText" oninput="toggleClearButton()" type="text" class="searchbar"
                            name="search" value="{{ $search }}" placeholder="Official Store">
                        <button id="clearButton" onclick="clearSearchText()" type="button"
                            class="hidden px-4 lg:px-6 w-fit text-base lg:text-xl text-netral-900 ph ph-x absolute right-0 h-full"></button>
                    </form>

                    {{-- Urut & Kategori --}}
                    <div
                        class="w-full md:w-fit hidden lg:flex flex-none overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                        {{-- Button Urutkan --}}
                        <div class="w-fit flex flex-row">
                            <button id="menuButton" onclick="toggleDropdownPopUp()" type="button"
                                class="btn-popup option-button">
                                <i class="ph ph-funnel-simple"></i>
                                <div class="">Urutkan</div>
                                <i class="ph ph-caret-down"></i>
                            </button>
                            {{-- Pop Up --}}
                            <div id="menuDropdown"
                                class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                <div onclick="toggleDropdownPopUp(); event.stopPropagation()"
                                    class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                    <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
                                        role="none">
                                        <div class="w-full flex flex-col gap-4">
                                            <div class="w-full text-start Heading3">Urutkan</div>
                                            <div class="w-full flex flex-col gap-2">
                                                <button onclick="sortDiscussions('az')"
                                                    class="btn-popup-sm">A-Z</button>
                                                <button onclick="sortDiscussions('za')"
                                                    class="btn-popup-sm">Z-A</button>
                                                <button onclick="sortDiscussions('newest')"
                                                    class="btn-popup-sm">Terbaru</button>
                                                <button onclick="sortDiscussions('oldest')"
                                                    class="btn-popup-sm">Terlama</button>
                                                <button onclick="sortDiscussions('most_liked')"
                                                    class="btn-popup-sm">Like Terbanyak</button>
                                                <button onclick="sortDiscussions('least_liked')"
                                                    class="btn-popup-sm">Like Terdikit</button>
                                            </div>
                                        </div>
                                        <button class="w-full flex btn-secondary-sm px-4"
                                            onclick="toggleDropdownPopUp()">
                                            Tutup
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- Kategori --}}
                        <div class="w-fit flex flex-row">
                            <button id="menuButton" onclick="toggleDropdownPopUp()" type="button"
                                class="btn-popup option-button">
                                <i class="ph ph-square-half"></i>
                                <div class="">Kategori</div>
                                <i class=" text-netral-900 ph ph-caret-down"></i>
                            </button>
                            {{-- Pop Up --}}
                            <div id="menuDropdown"
                                class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                <div onclick="; event.stopPropagation(); toggleDropdownPopUp()"
                                    class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                    <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
                                        role="none">
                                        <div class="w-full flex flex-col gap-4">
                                            <div class="w-full text-start Heading3">Kategori</div>
                                            <div class="w-full flex flex-wrap gap-2">
                                                <button
                                                    onclick="window.location.href='{{ route('forum-diskusi.index') }}'"
                                                    class="btn-popup-sm {{ !isset($withCategory) ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}">
                                                    Semua
                                                </button>
                                                @foreach ($categories as $category)
                                                    <button
                                                        onclick="toggleCategory('{{ $category->slug }}', '{{ route('forum-diskusi.index') }}', '{{ route('forum-diskusi.diskusi.kategori.show', $category->slug) }}')"
                                                        class="btn-popup-sm {{ isset($withCategory) && $withCategory->id === $category->id ? 'border-primary-base bg-primary-100 text-primary-base' : '' }} ">
                                                        {{ $category->name }}
                                                    </button>
                                                @endforeach
                                            </div>
                                        </div>
                                        <button class="w-full flex btn-secondary-sm px-4"
                                            onclick="toggleDropdownPopUp()">
                                            Tutup
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
            {{-- Filter dll --}}
            <div class="w-full h-fit px-4 md:px-0 xl:px-0 justify-start items-center gap-2 md:gap-8 inline-flex">
                <div class="py-1 rounded-full flex-col justify-center items-center gap-6 hidden lg:flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Filter
                    </div>
                </div>

                <div
                    class="w-full h-fit justify-start items-center gap-2 lg:gap-4 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden ">
                    <button onclick="window.location.href='{{ route('forum-diskusi.index') }}'"
                        class="btn-popup {{ !isset($withCategory) ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}">
                        Semua
                    </button>
                    @foreach ($categories as $category)
                        <button
                            onclick="toggleCategory('{{ $category->slug }}', '{{ route('forum-diskusi.index') }}', '{{ route('forum-diskusi.diskusi.kategori.show', $category->slug) }}')"
                            class="btn-popup {{ isset($withCategory) && $withCategory->id === $category->id ? 'border-primary-base bg-primary-100 text-primary-base' : '' }} ">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>

                {{-- Button Selection --}}
                <div class="w-fit flex flex-row lg:hidden">
                    <button type="button" class="btn-popup option-button">
                        <div class="justify-start items-center gap-3 flex">
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
                                        class="close-button flex w-full text-center px-4 py-3 text-xl font-THICCCBOI bg-primary-100 rounded-full text-netral-900 hover:bg-primary-200 hover:text-netral-900"
                                        role="menuitem">Batalkan</button>
                                    <button href="#"
                                        class="flex w-full text-center px-4 py-3 bg-primary-base rounded-full text-xl font-THICCCBOI text-netral-100 hover:bg-primary-500"
                                        role="menuitem">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content Berita --}}
        <section
            class="w-full max-w-1480 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 flex-wrap gap-3 md:gap-8 justify-center">
            @forelse($news as $oneNews)
                <button onclick="" class="flex w-full flex-col justify-start items-start gap-2">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="w-full h-fit aspect-square flex">
                            @if (!empty($firstImages[$oneNews->id]))
                                <img class="aspect-square object-cover rounded-lg"
                                    src="{{ asset('storage/' . $firstImages[$oneNews->id]) }}" alt="First Image">
                            @else
                                <p>No image available.</p>
                            @endif
                        </div>
                    </div>
                    <div class="w-full justify-start items-start flex flex-col">
                        <div class="w-full text-left line-clamp-2 text-netral-900 font-semibold Body1">
                            {{ $oneNews->title }}</div>
                        <div class="grow shrink basis-0 text-netral-600 font-normal Body2">
                            {{ $oneNews->created_at->format('d M Y') }}</div>
                        <div class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                            {{ $oneNews->category->name }}</div>
                    </div>
                </button>
            @empty
            @endforelse
        </section>
        <button class="btn-secondary">Lihat Selengkapnya
        </button>
    </div>
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
