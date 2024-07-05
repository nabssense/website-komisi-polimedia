<div
    class="w-full h-fit md:px-8 xl:px-16  {{ $active === 'Beranda' ? 'pt-8 lg:pt-16' : '' }} pt-20 md:py-32 bg-soft-base flex-col justify-center items-center inline-flex ">
    {{-- Button Fix --}}

    @auth
        <a href="/forum-diskusi/create"
            class=" btn-primary w-fit {{ $active === 'Masuk Akun' || $active === 'Daftar Akun' ? 'hidden' : '' }} fixed bottom-18 right-2 z-50 lg:hidden drop-shadow-2xl">
            <i class="ph ph-plus"></i>
            <div class="before:content-['Pertanyaan'] md:before:content-['Mulai_Bertanya']"></div>
        </a>
    @endauth
    @guest
        <a href="/masuk-akun" class=" btn-primary w-fit {{ $active === 'Masuk Akun' || $active === 'Daftar Akun' ? 'hidden' : '' }} fixed bottom-18 right-2 z-50 lg:hidden drop-shadow-2xl">
            <i class="ph ph-plus"></i>
            <div class="before:content-['Pertanyaan'] md:before:content-['Mulai_Bertanya']"></div>
        </a>
    @endguest
    <div class="w-full max-w-1480 h-fit bg-soft-base flex-col justify-center items-center gap-4 lg:gap-8 flex ">
        <div
            class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 {{ $active === 'Beranda' ? 'flex' : 'hidden' }} flex-col md:flex-row lg:flex ">
            <p class="w-full Heading1 font-extrabold {{ $active === 'Beranda' ? 'flex' : 'hidden' }}  lg:flex">Forum
                Diskusi
            </p>
            @auth
                <a href="/forum-diskusi/create" class="btn-primary w-fit md:flex hidden">
                    <i class="ph ph-plus"></i>
                    <div class="before:content-['Pertanyaan'] md:before:content-['Mulai_Bertanya']"></div>
                </a>
            @endauth
            @guest
                <a href="/masuk-akun" class="btn-primary w-fit md:flex hidden">
                    <i class="ph ph-plus"></i>
                    <div class="before:content-['Pertanyaan'] md:before:content-['Masuk_Bertanya']"></div>
                </a>
            @endguest
        </div>
        {{-- Search Bar dll --}}

        <div class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex">
            @if ($active === 'Beranda')
            @else
                <div class="w-full px-4 md:px-0 xl:px-0 justify-center items-start gap-4 flex flex-col md:flex-row ">
                    <form method="GET" action="{{ route('forum-diskusi.index') }}"
                        class="w-full h-fit m-0 flex justify-center relative">
                        <input id="searchText" oninput="toggleClearButton()" type="text" class="searchbar"
                            name="search" value="{{ $search }}" placeholder="Cari Pertanyaan">
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
                                        role="none" >
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


        {{-- Main Content --}}
        <div class="w-full h-fit self-stretch justify-center items-start gap-4 flex flex-col xl:flex-row ">
            {{-- Left Content --}}
            <section class=" w-full h-fit self-stretch rounded-3xl flex-col justify-start items-start gap-4 flex">
                <div
                    class="w-full py-2 px-4 md:px-8 bg-netral-100 md:rounded-lg justify-start items-start flex text-netral-900 font-semibold Heading2">
                    @if (isset($search))
                        {{ "Hasil Pencarian \"$search\"" }}
                    @else
                        {{ 'Semua Pertanyaan' }}
                    @endif
                    <span>{{ isset($withCategory) ? ' Kategori ' . $withCategory->name : '' }}</span>
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                    @forelse ($discussions as $discussion)
                        {{-- Question --}}
                        <div
                            class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
                            <div onclick="window.location.href='{{ route('forum-diskusi.show', $discussion->slug) }}'"
                                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200 cursor-pointer">
                                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                                    {{-- Profil --}}
                                    <div class="w-full justify-start items-center gap-2 inline-flex relative">
                                        <div class="flex-none" href="{{ route('user.profile')}}">
                                            <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                                ? $discussion->user->profile_picture
                                                : Storage::url($discussion->user->profile_picture) }}"
                                                alt="{{ $discussion->user->fullname }}"
                                                class="rounded-full w-9 lg:w-12">
                                        </div>
                                        <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1"
                                            onclick="event.stopPropagation();">
                                            <div class="w-full justify-start items-center gap-2 inline-flex ">
                                                <div class="justify-start items-center gap-2 flex">
                                                    <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                        {{ $discussion->user->fullname }}</p>
                                                    <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                                </div>
                                                <div class="text-netral-900 font-semibold hidden md:flex">
                                                    -</div>
                                                <div class="w-fit text-netral-500 font-normal relative hidden lg:flex">
                                                    <p class="w-full line-clamp-1">{{ $discussion->user->user_type }}
                                                    </p>
                                                </div>
                                                <i
                                                    class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                                    <div id="info-akun"
                                                        class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                        {{ $discussion->user->user_type }}</div>
                                                </i>
                                            </div>
                                            <p class="w-fit text-neutral-900 font-medium Body2">
                                                {{ $discussion->created_at->diffForHumans() }}</p>
                                        </div>
                                        {{-- Menu --}}
                                        <i id="menuButton-{{ $discussion->slug }}"
                                            onclick="toggleDropdownPopUp('{{ $discussion->slug }}'); event.stopPropagation()"
                                            class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative cursor-pointer">
                                        </i>
                                        <div id="menuDropdown-{{ $discussion->slug }}"
                                            class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="toggleDropdownPopUp('{{ $discussion->slug }}'); event.stopPropagation()"
                                                class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div class="w-full flex flex-col gap-2">
                                                        @if ($discussion->user_id === auth()->id())
                                                            <button
                                                                onclick="location.href='{{ route('forum-diskusi.edit', $discussion->slug) }}'"
                                                                class="w-full flex btn-tertiary-sm px-4">
                                                                Ubah
                                                            </button>
                                                            <form id="deleteForm-{{ $discussion->slug }}"
                                                                action="{{ route('forum-diskusi.destroy', $discussion->slug) }}"
                                                                class="w-full m-0" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    onclick="confirmDelete('{{ $discussion->slug }}')"
                                                                    class="w-full flex btn-tertiary-sm px-4">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                    <button class="w-full flex btn-secondary-sm px-4"
                                                        onclick="toggleDropdownPopUp('{{ $discussion->slug }}')">
                                                        Tutup
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Alert Delete --}}
                                        <div id="alertDelete-{{ $discussion->slug }}"
                                            class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="hideAlertDelete('{{ $discussion->slug }}')"
                                               class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                    <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div class="w-full Heading4 text-center">Kamu yakin ingin menghapus
                                                        ini?</div>
                                                    <div class="w-full flex flex-row gap-2">
                                                        <button id="confirm-delete-button-{{ $discussion->slug }}"
                                                            onclick="confirmDelete('{{ $discussion->slug }}')"
                                                            class="w-full flex btn-secondary-sm px-4">
                                                            Iya, Hapus
                                                        </button>
                                                        <button id="cancel-delete-button-{{ $discussion->slug }}"
                                                            onclick="hideAlertDelete('{{ $discussion->slug }}')"
                                                            class="w-full flex btn-primary-sm px-4">
                                                            Tidak
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content --}}
                                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex"
                                        onclick="window.location.href='{{ route('forum-diskusi.show', $discussion->slug) }}'">
                                        <div class="w-full flex flex-col gap-2">
                                            <button
                                                onclick="event.stopPropagation(); window.location.href='{{ route('forum-diskusi.diskusi.kategori.show', $discussion->category->slug) }}'"
                                                class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                                {{ $discussion->category->name }}
                                            </button>
                                            <div class="w-full text-neutral-900 font-normal Body1 md:Heading4">
                                                {{ $discussion->title }}</div>
                                        </div>
                                        @if (isset($discussion->image) && !empty($discussion->image))
                                            <div class="h-48 rounded-2xl overflow-clip">
                                                <img class="h-full"
                                                    src="{{ asset('storage/' . $discussion->image) }}"
                                                    alt="Gambar Diskusi">
                                            </div>
                                        @endif
                                    </div>
                                    {{-- Like & Comment --}}
                                    <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex cursor-default"
                                        onclick="event.stopPropagation()">
                                        <button id="discussion-like-{{ $discussion->slug }}" type="button"
                                            data-discussion-slug="{{ $discussion->slug }}"
                                            data-liked="{{ $discussion->liked() }}"
                                            @guest href="/masuk-akun" @endguest
                                            class="like-button w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                                            <div class="w-fit flex flex-none items-center gap-1">
                                                <i class="text-32 lg:text-4xl text-love-base ph-heart {{ $discussion->liked() ? 'ph-fill' : 'ph' }}"
                                                    alt="Like"
                                                    id="discussion-like-icon-{{ $discussion->slug }}"></i>
                                            </div>
                                            <div id="discussion-like-count-{{ $discussion->slug }}"
                                                class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium flex md:after:content-['\00A0_Terbantu']">
                                                {{ $discussion->likeCount }}
                                            </div>
                                        </button>
                                        <div class="w-fit flex flex-none items-center gap-1 Body1 cursor-pointer"
                                            onclick="window.location.href='{{ route('forum-diskusi.show', $discussion->slug) }}'">
                                            <i
                                                class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                                            <div id="discussion-like-count-{{ $discussion->slug }}"
                                                class="w-full text-nowrap rounded-full justify-start items-start text-netral-900 font-medium flex md:after:content-['\00A0_Balasan']">
                                                {{ $discussion->likeCount }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Answer --}}
                            <div onclick="window.location.href='{{ route('forum-diskusi.show', $discussion->slug) }}'"
                                class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                                {{-- Answer Content --}}

                                
                                    <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">
                                        <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                                {{-- Profil --}}
                                                <div class="flex-none" href="{{ route('user.profile')}}">
                                                    <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                                        ? $discussion->user->profile_picture
                                                        : Storage::url($discussion->user->profile_picture) }}"
                                                        alt="{{ $discussion->user->fullname }}"
                                                        class="rounded-full w-9 lg:w-12">
                                                </div>
                                                <div
                                                    class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                                    <div class="w-full justify-start items-center gap-2 inline-flex ">
                                                        <div class="justify-start items-center gap-2 flex">
                                                            <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                                {{ $discussion->user->fullname }}</p>
                                                            <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                                        </div>
                                                        <div class="text-netral-900 font-semibold hidden md:flex">
                                                            -</div>
                                                        <div
                                                            class="w-fit  text-netral-500 font-normal relative hidden lg:flex">
                                                            <p class="w-full line-clamp-1">
                                                                {{ $discussion->user->user_type }}
                                                            </p>
                                                        </div>
                                                        <i
                                                            class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                                            <div id="info-akun"
                                                                class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                                {{ $discussion->user->user_type }}</div>
                                                        </i>
                                                    </div>
                                                    <p class="w-fit text-neutral-900 font-medium Body2">
                                                        {{ $discussion->created_at->diffForHumans() }}</p>
                                                </div>
                                                {{-- <i id="menuButton"
                                                    class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative">
                                                    <div id="menuDropdown"
                                                        class="w-fit h-fit flex-col absolute top-10 right-0 p-4 bg-netral-100 gap-4 hidden rounded-lg shadow-card-m">
                                                        <button
                                                            onclick="location.href='{{ route('forum-diskusi.edit', $discussion->slug) }}'"
                                                            class="w-full flex Body1">
                                                            Ubah
                                                        </button>
                                                        <button class="w-full flex Body1">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </i> --}}
                                            </div>
                                            {{-- Content --}}
                                            <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                                                <div class="w-full  flex flex-col gap-2">
                                                    <div
                                                        class="w-full break-all text-neutral-900 font-normal Body1 md:Heading4">
                                                        {{ $discussion->answer }}</div>
                                                </div>
                                                @if (isset($discussion->image) && !empty($answer->image))
                                                    <div class="h-48 rounded-2xl overflow-clip">
                                                        <img class="h-full"
                                                            src="{{ asset('storage/' . $answer->image) }}"
                                                            alt="Gambar Diskusi">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        
                        
                    @empty
                        <div class="w-full flex justify-center Heading4 py-8">
                            Data Tidak Ditemukan
                        </div>
                    @endforelse


                    {{ $discussions->links() }}
                </div>
            </section>


            {{-- Right Content/ POPULER --}}
            @include('partials.forum-diskusi.diskusi-terbantu')
        </div>
    </div>
</div>


<script src="{{ asset('js/discussionFunction.js') }}"></script>
<script src="{{ asset('js/discussionCategory.js') }}"></script>
<script src="{{ asset('js/discussionSort.js') }}"></script>
<script src="{{ asset('js/inputImagePreview.js') }}"></script>
