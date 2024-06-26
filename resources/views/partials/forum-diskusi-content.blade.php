<div
    class="w-full h-fit md:px-8 xl:px-16  {{ $active === 'Beranda' ? 'pt-8 lg:pt-16' : '' }} pt-16 md:py-32 bg-soft-base flex-col justify-center items-center inline-flex ">
    {{-- Button Fix --}}
    <button 
        class=" btn-primary w-fit fixed bottom-18 right-2 z-50 lg:hidden drop-shadow-2xl">
        <i class="ph ph-plus"></i>
        <div class="before:content-['Pertanyaan'] md:before:content-['Ajukan_Pertanyaan']"></div>
    </button>
    <div class="w-full max-w-1480 h-fit bg-soft-base flex-col justify-center items-center gap-4 lg:gap-8 flex ">
        <div
            class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 {{ $active === 'Beranda' ? 'flex' : 'hidden' }} flex-col md:flex-row lg:flex ">
            <p class="w-full Heading1 font-extrabold {{ $active === 'Beranda' ? 'flex' : 'hidden' }}  lg:flex">Forum
                Diskusi
            </p>
            {{-- <div>
                {{ $discussions->total() . ' ' 
                    . Str::plural('Discussion', $discussions->total()) }}
            </div> --}}
            
            @auth
                <button onclick="pageForumDiskusiAjukanPertanyaan()" class="btn-primary w-fit md:flex hidden">
                    <i class="ph ph-plus"></i>
                    <div class="before:content-['Pertanyaan'] md:before:content-['Ajukan_Pertanyaan']"></div>
                </button>
            @endauth
            @guest
                <button onclick="pageMasuk()" class="btn-primary w-fit md:flex hidden">
                    <i class="ph ph-plus"></i>
                    <div class="before:content-['Pertanyaan'] md:before:content-['Masuk_Untuk_Ajukan_Pertanyaan']"></div>
                </button>
            @endguest
        </div>
        {{-- Search Bar dll --}}

        <div class="w-full max-w-1480 h-fit flex-col justify-start items-center gap-4 flex">
            @if ($active === 'Beranda')
            @else
                <div class="w-full px-4 md:px-0 xl:px-0 justify-center items-start gap-4 flex flex-col md:flex-row ">
                    <form method="GET" action="{{ route('forum-diskusi.index') }}" class="w-full h-fit flex justify-center relative">
                        <input id="searchText" oninput="toggleClearButton()" type="text" class="searchbar" name="search" value="{{ $search ?? '' }}"
                            placeholder="Official Store">
                        <button id="clearButton" onclick="clearSearchText()" type="button"
                            class="hidden px-4 lg:px-6 w-fit text-base lg:text-xl text-netral-900 ph ph-x absolute right-0 h-full"></button>
                    </form>
                    {{-- Function Search --}}
                    <script>
                        function toggleClearButton() {
                            var searchText = document.getElementById('searchText').value;
                            var clearButton = document.getElementById('clearButton');
                            if (searchText.length > 0) {
                                clearButton.classList.remove('hidden');
                            } else {
                                clearButton.classList.add('hidden');
                            }
                        }
                    
                        function clearSearchText() {
                            var searchText = document.getElementById('searchText');
                            searchText.value = ''; // Reset input value to empty string
                            toggleClearButton(); // Hide clear button
                        }
                    </script>
                    {{-- Urut & Kategori --}}
                    <div
                        class="w-full md:w-fit hidden lg:flex flex-none overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                        {{-- Button Selection --}}
                        <div class="w-fit flex flex-row">
                            <button type="button" class="btn-popup option-button">
                                <i class=" ph ph-funnel-simple"></i>
                                <div class="">Urutkan</div>
                                <i class=" ph ph-caret-down"></i>
                            </button>
                            {{-- Pop Up --}}
                            <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                                role="menu" aria-orientation="vertical" tabindex="-1">
                                <div
                                    class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                    <div class="flex flex-col bg-netral-100 rounded-4xl w-480 h-fit justify-center items-center overflow-clip gap-4"
                                        role="none">
                                        <div
                                            class="text-start w-full px-4 py-8 text-2xl font-THICCCBOI text-netral-900">
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

                        <div class="w-fit flex flex-row">
                            <button type="button" class="btn-popup option-button">
                                <i class="ph ph-square-half"></i>
                                <div class="">Kategori</div>
                                <i class=" text-netral-900 ph ph-caret-down"></i>
                            </button>
                            {{-- Pop Up --}}
                            <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden"
                                role="menu" aria-orientation="vertical" tabindex="-1">
                                <div
                                    class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
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
            @endif
            {{-- Filter dll --}}
            <div class="w-full h-fit px-4 md:px-0 xl:px-0 justify-start items-center gap-2 md:gap-8 inline-flex">
                <div class="py-1 rounded-full flex-col justify-center items-center gap-6 hidden lg:flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Filter
                    </div>
                </div>
                
                <div
                    class="w-full h-fit justify-start items-center gap-2 lg:gap-4 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden ">
                    @foreach ($categories as $category)
                    <button class="btn-popup ">{{ $category->name }}
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
                    class="w-full py-2 px-4 md:px-8 bg-netral-100 md:rounded justify-start items-start flex text-netral-900 font-semibold Heading2">
                     @if (isset($search)) {{ "Hasil Pencarian \"$search\"" }} @else {{ 'Semua Pertanyaan' }} @endif
                    <span>{{ isset($withCategory) ? ' About ' . $withCategory->name : '' }}</span>
                </div>
                <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                    @forelse ($discussions as $discussion)
                        {{-- 1 --}}
                    <div
                        class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
                        <div
                            class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200">
                            <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                                {{-- Profil --}}
                                <div class="w-full justify-start items-center gap-2 inline-flex">
                                    @auth
                                        <div class="flex-none" onclick="pageUserProfile()">
                                            <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                                ? $discussion->user->profile_picture
                                                : Storage::url($discussion->user->profile_picture) }}"
                                                alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 md:w-12">
                                        </div>
                                    @endauth
                                    <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                        <div class="w-full justify-start items-center gap-2 inline-flex ">
                                            <div class="justify-start items-center gap-2 flex">
                                                <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                    {{ $discussion->user->fullname }}</p>
                                                <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                            </div>
                                            <div class="text-netral-900 font-semibold hidden md:flex">
                                                -</div>
                                            <div
                                                class="w-fit text-netral-500 font-normal flex relative hidden lg:flex">
                                                <p class="w-full line-clamp-1">Pembina Komisi
                                                </p>
                                            </div>
                                            <i
                                                class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                                <div id="info-akun"
                                                    class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                    Pembina Komisi</div>
                                            </i>
                                        </div>
                                        <p class="w-fit text-neutral-900 font-medium Body2">
                                            {{ $discussion->created_at->diffForHumans() }}</p>
                                    </div>
                                    <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                                </div>
                                {{-- Content --}}
                                <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                                    <div class="w-full flex flex-col gap-2">
                                        <div
                                            class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                            {{ $discussion->category->name }}
                                        </div>
                                        <div class="w-full text-neutral-900 font-normal Body1 md:Heading4">
                                            {{ $discussion->title }}</div>
                                    </div>
                                    <div class="h-48 rounded-2xl overflow-clip">
                                        <img class="h-full" src="{{ url('img/Kabinet/KOBRA/All-Team.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex">
                                    <button
                                        class="w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                                        <div class="w-fit flex flex-none items-center gap-1">
                                            <i class="text-32 lg:text-4xl text-love-base ph ph-heart"></i>
                                            <div class="text-love-base font-medium flex md:hidden">3</div>
                                        </div>
                                        <div
                                            class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium hidden md:flex">
                                            30 org merasa terbantu
                                        </div>
                                    </button>
                                    <div class="w-full rounded-full justify-start items-center gap-2 flex Body1">
                                        <div class="w-fit flex flex-none items-center gap-1">
                                            <i class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                                            <div class="text-netral-900 font-medium flex">3</div>
                                        </div>
                                        <button onclick="pageForumDiskusiPertanyaan()" class="commentbar">
                                            <div class="w-full line-clamp-1">Berikan jawaban atau tanggapan</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Comment --}}
                        <div onclick="pageForumDiskusiPertanyaan()"
                            class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                            <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">

                                <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                                    <div class="w-full justify-start items-center gap-2 inline-flex">
                                        {{-- Profil --}}
                                        @auth
                                            <div class="flex-none" onclick="pageUserProfile()">
                                                <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                                ? $discussion->user->profile_picture
                                                : Storage::url($discussion->user->profile_picture) }}"
                                                alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 md:w-12">
                                            </div>
                                        @endauth
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
                                                    <p class="w-full line-clamp-1">Pembina KOMISI</p>
                                                    {{-- <div id="info-akun"
                                                        class="w-fit h-fit p-4 lg:group-hover/info-akun:flex xl:group-hover/info-akun:hidden bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                        Pembina Komisi</div> --}}
                                                </div>
                                                <i
                                                    class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                                    <div id="info-akun"
                                                        class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                        Pembina Komisi</div>
                                                </i>
                                            </div>
                                            <p class="w-fit text-neutral-900 font-medium Body2">
                                                {{ $discussion->created_at->diffForHumans() }}</p>
                                        </div>
                                        <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                                    </div>
                                    {{-- Content --}}
                                    <div class="w-full text-neutral-900 font-normal Body1 md:Heading4 line-clamp-2">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa
                                        mengetahui rinciannya?</div>
                                    <button class="btn-sm-tertiary p-0">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="w-full flex justify-center Heading4">
                            Data Tidak Ditemukan
                        </div>
                    @endforelse
                    

                    {{ $discussions->links() }}
                </div>
            </section>

            {{-- Right Content --}}
            <section class="w-full xl:w-fit lg:max-w-480 flex-col justify-start items-start gap-4 flex">
                <div
                    class="w-full py-2 px-4 md:py-2 md:px-6 bg-love-base rounded justify-start items-start flex text-netral-100 font-semibold Heading2">
                    Terpopuler
                </div>
                {{-- 1 --}}
                <div
                class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
                <div
                    class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200">
                    <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                        {{-- Profil --}}
                        <div class="w-full justify-start items-center gap-2 inline-flex">
                            @auth
                                <div class="flex-none" onclick="pageUserProfile()">
                                    <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL)
                                        ? auth()->user()->profile_picture
                                        : Storage::url(auth()->user()->profile_picture) }}"
                                        alt="{{ auth()->user()->fullname }}" class="rounded-full w-9 md:w-12">
                                </div>
                            @endauth
                            <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                <div class="w-full justify-start items-center gap-2 inline-flex ">
                                    <div class="justify-start items-center gap-2 flex">
                                        <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                            Muhammad Alif</p>
                                        <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                    </div>
                                    <div class="text-netral-900 font-semibold hidden md:flex">
                                        -</div>
                                    <div
                                        class="w-fit text-netral-500 font-normal flex relative hidden lg:flex">
                                        <p class="w-full line-clamp-1">Pembina Komisi
                                        </p>
                                    </div>
                                    <i
                                        class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                        <div id="info-akun"
                                            class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                            Pembina Komisi</div>
                                    </i>
                                </div>
                                <p class="w-fit text-neutral-900 font-medium Body2">
                                    9 menit lalu</p>
                            </div>
                            <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                        </div>
                        {{-- Content --}}
                        <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                            <div class="w-full flex flex-col gap-2">
                                <div
                                    class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                    Pencairan KIPK
                                </div>
                                <div class="w-full text-neutral-900 font-normal Body1 md:Heading4">
                                    Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                    bisa
                                    mengetahui rinciannya?</div>
                            </div>
                            <div class="h-48 rounded-2xl overflow-clip">
                                <img class="h-full" src="{{ url('img/Kabinet/KOBRA/All-Team.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex">
                            <button
                                class="w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                                <div class="w-fit flex flex-none items-center gap-1">
                                    <i class="text-32 lg:text-4xl text-love-base ph ph-heart"></i>
                                    <div class="text-love-base font-medium flex md:hidden">3</div>
                                </div>
                                <div
                                    class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium hidden md:flex">
                                    30 org merasa terbantu
                                </div>
                            </button>
                            <div class="w-full rounded-full justify-start items-center gap-2 flex Body1">
                                <div class="w-fit flex flex-none items-center gap-1">
                                    <i class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                                    <div class="text-netral-900 font-medium flex">3</div>
                                </div>
                                <button onclick="pageForumDiskusiPertanyaan()" class="commentbar">
                                    <div class="w-full line-clamp-1">Berikan jawaban atau tanggapan</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Comment --}}
                <div onclick="pageForumDiskusiPertanyaan()"
                    class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                    <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">

                        <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                {{-- Profil --}}
                                @auth
                                    <div class="flex-none" onclick="pageUserProfile()">
                                        <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL)
                                            ? auth()->user()->profile_picture
                                            : Storage::url(auth()->user()->profile_picture) }}"
                                            alt="{{ auth()->user()->fullname }}"
                                            class="rounded-full w-9 md:w-12">
                                    </div>
                                @endauth
                                <div
                                    class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                    <div class="w-full justify-start items-center gap-2 inline-flex ">
                                        <div class="justify-start items-center gap-2 flex">
                                            <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                Bapak Muhammad Nabil Musyaffa Alif Muhammad</p>
                                            <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                        </div>
                                        <div class="text-netral-900 font-semibold hidden md:flex">
                                            -</div>
                                        <div
                                            class="w-fit  text-netral-500 font-normal relative hidden lg:flex">
                                            <p class="w-full line-clamp-1">Pembina KOMISI</p>
                                            {{-- <div id="info-akun"
                                                class="w-fit h-fit p-4 lg:group-hover/info-akun:flex xl:group-hover/info-akun:hidden bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                Pembina Komisi</div> --}}
                                        </div>
                                        <i
                                            class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                            <div id="info-akun"
                                                class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                Pembina Komisi</div>
                                        </i>
                                    </div>
                                    <p class="w-fit text-neutral-900 font-medium Body2">
                                        9 menit lalu</p>
                                </div>
                                <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                            </div>
                            {{-- Content --}}
                            <div class="w-full text-neutral-900 font-normal Body1 md:Heading4 line-clamp-2">
                                Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                bisa
                                mengetahui rinciannya?</div>
                            <button class="btn-sm-tertiary p-0">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 1 --}}
            <div
            class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
            <div
                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200">
                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                    {{-- Profil --}}
                    <div class="w-full justify-start items-center gap-2 inline-flex">
                        @auth
                            <div class="flex-none" onclick="pageUserProfile()">
                                <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL)
                                    ? auth()->user()->profile_picture
                                    : Storage::url(auth()->user()->profile_picture) }}"
                                    alt="{{ auth()->user()->fullname }}" class="rounded-full w-9 md:w-12">
                            </div>
                        @endauth
                        <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                            <div class="w-full justify-start items-center gap-2 inline-flex ">
                                <div class="justify-start items-center gap-2 flex">
                                    <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                        Muhammad Alif</p>
                                    <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                </div>
                                <div class="text-netral-900 font-semibold hidden md:flex">
                                    -</div>
                                <div
                                    class="w-fit text-netral-500 font-normal flex relative hidden lg:flex">
                                    <p class="w-full line-clamp-1">Pembina Komisi
                                    </p>
                                </div>
                                <i
                                    class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                    <div id="info-akun"
                                        class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                        Pembina Komisi</div>
                                </i>
                            </div>
                            <p class="w-fit text-neutral-900 font-medium Body2">
                                9 menit lalu</p>
                        </div>
                        <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                    </div>
                    {{-- Content --}}
                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                        <div class="w-full flex flex-col gap-2">
                            <div
                                class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                Pencairan KIPK
                            </div>
                            <div class="w-full text-neutral-900 font-normal Body1 md:Heading4">
                                Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                bisa
                                mengetahui rinciannya?</div>
                        </div>
                        <div class="h-48 rounded-2xl overflow-clip">
                            <img class="h-full" src="{{ url('img/Kabinet/KOBRA/All-Team.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex">
                        <button
                            class="w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                            <div class="w-fit flex flex-none items-center gap-1">
                                <i class="text-32 lg:text-4xl text-love-base ph ph-heart"></i>
                                <div class="text-love-base font-medium flex md:hidden">3</div>
                            </div>
                            <div
                                class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium hidden md:flex">
                                30 org merasa terbantu
                            </div>
                        </button>
                        <div class="w-full rounded-full justify-start items-center gap-2 flex Body1">
                            <div class="w-fit flex flex-none items-center gap-1">
                                <i class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                                <div class="text-netral-900 font-medium flex">3</div>
                            </div>
                            <button onclick="pageForumDiskusiPertanyaan()" class="commentbar">
                                <div class="w-full line-clamp-1">Berikan jawaban atau tanggapan</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Comment --}}
            <div onclick="pageForumDiskusiPertanyaan()"
                class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">

                    <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                        <div class="w-full justify-start items-center gap-2 inline-flex">
                            {{-- Profil --}}
                            @auth
                                <div class="flex-none" onclick="pageUserProfile()">
                                    <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL)
                                        ? auth()->user()->profile_picture
                                        : Storage::url(auth()->user()->profile_picture) }}"
                                        alt="{{ auth()->user()->fullname }}"
                                        class="rounded-full w-9 md:w-12">
                                </div>
                            @endauth
                            <div
                                class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                <div class="w-full justify-start items-center gap-2 inline-flex ">
                                    <div class="justify-start items-center gap-2 flex">
                                        <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                            Bapak Muhammad Nabil Musyaffa Alif Muhammad</p>
                                        <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                    </div>
                                    <div class="text-netral-900 font-semibold hidden md:flex">
                                        -</div>
                                    <div
                                        class="w-fit  text-netral-500 font-normal relative hidden lg:flex">
                                        <p class="w-full line-clamp-1">Pembina KOMISI</p>
                                        {{-- <div id="info-akun"
                                            class="w-fit h-fit p-4 lg:group-hover/info-akun:flex xl:group-hover/info-akun:hidden bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                            Pembina Komisi</div> --}}
                                    </div>
                                    <i
                                        class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                        <div id="info-akun"
                                            class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                            Pembina Komisi</div>
                                    </i>
                                </div>
                                <p class="w-fit text-neutral-900 font-medium Body2">
                                    9 menit lalu</p>
                            </div>
                            <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                        </div>
                        {{-- Content --}}
                        <div class="w-full text-neutral-900 font-normal Body1 md:Heading4 line-clamp-2">
                            Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                            bisa
                            mengetahui rinciannya?</div>
                        <button class="btn-sm-tertiary p-0">Baca Selengkapnya</button>
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
