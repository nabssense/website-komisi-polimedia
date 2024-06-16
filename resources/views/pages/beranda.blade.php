@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="w-full h-fit flex-col justify-start items-start flex">
        
        <section class="w-full h-fit relative bg-lime-50 items-center justify-center pt-12 pb-12 px-4 md:px-8 xl:px-16 flex">

            {{-- ISI BERITA --}}
            <div class="headline-container w-1480 h-fit gap-4 relative flex-col justify-center items-center flex ">
                {{-- Placeholder for headline content --}}
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out"
                    data-index="0">
                    <div class="w-full flex bg-netral-100 shadow-card rounded-2xl justify-center items-center relative">
                        <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out"
                    data-index="1">
                    <div class="w-full flex bg-netral-100 shadow-card rounded-2xl justify-center items-center relative">
                        <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news-2.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out"
                    data-index="2">
                    <div class="w-full flex bg-netral-100 shadow-card rounded-2xl justify-center items-center relative">
                        <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip rounded-2xl"
                            src="{{ url('img/Berita/test-headline-news-2.jpg') }}" alt="Image" />
                    </div>
                </div>
                {{-- End of headline content --}}

                {{-- Button nextnews & prevnewsious --}}
                <div class="w-fit h-full z-40 pb-8 -left-4 top-0 absolute justify-center items-center inline-flex">
                    <i
                        class="xs:text-xl  sm:text-3xl md:text-5xl ph ph-caret-left text-primary-base cursor-pointer prevnews-btn p-1 bg-netral-100 rounded-full shadow-card-m xs:leading-none sm:leading-none"></i>
                </div>
                <div class="w-fit h-full z-40 pb-8 -right-4 top-0 absolute justify-center items-center inline-flex">
                    <i
                        class="xs:text-xl  sm:text-3xl md:text-5xl ph ph-caret-right text-primary-base cursor-pointer nextnews-btn p-1 bg-netral-100 rounded-full shadow-card-m xs:leading-none sm:leading-none"></i>
                </div>

                {{-- Stepper --}}
                <div class="w-full px-4 justify-center items-center gap-4 flex flex-row">
                    <div class="w-fit relative">
                        <div
                            class=" z-10 md:w-32 md:h-2 xs:h-1 xs:w-16 bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div
                            class="inset-x-0 top-0 z-0 md:w-16 md:h-2 xs:h-1 xs:w-8 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                    <div class="w-fit flex flex-col relative">
                        <div
                            class="z-10 md:w-32 md:h-2 xs:h-1 xs:w-16 bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div
                            class="inset-x-0 top-0 z-0 md:w-16 md:h-2 xs:h-1 xs:w-8 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                    <div class="w-fit flex flex-col relative">
                        <div
                            class="z-10 md:w-32 md:h-2 xs:h-1 xs:w-16 bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div
                            class="inset-x-0 top-0 z-0 md:w-16 md:h-2 xs:h-1 xs:w-8 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                </div>

            </div>
        </section>

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
        {{-- Section 2 Logo --}}
        <section
            class=" w-full h-72 px-4 md:px-8 xl:px-16 py-12 justify-center  bg-primary-100 items-center xl:gap-12 gap-2 flex flex-row">
                <div class="h-full flex">
                    <img class="w-fit h-full p-2" src="{{ url('img/Berita/test-headline-news.jpg') }}" alt="Image" />
                </div>
                <div class="h-full flex">
                    <img class=" h-full" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                </div>
                <div class="h-full flex">
                    <img class=" h-full" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                </div>
        </section>
        {{-- Section 3 Berita --}}
        @include('partials.berita-content')
    </div>

    {{-- Section 4 Forum Diskusi --}}
    @include('partials.tentang-komisi-content')
    @include('partials.footer')
@endsection
