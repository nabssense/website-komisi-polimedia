
@section('container')
@extends('layouts.main')
@include('partials.navbar')
    <div class="w-full flex-col gap-32 justify-start items-start">
        {{-- Section 1 Headline Berita --}}
        <div class="w-full h-fit relative items-center justify-center pt-12 pb-12 flex">
            {{-- ISI BERITA --}}
            <div class="headline-container w-1480  gap-4 relative flex-col justify-center items-center flex ">
                {{-- Placeholder for headline content --}}
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out" data-index="0">
                    <div class="w-full flex bg-netral-100 shadow-card rounded-2xl justify-center items-center relative"> <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip rounded-2xl" src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out" data-index="1">
                    <div class="w-full flex bg-netral-100 shadow-card rounded-2xl justify-center items-center relative"> <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip rounded-2xl" src="{{ url('img/Berita/test-headline-news-2.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out" data-index="2">
                    <div class="w-full flex bg-netral-100 shadow-card rounded-2xl justify-center items-center relative"> <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip rounded-2xl" src="{{ url('img/Berita/test-headline-news-2.jpg') }}" alt="Image" />
                    </div>
                </div>
                {{-- End of headline content --}}
                
                {{-- Button nextnews & prevnewsious --}}
                <div class="w-fit h-full z-40 px-8 pb-8 -left-16 top-0 absolute justify-center items-center inline-flex">
                    <i class="text-5xl ph ph-caret-left text-primary-base cursor-pointer prevnews-btn p-2 bg-netral-100 rounded-full shadow-card-m"></i>
                </div>
                <div class="w-fit h-full z-40 px-8 pb-8 -right-16 top-0 absolute justify-center items-center inline-flex">
                    <i class="text-5xl ph ph-caret-right text-primary-base cursor-pointer nextnews-btn p-2 bg-netral-100 rounded-full shadow-card-m"></i>
                </div>
                
                {{-- Stepper --}}
                
                <div class="w-full px-4 justify-center items-center gap-4 flex flex-row">
                    <div class="w-fit relative">
                        <div class=" z-10 w-32 px-4 py-1 bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div class="inset-x-0 top-0 z-0 w-16 px-4 py-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                    <div class="w-fit flex flex-col relative">
                        <div class="z-10 w-32 px-4 py-1 bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div class="inset-x-0 top-0 z-0 w-16 px-4 py-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                    <div class="w-fit flex flex-col relative">
                        <div class="z-10 w-32 px-4 py-1 bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div class="inset-x-0 top-0 z-0 w-16 px-4 py-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
        <script>
        document.addEventListener("DOMContentLoaded", function() {
        const prevnewsBtn = document.querySelector('.prevnews-btn');
        const nextnewsBtn = document.querySelector('.nextnews-btn');
        const headlineItems = document.querySelectorAll('.headline-item');
        const listIndicators = document.querySelectorAll('.list-indicator');
        const defaultlistIndicators = document.querySelectorAll('.list-indicator-default');
        let currentIndex = 0;

        function showheadlineItem(index) {
            headlineItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
            updatelistIndicators(index);
        }

        function showprevnewsItem() {
            if (currentIndex > 0) {
                currentIndex--;
                showheadlineItem(currentIndex);
                updateNavBtn();
                updatelistIndicators(currentIndex); // Tambahkan ini
            }
        }

        function shownextnewsItem() {
            if (currentIndex < headlineItems.length - 1) {
                currentIndex++;
                showheadlineItem(currentIndex);
                updateNavBtn();
                updatelistIndicators(currentIndex); // Tambahkan ini
            }
        }

        function updateNavBtn() {
            if (currentIndex === 0) {
                prevnewsBtn.classList.add('disabled', 'opacity-10');
            } else {
                prevnewsBtn.classList.remove('disabled', 'opacity-10');
            }

            if (currentIndex === headlineItems.length - 1) {
                nextnewsBtn.classList.add('disabled', 'opacity-10');
            } else {
                nextnewsBtn.classList.remove('disabled', 'opacity-10');
            }
        }

        function updatelistIndicators(index) {
            // Mengambil penanda tahun yang sesuai dengan indeks carousel
            const currentListIndicator = listIndicators[index];
            
            // Menghapus kelas 'active' dari semua penanda tahun
            listIndicators.forEach(indicator => {
                indicator.classList.add('hidden');
            });
            
            // Menambahkan kelas 'active' hanya pada penanda tahun yang sesuai
            currentListIndicator.classList.remove('hidden');
            }
            function updatelistIndicators(index) {
                listIndicators.forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.remove('hidden');
                        
                    } else {
                        indicator.classList.add('hidden');
                        
                    }
                });
                defaultlistIndicators.forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.add('hidden');
                        
                    } else {
                        indicator.classList.remove('hidden');
                    }
                });
            }

            prevnewsBtn.addEventListener('click', showprevnewsItem);
            nextnewsBtn.addEventListener('click', shownextnewsItem);

            showheadlineItem(currentIndex);
            updateNavBtn();
        });
        </script>

                    {{-- function updatelistIndicators(index) {
                        listIndicators.forEach((indicator, i) => {
                            const dataIndex = parseInt(indicator.getAttribute('data-index')); // Mendapatkan nilai data-index sebagai integer
                            if (dataIndex === index) {
                                indicator.style.order = 0; // Mengatur order menjadi 0 untuk elemen yang aktif
                            } else {
                                const order = Math.abs(dataIndex - index); // Menghitung perbedaan antara dataIndex dan index
                                indicator.style.order = order + 1; // Menyesuaikan order untuk elemen yang tidak aktif
                            }
                        });
                    }


                            prevnewsBtn.addEventListener('click', showprevnewsItem);
                            nextnewsBtn.addEventListener('click', shownextnewsItem);

                            showheadlineItem(currentIndex);
                            updateNavBtn();
                        });
                         --}}
        
        {{-- Section 2 Logo Identitas --}}
        <div class="xl:px-56 px-8 py-12 xl:justify-center justify-start bg-primary-100 items-center gap-12 flex flex-wrap">
            <img class="w-fit h-32" src="{{ url('img/Logo-Polimedia.png') }}" alt="" />
            <img class="aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            <img class="w-fit h-32" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
        </div>
        {{-- Section 3 Berita --}}
        <div class="w-full h-fit xl:px-56 px-4 py-16 bg-white flex-col justify-center items-center gap-12 flex flex-wrap">
            <div class="max-w-[1480px] w-full text-netral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Berita</div>
            <div class="max-w-[1480px] w-full flex-col justify-start items-center gap-16 flex">
                {{-- Card Berita --}}
                <div class="gap-8  justify-center items-center">
                    <div class="w-full flex flex-wrap gap-8  justify-center">
                        <a href="/berita-detail"
                            class="flex-shrink-0 flex-grow basis-1/4 w-full flex-col justify-start items-start inline-flex">
                            <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                        <div
                                            class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                            Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                    </div>
                                </div>
                                <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                    <div
                                        class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        29 Juli 2022</div>
                                    <div
                                        class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        SBMPN</div>
                                </div>
                            </div>
                        </a>
                        <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                            <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                        <div
                                            class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                            Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                    </div>
                                </div>
                                <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                    <div
                                        class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        29 Juli 2022</div>
                                    <div
                                        class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        SBMPN</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                            <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                        <div
                                            class="grow shrink basis-0 text-zinc-900 text-2xl font-semibold font-['THICCCBOI'] leading-9">
                                            Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                    </div>
                                </div>
                                <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                    <div
                                        class="grow shrink basis-0 text-zinc-900 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        29 Juli 2022</div>
                                    <div
                                        class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                                        SBMPN</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="window.location.href='/berita';" class="px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lihat
                        Selengkapnya
                    </div>
                </button>
                
            </div>
        </div>
        {{-- Section 4 Forum Diskusi --}}
        <div class="w-full xl:px-56 px-4 py-16 flex-col justify-center items-center gap-12 flex flex-wrap">
            <div class="max-w-[1480px] w-full text-neutral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Forum Diskusi</div>
            <div class="max-w-[1480px] w-full flex-col justify-start items-center gap-16 flex flex-wrap">
                <div class="self-stretch justify-start items-start gap-8 inline-flex flex-wrap">
                    {{-- Card Forum Diskusi --}}
                    <div
                        class="grow shrink basis-0 h-fit py-6 bg-white rounded-lg shadow flex-col justify-start items-start gap-8 inline-flex">
                        <div class="self-stretch h-fit  px-6 flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                            <div
                                                class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                Muhammad Alif</div>
                                            <div
                                                class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                -</div>
                                            <div
                                                class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">
                                                Mahasiswa</div>
                                        </div>
                                        <div
                                            class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                            9 menit lalu</div>
                                    </div>
                                    <i class="text-2xl ph-fill ph-dots-three-outline-vertical"></i>
                                </div>
                                <div class="self-stretch h-fit  flex-col justify-start items-start gap-2 flex">
                                    <div
                                        class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa mengetahui rinciannya?</div>
                                    <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                        <a href="#"
                                            class="px-4 bg-indigo-200 rounded-full justify-start items-center py-1 flex">
                                            <div
                                                class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                Pencairan KIPK</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="grow shrink basis-0 h-fit py-6 bg-white rounded-lg shadow flex-col justify-start items-start gap-8 inline-flex">
                        <div class="self-stretch h-fit  px-6 flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                            <div
                                                class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                Muhammad Alif</div>
                                            <div
                                                class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                -</div>
                                            <div
                                                class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">
                                                Mahasiswa</div>
                                        </div>
                                        <div
                                            class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                            9 menit lalu</div>
                                    </div>
                                    <i class="text-2xl ph-fill ph-dots-three-outline-vertical"></i>
                                </div>
                                <div class="self-stretch h-fit  flex-col justify-start items-start gap-2 flex">
                                    <div
                                        class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa mengetahui rinciannya?</div>
                                    <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                        <div
                                            class="px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                            <div
                                                class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                Pencairan KIPK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="grow shrink basis-0 h-fit py-6 bg-white rounded-lg shadow flex-col justify-start items-start gap-8 inline-flex">
                        <div class="self-stretch h-fit  px-6 flex-col justify-start items-start gap-6 flex">
                            <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                            <div
                                                class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                Muhammad Alif</div>
                                            <div
                                                class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">
                                                -</div>
                                            <div
                                                class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">
                                                Mahasiswa</div>
                                        </div>
                                        <div
                                            class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">
                                            9 menit lalu</div>
                                    </div>
                                    <i class="text-2xl ph-fill ph-dots-three-outline-vertical"></i>
                                </div>
                                <div class="self-stretch h-fit  flex-col justify-start items-start gap-2 flex">
                                    <div
                                        class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                                        Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita
                                        bisa mengetahui rinciannya?</div>
                                    <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                        <div
                                            class="px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                            <div
                                                class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-none">
                                                Pencairan KIPK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button onclick="window.location.href='/forum';" class="px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                <div class="text-center text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lihat
                    Selengkapnya
                </div>
            </button>
        </div>
        @include('partials.content-tentang-komisi')
        @include('partials.footer')
    @endsection
