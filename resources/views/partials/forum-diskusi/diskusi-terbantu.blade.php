{{-- Right Content/ POPULER --}}
<section class="w-full xl:w-fit lg:max-w-480 flex-col justify-start items-start gap-4 flex flex-none">
    <div
        class="w-full py-2 px-4 md:py-2 md:px-6 bg-love-base md:rounded-lg  justify-start items-start flex text-netral-100 font-semibold Heading2">
        Sangat Terbantu
    </div>

    @forelse ($discussionsTerbantu as $discussion)
        {{-- Question --}}
        <div class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
            <div
                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200">
                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                    {{-- Profil --}}
                    <div class="w-full justify-start items-center gap-2 inline-flex">
                        <div class="flex-none" href="{{ route('user.profile')}}">
                            <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                ? $discussion->user->profile_picture
                                : Storage::url($discussion->user->profile_picture) }}"
                                alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 lg:w-12">
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
                                <div class="w-fit text-netral-500 font-normal flex relative hidden lg:flex">
                                    <p class="w-full line-clamp-1">{{ $discussion->user->user_type }}
                                    </p>
                                </div>
                                <i class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
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
                                <img class="h-full" src="{{ asset('storage/' . $discussion->image) }}"
                                    alt="Gambar Diskusi">
                            </div>
                        @endif
                    </div>
                    {{-- Like & Comment --}}
                    <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex cursor-default"
                        onclick="event.stopPropagation()">
                        <button id="discussion-like-{{ $discussion->slug }}" type="button"
                            data-discussion-slug="{{ $discussion->slug }}" data-liked="{{ $discussion->liked() }}"
                            @guest href="/masuk-akun" @endguest
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
                        <div class="w-fit flex flex-none items-center gap-1 Body1"
                            onclick="window.location.href='{{ route('forum-diskusi.show', $discussion->slug) }}'">
                            <i class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                            <div id="discussion-like-count-{{ $discussion->slug }}"
                                class="w-full text-nowrap rounded-full justify-start items-start text-netral-900 font-medium flex md:after:content-['\00A0_Balasan']">
                                {{ $discussion->likeCount }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Comment --}}
            <a href="{{ route('forum-diskusi.diskusi.kategori.show', $discussion->slug) }}"
                class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">

                    <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                        <div class="w-full justify-start items-center gap-2 inline-flex">
                            {{-- Profil --}}
                            <div class="flex-none" href="{{ route('user.profile')}}">
                                <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                    ? $discussion->user->profile_picture
                                    : Storage::url($discussion->user->profile_picture) }}"
                                    alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 lg:w-12">
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
                        <div
                            class="w-full break-all line-clamp-2 lg:line-clamp-3 text-neutral-900 font-normal Body1 md:Heading4">
                            {{ $discussion->title }}</div>
                        <button class="btn-tertiary-sm p-0">Baca Selengkapnya</button>
                    </div>
                </div>
            </a>
        </div>
        
    @empty
        <div class="w-full flex justify-center Heading4 py-8">
            Data Tidak Ditemukan
        </div>
    @endforelse
</section>

<script src="{{ asset('js/toggleDropdown2PopUp.js') }}"></script>
<script src="{{ asset('js/discussionCategory.js') }}"></script>
<script src="{{ asset('js/discussionSort.js') }}"></script>
<script src="{{ asset('js/inputImagePreview.js') }}"></script>
