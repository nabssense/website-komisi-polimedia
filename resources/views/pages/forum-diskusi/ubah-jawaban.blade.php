@extends('layouts.main')
@section('container')
   <div
        class="w-screen h-screen step p-8 bg-netral-100 shadow justify-center items-center gap-4 inline-flex" id="step1">

        {{-- Main Content --}}
        <form method="POST"
            action="{{ route('jawab.update', $answer->id)}}"  enctype="multipart/form-data"
            method="POST" class="w-full max-w-960 h-full px-8 flex-col justify-start items-start gap-4 flex">
            @csrf

            @isset($answer)
                @method('PUT')
            @endisset
            {{-- 1 --}}
            <div class="w-full h-fit justify-start items-center gap-4 inline-flex">
                <button onclick="goBack()" type="button" class="ph ph-x text-32"></button>
                <div class="w-80 text-netral-900 text-2xl font-extrabold font-THICCCBOI leading-9">
                    {{ isset($answer) ? 'Ubah Pertanyaan' : 'Mulai Bertanya' }}</div>
            </div>
            {{-- 2 --}}
            <div
                class="w-full h-full overflow-scroll scrollbar-hidden-vertikal touch-pan-y  flex-col justify-start items-start gap-4 inline-flex">
                <div class="w-full h-fit flex-col justify-start items-start gap-1 flex">
                    <div class="input-text-label">
                        Gambar
                    </div>
                    <div class="w-40 h-40 bg-white px-6 py-4 rounded-2xl border border-stone-300 flex-col justify-center items-center gap-2 flex relative">
                        <input name="image" class="w-full h-full z-10 opacity-0 absolute cursor-pointer rounded-2xl"
                            type="file" id="image-input" accept="image/*">
                        <img id="image-preview"
                            src="{{ isset($answer) ? asset('storage/' . $answer->image) : '' }}"
                            class="w-full h-full object-cover absolute top-0 bg-white rounded-2xl {{ isset($answer->image) ? '' : 'hidden' }}">
                        <i href="#" class="ph ph-plus text-7xl"></i>
                        <label for="image-input" class="text-neutral-900 Body1 font-medium">Pilih Gambar</label>
                    </div>
                </div>
                @error('image')
                    <div id="image-error" class="text-danger-base font-normal Heading4">{{ $message }}</div>
                @enderror
                
                <div class="w-full h-fit flex-col justify-start items-start flex">
                    <div class="input-text-label">
                        Pertanyaan
                    </div>
                    <div class="commentbar-long" focus>
                        <textarea id="myTextarea" class="commentbar-long-input" name="answer" placeholder="Isi Pertanyaan Anda"
                            oninput="autoResize(this)">{{ $answer->answer ?? old('answer') }}</textarea>
                    </div>
                    @error('answer')
                        <div class="text-red-500 text-lg font-normal font-THICCCBOI leading-7">
                            {{ $message }}</div>
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
    <script src="{{ asset('js/inputImagePreview.js') }}"></script>
    <script src="{{ asset('js/inputTextArea.js') }}"></script>
@endsection
