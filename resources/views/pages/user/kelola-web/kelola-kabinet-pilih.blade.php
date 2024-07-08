@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-soft-base rounded-2xl shadow flex-col justify-start items-start gap-8 inline-flex">
    <div class="self-stretch h-fit rounded-2xl flex-col justify-start items-start gap-9 flex">
        <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
            <button onclick="goBack()" class="text-32 text-netral-800 ph ph-arrow-left"></button>
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kabinet KOBRA</div>
            <div class="py-3 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-primary-base text-2xl font-medium font-THICCCBOI leading-9">Ubah Kabinet</div>
                <i class="text-32 text-primary-base ph ph-pencil-simple"></i>
            </div>
        </div>
        
        <div class=" self-stretch h-fit p-8 bg-netral-100 rounded-2xl flex-col justify-start items-start gap-9 flex">
            <div class="self-stretch justify-start items-start gap-9 inline-flex">
                <div class="flex-col justify-start items-start gap-1 inline-flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Logo Kabinet</div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-1 inline-flex">
                        <div
                            class="w-96 h-36 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                Gambar</label>
                        </div>
                        {{-- <div class="grow shrink basis-0 self-stretch p-4 justify-start items-center gap-2.5 flex">
                            <div
                                class="grow shrink basis-0 text-netral-400 text-base font-normal font-THICCCBOI leading-normal">
                                Masukkan Logo dengan format svg</div>
                        </div> --}}
                    </div>  
                </div>
                <div class="flex-col justify-start items-start gap-1 inline-flex">
                    <div class="justify-start items-start inline-flex">
                        <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Logo Kabinet</div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-1 inline-flex">
                        <div
                            class="h-36 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                Gambar</label>
                        </div>
                        {{-- <div class="grow shrink basis-0 self-stretch p-4 justify-start items-center flex">
                            <div
                                class="grow shrink basis-0 text-netral-400 text-base font-normal font-THICCCBOI leading-normal">
                                Masukkan Logo dengan format svg</div>
                        </div> --}}
                    </div>  
                </div>
                
                <div class="grow shrink basis-0 h-fit justify-start items-start gap-8 flex flex-wrap">
                    <div class="grow shrink basis-2/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Nama Kabinet</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">KOBRA</div>
                        </div>
                    </div>
                    <div class="grow shrink basis-9/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Deskripsi Kabinet</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Kami memulai kabinet ini penuh dengan rasa mempererat kekeluargaan</div>
                        </div>
                    </div>
                    <div class="grow shrink basis-5/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Slogan/Nama Kepanjangan</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Kolaborasi, Optimis, Berprestasi, Realistis, Apresiasif</div>
                        </div>
                    </div>
                    <div class="grow shrink basis-1/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Visi</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Tersedia</div>
                        </div>
                    </div>
                    <div class="grow shrink basis-1/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Misi</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Tersedia</div>
                        </div>
                    </div>
                    <div class="grow shrink basis-1/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Periode</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">2021-2022</div>
                        </div>
                    </div>
                    <div class="grow shrink basis-1/12 flex-col justify-start items-start inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Angkatan</div>
                        </div>
                        <div class="self-stretch py-2 rounded justify-start items-center inline-flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">9</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="self-stretch justify-start items-start gap-8 inline-flex">
                <div class="grow shrink basis-0 self-stretch justify-start items-start gap-8 flex">
                    <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-1 inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Foto Tim Cowo</div>
                        </div>
                        <div
                            class="w-full h-72 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="flex-col justify-start items-start gap-1 inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Foto Tim Cewe</div>
                        </div>
                        <div
                            class="w-full h-72 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="flex-col justify-start items-start gap-1 inline-flex">
                        <div class="justify-start items-start inline-flex">
                            <div class="text-netral-400 text-base font-normal font-THICCCBOI leading-normal">Foto Tim Cewe</div>
                        </div>
                        <div
                            class="w-full h-72 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" name="" id="">
                            <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                            <label for="fileinput"
                                class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih Gambar</label>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        {{-- Table Divisi --}}
        <div class="self-stretch h-fit  justify-start items-center gap-6 inline-flex">
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-semibold font-THICCCBOI leading-10">Tim / Divisi</div>
            <div class="px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Tambah Divisi</div>
                <i class="text-2xl text-netral-800 ph ph-plus"></i>
            </div>
        </div>


        <div class=" w-full h-fit p-4 bg-netral-100 rounded-2xl  flex-col justify-start items-center flex">
            <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                <thead class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                    <tr class="justify-center items-center inline-flex flex-row gap-4">
                        <th class="w-8 h-8 justify-center items-center inline-flex">
                            <i class="text-32 ph ph-square"></i>
                        </th>
                        <th> 
                            <div>
                                <span class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Nama </span><span class="text-neutral-900 text-2xl font-bold font-THICCCBOI leading-9">Tim / Divisi</span>
                            </div> 
                        </th>
                    </tr>
                </thead>
                <tbody class="self-stretch h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex">
                    <tr class="self-stretch h-fit flex-col justify-start items-start flex">
                        <td class="w-full h-full flex flex-row gap-4 px-4 py-4 justify-start items-center">
                            <div class="justify-start items-center flex">
                                <i class="text-32 ph ph-square"></i>
                            </div>
                            <div class="h-32 w-44 overflow-clip  object-fill bg-soft-base rounded-lg justify-center items-end flex relative">
                                <img class="aspect-auto object-bottom" src="{{ url('img/Kabinet/KOBRA/KETUA-WAKIL.png') }}" />
                            </div>
                            <div class="self-stretch justify-start items-center gap-4 flex">
                                <div class=" self-stretch flex-col justify-center items-start inline-flex">
                                    <div class="self-stretch text-netral-900 text-3xl font-semibold font-THICCCBOI leading-10">Ketua & Wakil</div>
                                </div>
                            </div>
                            <div class="h-fit grow shrink basis-0  justify-end items-center gap-4 flex">
                                <div class="py-1 rounded-full justify-center items-center gap-2 flex">
                                    <div class="text-center text-primary-base text-lg font-medium font-THICCCBOI leading-7">Ubah</div>
                                    <i class="text-2xl text-primary-base ph ph-pencil-simple"></i>
                                </div>
                                <div class="py-1 rounded-full justify-center items-center gap-2 flex">
                                    <div class="text-center text-primary-base text-lg font-medium font-THICCCBOI leading-7">Hapus</div>
                                    <i class="text-2xl text-primary-base ph ph-trash-simple"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        

        {{-- Anggota --}}
        <div class="self-stretch h-fit justify-start items-center gap-6 inline-flex">
            <div class="grow shrink basis-0 text-netral-900 text-3xl font-semibold font-THICCCBOI leading-10">Anggota Kepengurusan</div>
            <div class="px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-4 flex">
                <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Tambah Anggota</div>
                <i class="text-2xl text-netral-800 ph ph-plus"></i>
            </div>
        </div>
        {{-- Table Anggota --}}
        <div class=" w-full h-fit p-4 bg-netral-100 rounded-2xl  flex-col justify-start items-center flex">
            <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                <thead class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                    <tr class="w-full justify-center items-center inline-flex flex-row">
                        <th class="w-full h-fit grow shrink basis-5/12 justify-start gap-4 items-center inline-flex">
                            <i class="text-32 ph ph-square"></i>
                            <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Identitas </div>
                            
                        </th>
                        <th class="w-full grow shrink basis-7/12 flex">
                            <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Prodi</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                    <tr class="w-full h-fit flex-row justify-start items-center flex ">
                        <td class="w-full h-full grow shrink basis-5/12 flex flex-row gap-4 justify-start items-center">
                            <div class="justify-start items-center flex">
                                <i class="text-32 ph ph-square"></i>
                            </div>
                            <div class="h-20 w-20 overflow-clip  object-fill bg-soft-base rounded-lg justify-center items-end flex relative">
                                <img class="aspect-auto object-bottom" src="{{ url('img/Kabinet/KOBRA/KETUA-WAKIL.png') }}" />
                            </div>
                            <div class="grow shrink basis-0 self-stretch flex-col justify-center items-start inline-flex">
                                <div class="self-stretch text-netral-900 text-lg font-semibold font-THICCCBOI leading-7">Putra Irawan</div>
                                <div class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">Ketua</div>
                            </div>
                        </td>
                        <td class="w-full h-full flex grow shrink basis-7/12 flex-row gap-4 justify-start items-center">
                            <div class="h-full  justify-start items-center gap-4 flex">
                                <div class=" self-stretch flex-col justify-center items-start inline-flex">
                                    <div class="grow shrink basis-0 text-netral-900 text-lg font-normal font-THICCCBOI leading-7">Desain Grafis</div>
                                </div>
                            </div>
                            <div class="h-fit grow shrink basis-0  justify-end items-center gap-4 flex">
                                <div class="py-1 rounded-full justify-center items-center gap-2 flex">
                                    <div class="text-center text-primary-base text-lg font-medium font-THICCCBOI leading-7">Ubah</div>
                                    <i class="text-2xl text-primary-base ph ph-pencil-simple"></i>
                                </div>
                                <div class="py-1 rounded-full justify-center items-center gap-2 flex">
                                    <div class="text-center text-primary-base text-lg font-medium font-THICCCBOI leading-7">Hapus</div>
                                    <i class="text-2xl text-primary-base ph ph-trash-simple"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <script>
        function nextStep() {
            var currentStep = document.querySelector('.step:not(.hidden)');
            currentStep.classList.add('hidden');
            var nextStep = currentStep.nextElementSibling;
            nextStep.classList.remove('hidden');
            nextStep.classList.add('inline-flex');
        }

        function previousStep() {
            var currentStep = document.querySelector('.step:not(.hidden)');
            currentStep.classList.add('hidden');
            var previousStep = currentStep.previousElementSibling;
            previousStep.classList.remove('hidden');
            previousStep.classList.add('inline-flex');
        }
    </script>

@include('partials.footer')
@endsection