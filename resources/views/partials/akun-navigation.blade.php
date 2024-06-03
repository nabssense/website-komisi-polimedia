<div class="w-full h-fit px-56 py-8 bg-netral-100 flex-col justify-center items-center gap-8 inline-flex">
    <div class="self-stretch text-zinc-900 text-5xl font-extrabold font-['THICCCBOI'] leading-10">Akun</div>
    <div class="w-full h-fit relative bg-netral-100 rounded-2xl grid grid-cols-12 shadow-card justify-start items-start overflow-clip">
        <div class="h-full p-8 border-r-2 border-netral-300 bg-white col-span-3 justify-start items-start flex flex-col gap-8 ">
            <div class="w-full h-fit pb-4 border-b border-netral-300 justify-start items-center gap-2 inline-flex ">
                <i class="text-5xl ph ph-user-circle"></i>
                <div class="w-full h-full flex-col justify-center items-start gap-1 inline-flex">
                    <div class="self-stretch text-neutral-900 text-lg font-extrabold font-['THICCCBOI'] leading-7">Muhammad Nabil</div>
                    <div class="self-stretch text-stone-500 text-base font-normal font-['THICCCBOI'] leading-normal">Mahasiswa</div>
                </div>
            </div>
            <div class="w-full h-fit content-stretch self-stretch flex flex-col justify-start items-start gap-4">
                <a href="/akun" class="{{ $active === 'Profil' ? "bg-netral-200" : '' }} self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-4xl ph ph-user-circle"></i>
                    <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Profil</div>
                </a>
                <a href="/kelola-website" class="{{ $active === 'Kelola Website' ? "bg-netral-200" : '' }} self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-4xl ph ph-kanban"></i>
                    <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Kelola Website</div>
                </a>
                <a href="/masuk-akun" class="self-stretch px-4 py-3 bg-white rounded-lg justify-start items-center gap-3 inline-flex">
                    <i class="text-4xl ph ph-sign-out"></i>
                    <div class="text-zinc-900 text-lg font-medium font-['THICCCBOI'] leading-7">Keluar</div>
                </a>
            </div>
        </div>
        @yield('content-akun')
    </div>
</div>