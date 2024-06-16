<footer class="w-full px-4 md:px-8 xl:px-16 pt-24 pb-12 bg-primary-base flex-col justify-center items-center gap-16 flex">
    <div class="max-w-1480 h-fit w-full justify-center items-center gap-16 flex flex-col xl:flex-row">
        <section class="w-full h-fit sm:order-2 xl:order-1 flex-col justify-center relative items-start gap-12 inline-flex">
            <div class="w-full h-fit justify-start items-start gap-8 inline-flex flex-wrap">
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
                    <img class="h-full w-fit fill-netral-100 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                </div>
                <div class="h-fit justify-center items-center relative">
                    <svg class="w-full h-full " style="width:100%; height:100%;" viewBox="0 0 200  60" >
                        @foreach ($pathDataWithFill as $pathInfo)
                            : ?>
                            <!-- Tetapkan data path dan fill yang diambil dari SVG -->
                            <path class="fill-white" d="{{ $pathInfo['path'] }}"
                                fill="{{ $pathInfo['fill'] }}" />
                        @endforeach
                    </svg>
                </div>
            </div>
            <div class="self-stretch justify-start items-start gap-24 inline-flex flex-wrap">
                <div class="flex-col justify-center items-start gap-4 inline-flex">
                    <div class="text-white text-2xl font-bold font-['THICCCBOI'] leading-9">Menu</div>
                    <button onclick="window.location.href='/beranda';" class="flex-col justify-start items-start flex cursor-pointer group/beranda">
                        <div class="text-white text-2xl font-medium font-['THICCCBOI'] leading-9">Beranda</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white group-hover/beranda:opacity-100"></div>
                    </button>
                    <button onclick="window.location.href='/berita';" class="flex-col justify-start items-start flex cursor-pointer group/berita">
                        <div class="text-white text-2xl font-medium font-['THICCCBOI'] leading-9">Berita</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white group-hover/berita:opacity-100"></div>
                    </button>
                    <button onclick="window.location.href='/tanya-jawab';" class="flex-col justify-start items-start flex cursor-pointer group/tanya">
                        <div class="text-white text-2xl font-medium font-['THICCCBOI'] leading-9">Tanya Jawab</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white group-hover/tanya:opacity-100"></div>
                    </button>
                    <button onclick="window.location.href='/tentang-komisi';" class="flex-col justify-start items-start flex cursor-pointer group/tentang">
                        <div class="text-white text-2xl font-medium font-['THICCCBOI'] leading-9">Tentang Komisi</div>
                        <div class="opacity-0 w-1/2 h-1 bg-white group-hover/tentang:opacity-100"></div>
                    </button>
                </div>
                <div class="grow shrink basis-0 flex-col justify-center items-start gap-4 inline-flex">
                    <div class="text-white text-2xl font-bold font-['THICCCBOI'] leading-9">Terhubung dengan kami</div>
                    <div class="px-4 py-1 bg-rose-100 rounded-full justify-start items-center gap-3 inline-flex">
                        <i class="text-3xl text-netral-800 ph ph-instagram-logo"></i>
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">@komisipolimedia</div>
                    </div>
                    <div class="px-4 py-1 bg-rose-100 rounded-full justify-start items-center gap-3 inline-flex">
                        <i class="text-3xl text-netral-800 ph ph-youtube-logo"></i>
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Komisi Polimedia</div>
                    </div>
                    <div class="text-white text-2xl font-bold font-['THICCCBOI'] leading-9">Hubungi kami</div>
                    <div class="px-4 py-1 bg-rose-100 rounded-full justify-start items-center gap-3 inline-flex">
                        <i class="text-3xl text-netral-800 ph ph-envelope-simple"></i>
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">humaskomisipolimedia@gmail.com</div>
                    </div>
                    <div class="px-4 py-1 bg-rose-100 rounded-full justify-start items-center gap-3 inline-flex">
                        <i class="text-3xl text-netral-800 ph ph-whatsapp-logo"></i>
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">0813-2329-2564 </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full h-fit rounded-2xl xl:order-2 flex  overflow-clip justify-center items-center">
            <div class="w-full h-full justify-center items-center flex bg-lime-400">
                <img class="bg-cover rounded-2xl relative" src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
            </div>
        </section>
    </div>
    <div class="self-stretch h-16 flex-col justify-start items-center gap-10 flex">
        <div class="self-stretch h-1 bg-gray-200 rounded-2xl"></div>
        <div class="text-center"><span class="text-white text-lg font-normal font-['THICCCBOI'] leading-7">• Membidik Prestasi Membangun Negeri • © 2022 Copyright Komisi Polimedia</span></div>
    </div>
</footer>