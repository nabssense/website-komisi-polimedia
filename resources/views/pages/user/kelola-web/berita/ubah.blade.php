@extends('layouts.main')
@section('container')
    <div class="w-screen h-screen step p-4 md:p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">
        {{-- Main Content --}}
        <form action="{{ route('kelola.berita.update', $news->id) }}" method="POST" enctype="multipart/form-data"
            class="w-full max-w-960 h-full flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            @csrf
            @method('PUT')
            <div class="h-fit justify-start items-center gap-4 inline-flex">
                <button type="button" onclick="goBack()" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Ubah Berita</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full justify-start items-start gap-8 flex flex-col flex-1 overflow-x-scroll parent cursor-pointer scrollbar-hidden">
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
                    {{-- Image Tampil --}}
                    <div id="image-preview-container"
                        class="w-fit parent flex flex-row gap-4 scrollbar-hidden-vertikal touch-pan-y">
                        @if ($news->images && count($news->images) > 0)
                            @foreach ($news->images as $image)
                                <img src="{{ asset('storage/' . $image) }}" class="w-fit h-40 aspect-auto rounded-2xl">
                            @endforeach
                        @else
                            <p>Tidak ada gambar tersedia untuk berita ini.</p>
                        @endif
                    </div>

                </div>

                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="input-text-label">Judul Berita</div>
                    <input type="text" name="title" placeholder="Cth: KOBRA" value="{{ $news->title }}"
                        class="input-text">
                    @error('title')
                        <div class="text-danger-base font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="input-text-label">Isi Berita</div>
                    <div class="input-textarea" focus>
                        <textarea id="myTextarea" class="input-textarea-input" name="content" placeholder="Isi Berita Anda"
                            oninput="autoResize(this)">{{ $news->content }}</textarea>
                    </div>
                    @error('content')
                        <div class="text-primary-base text-lg font-normal font-THICCCBOI leading-7">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                    <div class="input-text-label">Kategori</div>
                    <select name="category_slug" id="" class="input-text">
                        <option class="text-netral-200 " value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}" @if ($news->category->slug === $category->slug) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_slug')
                        <div id="category_slug-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full h-full justify-start items-start gap-4 inline-flex flex-col">
                    <div id="toggle-btn1"
                        onclick="toggleSwitch('toggle-btn1', 'toggle-status1', 'toggle-value1', 'toggle-icon-inner1', 'gambar-headline1');"
                        class="w-full h-fit flex-col justify-start items-center inline-flex relative">
                        <div class="w-full justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Headline News
                            </div>
                        </div>
                        <div class="relative flex flex-row items-center w-full cursor-pointer">
                            <div id="toggle-status1"
                                class="w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                {{ $news->headline_status }}
                            </div>
                            <input type="hidden" name="headline_status" id="toggle-value1"
                                value="{{ $news->headline_status }}">
                        </div>
                        <div id="toggle-icon" class="absolute right-0 items-center justify-center flex h-full">
                            <i id="toggle-icon-inner1"
                                class="text-32 ph {{ $news->headline_status === 'Aktif' ? 'ph-fill ph-toggle-right' : 'ph-toggle-left' }}"></i>
                        </div>
                    </div>

                    <div id="gambar-headline1"
                        class="w-full bg-netral-200 rounded-lg p-4 flex-col justify-start items-start gap-1 {{ $news->headline_status === 'Aktif' ? '' : 'hidden' }}">
                        <div class="input-text-label">Gambar Headline</div>
                        <div class="self-stretch justify-start items-start gap-1 flex flex-wrap">
                            <div
                                class="h-40 aspect-21/9 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="headline_image"
                                    class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl" type="file"
                                    id="image-input-1" accept="image/*">
                                <img id="image-preview-1"
                                    src="{{ $news->headline_image ? asset('storage/' . $news->headline_image) : '' }}"
                                    class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ $news->headline_image ? '' : 'hidden' }}">
                                <i href="#" class="ph ph-plus text-7xl"></i>
                                <label for="image-input-1" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                            </div>
                            @error('headline_image')
                                <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                            @enderror
                            <div class="w-full flex text-stone-700 font-normal Body1">Masukkan gambar dengan ukuran 21:9
                                agar sesuai.</div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full justify-start items-start gap-4 inline-flex flex-col">
                    <div id="toggle-btn-notif"
                        onclick="toggleSwitch('toggle-btn-notif', 'toggle-status-notif', 'toggle-value-notif', 'toggle-icon-inner-notif');"
                        class="w-full h-fit flex-col justify-start items-center inline-flex relative">
                        <div class="w-full justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kirim
                                notifikasi ke semua</div>
                        </div>
                        <div class="relative flex flex-row items-center w-full cursor-pointer">
                            <div id="toggle-status-notif"
                                class="w-full bg-white focus:outline-none focus:font-semibold font-semibold text-netral-800 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                Tidak Aktif</div>
                            <input type="hidden" name="send_notification" id="toggle-value-notif" value="0">
                        </div>
                        <div id="toggle-icon" class="absolute right-0 items-center justify-center flex h-full">
                            <i id="toggle-icon-inner-notif" class="text-32 ph ph-toggle-left cursor-pointer"></i>
                        </div>
                    </div>
                </div>
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

            const files = this.files;
            if (files) {
                for (let i = 0; i < files.length; i++) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgPreview = document.createElement('img');
                        imgPreview.src = e.target.result;
                        imgPreview.classList.add('w-fit', 'h-40', 'aspect-auto', 'rounded-2xl');
                        previewContainer.appendChild(imgPreview);
                    }
                    reader.readAsDataURL(files[i]);
                }
            }
        });

        document.querySelector('#image-input-multiple').addEventListener('click', function() {
            this.value = null; // Reset input value to allow the same file to be selected again
            const previewContainer = document.querySelector('#image-preview-container');
            previewContainer.innerHTML = ''; // Bersihkan preview saat input diklik kembali
        });

    </script>
    <script>
        function toggleSwitch(btnId, statusId, valueId, iconInnerId, headlineId) {
            const btn = document.getElementById(btnId);
            const status = document.getElementById(statusId);
            const value = document.getElementById(valueId);
            const icon = document.getElementById(iconInnerId);
            const headline = document.getElementById(headlineId);
            if (status.textContent.trim() === 'Tidak Aktif') {
                status.textContent = 'Aktif';
                value.value = 'Aktif';
                icon.classList.remove('ph-toggle-left');
                icon.classList.add('ph-toggle-right', 'ph-fill');
                headline.classList.remove('hidden');
            } else {
                status.textContent = 'Tidak Aktif';
                value.value = 'Tidak Aktif';
                icon.classList.remove('ph-toggle-right', 'ph-fill');
                icon.classList.add('ph-toggle-left');
                headline.classList.add('hidden');
            }
        }
    </script>
    <script src="{{ asset('js/inputImagePreview.js') }}"></script>
    {{-- <script src="{{ asset('js/touchdragscroll.js') }}"></script> --}}
    <script src="{{ asset('js/inputTextArea.js') }}"></script>
@endsection
