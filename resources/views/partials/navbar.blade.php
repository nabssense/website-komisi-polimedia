{{-- Desktop Navbar --}} 
<div id="navbar" class="w-full h-fit px-4 md:px-8 xl:px-16 py-2 md:py-4 bg-white shadow-navbar justify-center items-center inline-flex fixed inset-x-0 top-0 z-50 transform transition-transform duration-500">
    <div class="w-full max-w-1480 justify-between items-center gap-8 flex">
        <div class="h-12 md:h-16 justify-start {{ $active === 'Masuk Akun' || $active === 'Daftar Akun' ? 'justify-center w-full' : '' }} items-center gap-1 lg:gap-2 xl:gap-4 flex">
            <button onclick="pageBeranda()" class="w-fit h-full relative">
                <img class="h-full w-fit aspect-square object-scale-down" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            </button>
            <button onclick="pageBeranda()" class="w-fit h-full relative">
                <img class="w-fit h-full object-scale-down" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
            </button>
        </div>
        @if ($active === 'Masuk Akun' || $active === 'Daftar Akun') 
        @else
        <div class="w-fit justify-end items-center gap-14 flex flex-none">
            <div class="hidden lg:flex justify-center items-start gap-8 ">
                    <button class="" onclick="pageBeranda()">
                        <div
                            class="{{ $active === 'Beranda' || $active === 'Masuk Akun' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Beranda</div>
                        @if ($active === 'Beranda' || $active === 'Masuk Akun')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </button>
                    <button class="" onclick="pageBerita()">
                        <div
                            class="{{ $active === 'Berita' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900  text-lg font-medium font-THICCCBOI leading-9">
                            Berita</div>
                        @if ($active === 'Berita')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </button>
                    <button onclick="pageForumDiskusi()">
                        <div class="{{ $active === 'Forum Diskusi' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }}text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Forum Diskusi</div>
                        @if ($active === 'Forum Diskusi')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </button>
                    <button class="" onclick="pageTentangKomisi()">
                        <div
                            class="{{ $active === 'Tentang Komisi' || $active === 'Tentang Kabinet' ? 'text-primary-base text-lg font-semibold font-THICCCBOI' : '' }} text-neutral-900 text-lg font-medium font-THICCCBOI leading-9">
                            Tentang Komisi</div>
                        @if ($active === 'Tentang Komisi' || $active === 'Tentang Kabinet')
                            <div class="w-1/2 h-1 bg-primary-600 rounded"></div>
                        @endif
                    </button>
            </div>
            <div class="justify-end items-center gap-4 xl:gap-8 flex flex-none">
                @auth
                    <button onclick="pageNotifikasi()" class="{{ $active === 'Notifikasi' ? 'ph-fill text-primary-base ' : '' }} ph ph-notification text-2xl md:text-32"></button>
                    <button class="w-fit h-fit" onclick="pageUserProfile()">
                        <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) 
                        ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}" 
                        alt="{{ auth()->user()->fullname }}" class="rounded-full w-8 md:w-12 ">
                    </button>
                @endauth
                @guest
                <div class="flex flex-row gap-2 ">
                <button onclick="pageMasuk()" class="btn-sm-primary" >Masuk</button>
                {{-- <button onclick="pageMasuk()" class="text-lg font-semibold font-THICCCBOI px-4 bg-primary-100  justify-start rounded-lg
                        items-center gap-2.5 flex" >
                        <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-9">Daftar</div>
                </button> --}}
                </div>
                
                @endguest
            </div>
        </div>
        @endif
    </div>

</div>



@if ($active === 'Masuk Akun' || $active === 'Daftar Akun') 
        @else
{{-- Mobile Navbar --}} 
<div id="navbar-bottom-mobile" class="fixed bottom-0 bg-white w-full z-50 flex shadow-bottom-navbar justify-center items-center gap-2 py-1 px-2 sm:px-5 md:px-24 lg:hidden">
    <button class="w-full flex-col justify-center {{ $active === 'Beranda' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" onclick="pageBeranda()">
        <div class="w-full">
            <i class="ph ph-house {{ $active === 'Beranda' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div
            class="{{ $active === 'Beranda' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900 Body2 font-medium">
            Beranda</div>
    </button>
    <button class="w-full flex-col justify-center {{ $active === 'Berita' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" onclick="pageBerita()">
        <div class="w-full">
            <i class="ph ph-newspaper {{ $active === 'Berita' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div class="{{ $active === 'Berita' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900  font-medium Body2">
            Berita</div>
    </button>
    <button class="w-full flex-col justify-center {{ $active === 'Forum Diskusi' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" onclick="pageForumDiskusi()">
        <div class="w-full">
            <i class="ph ph-chats-teardrop {{ $active === 'Forum Diskusi' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div class="{{ $active === 'Forum Diskusi' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900 font-medium Body2">Diskusi</div>
    </button>
    <button class="w-full flex-col justify-center {{ $active === 'Tentang Komisi' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" onclick="pageTentangKomisi()">
        <div class="w-full">
            <i class="ph ph-globe-hemisphere-west {{ $active === 'Tentang Komisi' || $active === 'Tentang Kabinet' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div
            class="{{ $active === 'Tentang Komisi' || $active === 'Tentang Kabinet' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900 font-medium Body2">
            Tentang</div>
    </button>
</div>
@endif


@if ($active === 'Tentang Komisi' || $active === 'Tentang Kabinet' )
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
