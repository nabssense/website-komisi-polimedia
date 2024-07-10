@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div
        class="w-full h-fit md:px-8 xl:px-16  {{ $active === 'Beranda' ? 'pt-8 lg:pt-16' : '' }} pt-16 md:py-32 bg-netral-200 flex-col justify-center items-center inline-flex ">
        <div class="w-full max-w-1480 h-fit bg-netral-200 flex-col justify-center items-center gap-4 lg:gap-8 flex ">
            <div class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 flex-col md:flex-row lg:flex ">
                <a href="/forum-diskusi" class="w-fit py-2rounded-lg justify-start items-center gap-4 flex flex-row Heading2">
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
                            class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
                            <div
                                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200 cursor-pointer">
                                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                                    {{-- Profil --}}
                                    <div class="w-full justify-start items-center gap-2 inline-flex">
                                        <div class="flex-none" href="{{ route('user.profile') }}">
                                            <img src="{{ strpos($discussion->user->profile_picture, 'https://ui-avatars.com') === 0 ? $discussion->user->profile_picture : Storage::url($user->profile_picture) }}"
                                                alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 lg:w-12">
                                        </div>
                                        <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                            <div class="w-full justify-start items-center gap-2 inline-flex ">
                                                <div class="justify-start items-center gap-2 flex">
                                                    <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                        {{ $discussion->user->fullname }}</p>
                                                    @if (
                                                        $discussion->user->user_type === 'Pembina Komisi' ||
                                                            ($discussion->user->user_type === 'Mahasiswa' && $discussion->user->admin === 'Aktif'))
                                                        <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                                    @endif
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
                                            class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="toggleDropdownPopUp('{{ $discussion->slug }}'); event.stopPropagation()"
                                                class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
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
                                            class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="hideAlertDelete('{{ $discussion->slug }}')"
                                                class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
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
                                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                                        <div class="w-full  flex flex-col gap-2">
                                            <button
                                                onclick="window.location.href='{{ route('forum-diskusi.diskusi.kategori.show', $discussion->category->slug) }}'"
                                                class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                                {{ $discussion->category->name }}
                                            </button>
                                            <div class="w-full break-all text-neutral-900 font-normal Body1 md:Heading3">
                                                {{ $discussion->title }}</div>
                                            <div class="w-full break-all text-neutral-900 font-normal Body1 md:Heading4">
                                                {{ $discussion->question }}</div>
                                        </div>
                                        @if (isset($discussion->image) && !empty($discussion->image))
                                            <div
                                                class="relative h-48 rounded-2xl overflow-hidden cursor-pointer zoomable-image">
                                                <img class="h-full object-cover"
                                                    src="{{ asset('storage/' . $discussion->image) }}" alt="Gambar Diskusi"
                                                    onclick="openZoom({{ $discussion->id }})">
                                                <div id="overlay-{{ $discussion->id }}"
                                                    class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50 transition-opacity duration-300 bg-neutral-900 opacity-0 pointer-events-none">
                                                    <div class="w-full p-32 flex justify-center items-center lg:p-4">
                                                        <img class="w-1/4 h-full object-scale-down"
                                                            src="{{ asset('storage/' . $discussion->image) }}"
                                                            alt="Gambar Diskusi Zoom">
                                                        <button onclick="closeZoom({{ $discussion->id }})"
                                                            class="absolute top-4 right-4 text-white focus:outline-none">
                                                            <i class="Heading1 ph text-white ph-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- Like & Comment --}}
                                    <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex cursor-default"
                                        onclick="event.stopPropagation()">
                                        <button id="discussion-like-{{ $discussion->slug }}" type="button"
                                            data-discussion-slug="{{ $discussion->slug }}"
                                            data-liked="{{ $discussion->liked() }}" @guest href="/masuk-akun" @endguest
                                            class="like-button w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                                            <div class="w-fit flex flex-none items-center gap-1">
                                                <i class="text-32 lg:text-4xl text-love-base ph-heart {{ $discussion->liked() ? 'ph-fill' : 'ph' }}"
                                                    alt="Like" id="discussion-like-icon-{{ $discussion->slug }}"></i>
                                            </div>
                                            <div id="discussion-like-count-{{ $discussion->slug }}"
                                                class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium flex md:after:content-['\00A0_Terbantu']">
                                                {{ $discussion->likeCount }}
                                            </div>
                                        </button>
                                        <button class="w-fit flex flex-none items-center gap-1 Body1">
                                            <i class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                                            <div id="discussion-like-count-{{ $discussion->slug }}"
                                                class="w-full text-nowrap rounded-full justify-start items-start text-netral-900 font-medium flex md:after:content-['\00A0_Balasan']">
                                                {{ $discussion->answers->count() }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- Answer --}}

                            <div
                                class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                                {{-- Comment Field --}}

                                <form method="POST"
                                    action="{{ route('forum-diskusi.diskusi.jawab', $discussion->slug) }}"
                                    enctype="multipart/form-data"
                                    class="w-full h-fit m-0 flex flex-row gap-4 items-center">
                                    @csrf
                                    <div class="commentbar-long" focus>
                                        <div class="flex relative">
                                            <input name="image" id="image-input-1"
                                                class="w-fit h-full z-10 right-0 absolute opacity-0 cursor-pointer rounded-2xl"
                                                type="file" accept="image/*" value="{{ old('image') }}">
                                            <img id="image-preview-1"
                                                src="{{ isset($answer) ? asset('storage/' . $answer->image) : '' }}"
                                                class="w-full h-full object-cover absolute top-0 bg-white rounded-xl {{ isset($answer) ? '' : 'hidden' }}">
                                            <i href="#" class="ph ph-image Heading3 lg:Heading2 leading-none"></i>
                                        </div>
                                        <textarea id="myTextarea" class="commentbar-long-input" name="answer" placeholder="Jawab Pertanyaan"
                                            oninput="autoResize(this)"></textarea>
                                        <button type="submit">
                                            <i class="ph ph-paper-plane-right Heading3 leading-none"></i>
                                        </button>
                                    </div>
                                    @error('answer')
                                        <div class="text-primary-base text-lg font-normal font-THICCCBOI leading-7">
                                            {{ $message }}</div>
                                    @enderror
                                </form>

                                {{-- Answer Content --}}

                                @forelse ($discussionAnswers as $answer)
                                    <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">
                                        <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                                {{-- Profil --}}
                                                <div class="flex-none" href="{{ route('user.profile') }}">
                                                    <img src="{{ filter_var($answer->user->profile_picture, FILTER_VALIDATE_URL)
                                                        ? $answer->user->profile_picture
                                                        : Storage::url($answer->user->profile_picture) }}"
                                                        alt="{{ $answer->user->fullname }}"
                                                        class="rounded-full w-9 lg:w-12">
                                                </div>
                                                <div
                                                    class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                                    <div class="w-full justify-start items-center gap-2 inline-flex ">
                                                        <div class="justify-start items-center gap-2 flex">
                                                            <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                                {{ $answer->user->fullname }}</p>
                                                            @if (
                                                                $discussion->user->user_type === 'Pembina Komisi' ||
                                                                    ($discussion->user->user_type === 'Mahasiswa' && $discussion->user->admin === 'Aktif'))
                                                                <i
                                                                    class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                                            @endif
                                                        </div>
                                                        <div class="text-netral-900 font-semibold hidden md:flex">
                                                            -</div>
                                                        <div
                                                            class="w-fit  text-netral-500 font-normal relative hidden lg:flex">
                                                            <p class="w-full line-clamp-1">
                                                                {{ $answer->user->user_type }}
                                                            </p>
                                                        </div>
                                                        <i
                                                            class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                                            <div id="info-akun"
                                                                class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                                                {{ $answer->user->user_type }}</div>
                                                        </i>
                                                    </div>
                                                    <p class="w-fit text-neutral-900 font-medium Body2">
                                                        {{ $answer->created_at->diffForHumans() }}</p>
                                                </div>
                                                {{-- Menu --}}
                                                <i id="menuButton-{{ $answer->id }}"
                                                    onclick="toggleDropdownPopUp('{{ $answer->id }}'); event.stopPropagation()"
                                                    class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative cursor-pointer">
                                                </i>
                                                <div id="menuDropdown-{{ $answer->id }}"
                                                    class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                                    <div onclick="toggleDropdownPopUp('{{ $answer->id }}'); event.stopPropagation()"
                                                        class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                        <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                            role="none" onclick="event.stopPropagation();">
                                                            <div class="w-full flex flex-col gap-2">
                                                                @if ($answer->user_id === auth()->id())
                                                                    <button
                                                                        onclick="location.href='{{ route('answers.edit', $answer->id) }}'"
                                                                        class="w-full flex btn-tertiary-sm px-4">
                                                                        Ubah
                                                                    </button>

                                                                    <form id="deleteForm-{{ $answer->id }}"
                                                                        action="{{ route('answers.destroy', $answer->id) }}"
                                                                        f class="w-full m-0" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button"
                                                                            onclick="confirmDelete('{{ $answer->id }}')"
                                                                            class="w-full flex btn-tertiary-sm px-4">
                                                                            Hapus
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                            <button class="w-full flex btn-secondary-sm px-4"
                                                                onclick="toggleDropdownPopUp('{{ $answer->id }}')">
                                                                Tutup
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Alert Delete --}}
                                                <div id="alertDelete-{{ $answer->id }}"
                                                    class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                                    <div onclick="hideAlertDelete('{{ $answer->id }}')"
                                                        class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                        <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                            role="none" onclick="event.stopPropagation();">
                                                            <div class="w-full Heading4 text-center">Kamu yakin ingin
                                                                menghapus
                                                                ini?</div>
                                                            <div class="w-full flex flex-row gap-2">
                                                                <button id="confirm-delete-button-{{ $answer->id }}"
                                                                    onclick="confirmDelete('{{ $answer->id }}')"
                                                                    class="w-full flex btn-secondary-sm px-4">
                                                                    Iya, Hapus
                                                                </button>
                                                                <button id="cancel-delete-button-{{ $answer->id }}"
                                                                    onclick="hideAlertDelete('{{ $answer->id }}')"
                                                                    class="w-full flex btn-primary-sm px-4">
                                                                    Tidak
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Content --}}
                                            <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">

                                                <div class="w-full  flex flex-col gap-2">
                                                    <div
                                                        class="w-full break-all text-neutral-900 font-normal Body1 md:Heading4">
                                                        {{ $answer->answer }}</div>
                                                </div>
                                                @if (isset($answer->image) && !empty($answer->image))
                                                    <div class="h-48 rounded-2xl overflow-clip">
                                                        <img class="h-full"
                                                            src="{{ asset('storage/' . $answer->image) }}"
                                                            alt="Gambar Diskusi">
                                                    </div>
                                                @endif
                                                {{-- Like & Comment --}}
                                                <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex cursor-default"
                                                    onclick="event.stopPropagation()">
                                                    <button id="answer-like-{{ $answer->id }}" type="button"
                                                        data-answer-id="{{ $answer->id }}"
                                                        data-liked="{{ $answer->liked() }}"
                                                        @guest href="/masuk-akun" @endguest
                                                        class="like-button w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                                                        <div class="w-fit flex flex-none items-center gap-1">
                                                            <i class="text-32 lg:text-4xl text-love-base ph-heart {{ $answer->liked() ? 'ph-fill' : 'ph' }}"
                                                                alt="Like"
                                                                id="answer-like-icon-{{ $answer->id }}"></i>
                                                        </div>
                                                        <div id="answer-like-count-{{ $answer->id }}"
                                                            class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium flex md:after:content-['\00A0_Terbantu']">
                                                            {{ $answer->likeCount }}
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>






                        </div>
                    </div>
                </section>

                {{-- Right Content/ POPULER --}}
                @include('partials.forum-diskusi.diskusi-terbantu')
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.like-button').click(function() {
                var slug = $(this).data('discussion-slug');
                var isLiked = $(this).data('liked');
                var likeRoute = isLiked ?
                    '{{ route('forum-diskusi.diskusi.unlike', '__slug__') }}' :
                    '{{ route('forum-diskusi.diskusi.like', '__slug__') }}';

                likeRoute = likeRoute.replace('__slug__', slug);

                $.ajax({
                    method: 'POST',
                    url: likeRoute,
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                }).done(function(res) {
                    if (res.status === 'success') {
                        $('#discussion-like-count-' + slug).text(res.data.likeCount);

                        var likeIcon = $('#discussion-like-icon-' + slug);
                        if (isLiked) {
                            likeIcon.addClass('ph').removeClass('ph-fill');
                        } else {
                            likeIcon.removeClass('ph').addClass('ph-fill');
                        }

                        $('.like-button').data('liked', !isLiked);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Preview image when file input changes
            $('#image-input').change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result).removeClass('hidden');
                    }
                    reader.readAsDataURL(file);
                } else {
                    $('#image-preview').attr('src', '{{ asset('images/default-image.png') }}').removeClass(
                        'hidden');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.like-button').click(function() {
                var answerId = $(this).data('answer-id');
                var isLiked = $(this).data('liked');
                var likeRoute = isLiked ?
                    '{{ route('jawab.like.unlike', '__answer__') }}' :
                    '{{ route('jawab.like.like', '__answer__') }}';

                likeRoute = likeRoute.replace('__answer__', answerId);

                $.ajax({
                    method: 'POST',
                    url: likeRoute,
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                }).done(function(res) {
                    if (res.status === 'success') {
                        $('#answer-like-count-' + answerId).text(res.data.likeCount);

                        var likeIcon = $('#answer-like-icon-' + answerId);
                        if (isLiked) {
                            likeIcon.addClass('ph').removeClass('ph-fill');
                        } else {
                            likeIcon.removeClass('ph').addClass('ph-fill');
                        }

                        $('.like-button').data('liked', !isLiked);
                    }
                });
            });
        });
    </script>

    @include('partials.footer')
@endsection
@section('after-script')
    <script src="{{ asset('js/imageZoom.js') }}"></script>
    <script src="{{ asset('js/inputTextArea.js') }}"></script>
    <script src="{{ asset('js/inputImagePreview.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/dropdownPopup.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
    <script src="{{ asset('js/toggleDropdown2PopUp.js') }}"></script>
@endsection
