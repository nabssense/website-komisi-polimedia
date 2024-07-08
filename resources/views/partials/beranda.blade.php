@extends('layouts.main-masuk-anim')
@section('container')
@include('partials.navbar')
@include('partials.navbar-mobile')
    <div class="w-full flex-col gap-32 mt-24 justify-start items-start z-10 ">
        {{-- Section 1 Headline Berita --}}
        <div class="w-full xl:px-56 px-8 py-8 bg-primary-600 justify-center items-center gap-16 flex">
            <div class="w-full h-96 justify-center relative flex">
                <div class="w-[1480px] h-96 bg-yellow-300 rounded-3xl justify-center items-center relative">
                    <div class="w-full top-[360px] gap-4 absolute justify-center items-center inline-flex">
                        <div class="w-16 h-2 relative bg-primary-base rounded-2xl"></div>
                        <div class="w-8 h-2 relative bg-rose-100 rounded-2xl"></div>
                        <div class="w-8 h-2 relative bg-rose-100 rounded-2xl"></div>
                        <div class="w-8 h-2 relative bg-rose-100 rounded-2xl"></div>
                    </div>
                    <div class="w-full top-[40%] absolute justify-center items-center gap-[96%] inline-flex">
                        <div class="p-4 bg-white rounded-full shadow justify-start items-start gap-2.5 flex">
                            <div class="w-8 h-8 relative"></div>
                        </div>
                        <div class="p-4 bg-white rounded-full shadow justify-start items-start gap-2.5 flex">
                            <div class="w-8 h-8 relative"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Section 2 Logo Identitas --}}
        <div class="xl:px-56 px-8 py-12 xl:justify-center justify-start bg-primary-100 items-center gap-12 flex flex-wrap">
            <img class="w-fit h-32" src="{{ url('img/Logo-Polimedia.png') }}" alt="" />
            <img class="aspect-square" src="{{ url('img/Logo-Komisi.svg') }}" alt="Image" />
            <img class="w-fit h-32" src="{{ url('img/kabinet/Kabinet_Harpiah_Vertical.svg') }}" alt="Image" />
        </div>
        {{-- Section 3 Berita --}}
        <div class="w-full h-fit xl:px-56 px-4 py-16 bg-white flex-col justify-center items-center gap-12 flex flex-wrap">
            <div class="max-w-1480 w-full text-neutral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Berita
            </div>
            <div class="max-w-1480 w-full flex-col justify-start items-center gap-16 flex">
                {{-- Card Berita --}}
                <div class="gap-8 bg-yellow-300 justify-center items-center">
                    <div class="w-full flex max-w-1480 flex-wrap gap-8 bg-red-300 justify-center">
                        <a href="/berita-detail"
                            class="flex-shrink-0 flex-grow basis-1/4 w-96 flex-col justify-start items-start inline-flex">
                            <div class="h-fit flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                                    <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                        <div
                                            class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                                            Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                    </div>
                                </div>
                                <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                    <div
                                        class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                        29 Juli 2022</div>
                                    <div
                                        class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-THICCCBOI leading-normal">
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
                                            class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                                            Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                    </div>
                                </div>
                                <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                    <div
                                        class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                        29 Juli 2022</div>
                                    <div
                                        class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-THICCCBOI leading-normal">
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
                                            class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                                            Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                                    </div>
                                </div>
                                <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                                    <div
                                        class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                        29 Juli 2022</div>
                                    <div
                                        class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-THICCCBOI leading-normal">
                                        SBMPN</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                        Selengkapnya
                    </div>
                </div>
                
            </div>
        </div>
        {{-- Section 4 Tanya Jawab --}}
        <div class="w-full xl:px-56 px-4 py-16 bg-red-300 flex-col justify-center items-center gap-12 flex flex-wrap">
            <div class="max-w-1480 w-full text-neutral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Tanya
                Jawab</div>
            <div class="max-w-1480px w-full flex-col justify-start items-center gap-16 flex flex-wrap">
                <div class="self-stretch justify-start items-start gap-8 inline-flex flex-wrap">
                    {{-- Card Tanya Jawab --}}
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
            <div class="px-8 py-3 bg-primary-base rounded-full justify-center items-center gap-6 inline-flex">
                <div class="text-center text-white text-2xl font-medium font-THICCCBOI leading-9">Lihat Selengkapnya
                </div>
            </div>
        </div>
        @include('partials.content-tentang-komisi')
        @include('partials.footer')
    @endsection
