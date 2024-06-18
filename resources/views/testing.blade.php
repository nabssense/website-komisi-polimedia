<div class="w-screen h-screen step bg-netral-100 shadow justify-start items-start inline-flex flex-col"
        id="step1">
        @include('partials.navbar-login')
        {{-- Main Content --}}
        <div class="w-full h-full  self-stretch px-560 flex-col justify-center items-center gap-8 inline-flex">
            <div class="w-full max-w-1480 py-12 grow shrink basis-0 flex-col justify-center items-center gap-4 flex">
                <div 
                    class="w-full h-fit p-8 bg-white rounded-3xl shadow-card flex-col justify-start items-start gap-5 flex">
                    <div class="w-full h-fit justify-start items-center flex flex-row gap-4">
                        <a href="/masuk-akun"><i class="text-32 text-neutral-900 ph-bold ph-arrow-left"></i></a>
                        <div class="self-stretch  text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">
                        Daftar Akun</div>
                    </div>
                    <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start gap-2 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Nama Lengkap
                                </div>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Masukkan nama lengkapmu" id=""
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="justify-start items-start gap-2 inline-flex">
                                <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Email
                                </div>
                            </div>
                            <input type="text" name="nama-kabinet" placeholder="Masukkan email kamu" id=""
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                        </div>
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Kata sandi
                                </div>
                            </div>
                            <div class="w-full justify-center items-center flex flex-row relative">
                                <input type="password" name="nama-kabinet" placeholder="Masukkan kata sandi kamu" id=""
                                class="w-full py-3 bg-white focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                <div href="/berita" class="h-full justify-center items-center"><i class="pt-4 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i></div>
                            </div>
                        </div>
                        <div class="justify-start items-start inline-flex">
                            <div class="text-stone-700 text-base font-normal font-THICCCBOI leading-normal">Konfirmasi kata sandi
                                </div>
                            </div>
                            <div class="w-full justify-center items-center bg-emerald-300 flex flex-row relative">
                                <input type="password" name="nama-kabinet" placeholder="Ketik ulang kata sandi kamu" id=""
                                class="w-full py-3 bg-white  focus:border-b-2 focus:outline-none focus:border-primary-base focus:font-semibold font-semibold focus:text-netral-800 text-netral-800 border-b border-neutral-900 justify-start items-center gap-2 inline-flex placeholder:text-netral-300 text-lg placeholder:font-normal font-THICCCBOI leading-7">
                                <div href="/berita" class="h-full justify-center items-center"><i class="pt-4 text-2xl text-neutral-900 ph ph-eye absolute top-0 right-0 items-center"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    {{-- Stepper --}}
                    <div class="w-full h-full bg-green-400 bottom-0 flex-col justify-center items-center gap-2 inline-flex">
                        <a href="/akun"
                            class="w-full h-full bg-primary-base rounded-tl-4xl rounded-tr-4xl flex-col justify-center items-center flex">
                            <div class="text-center text-white text-5xl font-extrabold font-THICCCBOI leading-10">Daftar</div>
                        </a>
                    </div>