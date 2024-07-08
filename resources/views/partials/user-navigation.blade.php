@if ($active === 'User Profile' || $active === 'Kelola Website')
    <div
        class="w-full h-fit flex-col justify-center items-center flex px-0 md:px-8 xl:px-16 py-10 md:py-16 lg:py-32 gap-8">
        <div
            class="w-full h-fit  max-w-1480 bg-netral-100 flex-col justify-center items-center relative rounded-2xl  grid-cols-12 shadow-card overflow-clip hidden lg:grid">
            {{-- Navigation --}}
            <div
                class=" h-full p-8 border-r-2 border-netral-300 bg-white col-span-3 justify-start items-start flex flex-col gap-8 ">
                <a href="{{ route('user.profile')}}"
                    class="{{ $active === 'User Profile' ? 'bg-netral-200 rounded-lg' : '' }} w-full h-fit  py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 inline-flex ">
                    <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}"
                        alt="{{ auth()->user()->fullname }}" class="rounded-full w-8 md:w-12  aspect-square object-cover">
                    <div class="w-full h-fit flex-col justify-start items-start inline-flex overflow-hidden">
                        <div
                            class="truncate text-left self-stretch text-neutral-900 text-lg font-bold font-THICCCBOI leading-H4">
                            {{ auth()->user()->fullname }}</div>
                        <div
                            class="text-left self-stretch text-stone-500 text-base font-normal font-THICCCBOI leading-B1">
                            {{ auth()->user()->user_type }}</div>
                    </div>
                </a>
                <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-4">
                    @if (auth()->user()->user_type === 'Mahasiswa' || auth()->user()->user_type === 'Admin')
                        <a href="/kelola-website"
                            class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
                            <i class="text-4xl ph ph-kanban"></i>
                            <div class="text-netral-900 font-medium Heading4">Kelola Website
                            </div>
                        </a>
                    @endif

                    <button id="keluarAkunBtn" onclick="togglePopUpShow('keluarAkunAlert')"
                        class="w-full text-left self-stretch px-4 py-3 bg-netral-100 rounded-lg justify-start items-center gap-3 inline-flex">
                        <i class="text-4xl ph ph-sign-out"></i>
                        <div class="text-netral-900 font-medium Heading4">Keluar</div>
                    </button>

                    {{-- Pop Up --}}
                    <div id="keluarAkunAlert"
                        class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                        <div
                            class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                            <form action="{{ route('auth.masuk.logout') }}" method="POST"
                                onclick="event.stopPropagation();"
                                class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4">
                                @csrf
                                <div class="self-stretch h-fit flex-col justify-start items-start flex" role="none"
                                    onclick="event.stopPropagation();">
                                    <div class="w-full Heading4 text-center">Kamu yakin ingin keluar?</div>
                                </div>
                                <div class="w-full flex flex-row gap-2">
                                    <button id="confirm-delete-button" onclick="" type="submit"
                                        class="w-full flex btn-secondary-sm px-4">
                                        Iya, Keluar
                                    </button>
                                    <button id="cancel-delete-button" type="button"
                                        onclick="togglePopUpShow('keluarAkunAlert')"
                                        class="w-full flex btn-primary-sm px-4">
                                        Tidak
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Content --}}
            @yield('user-content')
        </div>
        @yield('user-content-mobile')
    </div>
@else
    
@endif
<script src="{{ asset('js/togglePopUpShow.js') }}"></script>
