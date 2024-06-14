{{-- Desktop Navbar --}} <div id="navbar"
    class="w-full  lg:px-8 px-4 py-4 bg-white shadow-navbar justify-center items-center gap-72 inline-flex fixed inset-x-0 top-0 z-50 transform transition-transform duration-500">
    <div class="grow max-w-[1480px] shrink basis-0 justify-between items-center flex">
        <div class="h-16 justify-start  items-center gap-5 flex">
            <a href="/beranda" class="h-full relative">
                <img class="h-full w-fit aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            </a>
            <a href="/beranda" class="w-fit h-fit relative">
                <img class="w-fit h-full" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
            </a>
        </div>
        <div class="grow shrink basis-0 h-12 justify-end items-center gap-14 flex">
            <div class="hidden lg:flex justify-center items-start gap-8 ">
                <div class="py-1 flex-col justify-center items-start gap-1 inline-flex">
                    <a class="" href="/beranda">
                        <div
                            class="{{ $active === 'Beranda' || $active === 'Masuk Akun' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Beranda</div>
                        @if ($active === 'Beranda' || $active === 'Masuk Akun')
                            <div class="w-1/2 h-1 bg-primary-600"></div>
                        @endif
                    </a>
                </div>
                <div class="py-1 flex-col justify-center items-start gap-1 inline-flex">
                    <a class="" href="/berita">
                        <div
                            class="{{ $active === 'Berita' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900  text-lg font-medium font-THICCCBOI leading-9">
                            Berita</div>
                        @if ($active === 'Berita')
                            <div class="w-1/2 h-1 bg-primary-600"></div>
                        @endif
                    </a>
                </div>
                <div class="py-1 justify-start items-start gap-2.5 flex">
                    <button onclick="pageForumDiskusi()">
                        <div
                            class="{{ $active === 'Forum Diskusi' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }}text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Forum Diskusi</div>
                        @if ($active === 'Forum Diskusi')
                            <div class="w-1/2 h-1 bg-primary-600"></div>
                        @endif
                    </button>
                </div>
                <div class="py-1 justify-start items-start gap-2.5 flex">
                    <a class="" href="/tentang-komisi">
                        <div
                            class="{{ $active === 'Tentang Komisi' || $active === 'Detail Kabinet' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Tentang Komisi</div>
                        @if ($active === 'Tentang Komisi' || $active === 'Detail Kabinet')
                            <div class="w-1/2 h-1 bg-primary-600"></div>
                        @endif
                    </a>
                </div>
            </div>

            <div class="justify-end items-center gap-8 flex">
                <a class="" href="/notifikasi">
                    <i
                        class="{{ $active === 'Notifikasi' ? 'ph-fill ph-notifikasi text-3xl text-primary-base ' : '' }} ph ph-notification text-3xl"></i>
                </a>
                @if ($active === 'masuk-akun')
                    <a class="" href="/masuk-akun">
                        <div class="text-lg font-semibold font-THICCCBOI px-6 bg-primary-base justify-start
                            items-center gap-2.5 flex">
                            <div class="text-white text-lg font-medium font-THICCCBOI leading-9">Masuk</div>
                        </div>
                    </a>
                @else
                    <a class="" href="/akun">
                        <i
                            class="{{ $active === 'Profil' || $active === 'Kelola Website' ? 'ph-fill ph-user text-3xl text-primary-base ' : '' }} ph ph-user text-3xl"></i>
                    </a>
                @endif
                {{-- @if ($session_terlogin === 'login')
                        <div>
                        <i class="ph ph-acoun text-3xl"></i>
                        <i class="ph ph-notification text-3xl"></i>
                        </div>
                    @endif --}}

            </div>
        </div>
    </div>

</div>


{{-- Mobile Navbar --}} <div
    class="fixed bottom-0 bg-white w-full z-50 flex shadow-bottom-navbar justify-center items-start gap-4 md:gap-12 py-4 lg:hidden">
    <div class="py-1 flex-col justify-center items-start gap-1 inline-flex">
        <a class="" href="/beranda">
            <div
                class="{{ $active === 'Beranda' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                Beranda</div>
            @if ($active === 'Beranda')
                <div class="w-1/2 h-1 bg-primary-600"></div>
            @endif
        </a>
    </div>
    <div class="py-1 flex-col justify-center items-start gap-1 inline-flex">
        <a class="" href="/berita">
            <div
                class="{{ $active === 'Berita' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900  text-lg font-medium font-THICCCBOI leading-9">
                Berita</div>
            @if ($active === 'Berita')
                <div class="w-1/2 h-1 bg-primary-600"></div>
            @endif
        </a>
    </div>
    <div class="py-1 justify-start items-start gap-2.5 flex">
        <a class="" href="/tanya-jawab">
        <div class="{{ $active === 'Tanya Jawab' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">Tanya Jawab</div>
        @if ($active === 'Tanya Jawab')
            <div class="w-1/2 h-1 bg-primary-600"></div>
        @endif
    </div>
    <div class="py-1 justify-start items-start gap-2.5 flex">
        <a class="" href="/tentang-komisi">
            <div
                class="{{ $active === 'Tentang Komisi' || $active === 'Detail Kabinet' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                Tentang</div>
            @if ($active === 'Tentang Komisi' || $active === 'Detail Kabinet')
                <div class="w-1/2 h-1 bg-primary-600"></div>
            @endif
        </a>
    </div>
</div>

