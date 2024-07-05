<footer class="w-full px-4 md:px-8 xl:px-16 pt-8 lg:pt-24 pb-20 lg:pb-12 bg-primary-base flex-col justify-center items-center gap-8 lg:gap-16 flex">
    <div class="max-w-1480 h-fit w-full justify-center items-center gap-8 lg:gap-16 flex flex-col xl:flex-row">
        <section class="w-full h-fit order-2 xl:order-1 flex-col justify-center relative items-start gap-8 lg:gap-12 inline-flex">
            <div class="w-full h-fit justify-start items-center gap-2 md:gap-8 flex flex-row">
                @php
                    // Baca isi file SVG
                    $svgContent = file_get_contents(
                        public_path('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg'),
                    );

                    // Analisis isi SVG untuk mendapatkan semua data path dan warna fill
                        preg_match_all('/<path\s+[^>]*\bd=["\']([^"\']+)["\'][^>]*\bfill=["\']([^"\']+)["\']/i', $svgContent, $matches, PREG_SET_ORDER);

                        // Mengambil semua data path dan warna fill
                        $pathDataWithFill = [];

                        foreach ($matches as $match) {
                            $pathDataWithFill[] = [
                                'path' => $match[1], // Data path
                                'fill' => $match[2], // Data fill
                            ];
                        }
                @endphp
                <div class="w-24 h-24 relative">
                    <img class="h-full w-fit fill-netral-100 aspect-square object-scale-down" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                </div>
                <div class="h-fit justify-center items-center relative ">
                    <svg class="w-full h-full object-scale-down" style="width:100%; height:100%;" viewBox="0 0 200  60" >
                        @foreach ($pathDataWithFill as $pathInfo)
                            : ?>
                            <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                            <path class="fill-white" d="{{ $pathInfo['path'] }}"
                                fill="{{ $pathInfo['fill'] }}" />
                        @endforeach
                    </svg>
                </div>
            </div>
            <div class="self-stretch justify-start items-start gap-8 lg:gap-24 inline-flex flex-col md:flex-row">
                <div class="w-full flex-col lg:flex-none lg:w-fit items-start gap-2 lg:gap-4 inline-flex">
                    <div class="text-white font-bold Heading4">Menu</div>
                    <a href="/beranda" class=" justify-start items-start cursor-pointer group/beranda">
                        <div class="text-white font-medium Heading4 line-clamp-1">Beranda</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white rounded-sm group-hover/beranda:opacity-100"></div>
                    </a>
                    <a href="/berita" class=" justify-start items-start cursor-pointer group/berita">
                        <div class="text-white font-medium Heading4 line-clamp-1">Berita</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white rounded-sm group-hover/berita:opacity-100"></div>
                    </a>
                    <a href="/forum-diskusi" class=" justify-start items-start cursor-pointer group/tanya">
                        <div class=" text-white font-medium Heading4 line-clamp-1">Forum Diskusi</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white rounded-sm group-hover/tanya:opacity-100"></div>
                    </a>
                    <a href="/tentang-komisi" class=" justify-start items-start cursor-pointer group/tentang">
                        <div class="text-white font-medium Heading4 line-clamp-1">Tentang Komisi</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white rounded-sm group-hover/tentang:opacity-100"></div>
                    </a>
                </div>
                <div class="w-full flex-col justify-center items-start gap-2 lg:gap-4  inline-flex">
                    <div class="text-white font-bold Heading4">Terhubung dengan kami</div>
                    <a href="instagram.com/komisipolimedia" class="px-3 py-0 md:px-4 md:py-1 bg-rose-100 rounded-full justify-start items-center gap-2 md:gap-3 inline-flex">
                        <i class="text-lg text-netral-800 ph ph-instagram-logo"></i>
                        <div class="text-neutral-900 font-medium Body1 md:Heading4">@komisipolimedia</div>
                    </a>
                    <a href="https://www.youtube.com/@KOMISIPolimedia" class="px-3 py-0 md:px-4 md:py-1 bg-rose-100 rounded-full justify-start items-center gap-2 md:gap-3 inline-flex">
                        <i class="text-lg text-netral-800 ph ph-youtube-logo"></i>
                        <div class="text-neutral-900 font-medium Body1 md:Heading4">Komisi Polimedia</div>
                    </a>
                    {{-- <div class="text-white font-bold Heading4">Hubungi kami</div>
                    <div class="w-full sm:w-fit px-3 py-0 md:px-4 md:py-1 bg-rose-100 rounded-full justify-start items-center gap-2 md:gap-3 flex">
                        <i class="text-lg text-netral-800 ph ph-envelope-simple"></i>
                        <div class="w-full text-neutral-900 font-medium Body1 md:Heading4 truncate">humaskomisipolimedia@gmail.com</div>
                    </div>
                    <div class="px-3 py-0 md:px-4 md:py-1 bg-rose-100 rounded-full justify-start items-center gap-2 md:gap-3 flex">
                        <i class="text-lg text-netral-800 ph ph-whatsapp-logo"></i>
                        <div class="text-neutral-900 font-medium Body1 md:Heading4">0813-2329-2564 </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <section class="w-full h-fit rounded-2xl xl:order-2 flex  overflow-clip justify-center items-center">
            <div class="w-full h-full justify-center items-center flex bg-lime-400">
                <img class="bg-cover rounded-2xl relative" src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
            </div>
        </section>
    </div>
    <div class="w-full h-fit flex-col justify-start items-center gap-4 flex">
        <div class="w-full h-0.5 lg:h-1 bg-gray-200 rounded-2xl"></div>
        <div class="text-center"><span class="text-white font-normal Body2 md:Heading4">• Membidik Prestasi Membangun Negeri • © 2022 Copyright Komisi Polimedia</span></div>
    </div>
</footer>