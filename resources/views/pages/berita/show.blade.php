@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div
        class="w-full h-fit md:px-8 xl:px-16  {{ $active === 'Beranda' ? 'pt-8 lg:pt-16' : '' }} pt-16 md:py-32 bg-soft-base flex-col justify-center items-center inline-flex ">
        <div class="w-full max-w-1480 h-fit bg-soft-base flex-col justify-center items-center gap-4 lg:gap-8 flex ">
            <div class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 flex-col md:flex-row lg:flex ">
                <a href="/berita" class="w-fit py-2rounded-lg justify-start items-center gap-4 flex flex-row Heading2">
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
                        <div
                            class="w-full h-fit  bg-white md:rounded-lg flex-col justify-start items-start flex">
                            <div
                                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200 cursor-pointer">
                                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                                    {{-- Content --}}
                                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                                        
                                        @if (isset($images) && !empty($images))
                                            <div class="w-fit flex px-4 lg:px-8 parent flex-row overflow-scroll scrollbar-hidden gap-4">
                                                @foreach ($images as $image)
                                                    <div class="flex-col h-72 flex-none aspect-auto rounded-lg overflow-clip">
                                                        <img class="h-full aspect-auto object-fill" src="{{ asset('storage/' . $image) }}"
                                                            alt="Gambar Diskusi">
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
                                    </div>
                                    {{-- Profil --}}
                                    <div class="w-full px-4 lg:px-8 justify-start items-center gap-2 inline-flex">
                                        <div class="flex-none" href="{{ route('user.profile')}}">
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
                                                    <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
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
                                        {{-- Menu --}}
                                        <i id="menuButton-{{ $news->slug }}"
                                            onclick="toggleDropdownPopUp('{{ $news->slug }}'); event.stopPropagation()"
                                            class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative cursor-pointer">
                                        </i>
                                        <div id="menuDropdown-{{ $news->slug }}"
                                            class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="toggleDropdownPopUp('{{ $news->slug }}'); event.stopPropagation()"
                                                class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div class="w-full flex flex-col gap-2">
                                                        @if ($news->user_id === auth()->id())
                                                            <button
                                                                onclick="location.href='{{ route('forum-diskusi.edit', $news->slug) }}'"
                                                                class="w-full flex btn-tertiary-sm px-4">
                                                                Ubah
                                                            </button>
                                                            <form id="deleteForm-{{ $news->slug }}"
                                                                action="{{ route('forum-diskusi.destroy', $news->slug) }}"
                                                                class="w-full m-0" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    onclick="confirmDelete('{{ $news->slug }}')"
                                                                    class="w-full flex btn-tertiary-sm px-4">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                    <button class="w-full flex btn-secondary-sm px-4"
                                                        onclick="toggleDropdownPopUp('{{ $news->slug }}')">
                                                        Tutup
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Alert Delete --}}
                                        <div id="alertDelete-{{ $news->slug }}"
                                            class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="hideAlertDelete('{{ $news->slug }}')"
                                                class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div class="w-full Heading4 text-center">Kamu yakin ingin menghapus
                                                        ini?</div>
                                                    <div class="w-full flex flex-row gap-2">
                                                        <button id="confirm-delete-button-{{ $news->slug }}"
                                                            onclick="confirmDelete('{{ $news->slug }}')"
                                                            class="w-full flex btn-secondary-sm px-4">
                                                            Iya, Hapus
                                                        </button>
                                                        <button id="cancel-delete-button-{{ $news->slug }}"
                                                            onclick="hideAlertDelete('{{ $news->slug }}')"
                                                            class="w-full flex btn-primary-sm px-4">
                                                            Tidak
                                                        </button>
                                                    </div>
                                                </div>
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
    <script src="{{ asset('js/inputImage.js') }}"></script>
    <script src="{{ asset('js/searchField.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/inputField.js') }}"></script>
    <script src="{{ asset('js/toggleSwitch.js') }}"></script>
    <script src="{{ asset('js/dropdownPopup.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
    <script src="{{ asset('js/year-indicator.js') }}"></script>
@endsection
