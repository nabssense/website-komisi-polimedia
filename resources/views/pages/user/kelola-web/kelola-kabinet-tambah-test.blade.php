@extends('layouts.main')
@section('container')
    {{-- STEP 1 --}}
    <section class="w-full h-screen step p-8 bg-netral-100 shadow justify-start items-start gap-12 flex" id="step1">
        
        {{-- Stepper --}}
        <div class="h-full bg-soft-base rounded-2xl self-stretch px-8 py-4 flex-col justify-center items-center gap-2 flex">
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-primary-base rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">1</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Kabinet</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">2</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Divisi</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">3</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Foto Tim</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">4</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Anggota</div>
            </div>
        </div>
        {{-- Main Content --}}
        <div class="w-full h-full flex-col justify-start items-start gap-4 flex">
            <div class="text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Data Anggota</div>
            <div
                class="w-full h-full overflow-scroll  overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y flex-col justify-start items-start gap-4 flex">
                <div class="self-stretch h-fit flex-col justify-center items-center gap-2 flex">
                    <div class="w-full h-fit justify-between items-center inline-flex">
                        <div
                            class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-7">
                            Tipe Mahasiswa</div>
                        <i class="ph-fill ph-info text-2xl"></i>
                    </div>
                    <div id="pilih-tipe-mahasiswa" class="w-full h-full border-2 rounded-2xl border-netral-900 justify-center items-center inline-flex">
                        <input id="mahasiswaAktif-${datainputId}-${idInsideForm}" type="radio" name="jenisMahasiswa" class="">
                        <label for="mahasiswaAktif" class="grow shrink basis-0 px-8 py-2 bg-white flex-col justify-center items-center inline-flex cursor-pointer">
                            <i class="ph-fill ph-student text-netral-800 text-32"></i>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                Mahasiswa Aktif</div>
                        </label>
                        <input id="mahasiswaBaru-${datainputId}-${idInsideForm}" type="radio" name="jenisMahasiswa" class="">
                        <label for="mahasiswaBaru" class="grow shrink basis-0 px-8 py-2 bg-netral-900 flex-col justify-center items-center inline-flex cursor-pointer">
                            <i class="ph ph-user text-netral-100 text-32"></i>
                            <div class="text-white text-lg font-semibold font-THICCCBOI leading-7">
                                Mahasiswa Baru</div>
                        </label>
                    </div>
                    <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start gap-2.5 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                    Nama Divisi
                                </div>
                            </div>
                            <input id="divisi-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" value="${namaDivisiValues}" placeholder="Masukkan Nama Lengkap"
                                class="select-divisi w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                    </div>
                
                <div class="self-stretch h-fit flex-col justify-start items-start gap-1 flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                            Foto Kabinet Anggota
                        </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-1 inline-flex">
                        <div
                            class="h-44 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input id="img-${datainputId}-${idInsideForm}"
                                class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" >
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" >
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                Gambar</label>
                        </div>
                        <div
                            class="grow shrink basis-0 self-stretch p-4 justify-start items-center gap-2.5 flex">
                            <div
                                class="grow shrink basis-0 text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Masukkan foto kabinet anggota dengan latar belakang transparan dan format png
                            </div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Nama
                            </div>
                        </div>
                        <input id="fullname-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Masukkan Nama Lengkap"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">NIM
                            </div>
                        </div>
                        <input id="nim-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Masukkan NIM"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Program Pendidikan
                            </div>
                        </div>
                        <input id="prodi-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Masukkan Program Pendidikan"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Angkatan
                            </div>
                        </div>
                        <input id="angkatan-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Cth : 2020"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Kata Sandi
                            </div>
                        </div>
                        <input id="password-${datainputId}-${idInsideForm}"  type="password" name="nama-kabinet" placeholder="Katasandi adalah KOM1S1PoliMedia"
                            class="w-full py-3 pointer-events-none bg-netral-300 focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-100 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-full bg-blue-400 h-fit py-1 rounded-full justify-center items-center gap-6 inline-flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Selesai
                </div>
            </div>
            {{--  --}}
        <div class="w-full h-full rounded-4xl hidden self-stretch flex-col justify-start items-start gap-8 ">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Kabinet</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y justify-start items-start gap-8 flex flex-row flex-1">
                <div class="w-full h-full self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="flex-col justify-start items-start gap-1 flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Logo Kabinet
                                Horizontal
                            </div>
                        </div>
                        <div class="self-stretch justify-start items-start gap-1 inline-flex">
                            <div
                                class="w-96 h-36 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                <label for="fileinput"
                                    class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                    Gambar</label>
                            </div>
                            <div class="grow shrink basis-0 self-stretch p-4 justify-start items-center gap-2.5 flex">
                                <div
                                    class="grow shrink basis-0 text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                    Masukkan logo dengan ukuran horizontal dan dengan format svg</div>
                            </div>
                        </div>
                    </div>

                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Kabinet
                            </div>
                        </div>
                        <input type="text" name="nama-kabinet" placeholder="Cth: KOBRA" 
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Angkatan Ke
                            </div>
                        </div>
                        <input type="number" name="nama-kabinet" placeholder="Cth: 9" 
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                    <div class="self-stretch justify-start items-start gap-4 inline-flex">
                        <div class="grow shrink basis-0 h-fit flex-col justify-start items-start inline-flex">
                            <div class="justify-start items-start gap-2.5 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Periode
                                    Tahun Awal</div>
                            </div>
                            <input type="number" name="nama-kabinet" placeholder="Cth : 2021" 
                                class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="grow shrink basis-0 h-fit flex-col justify-start items-start inline-flex">
                            <div class="justify-start items-start gap-2.5 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Tahun Akhir
                                </div>
                            </div>
                            <input type="number" name="nama-kabinet" placeholder="Cth : 2022" 
                                class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Deskripsi
                                Singkat/Kepanjangan Kabinet</div>
                        </div>
                        <input
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7"
                            type="text" name="nama-kabinet"
                            placeholder="Cth : Kolaboratif, Optimisi, Berani, Rajin, & Akrab" >
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Visi Singkat
                            </div>
                        </div>
                        <input
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7"
                            type="text" name="nama-kabinet"
                            placeholder="Cth : Kolaboratif, Optimisi, Berani, Rajin, & Akrab" >
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Misi Singkat
                            </div>
                        </div>
                        <input
                            class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7"
                            type="text" name="nama-kabinet"
                            placeholder="Cth : Kolaboratif, Optimisi, Berani, Rajin, & Akrab" >
                    </div>
                </div>
                {{-- section 2 --}}
                <div class="w-full h-full self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="flex-col justify-start items-start gap-1 flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Logo Gram
                                Kabinet | 1:1
                            </div>
                        </div>
                        <div class="self-stretch justify-start items-start gap-1 inline-flex">
                            <div
                                class="h-36 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                <label for="fileinput"
                                    class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                    Gambar</label>
                            </div>
                            <div class="grow shrink basis-0 self-stretch p-4 justify-start items-center gap-2.5 flex">
                                <div
                                    class="grow shrink basis-0 text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                    Masukkan logo berukuran kotak 1:1 dan dengan format svg</div>
                            </div>
                        </div>
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start gap-1 flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Foto Full Tim
                            </div>
                        </div>
                        <div
                            class="w-full h-72 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" >
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" >
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-2 inline-flex">
                        <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-1 inline-flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Foto Tim
                                    Cowo</div>
                            </div>
                            <div
                                class="w-full h-48 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                <label for="fileinput"
                                    class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                    Gambar</label>
                            </div>
                        </div>
                        <div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
                            <div class="justify-start items-start inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Foto Tim
                                    Cewe</div>
                            </div>
                            <div
                                class="w-full h-48 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" name="" >
                                <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                <label for="fileinput"
                                    class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                    Gambar</label>
                            </div>
                        </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-4 inline-flex">
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                <div class="w-full text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Warna Utama Kabinet
                                </div>
                                <i class="ph-fill ph-info text-base"></i>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Cth : FFFFFF" 
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                <div class="w-full text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Warna Kedua Kabinet
                                </div>
                                <i class="ph-fill ph-info text-base"></i>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Cth : FFFFFF" 
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="w-full justify-start items-center gap-2 inline-flex">
                                <div class="w-full text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Warna Ketiga Kabinet
                                </div>
                                <i class="ph-fill ph-info text-base"></i>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Cth : FFFFFF" 
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                    </div>
                    
                </div>
            </div>


            {{-- 3 --}}
            <div class="h-fit w-full pt-4 border-t-2 border-netral-800 justify-start items-start gap-4 flex">
                {{-- <button onclick="previousStep()" class="w-fit h-fit px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 flex">
                        <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Sebelumnya</div>
                    </button> --}}
                <button onclick="nextStep()"
                    class="btn-primary w-full">Selanjutnya
                </button>
            </div>
        </div>
    </section>
    {{-- STEP 2 --}}
    <section class="w-full h-screen step hidden p-8 bg-netral-100 shadow justify-start items-start gap-12 " id="step2">
        {{-- Stepper --}}
        <div class="h-full bg-soft-base rounded-2xl self-stretch px-8 py-4 flex-col justify-center items-center gap-2 inline-flex">
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">1</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Kabinet</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-primary-base rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">2</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Divisi</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">3</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Foto Tim</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
                <div class="flex-col justify-start items-center flex">
                    <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                        <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">4</div>
                    </div>
                    <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Anggota</div>
                </div>
            </div>
        {{-- Main Content --}}
        <div class="w-full h-full bg-netral-100 rounded-4xl self-stretch flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Divisi</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0justify-start items-start gap-8 flex flex-col flex-1">
                <div id="add-content-divisi" class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                    {{-- <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start gap-2.5 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Divisi
                                </div>
                            </div>
                            <input id="text-btn-divisi" type="text" name="nama-kabinet" placeholder="Cth: Kreatif"
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                    </div> --}}

                    <button id="addTextFieldBtn-divisi"
                        class="w-full h-fit px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 flex">
                        <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Tambah
                            Divisi
                        </div>
                    </button>
                    <div
                        class="w-full h-fit px-4 py-3 bg-netral-200 rounded-xl justify-start items-center gap-4 inline-flex">
                        <i class="ph-fill ph-info text-32"></i>
                        <div class="grow shrink basis-0 text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">
                            Untuk menambahkan divisi silahkan tekan tombol tambah</div>
                    </div>
                </div>
            </div>


            {{-- 3 --}}
            <div class="h-fit w-full pt-4 border-t-2 border-netral-800 justify-start items-start gap-4 flex">
                <button onclick="previousStep()"
                    class="btn-secondary w-fit">Sebelumnya
                </button>
                <button onclick="nextStep()"
                    class="btn-primary w-full">Selanjutnya
                </button>
            </div>
        </div>
    </section>


     {{-- STEP 3 --}} 
     <section class="w-full h-screen step hidden p-8 bg-netral-100 shadow justify-start items-start gap-12 " id="step3">
        {{-- Stepper --}}
        <div class="h-full bg-soft-base rounded-2xl self-stretch px-8 py-4 flex-col justify-center items-center gap-2 inline-flex">
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">1</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Kabinet</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">2</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Divisi</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-primary-base rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">3</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Foto Tim</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">4</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Anggota</div>
            </div>
        </div>
        {{-- Main Content --}}
        <div class="w-full h-full bg-netral-100 rounded-4xl self-stretch flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Tim</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0justify-start items-start gap-8 flex flex-row flex-1">
                <div
                    class="h-full grow shrink basis-6/12 self-stretch gap-4 flex-col justify-start items-start flex">
                    <div class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Pilih
                        Divisi</div>
                        <div id="list-btn-divisi" class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y flex-col justify-start items-start gap-4 flex">
                            {{-- <div id="button-divisi-text-1" class="divisi-btn order-3 w-full h-fit flex-col justify-start items-start hidden gap-1" data-input-field-id="form-0" >
                                <div
                                    class="self-stretch px-4 py-3 bg-white rounded-2xl border border-netral-200 justify-start items-center gap-4 inline-flex">
                                    <div id="button-fix-divisi-text"
                                        class="  text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">
                                        Divisi</div>
                                </div>
                            </div> --}}
                        </div>
                    
                </div>
                <div class="w-px h-full bg-netral-300 flex-col justify-center items-center inline-flex"></div>
                <div id="list-form-tim" class="w-full h-full bg-white flex-col justify-start items-start gap-12 inline-flex">
                </div>
            </div>
            


            {{-- 3 --}}
            <div class="h-fit w-full pt-4 border-t-2 border-netral-800 justify-start items-start gap-4 flex">
                <button onclick="previousStep()"
                    class="btn-secondary w-fit">Sebelumnya
                </button>
                <button onclick="nextStep()"
                    class="btn-primary w-full">Selanjutnya
                </button>
            </div>
        </div>
    </section>


    {{-- STEP 4 --}} 
    <section class="w-screen h-screen step hidden p-8 bg-netral-100 shadow justify-start items-start gap-12" id="step4">
        {{-- Stepper --}}
        <div class="h-full bg-soft-base rounded-2xl self-stretch px-8 py-4 flex-col justify-center items-center gap-2 inline-flex">
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">1</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Kabinet</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">2</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Divisi</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-gray-200 rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">3</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Foto Tim</div>
            </div>
            <div class="w-1 h-24 relative bg-neutral-900 rounded-full"></div>
            <div class="flex-col justify-start items-center flex">
                <div class="w-8 h-8 p-2.5 bg-primary-base rounded-full flex-col justify-center items-center gap-2.5 flex">
                    <div class="text-white text-2xl font-extrabold font-THICCCBOI leading-9">4</div>
                </div>
                <div class="text-black text-lg font-medium font-THICCCBOI leading-7">Anggota</div>
            </div>
        </div>
        {{-- Main Content --}}
        <div class="w-full h-full bg-netral-100 rounded-4xl self-stretch flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Anggota</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0justify-start items-start gap-6 flex flex-row flex-1">
                <div class="grow shrink basis-3/12 h-full bg-white flex-col justify-start items-start gap-4 inline-flex">
                    <div class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Pilih
                        Divisi</div>
                    <div id="list-btn-divisi-2"
                        class="self-stretch overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y flex-col justify-start items-start gap-4 flex">
                    </div>
                </div>

                <div class="w-px h-full bg-netral-300 flex-col justify-center items-center inline-flex"></div>

                <div id="list-form-jabatan"
                    class="w-full h-full grow shrink basis-3/12 bg-white flex-col justify-start items-start gap-8 inline-flex">
                </div>

                <div class="w-px h-full bg-netral-300 flex-col justify-center items-center inline-flex"></div>

                <div id="list-form-anggota" class="grow basis-6/12 self-stretch bg-white flex-col justify-start items-start gap-8 inline-flex">
                </div>

            </div>


            {{-- 3 --}}
            <div class="h-fit w-full pt-4 border-t-2 border-netral-800 justify-start items-start gap-4 flex">
                <button onclick="previousStep()"
                    class="btn-secondary w-fit">Sebelumnya
                </button>
                <button  onclick="  " class="btn-primary w-full">Simpan Baru</div>
                </button>
            </div>
        </div>
    </section>
<script>

</script>
<script>
// #mahasiswaLama:checked + label:first-of-type {
//     background-color: #FFF; /* Warna background untuk Mahasiswa Lama ketika dipilih */
// }

// #mahasiswaBaru:checked + label:last-of-type {
//     background-color: #000; /* Warna background untuk Mahasiswa Baru ketika dipilih */
// }
// const labels = document.querySelectorAll('label');

// labels.forEach(label => {
//     // Tambahkan event listener untuk setiap label
//     label.addEventListener('click', () => {
//         // Ambil ID radio button terkait dengan label yang diklik
//         const radioId = label.getAttribute('for');
//         const radioButton = document.getElementById(radioId);

//         // Hapus kelas bg-netral-100 dan border-netral-900 dari semua label
//         labels.forEach(l => {
//             l.classList.remove('bg-netral-100', 'border-netral-900');
//         });

//         // Ubah gaya label sesuai status radio button
//         if (radioButton.checked) {
//             label.classList.remove('bg-netral-100', 'border-netral-900');
//             label.classList.add('bg-netral-900');
//         } else {
//             label.classList.remove('bg-netral-900');
//             label.classList.add('bg-netral-100', 'border-netral-900');
//         }
//     });

//     // Inisialisasi gaya label saat halaman dimuat
//     const radioId = label.getAttribute('for');
//     const radioButton = document.getElementById(radioId);
//     if (radioButton.checked) {
//         label.classList.add('bg-netral-900');
//     } else {
//         label.classList.add('bg-netral-100', 'border-netral-900');
//     }
// });
</script>
    
    <script>

    // Membuat variabel global untuk menyimpan tombol dan formulir yang aktif
    // let activeButton = null;
    // let activeButton2 = null;

    // function toggleFormVisibility(inputId) {
    //     const form = document.getElementById(`formTimDivisi-${inputId}`);
    //     if (form) {
    //         form.classList.toggle('hidden'); // Togel kelas 'hidden' untuk menampilkan atau menyembunyikan form
    //     }
        
    // }
    // function toggleForm2Visibility(inputId) {
    //     const form2 = document.getElementById(`formJabatan-${inputId}`);
    //     if (form2) {
    //         form2.classList.toggle('hidden'); // Togel kelas 'hidden' untuk menampilkan atau menyembunyikan form
    //     }
    // }
let counter = 0;
let inputIdinFormAnggota = 0;
let btnJabatanformAnggotaID = 0;
// Fungsi untuk mengaktifkan atau menonaktifkan form dan mengubah warna tombol divisi
// Variabel global untuk melacak tombol divisi yang sedang aktif
let activeButtonId = null;
let activeButtonId2 = null;
let activeButtonJabatanId = null;
let namaDivisiValues = '';
let currentButtonNumber = 1;


function inputIdGlobal() {
    counter++;
    return `${counter}`;
}


 // Gunakan variabel global untuk menyimpan nilai counter
// Fungsi untuk memberikan nomor yang berbeda di setiap input di dalam 1 formAnggota
function insideFormAnggotaID() {
    inputIdinFormAnggota++; // Tambahkan counter setiap kali fungsi dipanggil
    return inputIdinFormAnggota;
}

function btnJabatanANDformAnggotaID() {
    btnJabatanformAnggotaID++; // Tambahkan counter setiap kali fungsi dipanggil
    return btnJabatanformAnggotaID;
}


// function buttonToggleNonActive(){
//     activeButton.classList.remove('active', 'border-primary-base', 'bg-primary-100');
//     activeButton.classList.remove('bg-primary-base');
//     activeButton.classList.add('border-netral-200', 'bg-netral-100');
// }

// function buttonToggleActive(){
//     activeButton.classList.remove('active', 'border-primary-base', 'bg-primary-100');
//     activeButton.classList.remove('bg-primary-base');
//     activeButton.classList.add('border-netral-200', 'bg-netral-100');
// }
// Fungsi untuk mengubah status input radio dan latar belakang form


    function createForm(inputId) {
        const form = document.createElement('form');
        form.id = `formTimDivisi-${inputId}`; // Berikan ID unik untuk form 
        form.classList.add('w-full', 'h-full', 'hidden', 'rounded-md', 'flex-col', 'justify-start', 'items-start', 'gap-12', 'inline-flex');
        form.innerHTML = `
        <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <div
                    class="grow shrink basis-0 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">
                    Tambahkan Foto Tim</div>
            </div>
            <div class="self-stretch grow shrink basis-0 flex-col justify-start items-start gap-4 flex">
                <div class="self-stretch h-40 flex-col justify-start items-start gap-1 flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Foto
                            Bersama Tim</div>
                    </div>
                    <div
                        class="w-full h-36 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                        <input  class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                            type="file" name="" >
                        <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                            type="file" name="" >
                        <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                        <label for="fileinput"
                            class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                            Gambar</label>
                    </div>
                </div>
            </div>
            <div
                class="btn-primaryflex"Simpan
            </div>
        `;
        return form;
    }
    
    function createForm2(addDivinputId) {
        const form2 = document.createElement('form');
        form2.id = `formJabatan-${addDivinputId}`; // Berikan ID unik untuk form
        form2.classList.add('form-jabatan', 'hidden', 'w-full', 'h-full', 'grow', 'shrink', 'basis-3/12', 'bg-white', 'flex-col', 'justify-start', 'items-start', 'gap-8', 'inline-flex', 'overflow-scroll', 'overflow-x-hidden', 'scrollbar-hidden-vertikal', 'touch-pan-y');
        form2.innerHTML = `
        <div class="w-full h-full bg-white flex-col justify-start items-start gap-8 inline-flex overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y">
                <div id="list-button-jabatan" class="self-stretch h-full flex-col justify-start items-start gap-4 flex">
                    <div class="text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Pilih Jabatan
                    </div>
                        <div
                            class="w-full h-fit order-last flex-col justify-start items-start gap-4 flex">
                            <div class="w-full justify-start items-start gap-2.5 inline-flex">
                                <div class="w-full text-netral-900 text-base font-normal font-THICCCBOI leading-7">Tambah
                                    Anggota</div>
                            </div>
                            <button id="addButtonJabatanAnggota-${addDivinputId}"
                                class="w-full h-fit px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                                <div
                                    class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">
                                    Tambah</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full bg-blue-400 h-fit py-1 rounded-full justify-center items-center gap-6 inline-flex">
                    <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Selesai
                </div>
            </div>
                

        `;
        document.getElementById('list-form-jabatan').appendChild(form2);

        const btnJabatanformAnggota = createBtnJabatanAndFormAnggota(addDivinputId);
        const selectformJabatanKetua = document.getElementById(`formJabatan-${addDivinputId}`);
        // Jika form2 ditemukan, lanjutkan seleksi
        if (selectformJabatanKetua) {
            // Seleksi elemen dengan class .jabatan-btn di dalam form2 yang memiliki ID tertentu
            const selectListButtonJabatanKetua = selectformJabatanKetua.querySelector('#list-button-jabatan');
            // Jika elemen terpilih ditemukan, lanjutkan proses berikutnya
            if (selectListButtonJabatanKetua) {
                // Temukan elemen list-button-jabatan di dalam form2
                const selectListButton = selectListButtonJabatanKetua;
                // Lakukan proses yang diinginkan dengan elemen yang terpilih
                if (selectListButton) {
                    selectListButton.appendChild(btnJabatanformAnggota);
                }
            }
        }

        const btnJabatanformAnggota2 = createBtnJabatanAndFormAnggota2(addDivinputId);
        const selectformJabatanWakil = document.getElementById(`formJabatan-${addDivinputId}`);
        // Jika form2 ditemukan, lanjutkan seleksi
        if (selectformJabatanWakil) {
            // Seleksi elemen dengan class .jabatan-btn di dalam form2 yang memiliki ID tertentu
            const selectListButtonJabatan = selectformJabatanWakil.querySelector('#list-button-jabatan');
            // Jika elemen terpilih ditemukan, lanjutkan proses berikutnya
            if (selectListButtonJabatan) {
                // Temukan elemen list-button-jabatan di dalam form2
                const selectListButton = selectListButtonJabatan;
                // Lakukan proses yang diinginkan dengan elemen yang terpilih
                if (selectListButton) {
                    selectListButton.appendChild(btnJabatanformAnggota2);
                }
            }
        }
 
        const addButtonBtnJabatanAnggota = document.getElementById(`addButtonJabatanAnggota-${addDivinputId}`);
            if (addButtonBtnJabatanAnggota) {
            addButtonBtnJabatanAnggota.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah perilaku default dari tombol
                // Panggil fungsi createBtnJabatanAnggotaAndFormAnggota dengan parameter yang sesuai
                createBtnJabatanAnggotaAndFormAnggota(addDivinputId);
                });
            }
                

            return form2;
    }


// Contoh cara menggunakan fungsi handleRadioButton di dalam fungsi createFormAnggota:
// handleRadioButton(datainputId, idInsideForm);


    function createFormAnggota(datainputId, addDivinputId) {
        const idInsideForm = insideFormAnggotaID();
        
        const divisiButtons = document.querySelectorAll(`#button-divisi-text-2`);
        console.log("buttons:", divisiButtons);
        divisiButtons.forEach(button => {
            // Ambil nilai nama divisi dari setiap elemen
            const nameDivisi = button.textContent;
            const selectdivisiButtons = document.querySelectorAll(`#button-divisi-text-2[data-input-field-id="${datainputId}"]`);
            console.log("selectdivisiButtons:", datainputId);
            // Tambahkan nilai nama divisi ke variabel
            // Tambahkan nilai nama divisi ke variabel
            if (selectdivisiButtons) {
                namaDivisiValues = nameDivisi 
            } 
                    
        });

        // function updateOtherInputValue(addDivdatainputId){
        const inputFieldContainer = document.querySelectorAll(`#inputfieldContainer`);
        // Update division button text according to the value entered in the dynamic text field
        inputFieldContainer.forEach(form => {
            // Ambil nilai nama divisi dari setiap elemen
            const nameDivisi = form.value;
            const selectinputfieldDivisi = document.querySelector(`#inputfieldContainer[data-button-divisi-text-id="${addDivinputId}"]`);
            
        if (selectinputfieldDivisi){
            selectinputfieldDivisi.addEventListener('input', function() {
                const inputValue = this.value;
                const selectforDivisi = document.querySelector(`#divisi-${datainputId}-${idInsideForm}`);
                });
            }
        });
       

        const formAnggota = document.createElement('form');
        formAnggota.id = `formAnggota-${datainputId}`; // Berikan ID unik untuk form
        formAnggota.classList.add('w-full', 'h-full', 'hidden','w-basis-6/12', 'h-self-stretch', 'bg-netral-100', 'flex-col', 'justify-start', 'items-start', 'gap-8', 'inline-flex');
        formAnggota.innerHTML = `
        <div class="w-full h-full flex-col justify-start items-start gap-4 flex">
            <div class="text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Data Anggota</div>
            <div
                class="w-full h-full overflow-scroll  overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y flex-col justify-start items-start gap-4 flex">
                <div class="self-stretch h-fit flex-col justify-center items-center gap-2 flex">
                    <div class="w-full h-fit justify-between items-center inline-flex">
                        <div
                            class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-7">
                            Tipe Mahasiswa</div>
                        <i class="ph-fill ph-info text-2xl"></i>
                    </div>
                    <div id="pilih-tipe-mahasiswa" class="w-full h-full border-2 rounded-2xl border-netral-900 justify-center items-center inline-flex">
                        <input id="mahasiswaAktif-${datainputId}-${idInsideForm}" type="radio" name="jenisMahasiswa" class="">
                        <label for="mahasiswaAktif" class="grow shrink basis-0 px-8 py-2 bg-white flex-col justify-center items-center inline-flex cursor-pointer">
                            <i class="ph-fill ph-student text-netral-800 text-32"></i>
                            <div class="text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">
                                Mahasiswa Aktif</div>
                        </label>
                        <input id="mahasiswaBaru-${datainputId}-${idInsideForm}" type="radio" name="jenisMahasiswa" class="">
                        <label for="mahasiswaBaru" class="grow shrink basis-0 px-8 py-2 bg-netral-900 flex-col justify-center items-center inline-flex cursor-pointer">
                            <i class="ph ph-user text-netral-100 text-32"></i>
                            <div class="text-white text-lg font-semibold font-THICCCBOI leading-7">
                                Mahasiswa Baru</div>
                        </label>
                    </div>
                    <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                        <div class="w-full h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start gap-2.5 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                    Nama Divisi
                                </div>
                            </div>
                            <input id="divisi-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" value="${namaDivisiValues}" placeholder="Masukkan Nama Lengkap"
                                class="select-divisi w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                    </div>
                
                <div class="self-stretch h-fit flex-col justify-start items-start gap-1 flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                            Foto Kabinet Anggota
                        </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-1 inline-flex">
                        <div
                            class="h-44 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input id="img-${datainputId}-${idInsideForm}"
                                class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" >
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" >
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                Gambar</label>
                        </div>
                        <div
                            class="grow shrink basis-0 self-stretch p-4 justify-start items-center gap-2.5 flex">
                            <div
                                class="grow shrink basis-0 text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Masukkan foto kabinet anggota dengan latar belakang transparan dan format png
                            </div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Nama
                            </div>
                        </div>
                        <input id="fullname-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Masukkan Nama Lengkap"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">NIM
                            </div>
                        </div>
                        <input id="nim-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Masukkan NIM"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Program Pendidikan
                            </div>
                        </div>
                        <input id="prodi-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Masukkan Program Pendidikan"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Angkatan
                            </div>
                        </div>
                        <input id="angkatan-${datainputId}-${idInsideForm}" type="text" name="nama-kabinet" placeholder="Cth : 2020"
                            class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
                <div class="self-stretch h-fit flex flex-row gap-4 justify-center items-center ">
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="justify-start items-start gap-2.5 inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                Kata Sandi
                            </div>
                        </div>
                        <input id="password-${datainputId}-${idInsideForm}"  type="password" name="nama-kabinet" placeholder="Katasandi adalah KOM1S1PoliMedia"
                            class="w-full py-3 pointer-events-none bg-netral-300 focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-100 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-full bg-blue-400 h-fit py-1 rounded-full justify-center items-center gap-6 inline-flex">
                <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Selesai
                </div>
            </div>
        `;

        // handleRadioButton(datainputId, idInsideForm);

        return formAnggota;
        
    }





    let buttonCount = {}; 
    function createBtnJabatanAnggotaAndFormAnggota(addDivinputId) {
        // Mendapatkan jumlah tombol anggota yang sudah ada di form tersebut
        const selectform2 = document.getElementById(`formJabatan-${addDivinputId}`);
    
            let buttonCount = 1; // Inisialisasi buttonCount untuk setiap form
            if (selectform2) {
                const listButtonJabatan = selectform2.querySelector(`#list-button-jabatan`);
                if (listButtonJabatan) {
                    buttonCount = listButtonJabatan.childElementCount - 4;
                }
            }


            
        const datainputId = btnJabatanANDformAnggotaID();
        const buttonJabatan = document.createElement('div');
            buttonJabatan.id = addDivinputId;
            buttonJabatan.classList.add('jabatan-btn', 'self-stretch', 'w-full', 'h-fit', 'flex-col',  'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
            buttonJabatan.dataset.inputFieldId = datainputId;
            // Dalem Button 
            const divInsideButtonJabatan = document.createElement('div');
            divInsideButtonJabatan.classList.add('w-full', 'h-fit', 'px-4', 'py-3', 
                'justify-start', 'items-center', 'gap-4', 'inline-flex');
            const dynamicTextJabatan = document.createElement('div');
            dynamicTextJabatan.textContent = `Anggota ${buttonCount + 1}`;
            dynamicTextJabatan.classList.add('dynamic-text','w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                'font-THICCCBOI', 'leading-7');
            const hapusButton = document.createElement('div');
            hapusButton.classList.add('w-fit','h-full', 'justify-center','items-center', 'flex');
            hapusButton.addEventListener('click', function () {
                // Panggil fungsi untuk menghapus tombol
                const selectformAnggota = document.getElementById(`formAnggota-${datainputId}`);
                deleteButton(buttonJabatan, selectformAnggota, datainputId);
            });
            const iconTrash = document.createElement('i');
            iconTrash.classList.add('ph', 'ph-trash', 'text-2xl');
            hapusButton.appendChild(iconTrash);
            divInsideButtonJabatan.appendChild(dynamicTextJabatan);
            divInsideButtonJabatan.appendChild(hapusButton);
            buttonJabatan.appendChild(divInsideButtonJabatan);
            // document.getElementById('list-form-button').appendChild(buttonJabatan);

            // Temukan form2 dengan ID yang sesuai
                const form2 = selectform2;
                if (form2) {
                    // Temukan elemen dengan ID list-button-jabatan di dalam form2
                    const listButtonJabatan = form2.querySelector('#list-button-jabatan');
                    if (listButtonJabatan) {
                        // Tambahkan button baru ke dalam list-button-jabatan
                        listButtonJabatan.appendChild(buttonJabatan);
                    }
                }

                const formAnggota = createFormAnggota(datainputId, addDivinputId);
                document.getElementById('list-form-anggota').appendChild(formAnggota);

                
                return buttonJabatan;
        
    }
    // Fungsi untuk menghapus tombol
    function deleteButton(buttonJabatan, selectformAnggota, datainputId) {
        if (buttonJabatan && buttonJabatan.parentNode) {
            const addDivinputId = buttonJabatan.id;
            console.log("addDivinputId :", addDivinputId);
                if (activeButtonJabatanId) {
                    const activeButtonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${activeButtonJabatanId}"]`);
                    console.log("ACtive :", activeButtonJabatan);
                    activeButtonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                    activeButtonJabatan.classList.add('border-netral-200', 'bg-netral-100');

                    const activeFormAnggota = document.querySelector(`#formAnggota-${activeButtonJabatanId}`);
                    console.log("activeFormAnggota :", activeFormAnggota);
                    selectformAnggota.remove();
                   
                    buttonJabatan.parentNode.removeChild(buttonJabatan);
                    if (activeFormAnggota) {
                        activeFormAnggota.classList.add('hidden');
                    }
                    activeButtonJabatanId = null;
                } else{
                    selectformAnggota.remove();
                    buttonJabatan.parentNode.removeChild(buttonJabatan);
                }
             
            currentButtonNumber--;

            // Memperbarui jumlah tombol anggota di form jabatan
            if (buttonCount[addDivinputId]) {
                buttonCount[addDivinputId]--;
            }

            updateButtonNumbers(addDivinputId);
        }
    }

    // Fungsi untuk memperbarui nomor tombol yang tersisa dan teks tombol yang sesuai
    function updateButtonNumbers(addDivinputId) {
        const listButtonJabatan = document.querySelector(`#formJabatan-${addDivinputId} #list-button-jabatan`);
        if (listButtonJabatan) {
            const buttons = listButtonJabatan.querySelectorAll('.jabatan-btn');
            buttons.forEach((button, index) => {
                const dynamicText = button.querySelector('.dynamic-text');
                if (dynamicText) {
                    dynamicText.textContent = `Anggota ${index - 1}`;
                }
            });
            // Update jumlah tombol anggota di form jabatan
            const countDisplay = document.getElementById(`count-${addDivinputId}`);
            if (countDisplay) {
                countDisplay.textContent = buttonCount[addDivinputId];
            }
        }
    }

    function createBtnJabatanAndFormAnggota(addDivinputId) {
        const datainputId = btnJabatanANDformAnggotaID();
        const buttonJabatan = document.createElement('div');
            buttonJabatan.id = addDivinputId;
            buttonJabatan.classList.add('jabatan-btn', 'self-stretch', 'w-full', 'h-fit', 'flex-col',  'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
            buttonJabatan.dataset.inputFieldId = datainputId;
            // Dalem Button 
            const divInsideButtonJabatan = document.createElement('div');
            divInsideButtonJabatan.classList.add('w-full', 'h-fit', 'px-4', 'py-3', 
                'justify-start', 'items-center', 'gap-4', 'inline-flex');
            const dynamicTextJabatan = document.createElement('div');
            dynamicTextJabatan.textContent = 'Ketua';
            dynamicTextJabatan.classList.add('w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                'font-THICCCBOI', 'leading-7');
            divInsideButtonJabatan.appendChild(dynamicTextJabatan);
            buttonJabatan.appendChild(divInsideButtonJabatan);
            // document.getElementById('list-form-button').appendChild(buttonJabatan);


                const formAnggota = createFormAnggota(datainputId, addDivinputId);
                document.getElementById('list-form-anggota').appendChild(formAnggota);
                return buttonJabatan;
        
    }


    function createBtnJabatanAndFormAnggota2(addDivinputId) {
        const datainputId = btnJabatanANDformAnggotaID();
        const buttonJabatanWakil = document.createElement('div');
            buttonJabatanWakil.id = addDivinputId;
            buttonJabatanWakil.classList.add('jabatan-btn', 'self-stretch', 'w-full', 'h-fit', 'flex-col',  'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
            buttonJabatanWakil.dataset.inputFieldId = datainputId;
            // Dalem Button 
            const divInsideButtonJabatanWakil = document.createElement('div');
            divInsideButtonJabatanWakil.classList.add('w-full', 'h-fit', 'px-4', 'py-3', 
                'justify-start', 'items-center', 'gap-4', 'inline-flex');
            const dynamicTextJabatanWakil = document.createElement('div');
            dynamicTextJabatanWakil.textContent = 'Wakil';
            dynamicTextJabatanWakil.classList.add('w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                'font-THICCCBOI', 'leading-7');
            divInsideButtonJabatanWakil.appendChild(dynamicTextJabatanWakil);
            buttonJabatanWakil.appendChild(divInsideButtonJabatanWakil);

            const formAnggotaWakil = createFormAnggota(datainputId, addDivinputId);
            document.getElementById('list-form-anggota').appendChild(formAnggotaWakil);
            
        return buttonJabatanWakil;
    }
                    

    document.addEventListener("DOMContentLoaded", function() {
    let counter = 0;

        function createButtonAndForm(text) {
            counter++;
            const inputId = `${counter}`;

            const buttonDivisiText1 = document.createElement('div');
            buttonDivisiText1.id = 'button-divisi-text-1';
            buttonDivisiText1.classList.add('divisi-btn', 'hidden', 'self-stretch', 'w-full', 'h-fit', 'flex-col',  'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
            buttonDivisiText1.dataset.inputFieldId = inputId;
            // Dalem Button 
            const divInsideButton1 = document.createElement('div');
            divInsideButton1.classList.add('w-full', 'h-fit', 'px-4', 'py-3', 
                'justify-start', 'items-center', 'gap-4', 'inline-flex');
            const dynamicTextDiv1 = document.createElement('div');
            dynamicTextDiv1.textContent = text;
            dynamicTextDiv1.classList.add('w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                'font-THICCCBOI', 'leading-7');
            divInsideButton1.appendChild(dynamicTextDiv1);
            buttonDivisiText1.appendChild(divInsideButton1);
            buttonDivisiText1.classList.remove('hidden');
            document.getElementById('list-btn-divisi').appendChild(buttonDivisiText1);

            const buttonDivisiText2 = document.createElement('div');
            buttonDivisiText2.id = 'button-divisi-text-2';
            buttonDivisiText2.classList.add('divisi-btn', 'hidden', 'self-stretch', 'w-full', 'h-fit', 'flex-col',  'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
            buttonDivisiText2.dataset.inputFieldId = inputId;
            // Dalem Button 
            const divInsideButton2 = document.createElement('div');
            divInsideButton2.classList.add('w-full', 'h-fit', 'px-4', 'py-3', 
                'justify-start', 'items-center', 'gap-4', 'inline-flex');
            const dynamicTextDiv2 = document.createElement('div');
            dynamicTextDiv2.value = text;
            dynamicTextDiv2.textContent = text;
            dynamicTextDiv2.classList.add('w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                'font-THICCCBOI', 'leading-7');
            divInsideButton2.appendChild(dynamicTextDiv2);
            buttonDivisiText2.appendChild(divInsideButton2);
            buttonDivisiText2.classList.remove('hidden');

            document.getElementById('list-btn-divisi-2').appendChild(buttonDivisiText2);

             
            const form = createForm(inputId);
            document.getElementById('list-form-tim').appendChild(form);

            const form2 = createForm2(inputId);
            

            // const btnJabatanformAnggota = createBtnJabatanAndFormAnggota(inputId);
            // document.getElementById('list-button-jabatan').appendChild(btnJabatanformAnggota);
            
        }
        createButtonAndForm('Ketua');
        createButtonAndForm('Bendahara');
        createButtonAndForm('Sekretaris');
    });

        



    function toggleFormAndButtonVisibility(inputId) {
    const form = document.getElementById(`formTimDivisi-${inputId}`);
    const buttonDivisi = document.querySelector(`#button-divisi-text-1[data-input-field-id="${inputId}"]`);
    if (form && buttonDivisi) {
        const isFormVisible = !form.classList.contains('hidden');

        // Memeriksa apakah tombol yang diklik adalah tombol yang sedang aktif
        if (activeButtonId === inputId) {
            // Menutup form yang terkait dengan tombol yang sedang aktif
            form.classList.add('hidden');
            // Mengembalikan warna tombol menjadi default
            buttonDivisi.classList.remove('active', 'border-primary-base', 'bg-primary-100');
            buttonDivisi.classList.add('border-netral-200', 'bg-netral-100');
            activeButtonId = null; // Menandakan tidak ada tombol yang aktif lagi
        } else {
            // Jika tombol yang diklik bukan tombol yang sedang aktif sebelumnya
            if (activeButtonId) {
                // Menonaktifkan tombol divisi yang sedang aktif sebelumnya
                const activeButton = document.querySelector(`#button-divisi-text-1[data-input-field-id="${activeButtonId}"]`);
                activeButton.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButton.classList.add('border-netral-200', 'bg-netral-100');
                
                // Menyembunyikan form yang terkait dengan tombol divisi yang sedang aktif sebelumnya
                const activeForm = document.getElementById(`formTimDivisi-${activeButtonId}`);
                if (activeForm) {
                    activeForm.classList.add('hidden');
                }
            }
            // Menampilkan form yang terkait dengan tombol yang baru diklik
            form.classList.remove('hidden');
            // Mengubah warna tombol menjadi aktif
            buttonDivisi.classList.add('active', 'border-primary-base', 'bg-primary-100');
            buttonDivisi.classList.remove('border-netral-200', 'bg-netral-100');
            activeButtonId = inputId; // Menandakan tombol ini sebagai tombol yang sedang aktif
        }
    }
}


// Fungsi untuk mengaktifkan atau menonaktifkan form dan mengubah warna tombol divisi
function toggleFormAndButtonVisibility2(inputId, inputIdJabatanAnggota) {
    console.log("Toggle form and button visibility for inputId:", inputId);
    const form2 = document.getElementById(`formJabatan-${inputId}`);
    const buttonDivisi = document.querySelector(`#button-divisi-text-2[data-input-field-id="${inputId}"]`);
    const formAnggota = document.getElementById(`formAnggota-${inputIdJabatanAnggota}`);
    const buttonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${inputIdJabatanAnggota}"]`);
    
    if (form2 && buttonDivisi && formAnggota && buttonJabatan) {
        const isForm2Visible = !form2.classList.contains('hidden');
        const isFormAnggotaVisible = !formAnggota.classList.contains('hidden');

        // Memeriksa apakah tombol divisi lain yang sedang aktif
        if (activeButtonId2 !== activeButtonJabatanId !== inputId) {
            // Menonaktifkan tombol divisi yang sedang aktif sebelumnya
            if (activeButtonId2) {
                const activeButton = document.querySelector(`#button-divisi-text-2[data-input-field-id="${activeButtonId2}"]`);
                activeButton.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButton.classList.add('border-netral-200', 'bg-netral-100');

                if (activeButton) {
                    activeButton.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButton.classList.add('border-netral-200', 'bg-netral-100');
                }
                
                // Menyembunyikan form yang terkait dengan tombol divisi yang sedang aktif sebelumnya
                const activeForm2 = document.getElementById(`formJabatan-${activeButtonId2}`);
                if (activeForm2) {
                    activeForm2.classList.add('hidden');
                }
            }
            if (activeButtonJabatanId) {
            const activeButtonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${activeButtonJabatanId}"]`);
                activeButtonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButtonJabatan.classList.add('border-netral-200', 'bg-netral-100');
                
                const activeFormAnggota = document.getElementById(`formAnggota-${activeButtonJabatanId}`);
                if (activeFormAnggota) {
                    activeFormAnggota.classList.add('hidden');
                    activeButtonJabatanId = null;
                }
            }
            if (activeButtonJabatanId && activeButtonId2) {
                const activeButton = document.querySelector(`#button-divisi-text-2[data-input-field-id="${activeButtonId2}"]`);
                const activeButtonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${activeButtonJabatanId}"]`);

                activeButton.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButton.classList.add('border-netral-200', 'bg-netral-100');

                activeButtonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButtonJabatan.classList.add('border-netral-200', 'bg-netral-100');
                const activeForm2 = document.getElementById(`formJabatan-${activeButtonId2}`);
                if (activeForm2) {
                    activeForm2.classList.add('hidden');
                    activeButtonId2 = null;
                }
                const activeFormAnggota = document.getElementById(`formAnggota-${activeButtonJabatanId}`);
                if (activeFormAnggota) {
                    activeFormAnggota.classList.add('hidden');
                    activeButtonJabatanId = null;
                }
            }

            // Mengubah warna tombol divisi yang sedang aktif dan menampilkan/sembunyikan form2 yang sesuai
            if (!isForm2Visible && !isFormAnggotaVisible) {
                form2.classList.remove('hidden');
                
                buttonDivisi.classList.add('active', 'border-primary-base', 'bg-primary-100');
                buttonDivisi.classList.remove('border-netral-200', 'bg-netral-100');
                 // Menambahkan kelas untuk mengubah warna tombol menjadi merah
                // Mengatur tombol divisi ini sebagai tombol divisi yang sedang aktif
                activeButtonId2 = inputId;
                // activeButtonJabatanId = inputId;
                
            } else {
                form2.classList.add('hidden');
                formAnggota.classList.add('hidden');

                buttonDivisi.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                buttonDivisi.classList.add('border-netral-200', 'bg-netral-100'); // Menghapus kelas untuk mengembalikan warna tombol menjadi putih
                // Menghapus tombol divisi yang sedang aktif
                buttonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                buttonJabatan.classList.add('border-netral-200', 'bg-netral-100');
                activeButtonId2 = null;
                activeButtonJabatanId = null;
                
            }
        } else {
            // Jika tombol divisi yang sedang aktif diklik lagi, nonaktifkan tombol dan sembunyikan form2
            form2.classList.add('hidden');
            formAnggota.classList.add('hidden');

            buttonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
            buttonJabatan.classList.add('border-netral-200', 'bg-netral-100');

            const activeButtonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${activeButtonJabatanId}"]`);
            const activeFormAnggota = document.getElementById(`formAnggota-${activeButtonJabatanId}`);
            if (activeButtonJabatanId && activeFormAnggota) {
                    activeFormAnggota.classList.add('hidden');
                    activeButtonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                    activeButtonJabatan.classList.add('border-netral-200', 'bg-netral-100');
                    activeButtonJabatanId = null;
                }
            

                buttonDivisi.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                buttonDivisi.classList.add('border-netral-200', 'bg-netral-100');

            
            activeButtonId2 = null;
            activeButtonJabatanId = null;
        }
    }
}



// Fungsi untuk mengaktifkan atau menonaktifkan form dan mengubah warna tombol divisi
function toggleFormAndButtonVisibilityJabatan(inputId) {
    // const form2 = document.getElementById(`formJabatan-${inputId}`);
    const formAnggota = document.getElementById(`formAnggota-${inputId}`);
    const buttonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${inputId}"]`);
    // const selectformAnggotaHapus = document.getElementById(`formAnggota-${selectformAnggota}`);
    
    if (formAnggota && buttonJabatan) {
        // const isForm2Visible = !form2.classList.contains('hidden');
        const isFormAnggotaVisible = !formAnggota.classList.contains('hidden');

        // Memeriksa apakah tombol divisi lain yang sedang aktif
        if (activeButtonJabatanId !== inputId) {
            // Menonaktifkan tombol divisi yang sedang aktif sebelumnya
            if (activeButtonJabatanId) {
                const activeButtonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${activeButtonJabatanId}"]`);
                activeButtonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                activeButtonJabatan.classList.add('border-netral-200', 'bg-netral-100');
                
                // if (selectformAnggota){
                //     console.log("select ANGGOTA", selectformAnggota);
                //     const activeButtonJabatan = document.querySelector(`.jabatan-btn[data-input-field-id="${activeButtonJabatanId}"]`);
                //     activeButtonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                //     activeButtonJabatan.classList.add('border-netral-200', 'bg-netral-100');
                //     activeButtonJabatanId = null;
                // }
                
                const activeFormAnggota = document.getElementById(`formAnggota-${activeButtonJabatanId}`);
                if (activeFormAnggota) {
                    activeFormAnggota.classList.add('hidden');
                }
            }
            // Mengubah warna tombol divisi yang sedang aktif dan menampilkan/sembunyikan form2 yang sesuai && !isFormAnggotaVisible
            if (!isFormAnggotaVisible ) {
                formAnggota.classList.remove('hidden');
                // formAnggota.classList.remove('hidden');
                buttonJabatan.classList.remove('border-netral-200', 'bg-netral-100');
                buttonJabatan.classList.add('active', 'border-primary-base', 'bg-primary-100'); // Menambahkan kelas untuk mengubah warna tombol menjadi merah
                // Mengatur tombol divisi ini sebagai tombol divisi yang sedang aktif
                activeButtonJabatanId = inputId;
            } else {
                formAnggota.classList.add('hidden');
                // formAnggota.classList.add('hidden');
                buttonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
                buttonJabatan.classList.add('border-netral-200', 'bg-netral-100'); // Menghapus kelas untuk mengembalikan warna tombol menjadi putih
                // Menghapus tombol divisi yang sedang aktif
                activeButtonJabatanId = null;
            }
        } else {
            // Jika tombol divisi yang sedang aktif diklik lagi, nonaktifkan tombol dan sembunyikan form2
            formAnggota.classList.add('hidden');
            // formAnggota.classList.add('hidden');
            buttonJabatan.classList.remove('active', 'border-primary-base', 'bg-primary-100');
            buttonJabatan.classList.add('border-netral-200', 'bg-netral-100');
            activeButtonJabatanId = null;
        }
    }
}


// Tambahkan event listener pada tombol divisi untuk mengaktifkan dan menonaktifkan form serta mengubah warna tombolnya
document.getElementById('list-btn-divisi').addEventListener('click', function(event) {
    const button = event.target.closest('.divisi-btn');
    if (button) {
        const inputId = button.dataset.inputFieldId;
        toggleFormAndButtonVisibility(inputId);
    }
});


// Tambahkan event listener pada tombol divisi untuk mengaktifkan dan menonaktifkan form serta mengubah warna tombolnya
document.getElementById('list-btn-divisi-2').addEventListener('click', function(event) {
    const button = event.target.closest('.divisi-btn');
    const buttonJabatan = document.getElementById('button-divisi-text-2');
    if (button) {
        const inputId = button.dataset.inputFieldId;
        const inputIdJabatanAnggota = buttonJabatan.dataset.inputFieldId;
        toggleFormAndButtonVisibility2(inputId, inputIdJabatanAnggota);
    }
});



// Tambahkan event listener pada tombol Jabatan untuk mengaktifkan dan menonaktifkan form serta mengubah warna tombolnya
document.getElementById('list-form-jabatan').addEventListener('click', function(event) {
    const button = event.target.closest('.jabatan-btn');
    if (button) {
        const inputId = button.dataset.inputFieldId;
        toggleFormAndButtonVisibilityJabatan(inputId);
    }
});



            document.getElementById('addTextFieldBtn-divisi').addEventListener('click', function() {
                const addDivinputId = inputIdGlobal()+inputIdGlobal();
                const container = document.getElementById('add-content-divisi');
                // Membuat container utama
                const divContainer = document.createElement('div');
                
                divContainer.classList.add('self-stretch', 'h-fit', 'flex', 'flex-row', 'gap-4', 'justify-center',
                    'items-center');

                // Membuat div untuk input field dan label
                const divInput = document.createElement('div');
                divInput.classList.add('w-full', 'h-fit', 'flex-col', 'justify-start', 'items-start', 'flex');

                // Membuat div untuk label "Nama Divisi"
                const divLabel = document.createElement('div');
                divLabel.textContent = 'Nama Divisi';
                divLabel.classList.add('text-stone-700', 'text-base', 'font-normal', 'font-THICCCBOI',
                    'leading-normal');

                // Membuat input field untuk nama divisi
                const inputField = document.createElement('input');
                inputField.id = `inputfieldContainer`;
                inputField.type = 'text';
                inputField.name = 'nama-kabinet';
                inputField.placeholder = 'Cth: Kreatif';
                inputField.classList.add('dynamic-input', 'w-full', 'py-3', 'bg-netral-100', 'focus:border-b-2',
                    'focus:outline-none', 'focus:border-primary-base', 'focus:font-semibold', 'font-semibold',
                    'focus:text-netral-800', 'text-netral-800', 'border-b', 'border-neutral-900', 'justify-start',
                    'items-center', 'gap-2', 'inline-flex', 'placeholder:text-netral-300', 'text-lg',
                    'placeholder:font-normal', 'font-THICCCBOI', 'leading-7');

                // Menambahkan input field dan label ke dalam div input
                divInput.appendChild(divLabel);
                divInput.appendChild(inputField);

                // Membuat button untuk menghapus
                const removeButton = document.createElement('div');
                removeButton.classList.add('w-full', 'h-full', 'grow', 'shrink', 'basis-0', 'justify-center',
                    'items-center', 'remove-btn', 'inline-flex', 'cursor-pointer');

                // Membuat link pada button untuk ikon tempat sampah
                const trashIcon = document.createElement('i');
                trashIcon.classList.add('ph', 'ph-trash', 'text-32');

                // // Menambahkan ikon tempat sampah ke dalam button
                // removeButton.appendChild(trashIcon);
                
                    // Hapus Function
                    function removeItem(containerToRemove) {
                        const addDivinputId = containerToRemove.querySelector('.dynamic-input').dataset.buttonDivisiTextId;
                        // const buttonJabatanId = containerToRemove.querySelector('.jabatan-btn').dataset.inputFieldId;
                        // const formId = containerToRemove.querySelector('#formAnggota').dataset.buttonDivisiTextId;

                        // Hapus tombol divisi 1 yang terkait (jika ada)
                        const associatedDivisiBtn1 = document.querySelector(`#button-divisi-text-1[data-input-field-id="${addDivinputId}"]`);
                        
                        if (associatedDivisiBtn1) {
                            // Periksa apakah tombol yang dihapus sedang aktif
                            const isButtonActive = associatedDivisiBtn1.classList.contains('active', 'border-primary-base', 'bg-primary-100');
                            associatedDivisiBtn1.remove(); // Hapus tombol divisi 1 yang terkait

                            // Jika tombol yang dihapus adalah tombol yang sedang aktif, atur `activeButtonId` menjadi null
                            if (isButtonActive) {
                                activeButtonId = null;
                            }
                        }

                        // Hapus tombol divisi 2 yang terkait (jika ada)
                        const associatedDivisiBtn2 = document.querySelector(`#button-divisi-text-2[data-input-field-id="${addDivinputId}"]`);
                        if (associatedDivisiBtn2) {
                            // Periksa apakah tombol yang dihapus sedang aktif
                            const isButtonActive = associatedDivisiBtn2.classList.contains('active', 'border-primary-base', 'bg-primary-100');
                            associatedDivisiBtn2.remove(); // Hapus tombol divisi 2 yang terkait

                            // Jika tombol yang dihapus adalah tombol yang sedang aktif, atur `activeButtonId2` menjadi null
                            if (isButtonActive) {
                                activeButtonId2 = null;
                            }
                        }

                        // Hapus formulir 1 yang terkait (jika ada)
                        const formToRemove = document.getElementById(`formTimDivisi-${addDivinputId}`);
                        if (formToRemove) {
                            formToRemove.remove(); // Hapus formulir yang terkait
                        }

                        // Seleksi semua elemen dengan kelas .jabatan-btn yang memiliki id yang sama dengan addDivinputId
                    const btnsJabatanToRemove = document.querySelectorAll(`.jabatan-btn[id="${addDivinputId}"]`);
                    console.log("Button divbtn id:", btnsJabatanToRemove);

                        
                        // Iterasi melalui setiap elemen yang dipilih dan hapus
                        btnsJabatanToRemove.forEach(btn => {
                            // Hapus elemen buttonJabatan
                            
                            btn.remove();
                            
                            // Hapus formAnggota yang memiliki id yang sama dengan data input field id dari buttonJabatan
                            const formAnggotaId = `formAnggota-${btn.dataset.inputFieldId}`;
                            const formAnggotaToRemove = document.getElementById(formAnggotaId);
                            
                            if (formAnggotaToRemove) {
                                formAnggotaToRemove.remove();
                            }
                            const form2ToRemove = document.getElementById(`formJabatan-${addDivinputId}`);
                            
                             // Periksa apakah activeButtonId2 tidak sama dengan button yang akan dihapus
                            if (activeButtonId2 == btn.dataset.inputFieldId) {
                                // Jika tidak sama, tetapkan null pada activeButtonJabatanId
                                activeButtonId2 = null; 
                                activeButtonJabatanId = null;
                            } else {
                                 activeButtonJabatanId = null;
                            } if (form2ToRemove) {
                                form2ToRemove.remove(); // Hapus formulir yang terkait
                            }
                            
                        });

                        // Hapus container yang berisi input field, tombol, dan formulir
                        containerToRemove.remove();
                    }


                    // Tambahkan event listener untuk removeButton
                    removeButton.addEventListener('click', function(event) {
                        if (event.target.classList.contains('remove-btn')) {
                            const containerToRemove = event.target.parentNode; // Ambil container yang berisi input field dan tombol
                            removeItem(containerToRemove);
                        }
                    });

                    // Tambahkan event listener untuk ikon trashIcon
                    trashIcon.addEventListener('click', function() {
                        const containerToRemove = this.parentNode.parentNode; // Ambil container yang berisi input field dan tombol
                        removeItem(containerToRemove);
                    });
                    
                // Tambahkan ikon tempat sampah ke dalam button
                removeButton.appendChild(trashIcon);
                // Menambahkan div input dan button ke dalam div container
                divContainer.appendChild(divInput);
                divContainer.appendChild(removeButton);
                container.insertBefore(divContainer, this);

                const removeButtons = container.querySelectorAll('.remove-btn');
                removeButtons.forEach(button => button.classList.remove('hidden'));
                

                
                // Membuat button divisi text
                const buttonDivisiText1 = document.createElement('div');
                const buttonDivisiText2 = document.createElement('div');
                buttonDivisiText1.id = 'button-divisi-text-1';
                buttonDivisiText2.id = 'button-divisi-text-2';
                buttonDivisiText1.classList.add('divisi-btn', 'hidden', 'self-stretch', 'w-full', 'h-fit', 'flex-col',  'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                    'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
                buttonDivisiText2.classList.add('divisi-btn', 'hidden', 'self-stretch', 'w-full', 'h-fit', 'flex-col', 'bg-netral-100', 'rounded-xl', 'border', 'border-netral-200', 
                    'justify-start', 'items-start', 'gap-1', 'cursor-pointer');
                    // Dalem Button 
                const divInsideButton1 = document.createElement('div');
                const divInsideButton2 = document.createElement('div');
                divInsideButton1.classList.add('w-full', 'h-fit', 'px-4', 'py-3', 
                    'justify-start', 'items-center', 'gap-4', 'inline-flex');
                divInsideButton2.classList.add('w-full', 'h-fit', 'px-4', 'py-3',
                    'justify-start', 'items-center', 'gap-4', 'inline-flex');
                    
                const dynamicTextDiv1 = document.createElement('div');
                const dynamicTextDiv2 = document.createElement('div');
                dynamicTextDiv1.textContent = 'Divisi';
                dynamicTextDiv2.textContent = 'Divisi';
                dynamicTextDiv1.classList.add('w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                    'font-THICCCBOI', 'leading-7');
                dynamicTextDiv2.classList.add('w-full', 'h-fit', 'text-netral-900', 'text-lg', 'font-medium',
                    'font-THICCCBOI', 'leading-7');
                
                divInsideButton1.appendChild(dynamicTextDiv1);
                divInsideButton2.appendChild(dynamicTextDiv2);

                buttonDivisiText1.appendChild(divInsideButton1);
                buttonDivisiText2.appendChild(divInsideButton2);

                document.getElementById('list-btn-divisi').appendChild(buttonDivisiText1);
                document.getElementById('list-btn-divisi-2').appendChild(buttonDivisiText2);
                
                buttonDivisiText1.classList.remove('hidden');
                buttonDivisiText2.classList.remove('hidden');
                
                // Assign a unique identifier to each input field and its associated division button
                    // Unique ID for the input field
                inputField.dataset.buttonDivisiTextId = addDivinputId; // Set data attribute on input field
                buttonDivisiText1.dataset.inputFieldId = addDivinputId; // Set data attribute on division button
                buttonDivisiText2.dataset.inputFieldId = addDivinputId; // Set data attribute on division button

                const form = createForm(addDivinputId);
                const formContainer = document.getElementById('list-form-tim'); // Ganti 'form-container' dengan ID dari elemen di mana Anda ingin menempatkan form
                formContainer.appendChild(form);

                const form2 = createForm2(addDivinputId);

                // Update division button text according to the value entered in the dynamic text field
                inputField.addEventListener('input', function() {
                    const inputValue = this.value;
                    dynamicTextDiv1.textContent = 'Divisi ' + inputField.value;
                    dynamicTextDiv2.textContent = 'Divisi ' + inputField.value;
                    // namaDivisiValues = inputValue;
                    
                    // updateOtherInputValue(addDivinputId);
                });
            });
            
</script>
<script>
    // Step Function
    function nextStep() {
        var currentStep = document.querySelector('.step:not(.hidden)');
        currentStep.classList.add('hidden');
        var nextStep = currentStep.nextElementSibling;
        nextStep.classList.remove('hidden');
        nextStep.classList.add('flex');
    }

    function previousStep() {
        var currentStep = document.querySelector('.step:not(.hidden)');
        currentStep.classList.add('hidden');
        var previousStep = currentStep.previousElementSibling;
        previousStep.classList.remove('hidden');
        previousStep.classList.add('flex');
    }
</script>
@endsection
