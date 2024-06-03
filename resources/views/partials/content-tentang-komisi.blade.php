    <div class="w-full flex-col justify-center items-center gap-12 flex">
        @if ($active === 'Beranda')
        <div class="max-w-[1480px] pt-24 w-full justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-neutral-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">Tentang
                Komisi</div>
        </div>
        @endif
        @if ($active !== 'Kelola Komisi')
        <div class="w-full relative items-center justify-center ">
            
            {{-- ISI KABINET --}}
            <div class="carousel-container w-full h-full overflow-hidden relative flex-col justify-center items-center flex ">
                {{-- Placeholder for carousel content --}}
                <div class="carousel-item z-40 bg-primary-200 w-full h-fit px-[16%] pt-24 pb-48 flex flex-col justify-center items-center transition-transform duration-500 ease-in-out" data-index="0">
                    <div class="w-full flex justify-center items-center"> <!-- Mengubah justify-center -->
                        <div class="w-full  max-w-[1480px] h-fit gap-24 flex justify-center items-center"> <!-- Menambahkan justify-center dan items-center -->
                            <div class="w-96 h-96 p-8 justify-center items-center flex bg-white rounded-2xl">
                                <img class="w-full h-full" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                            </div>
                            <div class="grow shrink basis-0 w-full justify-center items-start gap-8 flex flex-col">
                                <div class="h-fit flex-col justify-center gap-4 items-start flex">
                                    <div class="self-stretch text-neutral-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">
                                        Kabinet KOBRA</div>
                                    <div class="px-4 py-1 bg-white rounded-xl justify-center items-start gap-2.5 inline-flex">
                                        <div class="text-right text-neutral-900 text-lg font-extrabold font-['THICCCBOI'] leading-7">
                                            2021 - 2022</div>
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-center gap-4 items-start flex">
                                    <div class="text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis.
                                        Sed pulvinar id bibendum id vel consequat dui elementum auctor. </div>
                                    <a class="w-full h-fit justify-start items-center gap-4 flex flex-row" href="/tentang-kabinet">
                                        <div class="text-center text-primary-base text-2xl font-medium font-['THICCCBOI']">Lihat Kabinet
                                        </div>
                                        <i class="text-3xl text-primary-base ph ph-caret-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item w-full h-fit px-[16%] pt-24 pb-48  flex-col justify-center hidden  items-center  bg-emerald-500" data-index="1">
                    <div class="w-full flex justify-center items-center"> <!-- Mengubah justify-center -->
                        <div class="w-full  max-w-[1480px] h-fit gap-24 flex justify-center items-center"> <!-- Menambahkan justify-center dan items-center -->
                            <div class="w-96 h-96 p-8 justify-center items-center flex bg-white rounded-2xl">
                                <img class="w-full h-full" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                            </div>
                            <div class="grow shrink basis-0 w-full justify-center items-start gap-8 flex flex-col">
                                <div class="h-fit flex-col justify-center gap-4 items-start flex">
                                    <div class="self-stretch text-neutral-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">
                                        Kabinet KOBRA</div>
                                    <div class="px-4 py-1 bg-white rounded-xl justify-center items-start gap-2.5 inline-flex">
                                        <div class="text-right text-neutral-900 text-lg font-extrabold font-['THICCCBOI'] leading-7">
                                            2021 - 2022</div>
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-center gap-4 items-start flex">
                                    <div class="text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis.
                                        Sed pulvinar id bibendum id vel consequat dui elementum auctor. </div>
                                    <a class="w-full h-fit justify-start items-center gap-4 flex flex-row" href="/tentang-kabinet">
                                        <div class="text-center text-primary-base text-2xl font-medium font-['THICCCBOI']">Lihat Kabinet
                                        </div>
                                        <i class="text-3xl text-primary-base ph ph-caret-right"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item w-full h-fit px-[16%] pt-24 pb-48  flex-col justify-center hidden  items-center  bg-emerald-500" data-index="1">
                    <div class="w-full flex justify-center items-center"> <!-- Mengubah justify-center -->
                        <div class="w-full  max-w-[1480px] h-fit gap-24 flex justify-center items-center"> <!-- Menambahkan justify-center dan items-center -->
                            <div class="w-96 h-96 p-8 justify-center items-center flex bg-white rounded-2xl">
                                <img class="w-full h-full" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                            </div>
                            <div class="grow shrink basis-0 w-full justify-center items-start gap-8 flex flex-col">
                                <div class="h-fit flex-col justify-center gap-4 items-start flex">
                                    <div class="self-stretch text-neutral-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">
                                        Kabinet Berkembang</div>
                                    <div class="px-4 py-1 bg-white rounded-xl justify-center items-start gap-2.5 inline-flex">
                                        <div class="text-right text-neutral-900 text-lg font-extrabold font-['THICCCBOI'] leading-7">
                                            2021 - 2022</div>
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-center gap-4 items-start flex">
                                    <div class="text-neutral-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis.
                                        Sed pulvinar id bibendum id vel consequat dui elementum auctor. </div>
                                    <a class="w-full h-fit justify-start items-center gap-4 flex flex-row" href="/tentang-kabinet">
                                        <div class="text-center text-primary-base text-2xl font-medium font-['THICCCBOI']">Lihat Kabinet
                                        </div>
                                        <i class="text-3xl text-primary-base ph ph-caret-right"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                {{-- End of carousel content --}}
                {{-- Button Next & Previous --}}
                <div class="w-fit h-full z-40 px-8 left-0 top-0 absolute justify-center items-center inline-flex">
                    <i class="text-5xl ph ph-caret-left text-white cursor-pointer prev-btn"></i>
                </div>
                <div class="w-fit h-full z-40 px-8 right-0 top-0 absolute justify-center items-center inline-flex">
                    <i class="text-5xl ph ph-caret-right text-white cursor-pointer next-btn"></i>
                </div>
                    
                {{-- </div> --}}
                {{-- List Daftar Tahun Kabinet --}}
                {{-- <div class="w-[1480px] h-[84px] top-[84%] z-50 flex justify-center items-center parent overflow-x-auto overflow-y-hidden scrollbar-hidden touch-pan-x cursor-pointer absolute bg-white rounded-full "> --}}
                    <div class="w-[1480px] h-fit top-[84%] z-40 overflow-scroll justify-start items-center gap-4 flex overflow-x-scroll parent cursor-pointer scrollbar-hidden rounded-full absolute  bg-white">
                        <div class="w-fit px-4 py-8 justify-start items-center gap-4 flex flex-row">
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                                    </div>
                                    <div class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-['THICCCBOI'] leading-9 text-nowrap">2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                                    </div>
                                    <div class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-['THICCCBOI'] leading-9 text-nowrap">2020-2021</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                                    </div>
                                    <div class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-['THICCCBOI'] leading-9 text-nowrap">2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                                    </div>
                                    <div class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-['THICCCBOI'] leading-9 text-nowrap">2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                                    </div>
                                    <div class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-['THICCCBOI'] leading-9 text-nowrap">2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 inline-flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            
                            <div class="rounded-full flex-col justify-center items-center gap-4 inline-flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    {{-- List Tahun --}}
                {{-- </div> --}}
            </div>
        </div>
        @endif
    </div>

    {{-- Tentang Komisi --}}
    @if ($active === "Kelola Komisi")
        <div class="w-full max-w-[1480px] p-12 bg-white rounded-3xl shadow flex-col justify-start items-start gap-9 flex">
            <div class="self-stretch  flex-col justify-start items-start gap-8 flex">
                <div class="w-full bg-lime-300 justify-start items-center gap-12 flex xl:flex-row">
                    <div class=" text-zinc-900 xl:text-8xl sm:text-5xl font-extrabold font-['THICCCBOI'] leading-H1-H2-H3">
                        Membidik Prestasi Membangun Negeri</div>
                    <div class="w-full h-full bg-blue-300">
                        {{-- <img class="w-full h-full " src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" /> --}}
                    </div>
                </div>
                <div class="self-stretch  justify-start items-start gap-8 inline-flex flex-wrap">
                    <div class="w-48 h-48 ">
                        <img class="w-full h-full" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex pt-2">
                        <div class="text-zinc-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Komunitas Bidikmisi
                            Politeknik Negeri Media Kreatif (KOMISI PoliMedia)</div>
                        <div
                            class="self-stretch text-justify text-zinc-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare
                            feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla
                            hendrerit maecenas pharetra vestibulum, eu elit nibh. Maecenas pellentesque enim tincidunt
                            pellentesque. Felis vestibulum at mauris in nulla integer at eget egestas. Risus arcu egestas
                            rhoncus nunc facilisi tellus in faucibus tempus. Ultricies amet, tincidunt nec purus adipiscing
                            vitae in porttitor. Enim nibh nunc, sodales tristique vel rutrum mattis purus. Nisi sit sagittis
                            accumsan pharetra praesent lobortis. Aliquet a tortor, eu sem quisque commodo.</div>
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="w-full xl:px-56 px-4 pt-16 pb-24 bg-stone-700 flex-col justify-center items-center gap-12 flex">
        <div class="w-full max-w-[1480px] p-12 bg-white rounded-3xl shadow flex-col justify-start items-start gap-9 flex">
            <div class="self-stretch  flex-col justify-start items-start gap-8 flex">
                <div class="w-full bg-lime-300 justify-start items-center gap-12 flex xl:flex-row">
                    <div class=" text-zinc-900 xl:text-8xl sm:text-5xl font-extrabold font-['THICCCBOI'] leading-H1-H2-H3">
                        Membidik Prestasi Membangun Negeri</div>
                    <div class="w-full h-full bg-blue-300">
                        {{-- <img class="w-full h-full " src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" /> --}}
                    </div>
                </div>
                <div class="self-stretch  justify-start items-start gap-8 inline-flex flex-wrap">
                    <div class="w-48 h-48 ">
                        <img class="w-full h-full" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex pt-2">
                        <div class="text-zinc-900 text-2xl font-medium font-['THICCCBOI'] leading-9">Komunitas Bidikmisi
                            Politeknik Negeri Media Kreatif (KOMISI PoliMedia)</div>
                        <div
                            class="self-stretch text-justify text-zinc-500 text-base font-normal font-['THICCCBOI'] leading-normal">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare
                            feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla
                            hendrerit maecenas pharetra vestibulum, eu elit nibh. Maecenas pellentesque enim tincidunt
                            pellentesque. Felis vestibulum at mauris in nulla integer at eget egestas. Risus arcu egestas
                            rhoncus nunc facilisi tellus in faucibus tempus. Ultricies amet, tincidunt nec purus adipiscing
                            vitae in porttitor. Enim nibh nunc, sodales tristique vel rutrum mattis purus. Nisi sit sagittis
                            accumsan pharetra praesent lobortis. Aliquet a tortor, eu sem quisque commodo.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
   
    

    
    <script>

    document.addEventListener("DOMContentLoaded", function() {
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const yearIndicators = document.querySelectorAll('.year-indicator');
        let currentIndex = 0;

        function showCarouselItem(index) {
            carouselItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
            updateYearIndicators(index);
        }

        function showPrevItem() {
            if (currentIndex > 0) {
                currentIndex--;
                showCarouselItem(currentIndex);
                updateNavButtons();
            }
        }

        function showNextItem() {
            if (currentIndex < carouselItems.length - 1) {
                currentIndex++;
                showCarouselItem(currentIndex);
                updateNavButtons();
            }
        }

        function updateNavButtons() {
            if (currentIndex === 0) {
                prevBtn.classList.add('disabled', 'opacity-10');
            } else {
                prevBtn.classList.remove('disabled', 'opacity-10');
            }

            if (currentIndex === carouselItems.length - 1) {
                nextBtn.classList.add('disabled', 'opacity-10');
            } else {
                nextBtn.classList.remove('disabled', 'opacity-10');
            }
        }

        function updateYearIndicators(index) {
            // Mengambil penanda tahun yang sesuai dengan indeks carousel
            const currentYearIndicator = yearIndicators[index];
            
            // Menghapus kelas 'active' dari semua penanda tahun
            yearIndicators.forEach(indicator => {
                indicator.classList.add('hidden');
            });
            
            // Menambahkan kelas 'active' hanya pada penanda tahun yang sesuai
            currentYearIndicator.classList.remove('hidden');
            }
            function updateYearIndicators(index) {
                yearIndicators.forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.remove('hidden');
                    } else {
                        indicator.classList.add('hidden');
                    }
                });
            }

            prevBtn.addEventListener('click', showPrevItem);
            nextBtn.addEventListener('click', showNextItem);

            showCarouselItem(currentIndex);
            updateNavButtons();
        });







            
        
        // Drag Touch
        let mouseDown = false;
        let startX, scrollLeft;
        const slider = document.querySelector('.parent');

        const startDragging = (e) => {
            mouseDown = true;
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        }

        const stopDragging = (e) => {
            mouseDown = false;
        }

        const move = (e) => {
            e.preventDefault();
            if (!mouseDown) {
                return;
            }
            const x = e.pageX - slider.offsetLeft;
            const scroll = x - startX;
            slider.scrollLeft = scrollLeft - scroll;
        }

        // Add the event listeners
        slider.addEventListener('mousemove', move, false);
        slider.addEventListener('mousedown', startDragging, false);
        slider.addEventListener('mouseup', stopDragging, false);
        slider.addEventListener('mouseleave', stopDragging, false);
    </script>