{{-- Desktop Navbar --}}
<div id="navbar"
    class="w-full h-fit px-4 md:px-8 xl:px-16 py-2 md:py-4 bg-white shadow-navbar justify-center items-center inline-flex fixed inset-x-0 top-0 z-50 transform transition-transform duration-500">
    <div class="w-full max-w-1480 justify-between items-center gap-8 flex">
        <div
            class="h-12 md:h-16 justify-start {{ $active === 'Masuk Akun' || $active === 'Daftar Akun' ? 'justify-center w-full' : '' }} items-center gap-1 lg:gap-2 xl:gap-4 flex">
            <a href="/beranda" class="w-fit h-full relative">
                <img  class="lazyload h-full w-fit aspect-square object-scale-down" src="{{ url('img/Logo-Komisi.svg') }}"
                    alt="Image" />
            </a>
            <a href="/beranda" class="w-fit h-full  relative">
                <img class="lazyload w-fit h-full" src="{{ asset('img/kabinet/Kabinet_Harpiah_Vertical.svg') }}"
                    alt="Image" />
            </a>
        </div>
        @if ($active === 'Masuk Akun' || $active === 'Daftar Akun')
        @else
            <div class="w-fit justify-end items-center gap-14 flex flex-none">
                <div class="hidden lg:flex justify-center items-start gap-8 ">
                    <a class="" href="/beranda">
                        <div
                            class="{{ $active === 'Beranda' || $active === 'Masuk Akun' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Beranda</div>
                        @if ($active === 'Beranda' || $active === 'Masuk Akun')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </a>
                    <a class="" href="/berita">
                        <div
                            class="{{ $active === 'Berita' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900  text-lg font-medium font-THICCCBOI leading-9">
                            Berita</div>
                        @if ($active === 'Berita')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </a>
                    <a href="/forum-diskusi">
                        <div
                            class="{{ $active === 'Forum Diskusi' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }}text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Forum Diskusi</div>
                        @if ($active === 'Forum Diskusi')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </a>
                    <a class="" href="/tentang-komisi">
                        <div
                            class="{{ $active === 'Tentang Komisi' || $active === 'Tentang Kabinet' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Tentang Komisi</div>
                        @if ($active === 'Tentang Komisi' || $active === 'Tentang Kabinet')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </a>
                </div>
                <div class="justify-end items-center gap-4 xl:gap-8 flex flex-none">
                    @auth
                        <a href="/notifikasi"
                            class="{{ $active === 'Notifikasi' ? 'ph-fill text-primary-base ' : '' }} ph ph-notification text-4xl md:text-32"></a>
                        <a class="w-fit h-fit lg:flex hidden" href="{{ route('user.profile')}}">
                            <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL)
                                ? auth()->user()->profile_picture
                                : Storage::url(auth()->user()->profile_picture) }}"
                                alt="{{ auth()->user()->fullname }}" class="rounded-full w-12  aspect-square object-cover">
                        </a>
                        <a class="w-fit h-fit lg:hidden flex" href="/user">
                            <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL)
                                ? auth()->user()->profile_picture
                                : Storage::url(auth()->user()->profile_picture) }}"
                                alt="{{ auth()->user()->fullname }}" class="rounded-full w-12  aspect-square object-cover">
                        </a>
                    @endauth
                    @guest
                        <div class="flex flex-row gap-2 ">
                            <a href="/masuk-akun" class="btn-primary">Masuk</a>
                        </div>
                    @endguest
                </div>
            </div>
        @endif
    </div>
</div>
@if ($active === 'Tentang Komisi' || $active === 'Tentang Kabinet')
    <script>
        let prevScrollPos = window.pageYOffset;
        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                document.getElementById("navbar").style.transform = "translateY(0)";
            } else {
                document.getElementById("navbar").style.transform = "translateY(-100%)";
            }
            prevScrollPos = currentScrollPos;
        }
    </script>
@endif
