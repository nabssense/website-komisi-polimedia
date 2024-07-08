@extends('layouts.main')
@section('container')
    <div class="w-full h-screen  p-4 md:p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" >

        {{-- Main Content --}}
        <form action="{{ route('kelola.berita.store') }}" method="POST" enctype="multipart/form-data"
            class="w-full max-w-960 h-full flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            @csrf
            <div class="h-fit justify-start items-center gap-4 inline-flex">
                <button type="button" onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Tambah Berita</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full justify-start items-start gap-8 flex flex-col flex-1  overflow-x-scroll cursor-pointer scrollbar-hidden ">
                <div class="w-full h-fit flex flex-row items-end gap-4">
                    <div class="w-fit h-fit flex-col justify-start items-start gap-1 flex">
                        <div class="input-text-label">
                            Gambar
                        </div>
                        <div
                            class="w-40 h-40 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                            <input name="image[]" class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                type="file" id="image-input-multiple" accept="image/*" multiple>
                            <i href="#" class="ph ph-plus text-7xl"></i>
                            <label for="image-input-multiple" class="text-neutral-900 Body1 font-medium">Pilih
                                Gambar</label>
                        </div>
                        @error('image')
                            <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                        @enderror
                        
                    </div>

                    {{-- Image Tampil taruh disini --}}
                    <div id="image-preview-container"
                        class="w-fit parent flex flex-row gap-4 scrollbar-hidden-vertikal touch-pan-y" class="flex gap-4">
                        {{-- Preview gambar akan ditambahkan secara dinamis di sini --}}
                    </div>
                    
                </div>
                <div class="w-full flex text-stone-700 font-normal Body1">Masukkan gambar dengan ratio 1:1 atau 4:5 agar sesuai. MAKS 3MB
                </div>
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="input-text-label">Judul Berita
                    </div>
                    <input type="text" name="title" placeholder="Cth: KOBRA" id="" class="input-text">
                    @error('title')
                        <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="input-text-label">
                        Isi Berita
                    </div>
                    <div class="input-textarea" focus>
                        <textarea id="myTextarea" class="input-textarea-input" name="content" placeholder="Isi Pertanyaan Anda"
                            oninput="autoResize(this)">{{ $news->content ?? old('content') }}</textarea>
                    </div>
                    @error('content')
                        <div class="text-primary-base text-lg font-normal font-THICCCBOI leading-7">
                            {{ $message }}</div>
                    @enderror
                    
                </div>

                <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                    <div class="input-text-label">
                        Kategori
                    </div>
                    <!-- Input Field -->
                    <select name="category_slug" id="" class="input-text">
                        <option class="text-netral-200 " value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}"
                                @if (($news->category->slug ?? old('category_slug')) === $category->slug) {{ 'selected' }} @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_slug')
                        <div id="category_slug-error" class="text-danger-base font-normal Heading4">{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="w-full h-full justify-start items-start gap-4 inline-flex flex-col">
                    <div id="toggle-btn1"
                        onclick="toggleSwitch('toggle-btn1', 'toggle-status1', 'toggle-value1', 'toggle-icon-inner1', 'gambar-headline1');"
                        class="w-full h-fit flex-col justify-start items-center inline-flex relative">
                        <div class="w-full justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Headline
                                News</div>
                        </div>
                        <div class="relative flex flex-row items-center w-full cursor-pointer">
                            <div id="toggle-status1"
                                class="w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                Tidak Aktif</div>
                            <input type="hidden" name="headline_status" id="toggle-value1" value="Tidak Aktif">
                        </div>
                        <div id="toggle-icon" class="absolute right-0 items-center justify-center flex h-full">
                            <i id="toggle-icon-inner1" class="text-32 ph ph-toggle-left cursor-pointer"></i>
                        </div>
                    </div>

                    <div id="gambar-headline1"
                        class="w-full bg-netral-200 rounded-lg p-4 flex-col justify-start items-start gap-1 hidden">
                        <div class="input-text-label">Gambar
                            Headline
                        </div>
                        <div class="self-stretch justify-start items-start gap-1 flex flex-wrap">
                            <div
                                class="h-40 aspect-21/9 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="headline_image"
                                    class="w-full  h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl" type="file"
                                    id="image-input-1" accept="image/*">
                                <img id="image-preview-1" src="{{ isset($news) ? asset('storage/' . $news->image) : '' }}"
                                    class="w-full h-full  object-cover absolute top-0 bg-white rounded-2xl {{ isset($news->image) ? '' : 'hidden' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input-1" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                            </div>
                            @error('headline_image')
                                <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                            @enderror
                            <div class="w-full flex text-stone-700 font-normal Body1">Masukkan gambar dengan ukuran 21:9 agar sesuai. MAKS 4MB
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-netral-200 rounded Body1 font-medium flex flex-row px-4 py-2 items-center gap-4">
                    <i class="ph-fill ph-info cursor-pointer"></i>
                    <p class="w-full">
                        Headline News adalah berita yang akan ditampilkan dihalaman awal dipaling atas.
                    </p>
                </div>
                <script></script>

            </div>


            {{-- 3 --}}
            <div class="h-fit w-full justify-start items-start gap-4 flex flex-none">
                <button type="submit" class="w-full btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <script>
       document.querySelector('#image-input-multiple').addEventListener('change', function() {
            const previewContainer = document.querySelector('#image-preview-container');
            previewContainer.innerHTML = ''; // Bersihkan preview sebelum menambahkan gambar baru

            const files = Array.from(this.files);

            files.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgPreview = document.createElement('img');
                    imgPreview.src = e.target.result;
                    imgPreview.classList.add('w-40', 'h-40', 'aspect-auto', 'rounded-2xl', 'object-cover');
                    previewContainer.appendChild(imgPreview);
                };
                reader.readAsDataURL(file);
            });
        });

        document.querySelector('#image-input-multiple').addEventListener('click', function() {
            this.value = null; // Reset input value to allow the same file to be selected again
            const previewContainer = document.querySelector('#image-preview-container');
            previewContainer.innerHTML = ''; // Bersihkan preview ketika input file diklik
        });
    </script>

    <script>
        // Ambil elemen toggle dan tambahkan event listener pada saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.querySelector('#toggle-btn1');
            const toggleText = document.querySelector('#toggle-status1');
            const toggleValue = document.querySelector('#toggle-value1');
            const toggleIcon = document.querySelector('#toggle-icon-inner1');
            const toggleContent = document.querySelector('#gambar-headline1');

            toggleButton.addEventListener('click', function() {
                if (toggleText.textContent.trim() === 'Tidak Aktif') {
                    toggleValue.value = 'Aktif';
                    toggleText.textContent = 'Aktif';
                    toggleIcon.classList.remove('ph-toggle-left');
                    toggleIcon.classList.remove('ph');
                    toggleIcon.classList.add('ph-toggle-right');
                    toggleIcon.classList.add('ph-fill');
                    toggleContent.classList.remove('hidden');
                } else {
                    toggleValue.value = 'Tidak Aktif';
                    toggleText.textContent = 'Tidak Aktif';
                    toggleIcon.classList.remove('ph-fill');
                    toggleIcon.classList.remove('ph-toggle-right');
                    toggleIcon.classList.add('ph');
                    toggleIcon.classList.add('ph-toggle-left');
                    toggleContent.classList.add('hidden');
                }
            });

            // Reset input gambar ketika klik pilih gambar di dalam toggleContent
            toggleContent.querySelector('input[type="file"]').addEventListener('click', function() {
                this.value = null;
            });
        });
    </script>


    <script src="{{ asset('js/inputImagePreview.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
    <script src="{{ asset('js/inputTextArea.js') }}"></script>
@endsection
