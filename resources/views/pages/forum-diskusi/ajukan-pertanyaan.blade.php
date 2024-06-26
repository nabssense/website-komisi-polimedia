@extends('layouts.main')
@section('container')
    {{-- STEP 1 --}}<div
        class="w-screen h-screen step p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">
        
        {{-- Main Content --}}
        <div
             class="w-full max-w-960  h-full self-stretch px-8 flex-col justify-start items-start gap-8 inline-flex">
            {{-- 1 --}}
            <div class="self-stretch h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" type="button" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">Ajukan Pertanyaan</div>
            </div>
            {{-- 2 --}}
            <form method="POST" action="{{  route('forum-diskusi.store') }}"
                class="w-full h-full overflow-scroll overflow-x-hidden scrollbar-hidden-vertikal touch-pan-y justify-start items-start gap-8 flex flex-col flex-1">
                @csrf
                <div class="w-full h-full self-stretch flex-col justify-start items-start gap-4 inline-flex">
                    <div class="self-stretch h-fit flex-col justify-start items-start flex">
                        <div class="label-input-text">
                                Judul
                        </div>
                        <input type="text" id="title" name="title" placeholder="Masukkan judul pertanyaan"
                            value="{{ old('title') }}" 
                            class="input-text
                                    @error('title') border-red-500 @enderror @error('credentials') border-red-500 @enderror">
                        @error('title')
                            <div id="title-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full h-fit flex-col justify-start items-start flex">
                        <div class="label-input-text">
                            Pertanyaan
                        </div>
                            <textarea name="question" placeholder="Cth: Muhammad Nabil Musyaffa" id="question" class=" w-full">{{ $discussion->question ?? old('question') }}</textarea>
                        @error('question')
                            <div id="question-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
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
                                    @if (($discussion->category->slug ?? old('category_slug')) === $category->slug) 
                                    {{ 'selected' }} @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_slug')
                            <div id="category_slug-error" class="text-red-500 font-normal Heading4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full h-fit flex flex-row overflow-x-scroll parent cursor-pointer scrollbar-hidden gap-4">
                        <div class="w-fit h-fit flex-col justify-start items-start gap-1 flex">
                            <div class="label-input-text">
                                Gambar Utama
                            </div>
                            <div class="self-stretch justify-start items-start gap-1 inline-flex">
                                <div class="w-fit self-stretch justify-start items-center flex">
                                    <div
                                        class="w-40 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                        <input name="" class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                        <label for="fileinput"
                                            class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                            Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-fit h-fit  flex-col justify-start items-start gap-1 flex">
                            <div class="label-input-text">
                                Gambar Utama
                            </div>
                            <div class="self-stretch justify-start items-start gap-1 inline-flex">
                                <div class="w-fit self-stretch justify-start items-center flex">
                                    <div
                                        class="w-40 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                                        <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                        <label for="fileinput"
                                            class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                            Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-fit  min-w-360 h-fit  flex-col justify-start items-start gap-1 flex">
                            <div class="label-input-text">
                                Gambar Utama
                            </div>
                            <div class="w-full justify-start items-start gap-1 flex relative">
                                <div class="w-fit  justify-start items-center flex">
                                    <div
                                        class="w-40 h-40  bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex ">
                                        <input class="w-full h-full bg-red-300 z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <img class="w-full h-full bg-red-300 z-0 opacity-0 absolute cursor-pointer rounded-2xl"
                                            type="file" name="" id="">
                                        <a href="/kelola-website" class="ph ph-plus text-7xl"></a>
                                        <label for="fileinput"
                                            class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-7">Pilih
                                            Gambar</label>
                                    </div>
                                </div>
                                <div class="w-full  h-full p-4 justify-start items-center flex flex-wrap">
                                    <div
                                        class="w-full flex  text-wrap text-stone-700 text-base font-normal font-THICCCBOI leading-normal">
                                        Masukkan logo dengan ukuran horizontal dan dengan format svg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    {{-- 3 --}}
                <div class="h-fit w-full justify-start items-start gap-4 flex">
                    <button onclick="" class="btn-primary w-full">Simpan
                    </button>
                </div>
            </form>


            
        </div>
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
        })
    </script>
@endsection
