@if ($active === 'User Profile' || $active === 'Kelola Website')
    <div class="w-full h-fit flex-col justify-center items-center flex px-0 md:px-8 xl:px-16 py-12 md:py-28 lg:py-32 gap-8">
        <div
            class="w-full h-fit  max-w-1480 bg-netral-100 flex-col justify-center items-center relative rounded-2xl  grid-cols-12 shadow-card overflow-clip hidden lg:grid">
            {{-- Navigation --}}
            <div
                class=" h-full p-8 border-r-2 border-netral-300 bg-white col-span-3 justify-start items-start flex flex-col gap-8 ">
                <button onclick="pageUserProfile()"
                    class="{{ $active === 'User Profile' ? 'bg-netral-200 rounded-lg' : '' }} w-full h-fit  py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 inline-flex ">
                    <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}"
                        alt="{{ auth()->user()->fullname }}" class="rounded-full w-12">
                    <div class="w-full h-fit flex-col justify-start items-start inline-flex overflow-hidden">
                        <div
                            class="truncate text-left self-stretch text-neutral-900 text-lg font-bold font-THICCCBOI leading-H4">
                            {{ auth()->user()->fullname }}</div>
                        <div
                            class="text-left self-stretch text-stone-500 text-base font-normal font-THICCCBOI leading-B1">
                            {{ auth()->user()->user_type }}</div>
                    </div>
                </button>
                <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-4">
                    @if (auth()->user()->user_type === 'Mahasiswa' || auth()->user()->user_type === 'Admin')
                        <button onclick="pageKelolaWebsite()"
                            class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
                            <i class="text-4xl ph ph-kanban"></i>
                            <div class="text-netral-900 font-medium Heading4">Kelola Website
                            </div>
                        </button>
                    @endif
                    <form action="{{ route('auth.masuk.logout') }}" method="POST" class="w-full">
                        @csrf
                        <button type="submit"
                            class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                            <i class="text-4xl ph ph-sign-out"></i>
                            <div class="text-netral-900 font-medium Heading4">Keluar</div>
                        </button>
                    </form>
                </div>
            </div>
            {{-- Content --}}
            @yield('user-content')
        </div>
        @yield('user-content-mobile')
    </div>
   
@else
{{-- Mobile Akun --}}
<div
class="w-full h-full p-4 relative bg-netral-100 rounded-2xl lg:hidden flex flex-col justify-start items-start overflow-clip gap-4 pt-16">
<button onclick="pageUserProfile()"
    class="{{ $active === 'User Profile' ? 'bg-netral-200 rounded-lg' : '' }} w-full h-fit  py-4 px-4 border-b bg-netral-100 justify-start items-center gap-4 inline-flex ">
    <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}"
        alt="{{ auth()->user()->fullname }}" class="rounded-full w-12">
    <div class="w-full h-fit flex-col justify-start items-start inline-flex overflow-hidden">
        <div
            class="truncate text-left self-stretch text-neutral-900 text-lg font-bold font-THICCCBOI leading-H4">
            {{ auth()->user()->fullname }}</div>
        <div class="text-left self-stretch text-stone-500 text-base font-normal font-THICCCBOI leading-B1">
            {{ auth()->user()->user_type }}</div>
    </div>
</button>
<div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-2">
    @if (auth()->user()->user_type === 'Mahasiswa')
        <button onclick="pageKelolaWebsite()"
            class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} bg-netral-100 text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
            <i class="text-2xl ph ph-kanban"></i>
            <div class="text-netral-900 font-medium Heading4">Kelola Website
            </div>
        </button>
    @endif
    <form action="{{ route('auth.masuk.logout') }}" method="POST" class="w-full">
        @csrf
        <button type="submit"
            class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
            <i class="text-2xl ph ph-sign-out"></i>
            <div class="text-netral-900 font-medium Heading4">Keluar</div>
        </button>
    </form>
</div>
</div>
@endif