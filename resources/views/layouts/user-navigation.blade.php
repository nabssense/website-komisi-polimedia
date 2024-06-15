@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="w-full h-fit flex-col justify-center items-center flex gap-8">
        <div class="w-full h-fit max-w-1480 sm:px-8 py-8 bg-netral-100 flex-col justify-center items-center flex gap-8">
            <div class="self-stretch text-zinc-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">Akun</div>
            <div
                class="w-full h-fit relative bg-netral-100 rounded-2xl grid grid-cols-12 shadow-card justify-start items-start overflow-clip">
                <div class=" h-full p-8 border-r-2 border-netral-300 bg-white col-span-3 justify-start items-start flex flex-col gap-8 ">
                    <button onclick="pageUserProfile()"
                        class="{{ $active === 'Profil' ? 'bg-netral-200' : '' }} w-full h-fit rounded-lg py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 inline-flex ">
                                <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}" 
                                alt="{{ auth()->user()->fullname }}" class="rounded-full w-32">
                        <div class="w-full h-full flex-col justify-start items-start inline-flex gap-1">
                            <div
                                class="text-left self-stretch text-neutral-900 text-lg font-bold font-['THICCCBOI'] leading-H4">{{ auth()->user()->fullname }}</div>
                            <div
                                class="text-left self-stretch text-stone-500 text-base font-normal font-['THICCCBOI'] leading-B1">{{ auth()->user()->user_type }}</div>
                        </div>
                    </button>
                    <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-4">
                        <button onclick="pageKelolaWebsite()"
                            class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
                            <i class="text-4xl ph ph-kanban"></i>
                            <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Kelola Website</div>
                        </button>
                        <form action="{{ route('auth.masuk.logout') }}" method="POST" class="w-full">
                            @csrf
                        <button type="submit"
                            class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                            <i class="text-4xl ph ph-sign-out"></i>
                            <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Keluar</div>
                        </button>
                        </form>
                    </div>
                </div>
                @yield('user-content')
            </div>
        </div>
    </div>

@include('partials.footer')
@endsection