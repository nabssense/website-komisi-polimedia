@extends('layouts.main')
@include('partials.navbar')
@section('container')
    @section('content-akun')
        <div class="w-full h-full col-span-9 p-8 flex-col justify-start items-start gap-8 flex">
            <div class="text-start text-neutral-900 text-2xl font-extrabold font-['THICCCBOI'] leading-9">Personal Info</div>
            <div class="self-stretch h-60 flex-col grid grid-cols-12 grid-rows-6 justify-start items-start gap-8">
                <div class="grid grid-cols-12 col-span-12 self-stretch justify-start items-start gap-4">
                    <div class="col-span-3 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Nama Lengkap</div>
                    </div>
                    <div class="col-span-7 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Muhammad Nabil Musyaffa</div>
                    </div>
                    <div class="col-span-2 py-1 rounded-full justify-center items-center gap-3 flex">
                        <div class="text-center text-rose-600 text-lg font-medium font-['THICCCBOI'] leading-7">Ubah</div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 self-stretch justify-start items-start gap-4">
                    <div class="col-span-3 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">NIM/NIP</div>
                    </div>
                    <div class="col-span-7 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">20240090</div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 self-stretch justify-start items-start gap-4">
                    <div class="col-span-3 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Email</div>
                    </div>
                    <div class="col-span-7 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">nabilmusyaffa7@gmail.com</div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 self-stretch justify-start items-start gap-4">
                    <div class="col-span-3 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Program Pendidikan</div>
                    </div>
                    <div class="col-span-7 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Teknologi Rekayasa Multimedia</div>
                    </div>
                </div>
                <div class="grid grid-cols-12 col-span-12 self-stretch justify-start items-start gap-4">
                    <div class="col-span-3 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-stone-600 text-lg font-normal font-['THICCCBOI'] leading-7">Kata Sandi</div>
                    </div>
                    <div class="col-span-7 h-9 py-1 bg-white justify-start items-center gap-4 flex">
                        <div class="text-neutral-900 text-lg font-medium font-['THICCCBOI'] leading-7">Tersedia</div>
                    </div>
                    <div class="col-span-2 py-1 rounded-full justify-center items-center gap-3 flex">
                        <div class="text-center text-rose-600 text-lg font-medium font-['THICCCBOI'] leading-7">Ubah</div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @include('partials.footer')
@endsection
