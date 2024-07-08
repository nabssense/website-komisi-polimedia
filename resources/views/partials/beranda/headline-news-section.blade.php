@php
    $combinedItems = $activePeriods->concat($activeHeadlineNews); // Gabungkan periode aktif dan berita headline news
    $itemCount = $combinedItems->count();
@endphp


<section
    class="w-full h-fit relative items-center justify-center pt-16 md:pt-24 lg:pt-32 pb-4 lg:pb-12 lg:px-8 xl:px-16 flex">
    {{-- ISI BERITA --}}
    @if ($itemCount > 0)
        <div
            class="headline-container w-1480 h-fit gap-1 lg:gap-4 flex-col justify-center items-center flex lg:px-16 relative">
            @foreach ($combinedItems as $index => $item)
                @if ($item instanceof \App\Models\PeriodFunding)
                    <a @auth href="{{ route('kelola.pencairan.form', $item->slug) }} " @endauth @guest href="/masuk-akun" @endguest
                        class="headline-item z-30 w-full h-fit flex flex-row justify-center items-center transition-transform duration-500 ease-in-out cursor-pointer {{ $index === 0 ? '' : 'hidden' }}"
                        data-index="{{ $index }}">
                        <div
                            class="w-full h-full aspect-21/9 flex bg-netral-100 shadow-card lg:rounded-2xl justify-center items-center">
                            <img class="w-full h-full object-cover lg:rounded-2xl"
                                src="{{ $item->getImagePathAttribute() }}" alt="{{ $item->name }}" />
                        </div>
                    </a>
                @elseif ($item instanceof \App\Models\News)
                    <a href="{{ route('berita.show', $item->slug) }}"
                        class="headline-item z-30 w-full h-fit flex flex-row justify-center items-center transition-transform duration-500 ease-in-out cursor-pointer {{ $index === 0 ? '' : 'hidden' }}"
                        data-index="{{ $index }}">
                        <div
                            class="w-full h-full aspect-21/9 flex bg-netral-100 shadow-card lg:rounded-2xl justify-center items-center">
                            <img class="w-full h-full object-cover lg:rounded-2xl"
                                src="{{ asset('storage/' . $item->headline_image) }}" alt="{{ $item->title }}" />
                        </div>
                    </a>
                @endif
            @endforeach

            {{-- Button next & prev --}}
            @if ($itemCount > 1)
                <div
                    class="w-fit h-full z-40 pb-8 -left-4 top-0 absolute justify-center items-center lg:flex hidden lg:pl-12">
                    <i
                        class="xs:text-xl sm:text-3xl md:text-5xl ph ph-caret-left text-primary-base cursor-pointer prev-btn p-1 bg-netral-100 rounded-full shadow-card-m xs:leading-none sm:leading-none"></i>
                </div>
                <div
                    class="w-fit h-full z-40 pb-8 -right-4 top-0 absolute justify-center items-center lg:flex hidden lg:pr-12">
                    <i
                        class="xs:text-xl sm:text-3xl md:text-5xl ph ph-caret-right text-primary-base cursor-pointer next-btn p-1 bg-netral-100 rounded-full shadow-card-m xs:leading-none sm:leading-none"></i>
                </div>
            @endif

            {{-- Stepper --}}
            <div class="w-full px-4 justify-center items-center gap-1 lg:gap-2 flex flex-row">
                @foreach ($combinedItems as $index => $item)
                    <div class="w-fit">
                        <div
                            class="z-10 w-6 lg:w-16 h-1 lg:h-2 bg-primary-base rounded-full flex-row justify-center items-center list-indicator {{ $index === 0 ? '' : 'hidden' }}">
                        </div>
                        <div
                            class="w-2 lg:w-4 lg:h-2 h-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default {{ $index === 0 ? 'hidden' : '' }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const headlineItems = document.querySelectorAll('.headline-item');
        const listIndicators = document.querySelectorAll('.list-indicator');
        const defaultListIndicators = document.querySelectorAll('.list-indicator-default');
        let currentIndex = 0;

        function showHeadlineItem(index) {
            headlineItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
            updateListIndicators(index);
        }

        function showPrevItem() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = headlineItems.length - 1;
            }
            showHeadlineItem(currentIndex);
        }

        function showNextItem() {
            if (currentIndex < headlineItems.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            showHeadlineItem(currentIndex);
        }

        function updateListIndicators(index) {
            listIndicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.remove('hidden');
                } else {
                    indicator.classList.add('hidden');
                }
            });
            defaultListIndicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.add('hidden');
                } else {
                    indicator.classList.remove('hidden');
                }
            });
        }

        prevBtn.addEventListener('click', showPrevItem);
        nextBtn.addEventListener('click', showNextItem);

        showHeadlineItem(currentIndex);

        // Auto-slide functionality
        const formLogin = document.getElementById('form-login');
        if (!formLogin) {
            // Auto-slide functionality if not on login page
            autoSlideInterval = setInterval(showNextItem, 8000);
        }
    });
</script>
