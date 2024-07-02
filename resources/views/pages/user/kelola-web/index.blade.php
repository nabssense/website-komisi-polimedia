@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    @extends('partials.user-navigation')
@section('user-content')
    <div class="w-full h-fit col-span-9 px-8 py-8 bg-netral-100 flex-col justify-start items-start gap-8 inline-flex">
        <div class="h-14 justify-start items-center gap-6 inline-flex">
            <div class="w-full text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola
                Website</div>
        </div>
        {{-- Info Dashboard --}}
        <div class="w-full justify-start items-start gap-8 inline-flex flex-wrap">
            <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Kabinet saat ini</div>
                <div class="justify-end items-end gap-4 inline-flex">
                    <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">KOBRA</div>
                </div>
            </div>
            <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">9</div>
                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Kabinet</div>
            </div>
            <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Anggota Kepungursan Aktif</div>
                <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">40 orang</div>
            </div>
            <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Anggota Komisi</div>
                <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">1000</div>
            </div>
            <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">100</div>
                <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Berita</div>
            </div>
            <div class="px-6 py-4 bg-rose-300 rounded-2xl flex-col justify-start items-start inline-flex">
                <div class="text-neutral-900 text-3xl font-extrabold font-THICCCBOI leading-10">100</div>
                <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pertanyaan Belum Dijawab
                </div>
            </div>
        </div>
        {{-- Content --}}
        <div class="w-full h-fit grid grid-cols-1 sm:grid-cols-2 justify-center items-start gap-8 ">
            {{-- Card Kelola Kabinet --}}
            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                <div class="w-full pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="w-full text-netral-900 font-semibold Heading4">
                        Kelola Kabinet</div>
                    <a href="/kelola-kabinet-tambah" class="btn-tertiary p-0">Tambah Kabinet
                        <i class=" text-rose-600 ph ph-plus text-3xl"></i>
                    </a>
                </div>
                <a href="/kelola-kabinet"
                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex relative">
                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                            Lihat
                            Selengkapnya</div>
                    </button>
                </a>
            </div>
            {{-- Card Kelola Berita --}}
            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="w-full text-netral-900 font-semibold Heading4">
                        Kelola Berita</div>
                    <a href="/kelola-berita/tambah" class="btn-tertiary p-0">Tambah Berita
                        <i class=" text-rose-600 ph ph-plus text-3xl"></i>
                    </a>
                </div>
                <a href="/kelola-berita"
                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                            Lihat
                            Selengkapnya</div>
                    </button>
                </a>
            </div>
            {{-- Card Kelola Akun --}}
            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="w-full text-netral-900 font-semibold Heading4">
                        Kelola Akun</div>
                    <a href="/kelola-akun-tambah" class="btn-tertiary p-0">Tambah Akun
                        <i class=" text-rose-600 ph ph-plus text-3xl"></i>
                    </a>
                </div>
                <a href="/kelola-akun"
                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                            Lihat
                            Selengkapnya</div>
                    </button>
                </a>
            </div>
            {{-- Card Kelola Web --}}
            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="w-full text-netral-900 font-semibold Heading4">
                        Kelola Komisi</div>

                </div>
                <a href="/kelola-komisi"
                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                            Lihat
                            Selengkapnya</div>
                    </button>
                </a>
            </div>
            {{-- Card Kelola Daftar Ulang --}}
            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="w-full text-netral-900 font-semibold Heading4">
                        Kelola Pengajuan Pencairan</div>
                </div>
                <a href="/kelola-pengajuan-pencairan"
                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                            Lihat
                            Selengkapnya</div>
                    </button>
                </a>
            </div>
        </div>

    </div>
    </div>
@endsection

{{-- MOBILE SCREEN --}}
@section('user-content-mobile')
    <div class="w-full h-full flex-col justify-start items-start gap-4 p-4 flex lg:hidden">
        <div class="w-full flex flex-row items-center gap-4">
            <a type="button" href="/user" class="text-32 text-neutral-900 ph ph-arrow-left cursor-pointer"></a>
            <div class="text-start text-neutral-900 font-extrabold Heading4">Kelola
                Web</div>
        </div>
        <div class="w-full h-fit flex flex-col gap-8">
            {{-- Content --}}
            <div class="w-full justify-start items-start gap-8 inline-flex flex-wrap">
                <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Kabinet saat ini
                    </div>
                    <div class="justify-end items-end gap-4 inline-flex">
                        <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">KOBRA
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">9</div>
                    <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Kabinet</div>
                </div>
                <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Anggota
                        Kepungursan Aktif</div>
                    <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">40 orang
                    </div>
                </div>
                <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Anggota
                        Komisi</div>
                    <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">1000</div>
                </div>
                <div class="px-6 py-4 bg-neutral-200 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">100</div>
                    <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Berita</div>
                </div>
                <div class="px-6 py-4 bg-rose-300 rounded-2xl flex-col justify-start items-start inline-flex">
                    <div class="text-neutral-900 text-3xl font-extrabold font-THICCCBOI leading-10">100</div>
                    <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pertanyaan Belum
                        Dijawab
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <div class="w-full h-fit justify-center items-start gap-8 inline-flex flex-wrap">
                {{-- Card Kelola Web --}}
                <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                    <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                        <div class="w-full text-netral-900 text-2xl font-semibold font-THICCCBOI leading-btn-tertiary p-0kabinet-tambah"
                            class="w-fit py-1 rounded-full justify-center items-center gap-4 flex                                Tambah
                                Kabinet</div>
                            <i class="
                            text-rose-600 ph ph-plus text-3xl"></i>
                            </a>
                        </div>
                        <a href="/kelola-kabinet"
                            class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex relative">
                            <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                <div class="w-fit h-fit justify-center items-center inline-flex">
                                    <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                            <button onclick="window.location.href='/kelola-kabinet'"
                                class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                    Lihat
                                    Selengkapnya</div>
                            </button>
                        </a>
                    </div>
                    {{-- Card Kelola Berita --}}
                    <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                        <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                            <div class="w-full text-netral-900 text-2xl font-semibold font-THICCCBOI leading-btn-tertiary p-0berita-tambah"
                                class="w-fit py-1 rounded-full justify-center items-center gap-4 flex                                Tambah
                                Berita</div>
                            <i class="
                                text-rose-600 ph ph-plus text-3xl"></i>
                                </button>
                            </div>
                            <a href="/kelola-berita"
                                class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                                <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                    <div class="w-fit h-fit justify-center items-center inline-flex">
                                        <img class="h-fit w-96 "
                                            src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                                    </div>
                                </div>
                                <button
                                    class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                    <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                        Lihat
                                        Selengkapnya</div>
                                </button>
                            </a>
                        </div>
                        {{-- Card Kelola Akun --}}
                        <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                            <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                                <div class="w-full text-netral-900 text-2xl font-semibold font-THICCCBOI leading-btn-tertiary p-0akun-tambah"
                                    class="w-fit py-1 rounded-full justify-center items-center gap-4 flex                                Tambah
                                Akun</div>
                            <i class="
                                    text-rose-600 ph ph-plus text-3xl"></i>
                                    </a>
                                </div>
                                <a href="/kelola-akun"
                                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                        <div class="w-fit h-fit justify-center items-center inline-flex">
                                            <img class="h-fit w-96 "
                                                src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                                alt="Image" />
                                        </div>
                                    </div>
                                    <button
                                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                            Lihat
                                            Selengkapnya</div>
                                    </button>
                                </a>
                            </div>
                            {{-- Card Kelola Web --}}
                            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                                <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                                    <div class="w-full text-netral-900 font-semibold Heading4">
                                        Kelola Komisi</div>

                                </div>
                                <div onclick="window.location.href='/kelola-komisi'"
                                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                        <div class="w-fit h-fit justify-center items-center inline-flex">
                                            <img class="h-fit w-96 "
                                                src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                                alt="Image" />
                                        </div>
                                    </div>
                                    <button
                                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                            Lihat
                                            Selengkapnya</div>
                                    </button>
                                </div>
                            </div>
                            {{-- Card Kelola Daftar Ulang --}}
                            <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                                <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                                    <div class="w-full text-netral-900 font-semibold Heading4">
                                        Kelola Pengajuan Pencairan</div>
                                </div>
                                <a href="/kelola-pengajuan-pencairan"
                                    class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                                    <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                        <div class="w-fit h-fit justify-center items-center inline-flex">
                                            <img class="h-fit w-96 "
                                                src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                                alt="Image" />
                                        </div>
                                    </div>
                                    <button
                                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                        <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                            Lihat
                                            Selengkapnya</div>
                                    </button>
                                </a>
                            </div>
                        </div>
                        {{-- Card Kelola Web --}}
                        <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                            <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                                <div class="w-full text-netral-900 font-semibold Heading4">
                                    Kelola Komisi</div>

                            </div>
                            <a href="/kelola-komisi"
                                class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                                <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                    <div class="w-fit h-fit justify-center items-center inline-flex">
                                        <img class="h-fit w-96 "
                                            src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                                    </div>
                                </div>
                                <button
                                    class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                    <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                        Lihat
                                        Selengkapnya</div>
                                </button>
                            </a>
                        </div>
                        {{-- Card Kelola Daftar Ulang --}}
                        <div class="w-full h-fit min-w-360 flex flex-col justify-start items-center gap-4">
                            <div class="w-full h-fit pl-4 justify-start items-center gap-4 inline-flex">
                                <div class="w-full text-netral-900 font-semibold Heading4">
                                    Kelola Pengajuan Pencairan</div>
                            </div>
                            <a href="/kelola-pengajuan-pencairan"
                                class="w-full h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                                <div class="h-64 flex-col justify-center items-center gap-2.5 flex">
                                    <div class="w-fit h-fit justify-center items-center inline-flex">
                                        <img class="h-fit w-96 "
                                            src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}" alt="Image" />
                                    </div>
                                </div>
                                <button
                                    class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                    <div class="w-fit h-fit text-center text-neutral-900 font-medium Heading4">
                                        Lihat
                                        Selengkapnya</div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @endsection

        @endsection
