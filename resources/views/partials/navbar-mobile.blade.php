{{-- Mobile Navbar --}} 
<div id="navbar-bottom-mobile" class="fixed bottom-0 bg-white w-full z-50 flex shadow-bottom-navbar justify-center items-center gap-2 py-2 px-2 sm:px-5 md:px-24 lg:hidden">
    <a class="w-full flex-col justify-center {{ $active === 'Beranda' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" href="/beranda">
        <div class="w-full flex justify-center">
            <i class="ph ph-house {{ $active === 'Beranda' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div
            class="{{ $active === 'Beranda' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900 Body2 font-medium">
            Beranda</div>
    </a>
    <a class="w-full flex-col justify-center {{ $active === 'Berita' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" href="/berita">
        <div class="w-full flex justify-center">
            <i class="ph ph-newspaper {{ $active === 'Berita' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div class="{{ $active === 'Berita' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900  font-medium Body2">
            Berita</div>
    </a>
    <a class="w-full flex-col justify-center {{ $active === 'Forum Diskusi' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" href="/forum-diskusi">
        <div class="w-full flex justify-center">
            <i class="ph ph-chats-teardrop {{ $active === 'Forum Diskusi' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div class="{{ $active === 'Forum Diskusi' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900 font-medium Body2">Diskusi</div>
    </a>
    <a class="w-full flex-col justify-center {{ $active === 'Tentang Komisi' ? 'bg-primary-100' : '' }} rounded-lg items-start inline-flex py-1 sm:px-2" href="/tentang-komisi">
        <div class="w-full flex justify-center">
            <i class="ph ph-globe-hemisphere-west {{ $active === 'Tentang Komisi' || $active === 'Tentang Kabinet' ? 'text-primary-base ph-fill' : '' }} text-netral-900 text-2xl"></i>
        </div>
        <div
            class="{{ $active === 'Tentang Komisi' || $active === 'Tentang Kabinet' ? 'text-primary-base' : '' }} w-full text-center text-neutral-900 font-medium Body2">
            Tentang</div>
    </a>
</div>