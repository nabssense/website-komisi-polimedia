<div
    class="w-full h-fit {{ $active === 'Beranda' ? 'pt-8 lg:py-16' : '' }} px-4 md:px-8 xl:px-16 py-20 md:py-32 bg-netral-100 flex-col justify-center items-center inline-flex">
    <div class="w-full max-w-1480 h-fit flex-col justify-center items-center gap-4 lg:gap-8 flex ">
        <div
            class="w-full justify-start items-center gap-4 {{ $active === 'Beranda' ? 'flex' : 'hidden' }} flex-col md:flex-row lg:flex">
            <p class="w-full Heading1 font-extrabold {{ $active === 'Beranda' ? 'flex' : 'hidden' }}  lg:flex">Berita</p>
        </div>

        {{-- Search Bar --}}
        <div class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex">
            @if ($active !== 'Beranda')
                <div class="w-full justify-center items-start gap-4 flex flex-col md:flex-row">
                    <form method="GET" action="{{ route('berita.index') }}"
                        class="w-full h-fit m-0 flex justify-center relative">
                        <input id="searchText" oninput="toggleClearButton()" type="text" class="searchbar"
                            name="search" value="{{ $search }}" placeholder="Cari berita">
                        <button id="clearButton" onclick="clearSearchText()" type="button"
                            class="hidden lg:px-6 w-fit text-base lg:text-xl text-netral-900 ph ph-x absolute right-0 h-full"></button>
                    </form>
                    {{-- Pop Up --}}
                    <div id="menuDropdownSort"
                        class="flex-col Body1 gap-2 fixed top-0 left-0  justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                        <div onclick="toggleDropdownPopUp('sort'); event.stopPropagation()"
                            class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                            <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
                                role="none">
                                <div class="w-full flex flex-col gap-4">
                                    <div class="w-full text-start Heading3">Urutkan</div>
                                    <div class="w-full flex flex-col gap-2">
                                        <a href="{{ route('berita.index', ['sort_field' => 'title', 'sort_order' => 'asc']) }}"
                                            class="btn-popup-sm">A-Z</a>
                                        <a href="{{ route('berita.index', ['sort_field' => 'title', 'sort_order' => 'desc']) }}"
                                            class="btn-popup-sm">Z-A</a>
                                        <a href="{{ route('berita.index', ['sort_field' => 'created_at', 'sort_order' => 'desc']) }}"
                                            class="btn-popup-sm">Terbaru</a>
                                        <a href="{{ route('berita.index', ['sort_field' => 'created_at', 'sort_order' => 'asc']) }}"
                                            class="btn-popup-sm">Terlama</a>
                                    </div>
                                </div>
                                <button class="w-full flex btn-secondary-sm px-4"
                                    onclick="toggleDropdownPopUp('sort')">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Button Urutkan --}}
                    <div class="w-fit lg:flex flex-row hidden ">
                        <button id="menuButtonSort" onclick="toggleDropdownPopUp('sort')" type="button"
                            class="btn-popup option-button">
                            <i class="ph ph-funnel-simple"></i>
                            <div class="">Urutkan</div>
                            <i class="ph ph-caret-down"></i>
                        </button>
                        
                    </div>

                    {{-- Kategori --}}
                    <div class="w-fit lg:flex flex-row hidden">
                        <button id="menuButtonCategory" onclick="toggleDropdownPopUp('category')" type="button"
                            class="btn-popup option-button">
                            <i class="ph ph-square-half"></i>
                            <div class="">Kategori</div>
                            <i class=" text-netral-900 ph ph-caret-down"></i>
                        </button>
                        {{-- Pop Up --}}
                        <div id="menuDropdownCategory"
                            class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                            <div onclick="toggleDropdownPopUp('category'); event.stopPropagation()"
                                class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4"
                                    role="none">
                                    <div class="w-full flex flex-col gap-4">
                                        <div class="w-full text-start Heading3">Kategori</div>
                                        <div class="w-full flex flex-wrap gap-2">
                                            <a href="{{ route('berita.index') }}"
                                                class="btn-popup-sm {{ !isset($withCategory) ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}">
                                                Semua
                                            </a>
                                            @foreach ($categories as $category)
                                                <a href="{{ route('berita.index', ['category' => $category->slug]) }}"
                                                    class="btn-popup-sm {{ isset($withCategory) && $withCategory->id === $category->id ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}">
                                                    {{ $category->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button class="w-full flex btn-secondary-sm px-4"
                                        onclick="toggleDropdownPopUp('category')">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- Filter dll --}}
            <div class="w-full h-fit md:px-0 xl:px-0 justify-start items-center gap-2 md:gap-8 inline-flex">
                <div class="py-1 rounded-full flex-col justify-center items-center gap-6 hidden lg:flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Filter
                    </div>
                </div>
                <div
                    class="w-full h-fit justify-start items-center gap-2 lg:gap-4 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden ">
                    <a href="{{ route('berita.index') }}"
                        class="btn-popup {{ !isset($withCategory) ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}">
                        Semua
                    </a>
                    @foreach ($categories as $category)
                        <a href="{{ route('berita.index', ['category' => $category->slug]) }}"
                            class="btn-popup {{ isset($withCategory) && $withCategory->id === $category->id ? 'border-primary-base bg-primary-100 text-primary-base' : '' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
                {{-- Button Urutkan --}}
                <div class="w-fit flex flex-row lg:hidden ">
                    <button id="menuButtonSort" onclick="toggleDropdownPopUp('sort')" type="button"
                        class="btn-popup option-button">
                        <i class="ph ph-funnel-simple"></i>
                        <div class="">Urutkan</div>
                        <i class="ph ph-caret-down"></i>
                    </button>
                    
                </div>
            </div>
            {{-- Content Berita --}}
            <section
                class="w-full max-w-1480 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 flex-wrap gap-3 md:gap-8 justify-center">
                @forelse($news as $oneNews)
                    <a href="{{ route('berita.show', $oneNews->slug) }}"
                        class="flex w-full flex-col justify-start items-start gap-2">
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
                                {{ $oneNews->title }}
                            </div>
                            <div class="grow shrink basis-0 text-netral-600 font-normal Body2">
                                {{ $oneNews->created_at->format('d M Y') }}
                            </div>
                            <div
                                class="grow shrink basis-0 text-right text-stone-500 font-normal font-THICCCBOI Body2">
                                {{ $oneNews->category->name }}
                            </div>
                        </div>
                    </a>
                @empty
                    <p>Tidak ada berita yang ditemukan.</p>
                @endforelse
            </section>

            <button class="btn-secondary">Lihat Selengkapnya</button>
        </div>
    </div>
</div>

<script>
    function toggleDropdownPopUp(type) {
        const dropdown = document.getElementById(`menuDropdown${type.charAt(0).toUpperCase() + type.slice(1)}`);
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            dropdown.classList.add('flex');
            // Add event listener for scrolling
            window.addEventListener('scroll', () => hideDropdown(type), {
                once: true
            });
        } else {
            dropdown.classList.add('hidden');
            dropdown.classList.remove('flex');
            // Remove event listener for scrolling
            window.removeEventListener('scroll', () => hideDropdown(type));
        }
    }

    function hideDropdown(type) {
        const dropdown = document.getElementById(`menuDropdown${type.charAt(0).toUpperCase() + type.slice(1)}`);
        dropdown.classList.add('hidden');
        dropdown.classList.remove('flex');
    }

   

    function sortNews(sortType) {
        // Implement your sorting logic here based on sortType parameter
        // You can use AJAX or reload the page with sorting query parameters
        console.log('Sorting type:', sortType);

        // Remove active state from previously active button
        const activeButton = document.querySelector('.btn-popup-sm-sort[aria-selected="true"]');
        if (activeButton) {
            activeButton.removeAttribute('aria-selected');
        }

        // Find the selected sort button
        const sortButton = document.querySelector(`.btn-popup-sm-sort[data-sort-type='${sortType}']`);

        // Set active state to the selected sort button
        sortButton.setAttribute('aria-selected', 'true');

        // Close the dropdown after selecting an option
        toggleDropdownPopUp('sort');
    }
</script>
