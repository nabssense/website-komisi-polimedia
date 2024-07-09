@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div
        class="w-full h-fit px-4 md:px-8 xl:px-16 px-4 md:px-8 xl:px-16 py-20 md:py-32 bg-white flex-col justify-center items-center gap-8 inline-flex">
        <div class="w-full max-w-1480 h-fit flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full  text-netral-900 Heading1 font-extrabold flex">Notifikasi</div>
            @foreach ($notifications as $notification)
                <a href="{{ route('berita.show', $notification->news->slug) }}"
                    class="w-full h-fit p-4 lg:p-8 bg-white rounded-2xl shadow-card justify-start items-center gap-4 lg:gap-8 inline-flex">
                    <div class="w-32 h-32 aspect-square">
                        <img src="{{ asset('storage/' . $firstImages[$notification->news->id]) }}"
                            class="aspect-square rounded-lg object-cover" alt="">
                    </div>
                    <div class="w-full self-stretch flex-col justify-start items-start gap-4 flex">
                        <div class="w-full self-stretch flex-col justify-start items-start gap-1 flex">
                            <div class="w-full h-fit text-netral-900 Heading3 line-clamp-1 font-semibold">
                                {{ $notification->title }}</div>
                            <div class="w-full h-fit text-zinc-800 Heading4 line-clamp-2 font-medium">
                                {{ $notification->message }}</div>
                        </div>
                        <button class="btn-secondary hidden md:flex">Lihat Selengkapnya</button>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    @include('partials.footer')
@endsection
