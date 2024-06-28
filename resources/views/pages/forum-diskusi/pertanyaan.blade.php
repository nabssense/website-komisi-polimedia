@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div
        class="w-full h-fit md:px-8 xl:px-16  {{ $active === 'Beranda' ? 'pt-8 lg:pt-16' : '' }} pt-16 md:py-32 bg-soft-base flex-col justify-center items-center inline-flex ">
        <div class="w-full max-w-1480 h-fit bg-soft-base flex-col justify-center items-center gap-4 lg:gap-8 flex ">
            <div class="w-full px-4 md:px-0 xl:px-0 justify-start items-center gap-4 flex-col md:flex-row lg:flex ">
                <button onclick="pageForumDiskusi()" class="w-fit py-2rounded-lg justify-start items-center gap-4 flex flex-row Heading2">
                    <i class=" ph ph-arrow-left"></i>
                    <div class=" text-neutral-900 font-semibold ">
                        Kembali</div>
                </button>
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
                                        <div class="flex-none" onclick="pageUserProfile()">
                                            <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                                ? $discussion->user->profile_picture
                                                : Storage::url($discussion->user->profile_picture) }}"
                                                alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 md:w-12">
                                        </div>
                                        <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
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
                                            onclick="toggleDropdownPopUp('{{ $discussion->slug }}')"
                                            class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative cursor-pointer">
                                        </i>
                                        <div id="menuDropdown-{{ $discussion->slug }}"  
                                            class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="toggleDropdownPopUp('{{ $discussion->slug }}')" 
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
                                                            <button type="button" onclick="confirmDelete('{{ $discussion->slug }}')" class="w-full flex btn-tertiary-sm px-4">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                        @endif
                                                    </div>
                                                    <button class="w-full flex btn-secondary-sm px-4" onclick="toggleDropdownPopUp('{{ $discussion->slug }}')">
                                                        Tutup
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Alert Delete --}}
                                        <div id="alertDelete-{{ $discussion->slug }}"
                                            class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="toggleDropdownPopUp('{{ $discussion->slug }}')"
                                                class="close-button-bg w-screen h-screen relative justify-center items-center flex">
                                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div>Kamu yakin ingin menghapus ini?</div>
                                                    <div class="w-full flex flex-row gap-2">
                                                        <button id="confirm-delete-button" class="w-full flex btn-tertiary-sm px-4">
                                                            Iya
                                                        </button>
                                                        <button id="cancel-delete-button" class="w-full flex btn-tertiary-sm px-4">
                                                            Tidak
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content --}}
                                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                                        <div class="w-full flex flex-col gap-2">
                                            <button
                                                onclick="window.location.href='{{ route('forum-diskusi.diskusi.kategori.show', $discussion->category->slug) }}'"
                                                class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                                {{ $discussion->category->name }}
                                            </button>
                                            <div class="w-full text-neutral-900 font-normal Body1 md:Heading3">
                                                {{ $discussion->title }}</div>
                                            <div class="w-full text-neutral-900 font-normal Body1 md:Heading4">
                                                {{ $discussion->question_preview }}</div>
                                        </div>
                                        @if (isset($discussion->image) && !empty($discussion->image))
                                            <div class="h-48 rounded-2xl overflow-clip">
                                                <img class="h-full" src="{{ asset('storage/' . $discussion->image) }}"
                                                    alt="Gambar Diskusi">
                                            </div>
                                        @endif
                                    </div>
                                    {{-- Like & Comment --}}
                                    <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex">
                                        <button id="discussion-like" type="button" data-liked="{{ $discussion->liked() }}" 
                                            @guest
                                                onclick="pageMasuk()"
                                            @endguest
                                            class="w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                                            <div class="w-fit flex flex-none items-center gap-1">
                                                <i class="text-32 lg:text-4xl text-love-base ph-heart {{ $discussion->liked() ? 'ph-fill' : 'ph' }}"
                                                    alt="Like" id="discussion-like-icon"></i>
                                            </div>
                                            <div id="discussion-like-count"
                                                class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium flex md:after:content-['\00A0_org_merasa_terbantu']">
                                                {{ $discussion->likeCount }}
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
                            {{-- Answer --}}
                            <div 
                                class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                                <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">
                                    <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                                        <div class="w-full justify-start items-center gap-2 inline-flex">
                                            {{-- Profil --}}
                                            <div class="flex-none" onclick="pageUserProfile()">
                                                <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                                    ? $discussion->user->profile_picture
                                                    : Storage::url($discussion->user->profile_picture) }}"
                                                    alt="{{ $discussion->user->fullname }}"
                                                    class="rounded-full w-9 md:w-12">
                                            </div>
                                            <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                                <div class="w-full justify-start items-center gap-2 inline-flex ">
                                                    <div class="justify-start items-center gap-2 flex">
                                                        <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                                            {{ $discussion->user->fullname }}</p>
                                                        <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                                    </div>
                                                    <div class="text-netral-900 font-semibold hidden md:flex">
                                                        -</div>
                                                    <div class="w-fit  text-netral-500 font-normal relative hidden lg:flex">
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
                                            <i id="menuButton" class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative">
                                                <div id="menuDropdown"
                                                    class="w-fit h-fit flex-col absolute top-10 right-0 p-4 bg-netral-100 gap-4 hidden rounded-lg shadow-card-m">
                                                    <button onclick="location.href='{{ route('forum-diskusi.edit', $discussion->slug) }}'" class="w-full flex Body1">
                                                        Ubah
                                                    </button>
                                                    <button class="w-full flex Body1">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </i>
                                        </div>
                                        {{-- Content --}}
                                        <div class="w-full text-neutral-900 font-normal Body1 md:Heading4 line-clamp-2">
                                            {{ $discussion->title }}</div>
                                        <button class="btn-tertiary-sm p-0">Baca Selengkapnya</button>
                                    </div>
                                </div>
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
            $('#discussion-like').click(function() {

                var isLiked = $(this).data('liked');
                var likeRoute = isLiked ?
                    '{{ route('forum-diskusi.diskusi.unlike', $discussion->slug) }}' :
                    '{{ route('forum-diskusi.diskusi.like', $discussion->slug) }}';

                $.ajax({
                        method: 'POST',
                        url: likeRoute,
                        data: {
                            '_token': '{{ csrf_token() }}'
                        }
                    })
                    .done(function(res) {
                        if (res.status === 'success') {
                            $('#discussion-like-count').text(res.data.likeCount);

                            if (isLiked) {
                                $('#discussion-like-icon').addClass('ph').removeClass('ph-fill');
                            } else {
                                $('#discussion-like-icon').removeClass('ph').addClass('ph-fill');
                            }

                            $('#discussion-like').data('liked', !isLiked);
                        }
                    })
            });
        })
    </script>


    @include('partials.footer')
@endsection
@section('after-script')
<script src="{{ asset('js/animation.js') }}"></script>
<script src="{{ asset('js/dropdownPopup.js') }}"></script>
<script src="{{ asset('js/touchdragscroll.js') }}"></script>
<script>
    function toggleDropdownPopUp(slug) {
        const dropdown = document.getElementById(`menuDropdown-${slug}`);
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            dropdown.classList.add('flex');
            // Add event listener for scrolling
            window.addEventListener('scroll', () => hideDropdown(slug), { once: true });
        } else {
            dropdown.classList.add('hidden');
            dropdown.classList.remove('flex');
            // Remove event listener for scrolling
            window.removeEventListener('scroll', () => hideDropdown(slug));
        }
    }

    function hideDropdown(slug) {
        const dropdown = document.getElementById(`menuDropdown-${slug}`);
        dropdown.classList.add('hidden');
        dropdown.classList.remove('flex');
    }

    function confirmDelete(slug) {
        // Tampilkan pop-up konfirmasi penghapusan
        const alertDelete = document.getElementById(`alertDelete-${slug}`);
        alertDelete.classList.remove('hidden');
        alertDelete.classList.add('flex');

        // Tambahkan event listener untuk tombol "Iya" pada pop-up konfirmasi
        const confirmButton = alertDelete.querySelector('#confirm-delete-button');
        confirmButton.addEventListener('click', () => {
            const deleteForm = document.getElementById(`deleteForm-${slug}`);
            deleteForm.submit();
        });

        // Tambahkan event listener untuk tombol "Tidak" pada pop-up konfirmasi
        const cancelButton = alertDelete.querySelector('#cancel-delete-button');
        cancelButton.addEventListener('click', () => {
            alertDelete.classList.add('hidden');
            alertDelete.classList.remove('flex');
        });
    }
</script>
@endsection
