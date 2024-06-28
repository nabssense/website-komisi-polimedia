@extends('layouts.main')
@section('container')
    {{-- STEP 1 --}}<div
        class="w-screen h-screen step p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">

        {{-- Main Content --}}
        <form method="POST" action="{{ isset($discussion) ? route('forum-diskusi.update', $discussion->slug) 
                                    : route('forum-diskusi.store') }}" method="POST"
            class="w-full max-w-960 h-full px-8 flex-col justify-start items-start gap-4 flex">
            @csrf

            @isset($discussion)
            @method('PUT')
            @endisset
            {{-- 1 --}}
            <div class="w-full h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" type="button" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">{{ isset($discussion) ? 'Ubah Pertanyaan' : 'Ajukan Pertanyaan' }}</div>
            </div>
            {{-- 2 --}}
            <div class="w-full h-full overflow-scroll scrollbar-hidden-vertikal touch-pan-y  flex-col justify-start items-start gap-4 inline-flex">
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="label-input-text">
                        Judul
                    </div>
                    <input type="text" id="title" name="title" placeholder="Masukkan judul pertanyaan"
                        value="{{ $discussion->title ?? old('title') }}"
                        class="input-text
                                    @error('title') border-red-500 @enderror @error('credentials') border-red-500 @enderror">
                    @error('title')
                        <div id="title-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full h-fit flex-col justify-start items-start inline-flex">
                    <div class="label-input-text">
                        Kategori
                    </div>
                    <!-- Input Field -->
                    <select name="category_slug" id="" class="input-text">
                        <option class="text-netral-200 " value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}"
                                @if (($discussion->category->slug ?? old('category_slug')) === $category->slug) {{ 'selected' }} @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_slug')
                        <div id="category_slug-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full h-fit flex-col justify-start items-start gap-1 flex">
                    <div class="label-input-text">
                        Gambar
                    </div>
                    <div class="self-stretch justify-start items-start gap-1 inline-flex">
                        <div class="w-fit self-stretch justify-start items-center flex">
                            <div
                                class="w-40 h-40 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                <input name="image"
                                    class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                    type="file" id="image-input" accept="image/*" value="{{ old('image') }}">
                                <img id="image-preview" src="{{ isset($discussion) ? asset('storage/' . $discussion->image) : '' }}"
                                class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ isset($discussion) ? '' : 'hidden' }}">
                                <a href="#" class="ph ph-plus text-7xl"></a>
                                <label for="image-input" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                </div>
                @error('image') 
                    <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                @enderror
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="label-input-text">
                        Pertanyaan
                    </div>
                    <textarea name="question" placeholder="Cth: Muhammad Nabil Musyaffa" id="question" class="w-full">{{ $discussion->question ?? old('question') }}</textarea>
                    @error('question')
                        <div id="question-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- 3 --}}
            <div class="w-full h-fit justify-start items-start gap-4 flex flex-none">
                <button onclick="" class="btn-primary w-full">Simpan
                </button>
            </div>



        </form>

    </div>
    <script>
        $(document).ready(function() {
            $('#question').summernote({
                placeholder: 'Tulis Pertanyaan dengan jelas',
                tabSize: 2,
                height: 256,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['codeview', 'help']],
                ]
            });

            $('span.note-icon-caret').remove();

            //  // Preview image when file input changes
            //  $('#image-input').change(function() {
            //     const file = this.files[0];
            //     if (file) {
            //         const reader = new FileReader();
            //         reader.onload = function(e) {
            //             $('#image-preview').attr('src', e.target.result).removeClass('hidden');
            //         }
            //         reader.readAsDataURL(file);
            //     }
            // });
        })
    </script>

    {{-- <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.classList.add = 'hidden';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script> --}}
@endsection
