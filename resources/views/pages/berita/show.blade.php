@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div
        class="w-full h-fit md:px-8 xl:px-16  {{ $active === 'Beranda' ? 'pt-8 lg:pt-16' : '' }} pt-20 md:py-32 bg-soft-base flex-col justify-center items-center inline-flex ">
        <div class="w-full max-w-1480 h-fit bg-soft-base flex-col justify-center items-center gap-4 lg:gap-8 flex ">
            <div class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 flex-col md:flex-row lg:flex ">
                <a href="/berita" class="w-fit rounded-lg justify-start items-center gap-4 flex flex-row Heading2">
                    <i class=" ph ph-arrow-left"></i>
                    <div class=" text-neutral-900 font-semibold ">
                        Kembali</div>
                </a>
            </div>
            {{-- Main Content --}}
            <div class="w-full h-fit self-stretch justify-center items-start gap-4 flex flex-col xl:flex-row ">
                {{-- Left Content --}}
                <section class=" w-full h-fit self-stretch rounded-3xl flex-col justify-start items-start gap-4 flex">
                    <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                        {{-- Question --}}
                        <div class="w-full h-fit  bg-white md:rounded-lg flex-col justify-start items-start flex">
                            <div
                                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200 cursor-pointer">
                                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">

                                    {{-- Content --}}
                                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">

                                        @if (isset($images) && !empty($images))
                                            <div
                                                class="w-fit flex px-4 lg:px-8 parent flex-row overflow-scroll scrollbar-hidden gap-4">
                                                @foreach ($images as $index => $image)
                                                    <div
                                                        class="relative flex-col h-72 flex-none aspect-auto rounded-lg overflow-clip zoomable-image">
                                                        <img class="h-full aspect-auto object-cover cursor-pointer"
                                                            src="{{ asset('storage/' . $image) }}" alt="Gambar Diskusi"
                                                            onclick="openZoom({{ $index }})">
                                                        <div id="overlay-{{ $index }}"
                                                            class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50 transition-opacity duration-300 bg-neutral-900 opacity-0 pointer-events-none">
                                                            <div class="w-full flex justify-center items-center lg:p-4">
                                                                <img class="w-11/12 object-scale-down"
                                                                    src="{{ asset('storage/' . $image) }}"
                                                                    alt="Gambar Diskusi Zoom">
                                                                <button onclick="closeZoom({{ $index }})"
                                                                    class="absolute top-4 right-4 text-white focus:outline-none">
                                                                    <i class="Heading1 ph text-white ph-x"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                        <div class="w-full px-4 lg:px-8 flex flex-col gap-2">
                                            <button
                                                onclick="window.location.href='{{ route('forum-diskusi.diskusi.kategori.show', $news->category->slug) }}'"
                                                class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                                {{ $news->category->name }}
                                            </button>
                                            <div class="w-full break-all text-neutral-900 font-normal Body1 md:Heading3">
                                                {{ $news->title }}</div>
                                            <div class="w-full break-all text-neutral-900 font-normal Body1 md:Heading4">
                                                {{ $news->content }}</div>
                                        </div>
                                        {{-- Profil --}}
                                        <div class="w-full px-4 lg:px-8 justify-start items-center gap-2 inline-flex border-t-2 pt-4">
                                            <div class="flex-none" href="{{ route('user.profile') }}">
                                                <img src="{{ filter_var($news->user->profile_picture, FILTER_VALIDATE_URL)
                                                    ? $news->user->profile_picture
                                                    : Storage::url($news->user->profile_picture) }}"
                                                    alt="{{ $news->user->fullname }}" class="rounded-full w-9 lg:w-12">
                                            </div>
                                            <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                                <div class="w-full justify-start items-center gap-2 inline-flex ">
                                                    <div class="justify-start items-center gap-2 flex">
                                                        <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                            {{ $news->user->fullname }}</p>
                                                        @if (
                                                            $news->user->user_type === 'Pembina Komisi' ||
                                                                ($news->user->user_type === 'Mahasiswa' && $news->user->admin === 'Aktif'))
                                                            <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                                        @endif
                                                    </div>
                                                    <div class="text-netral-900 font-semibold hidden md:flex">
                                                        -</div>
                                                    <div class="w-fit text-netral-500 font-normal relative hidden lg:flex">
                                                        <p class="w-full line-clamp-1">{{ $news->user->user_type }}
                                                        </p>
                                                    </div>
                                                    <i
                                                        class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                                        <div id="info-akun"
                                                            class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                            {{ $news->user->user_type }}</div>
                                                    </i>
                                                </div>
                                                <p class="w-fit text-neutral-900 font-medium Body2">
                                                    {{ $news->created_at->diffForHumans() }}</p>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Right Content/ POPULER --}}
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
@section('after-script')
    <script src="{{ asset('js/imageZoom.js') }}"></script>
    <script src="{{ asset('js/inputImage.js') }}"></script>
    <script src="{{ asset('js/searchField.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/inputField.js') }}"></script>
    <script src="{{ asset('js/toggleSwitch.js') }}"></script>
    <script src="{{ asset('js/dropdownPopup.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
    <script src="{{ asset('js/year-indicator.js') }}"></script>
@endsection
