    <div class="w-full flex-col justify-center items-center gap-12 flex">
        @if ($active !== 'Kelola Komisi')
            <div class="w-full relative items-center justify-center">
                {{-- ISI KABINET --}}
                <div
                    class="carousel-container w-full h-full overflow-hidden relative flex-col justify-center items-center flex ">
                    {{-- Placeholder for carousel content --}}
                    <div class="carousel-item text18 px-8 md:px-32 xl:px-48 bg-primary-200 w-full h-fit pt-8 pb-24 lg:pt-24 lg:pb-48 flex flex-col justify-center items-center transition-transform duration-500 ease-in-out"
                        data-index="0">
                        <div
                            class="w-full max-w-1480 h-fit gap-4 xl:gap-24 flex flex-col md:flex-row justify-center items-center">
                            <!-- Menambahkan justify-center dan items-center -->
                            <div class=" w-fit md:w-72 p-8 object-center bg-yellow-400 rounded-full">
                                <img class="" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}"
                                    alt="Image" />
                            </div>
                            <div
                                class=" w-full justify-center items-start gap-4 md:gap-8 flex flex-col">
                                <div class="w-full h-fit flex-col justify-center gap-2 md:gap-4 items-start flex">
                                    <div
                                        class="self-stretch text-neutral-900 font-extrabold Heading1">
                                        Kabinet KOBRA</div>
                                    <div
                                        class="w-fit px-4 py-1 text-nowrap bg-white rounded-xl justify-center items-start inline-flex text-left text-neutral-900 font-extrabold Heading4">
                                            2021 - 2022
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-center gap-2 md:gap-4 items-start flex">
                                    <p class="text-neutral-900 font-medium Heading4 line-clamp-5">Lorem
                                        ipsum
                                        dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare
                                        feugiat mattis.
                                        Sed pulvinar id bibendum id vel consequat dui elementum auctor. </p>
                                    <button class="w-full h-fit justify-start items-center gap-2 md:gap-4 flex Heading4 flex-row"
                                        onclick="pageTentangKabinet()">
                                        <div class="text-center text-primary-base font-medium ">
                                            Lihat Kabinet
                                        </div>
                                        <i class=" text-primary-base ph ph-caret-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Placeholder for carousel content --}}
                    <div class="carousel-item px-4 md:px-8 xl:px-16 bg-primary-200 w-full h-fit pt-24 pb-48 flex flex-col justify-center items-center transition-transform duration-500 ease-in-out"
                        data-index="0">
                        <div
                            class="w-full max-w-1480 h-fit gap-12 xl:gap-24 flex flex-col lg:flex-row justify-center items-center">
                            <!-- Menambahkan justify-center dan items-center -->
                            <div class="w-96 h-96  p-8 justify-center items-center flex bg-white rounded-2xl">
                                <img class="w-full h-full" src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}"
                                    alt="Image" />
                            </div>
                            <div
                                class="grow shrink basis-0 w-full justify-center items-start gap-4 md:gap-8 flex flex-col">
                                <div class="h-fit flex-col justify-center gap-2 md:gap-4 items-start flex">
                                    <div
                                        class="self-stretch text-neutral-900 text-5xl font-extrabold font-THICCCBOI leading-10">
                                        Kabinet KOBRA</div>
                                    <div
                                        class="px-4 py-1 bg-white rounded-xl justify-center items-start gap-2.5 inline-flex">
                                        <div
                                            class="text-right text-neutral-900 text-lg font-extrabold font-THICCCBOI leading-7">
                                            2021 - 2022</div>
                                    </div>
                                </div>
                                <div class="w-full h-fit flex-col justify-center gap-2 md:gap-4 items-start flex">
                                    <div class="text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lorem
                                        ipsum
                                        dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare
                                        feugiat mattis.
                                        Sed pulvinar id bibendum id vel consequat dui elementum auctor. </div>
                                    <a class="w-full h-fit justify-start items-center gap-4 flex flex-row"
                                        href="/tentang-kabinet">
                                        <div class="text-center text-primary-base text-2xl font-medium font-THICCCBOI">
                                            Lihat Kabinet
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
                <div id="prev-btn"
                    class="w-fit h-full z-40 cursor-pointer px-1 md:px-8 left-0 top-0 absolute justify-center items-center inline-flex">
                    <i class="text-2xl md:text-5xl ph ph-caret-left text-white"></i>
                </div>
                <div id="next-btn"
                    class="w-fit h-full cursor-pointer px-1 md:px-8 z-40 right-0 top-0 absolute justify-center items-center inline-flex">
                    <i class="text-2xl md:text-5xl ph ph-caret-right text-white"></i>
                </div>

                {{-- </div> --}}
                {{-- List Daftar Tahun Kabinet --}}
                <div class="w-full flex justify-center scale-50 xl:scale-100">
                    <div
                        class="w-full lg:max-w-1480 h-fit bottom-8 px-4 py-8 justify-start items-center gap-4 flex overflow-scroll overflow-x-scroll parent cursor-pointer scrollbar-hidden rounded-full absolute  bg-white">
                        
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div
                                    class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}"
                                            alt="Image" />
                                    </div>
                                    <div
                                        class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-THICCCBOI leading-9 text-nowrap">
                                        2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div
                                    class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}"
                                            alt="Image" />
                                    </div>
                                    <div
                                        class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-THICCCBOI leading-9 text-nowrap">
                                        2020-2021</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div
                                    class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}"
                                            alt="Image" />
                                    </div>
                                    <div
                                        class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-THICCCBOI leading-9 text-nowrap">
                                        2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div
                                    class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}"
                                            alt="Image" />
                                    </div>
                                    <div
                                        class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-THICCCBOI leading-9 text-nowrap">
                                        2021-2022</div>
                                </div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-center gap-4 flex">
                                <div class="w-56 h-2  bg-stone-400 rounded-full"></div>
                            </div>
                            <div class="rounded-full flex-col justify-center items-start flex relative">
                                <div class="w-6 h-6 bg-netral-900 rounded-full"></div>
                                <div
                                    class="flex w-fit px-4 py-2 bg-komisi-orange-base rounded-full flex-row justify-center items-center gap-4 absolute year-indicator">
                                    <div class="w-12 h-12">
                                        <img class="w-12 h-12 aspect-square" src="{{ url('img/Logo-Komisi.svg') }}"
                                            alt="Image" />
                                    </div>
                                    <div
                                        class="w-fit h-fit pr-2 items-center text-white text-2xl font-extrabold font-THICCCBOI leading-9 text-nowrap">
                                        2021-2022</div>
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
    @if ($active === 'Kelola Komisi')
        <div class="w-full max-w-1480 p-12 bg-white rounded-3xl shadow flex-col justify-start items-start gap-9 flex">
            <div class="w-full h-fit  flex-col justify-start items-start gap-8 flex">
                <div class="w-full justify-start items-center gap-8 flex xl:flex-row">
                    <div
                        class=" text-netral-900 xl:text-8xl sm:text-5xl font-extrabold font-THICCCBOI leading-H1-H2-H3">
                        Membidik Prestasi Membangun Negeri</div>
                    <div class="w-full h-full bg-blue-300">
                        {{-- <img class="w-full h-full " src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}" alt="Image" /> --}}
                    </div>
                </div>
                <div class="w-full h-fit  justify-start items-start gap-8 flex flex-col md:flex-row ">
                    <div class="w-48 h-48">
                        <img class="w-full h-full" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex pt-2">
                        <div class="text-netral-900 text-2xl font-medium font-THICCCBOI leading-9">Komunitas Bidikmisi
                            Politeknik Negeri Media Kreatif (KOMISI PoliMedia)</div>
                        <div
                            class="w-full h-fit text-justify text-zinc-500 text-base font-normal font-THICCCBOI leading-normal">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare
                            feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla
                            hendrerit maecenas pharetra vestibulum, eu elit nibh. Maecenas pellentesque enim tincidunt
                            pellentesque. Felis vestibulum at mauris in nulla integer at eget egestas. Risus arcu
                            egestas
                            rhoncus nunc facilisi tellus in faucibus tempus. Ultricies amet, tincidunt nec purus
                            adipiscing
                            vitae in porttitor. Enim nibh nunc, sodales tristique vel rutrum mattis purus. Nisi sit
                            sagittis
                            accumsan pharetra praesent lobortis. Aliquet a tortor, eu sem quisque commodo.</div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="w-full  px-4 pt-16 pb-24 bg-stone-700 flex-col justify-center items-center gap-12 flex">
            <div
                class="w-full max-w-1480 p-4 md:p-12 bg-white rounded-3xl shadow flex-col justify-start items-start gap-9 flex">
                <div class="w-full h-fit flex-col justify-start items-start gap-8 flex ">
                    <div class="w-full justify-start items-center gap-8 flex flex-col md:flex-row">
                        <div
                            class=" text-netral-900 xl:text-8xl sm:text-5xl font-extrabold font-THICCCBOI leading-H1-H2-H3">
                            Membidik Prestasi Membangun Negeri</div>
                        <div class="w-full h-full bg-blue-300">
                            <img class="w-full h-full " src="{{ url('img/Kabinet/Kobra/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <div class="w-full h-fit justify-center items-start gap-8 flex flex-col md:flex-row ">
                        <div class="w-fit h-fit justify-center flex">
                            <img class="w-48 h-48 md:w-72 md:h-72" src="{{ url('img/Logo-Komisi.svg') }}"
                                alt="Image" />
                        </div>
                        <div class="w-full flex-col justify-start items-start gap-2 inline-flex pt-2">
                            <div class="text-netral-900 text-2xl font-medium font-THICCCBOI leading-9">Komunitas
                                Bidikmisi
                                Politeknik Negeri Media Kreatif (KOMISI PoliMedia)</div>
                            <div
                                class="w-full h-fittext-justify text-zinc-500 text-base font-normal font-THICCCBOI leading-normal">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus,
                                ornare
                                feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor.
                                Fringilla
                                hendrerit maecenas pharetra vestibulum, eu elit nibh. Maecenas pellentesque enim
                                tincidunt
                                pellentesque. Felis vestibulum at mauris in nulla integer at eget egestas. Risus arcu
                                egestas
                                rhoncus nunc facilisi tellus in faucibus tempus. Ultricies amet, tincidunt nec purus
                                adipiscing
                                vitae in porttitor. Enim nibh nunc, sodales tristique vel rutrum mattis purus. Nisi sit
                                sagittis
                                accumsan pharetra praesent lobortis. Aliquet a tortor, eu sem quisque commodo.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif