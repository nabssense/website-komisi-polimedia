@extends('layouts.user-navigation')
@section('user-content')
    <div class="w-full h-fit col-span-9 px-8 py-8 bg-netral-100 shadow flex-col justify-start items-start gap-8 inline-flex">
        <div class="self-stretch h-14 justify-start items-center gap-6 inline-flex">
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola
                Website</div>
        </div>
        {{-- Info Dashboard --}}
        <div class="w-full self-stretch justify-start items-start gap-8 inline-flex flex-wrap">
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
        <div class="w-full h-fit self-stretch justify-center items-start gap-8 inline-flex flex-wrap">
            {{-- Card Kelola Web --}}
            <div class="w-fit h-fit min-w-360 flex-shrink-0 flex-grow basis-1/3 flex-col justify-start items-center gap-4 inline-flex">
                <div class="self-stretch pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                        Kelola Kabinet</div>
                    <button onclick="pageKelolaKabinetTambah()" class="w-fit py-1 rounded-full justify-center items-center gap-4 flex">
                        <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Tambah
                            Kabinet</div>
                        <i class=" text-rose-600 ph ph-plus text-3xl"></i>
                    </button>
                </div>
                <div onclick="pageKelolaKabinet()"
                    class="self-stretch h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex relative">
                    <div class="self-stretch h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button onclick="window.location.href='/kelola-kabinet'"   
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya</div>
                    </button>
                </div>
            </div>
            {{-- Card Kelola Berita --}}
            <div class="w-fit h-fit min-w-360 flex-shrink-0 flex-grow basis-1/3 flex-col justify-start items-center gap-4 inline-flex">
                <div class="self-stretch pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                        Kelola Berita</div>
                    <button onclick="pageKelolaBeritaTambah()" class="w-fit py-1 rounded-full justify-center items-center gap-4 flex">
                        <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Tambah
                            Berita</div>
                        <i class=" text-rose-600 ph ph-plus text-3xl"></i>
                    </button>
                </div>
                <div onclick="pageKelolaBerita()"
                    class="self-stretch h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="self-stretch h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya</div>
                        </button>
                </div>
            </div>
            {{-- Card Kelola Akun --}}
            <div class="w-fit h-fit min-w-360 flex-shrink-0 flex-grow basis-1/3 flex-col justify-start items-center gap-4 inline-flex">
                <div class="self-stretch pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                        Kelola Akun</div>
                    <button onclick="pageKelolaAkunTambah()" class="w-fit py-1 rounded-full justify-center items-center gap-4 flex">
                        <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Tambah
                            Akun</div>
                        <i class=" text-rose-600 ph ph-plus text-3xl"></i>
                    </button>
                </div>
                <div onclick="pageKelolaAkun()"
'                    class="self-stretch h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="self-stretch h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya</div>
                    </button>
                </div>
            </div>
            {{-- Card Kelola Web --}}
            <div class="w-fit h-fit min-w-360 flex-shrink-0 flex-grow basis-1/3 flex-col justify-start items-center gap-4 inline-flex">
                <div class="self-stretch pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                        Kelola Komisi</div>
                    
                </div>
                <div onclick="window.location.href='/kelola-komisi'"
                    class="self-stretch h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="self-stretch h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya</div>
                    </button>
                </div>
            </div>
            {{-- Card Kelola Daftar Ulang --}}
            <div class="w-fit h-fit min-w-360 flex-shrink-0 flex-grow basis-1/3 flex-col justify-start items-center gap-4 inline-flex">
                <div class="self-stretch pl-4 justify-start items-center gap-4 inline-flex">
                    <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">
                        Kelola Pengajuan Pencairan</div>
                </div>
                <div onclick="pageKelolaPengajuanPencairan()"
                    class="self-stretch h-fit p-4 bg-white cursor-pointer rounded-3xl shadow-card flex-col justify-start items-center gap-4 flex">
                    <div class="self-stretch h-64 flex-col justify-center items-center gap-2.5 flex">
                        <div class="w-fit h-fit justify-center items-center inline-flex">
                            <img class="h-fit w-96 " src="{{ url('img/Kabinet/KOBRA/Logo-Kabinet-Kobra.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <button
                        class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="w-fit h-fit text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
