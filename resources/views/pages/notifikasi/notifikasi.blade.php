@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div class="w-full h-fit px-4 md:px-8 xl:px-16 py-20 md:py-32 bg-white flex-col justify-center items-center gap-8 inline-flex">
        <div class="w-full max-w-1480 h-fit flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full  text-netral-900 Heading1 font-extrabold flex">Notifikasi</div>
            <div class="w-full h-fit p-4 lg:p-8 bg-white rounded-2xl shadow-card justify-start items-center gap-4 lg:gap-8 inline-flex">
                <div class="w-fit h-full aspect-square">
                    <img src="{{ url('img/komisi_polimedia/Logo-Kabinet-Kobra.svg') }}" class="aspect-square rounded-lg object-cover" alt="">
                </div>
                <div class="w-full self-stretch flex-col justify-start items-start gap-6 flex">
                    <div class="w-full h-full flex-col justify-start items-start gap-2 flex">
                        <div class="w-full h-fit text-netral-900 Heading3 line-clamp-1 font-semibold">Peringatan Event atau
                            Acara</div>
                        <div class="w-full h-full lg:h-fit text-zinc-800 Heading4 line-clamp-2 font-medium">Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis.
                            Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla hendrerit maecenas
                            pharetra vestibulum, eu elit nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Volutpat metus sed lacus, ornare feugiat mattis. Sed pulvinar id bibendum id vel consequat dui
                            elementum auctor. Fringilla hendrerit maecenas pharetra vestibulum, eu elit nibh. </div>
                    </div>
                    <button class="btn-secondary hidden md:flex">Lihat
                            Selengkapnya
                    </button>
                </div>
            </div>
            <div class="w-full h-fit p-4 lg:p-8 bg-white rounded-2xl shadow-card justify-start items-center gap-4 lg:gap-8 inline-flex">
                <div class="w-fit h-full">
                    <img src="{{ url('img/komisi_polimedia/Logo-Kabinet-Kobra.svg') }}" class="aspect-square rounded-lg object-cover" alt="">
                </div>
                <div class="w-full self-stretch flex-col justify-start items-start gap-6 flex">
                    <div class="w-full h-full flex-col justify-start items-start gap-2 flex">
                        <div class="w-full h-fit text-netral-900 Heading3 line-clamp-1 font-semibold">Peringatan Event atau
                            Acara</div>
                        <div class="w-full h-full lg:h-fit text-zinc-800 Heading4 line-clamp-2 font-medium">Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis.
                            Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla hendrerit maecenas
                            pharetra vestibulum, eu elit nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Volutpat metus sed lacus, ornare feugiat mattis. Sed pulvinar id bibendum id vel consequat dui
                            elementum auctor. Fringilla hendrerit maecenas pharetra vestibulum, eu elit nibh. </div>
                    </div>
                    <button class="btn-secondary hidden md:flex">Lihat
                            Selengkapnya
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
