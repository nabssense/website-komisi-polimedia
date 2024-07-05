@extends('layouts.main')

@section('container')
    <div class="w-screen h-screen step p-4 md:p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex"
        id="step1">
        {{-- Main Content --}}
        <form action="{{ route('kelola.pencairan.periode.store') }}" method="POST" enctype="multipart/form-data"
            class="w-full max-w-960 h-full self-stretch flex-col justify-start items-start gap-8 inline-flex">
            @csrf
            {{-- Back Button --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" type="button" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Tambah Periode</div>
            </div>


            {{-- Image Upload --}}
            <div
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y grow shrink basis-0 justify-start items-start gap-8 flex flex-row flex-1">
                <div class="w-full h-fit self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="w-full h-fit flex-col justify-start items-start gap-1 flex">
                        <div class="input-text-label">
                            Gambar
                        </div>
                        <div class="self-stretch justify-start items-start gap-1 flex flex-wrap">
                            <div class="h-40 aspect-21/9 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="image" class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl" type="file" id="image-input" accept="image/*">
                                <img id="image-preview" src="{{ old('image') ? asset('storage/' . old('image')) : '' }}" class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ old('image') ? '' : 'hidden' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                            </div>
        
                            <div class="w-full flex text-stone-700 font-normal Body1">Masukkan gambar dengan ukuran 21:9 agar sesuai. MAKS 4MB. Gambar akan tampil di halaman beranda.</div>
                        </div>
                        @error('image')
                            <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>


                    {{-- Full Name --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">
                            Nama Periode
                        </div>
                        <input type="text" name="name" placeholder="Cth: KOBRA" id="name" class="input-text">
                        @error('name')
                            <div class="text-red-500 font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- NIM/NIP --}}
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">
                            Waktu Mulai
                        </div>
                        <input type="datetime-local" name="start_date" placeholder="Cth: 9" id="start_date"
                            class="input-text">
                        @error('start_date')
                            <div class="text-red-500 font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Program Studi --}}
                    <div id="prodi" class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="input-text-label">
                            Waktu Selesai
                        </div>
                        <input type="datetime-local" name="end_date" placeholder="Cth: Teknologi Rekayasa Multimedia"
                            class="input-text">
                        @error('end_date')
                            <div class="text-red-500 font-normal Heading4">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="h-fit w-full justify-start items-start gap-4 flex">
                <button type="submit" class="btn-primary w-full">Simpan</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/inputImagePreview.js') }}"></script>
    <script>
        // Script untuk menyembunyikan/menampilkan bidang Prodi berdasarkan pilihan User Type
        document.getElementById('user_type').addEventListener('change', function() {
            var prodiField = document.getElementById('prodi');
            if (this.value === 'Pembina Komisi') {
                prodiField.style.display = 'none';
                prodiField.value = '0';
            } else {
                prodiField.style.display = 'block';
                prodiField.value = '';
            }
        });
    </script>
@endsection
