@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-white flex-col justify-center items-center gap-8 inline-flex">
    <div class="self-stretch text-netral-900 text-5xl font-extrabold font-THICCCBOI leading-10">Notifikasi</div>
    <div class="w-full h-fit p-6 bg-white rounded-3xl shadow justify-start items-start gap-4 inline-flex">
        <div class="w-72 h-48 bg-stone-300 rounded-2xl"></div>
        <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch grow shrink basis-0 flex-col justify-start items-start gap-2 flex">
                <div class="text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Peringatan Event atau Acara</div>
                <div class="self-stretch text-zinc-800 text-lg font-medium font-THICCCBOI leading-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla hendrerit maecenas pharetra vestibulum, eu elit nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla hendrerit maecenas pharetra vestibulum, eu elit nibh. </div>
            </div>
            <div class="self-stretch px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat Selengkapnya</div>
            </div>
        </div>
    </div>
    <div class="w-full h-fit p-6 bg-white rounded-3xl shadow justify-start items-start gap-4 inline-flex">
        <div class="w-72 h-48 bg-stone-300 rounded-2xl"></div>
        <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch grow shrink basis-0 flex-col justify-start items-start gap-2 flex">
                <div class="text-netral-900 text-2xl font-semibold font-THICCCBOI leading-9">Peringatan Event atau Acara</div>
                <div class="self-stretch text-zinc-800 text-lg font-medium font-THICCCBOI leading-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla hendrerit maecenas pharetra vestibulum, eu elit nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat metus sed lacus, ornare feugiat mattis. Sed pulvinar id bibendum id vel consequat dui elementum auctor. Fringilla hendrerit maecenas pharetra vestibulum, eu elit nibh. </div>
            </div>
            <div class="self-stretch px-6 py-1 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                <div class="text-center text-neutral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat Selengkapnya</div>
            </div>
        </div>
    </div>
</div>
    @include('partials.footer')
@endsection
