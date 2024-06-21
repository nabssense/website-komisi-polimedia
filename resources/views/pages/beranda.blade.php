@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <section class="w-full h-fit relative items-center justify-center pt-12 md:pt-24 lg:pt-32 pb-4 lg:pb-12 lg:px-8 xl:px-16 flex ">
        {{-- ISI BERITA --}}
        <div class="headline-container w-1480 h-fit gap-1 lg:gap-4 flex-col justify-center items-center flex lg:px-16 relative">
            {{-- Placeholder for headline content --}}
            <div class="headline-item z-30 w-full h-fit flex flex-row justify-center items-center transition-transform duration-500 ease-in-out cursor-pointer"
                data-index="0">
                <div class="w-full h-full aspect-21/9 flex bg-netral-100 shadow-card lg:rounded-2xl justify-center items-center">
                    <!-- Mengubah justify-center -->
                    <img class="w-full h-full object-cover lg:rounded-2xl" src="{{ url('img/Berita/Yonkou - Dekstop.png') }}"
                        alt="Image" />
                </div>
            </div>
            <div class="headline-item z-30 w-full h-fit flex flex-row justify-center items-center transition-transform duration-500 ease-in-out cursor-pointer"
                data-index="0">
                <div class="w-full h-full aspect-21/9 flex bg-netral-100 shadow-card lg:rounded-2xl justify-center items-center">
                    <!-- Mengubah justify-center -->
                    <img class="w-full h-full object-cover lg:rounded-2xl" src="{{ url('img/Berita/Straw Hat Pirates - Dekstop.png') }}"
                        alt="Image" />
                </div>
            </div>
            <div class="headline-item z-30 w-full h-fit flex flex-row justify-center items-center transition-transform duration-500 ease-in-out cursor-pointer"
                data-index="0">
                <div class="w-full h-full aspect-21/9 flex bg-netral-100 shadow-card lg:rounded-2xl justify-center items-center">
                    <!-- Mengubah justify-center -->
                    <img class="w-full h-full object-cover lg:rounded-2xl" src="{{ url('img/Berita/Straw Hat Pirates (BG) - Dekstop.png') }}"
                        alt="Image" />
                </div>
            </div>
            {{-- End of headline content --}}

            {{-- Button nextnews & prevnewsious --}}
            <div class="w-fit h-full z-40 pb-8 -left-4 top-0 absolute justify-center items-center lg:flex hidden lg:pl-12">
                <i
                    class="xs:text-xl  sm:text-3xl md:text-5xl ph ph-caret-left text-primary-base cursor-pointer prevnews-btn p-1 bg-netral-100 rounded-full shadow-card-m xs:leading-none sm:leading-none"></i>
            </div>
            <div class="w-fit h-full z-40 pb-8 -right-4 top-0 absolute justify-center items-center lg:flex hidden lg:pr-12">
                <i
                    class="xs:text-xl  sm:text-3xl md:text-5xl ph ph-caret-right text-primary-base cursor-pointer nextnews-btn p-1 bg-netral-100 rounded-full shadow-card-m xs:leading-none sm:leading-none"></i>
            </div>

            {{-- Stepper --}}
            <div class="w-full px-4 justify-center items-center gap-1 lg:gap-2 flex flex-row">
                <div class="w-fit ">
                    <div
                        class=" z-10 w-6 lg:w-16 h-1 lg:h-2  bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                    </div>
                    <div
                        class="w-2 lg:w-4 lg:h-2 h-1  bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                    </div>
                </div>
                <div class="w-fit flex flex-col ">
                    <div
                        class="z-10 w-6 lg:w-16 h-1 lg:h-2  bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                    </div>
                    <div
                        class="w-2 lg:w-4 lg:h-2 h-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                    </div>
                </div>
                <div class="w-fit flex flex-col ">
                    <div
                        class="z-10 w-6 lg:w-16 h-1 lg:h-2  bg-primary-base rounded-full flex-row justify-center items-center list-indicator hidden">
                    </div>
                    <div
                        class="w-2 lg:w-4 lg:h-2 h-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
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

    let startX = 0;
    let endX = 0;

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
        } else {
            currentIndex = headlineItems.length - 1; // Mengarah ke item headline terakhir jika saat ini di awal
        }
        showheadlineItem(currentIndex);
        updatelistIndicators(currentIndex);
    }

    function shownextnewsItem() {
        if (currentIndex < headlineItems.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Mengarah ke item headline pertama jika saat ini di akhir
        }
        showheadlineItem(currentIndex);
        updatelistIndicators(currentIndex);
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

    function handleTouchStart(event) {
        startX = event.touches[0].clientX;
    }

    function handleTouchMove(event) {
        endX = event.touches[0].clientX;
    }

    function handleTouchEnd() {
        if (startX > endX) {
            shownextnewsItem();
        } else if (startX < endX) {
            showprevnewsItem();
        }
    }

    prevnewsBtn.addEventListener('click', showprevnewsItem);
    nextnewsBtn.addEventListener('click', shownextnewsItem);

    headlineItems.forEach(item => {
        item.addEventListener('touchstart', handleTouchStart);
        item.addEventListener('touchmove', handleTouchMove);
        item.addEventListener('touchend', handleTouchEnd);
    });

    showheadlineItem(currentIndex);

    // Auto-slide functionality
    setInterval(shownextnewsItem, 8000); // 8000 milliseconds = 8 seconds
});
    </script>
    {{-- Section 2 Logo --}}
    <section
        class=" w-full h-32 md:h-48 xl:h-72 px-4 md:px-8 xl:px-16 justify-center  bg-primary-100 items-center  flex ">
        <div class="w-full h-full py-8 justify-center max-w-1480  gap-1 md:gap-4 xl:gap-12 flex">
            <div class="h-full">
                <img class="w-fit h-full object-scale-down p-2" src="{{ url('img/Logo-Polimedia.png') }}" alt="Image" />
            </div>
            <div class="h-fullx">
                <img class=" h-full object-fill" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            </div>
            <div class="h-full">
                <img class=" h-full " src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
            </div>
        </div>
    </section>
    {{-- Section 3 Berita --}}
    @include('partials.berita-content')
    {{-- Section 4 Forum Diskusi --}}
    @include('partials.forum-diskusi-content')
    {{-- Section 5 Tentang Komisi --}}
    @include('partials.tentang-komisi-content')
    @include('partials.footer')
@endsection
