<div class="w-full h-fit flex-col justify-center items-center flex gap-8">
    <div class="w-full h-fit max-w-1480 sm:px-8 py-8 bg-netral-100 flex-col justify-center items-center flex gap-8">
        <div class="self-stretch text-zinc-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">Akun</div>
        <div
            class="w-full h-fit relative bg-netral-100 rounded-2xl grid grid-cols-12 shadow-card justify-start items-start overflow-clip">
            <div class=" h-full p-8 border-r-2 border-netral-300 bg-white col-span-3 justify-start items-start flex flex-col gap-8 ">
                <button onclick="window.location.href='/akun'"
                    class="{{ $active === 'Profil' ? 'bg-netral-200' : '' }} w-full h-fit rounded-lg py-4 px-4 border-b border-netral-300 justify-start items-center gap-4 inline-flex ">
                    @auth
                        <a class="" href="/akun">
                            @guest
                            <i class="{{ $active === 'Profil' || $active === 'Kelola Website' ? 'ph-fill ph-user text-3xl text-primary-base ' : '' }} ph ph-user text-5xl"></i>
                            @endguest
                            <img src="{{ filter_var(auth()->user()->profile_picture, FILTER_VALIDATE_URL) ? auth()->user()->profile_picture : Storage::url(auth()->user()->profile_picture) }}" 
                            alt="{{ auth()->user()->fullname }}" class="rounded-full w-12">
                        </a>
                    @endauth
                    <div class="w-full h-full flex-col justify-start items-start inline-flex">
                        <div
                            class="text-left self-stretch text-neutral-900 text-lg font-extrabold font-['THICCCBOI'] leading-H4">
                            {{ auth()->user()->fullname }}</div>
                        <div
                            class="text-left self-stretch text-stone-500 text-base font-normal font-['THICCCBOI'] leading-B1">
                            Mahasiswa</div>
                    </div>
                </button>
                <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-4">
                    {{-- <a href="/akun" class="{{ $active === 'Profil' ? "bg-netral-200" : '' }} self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-4xl ph ph-user-circle"></i>
                    <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Profil</div>
                </a> --}}
                    <button onclick="window.location.href='/kelola-website'"
                        class="{{ $active === 'Kelola Website' ? 'bg-netral-200' : '' }} text-left self-stretch px-4 py-3 rounded-lg justify-start items-center gap-3 inline-flex">
                        <i class="text-4xl ph ph-kanban"></i>
                        <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Kelola Website</div>
                    </button>
                    @auth
                        <form action="{{ route('auth.masuk.logout') }}" method="POST" class="w-full">
                            @csrf
                        <button type="submit" onclick="window.location.href='/masuk-akun'"
                            class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                            <i class="text-4xl ph ph-sign-out"></i>
                            <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Keluar</div>
                        </button>
                        </form>
                    @endauth
                    
                </div>
            </div>
            @yield('content-akun')
        </div>
    </div>
</div>
