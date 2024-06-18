@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="w-full h-fit px-56 pt-8 pb-2 bg-white flex-col justify-start items-center gap-8 inline-flex ">
    <div class="self-stretch justify-center items-start gap-16 inline-flex">
        <div class="w-full h-fit grow shrink basis-0 p-8 bg-white rounded-2xl shadow-card flex-col justify-start items-start gap-4 inline-flex">
            <div class="self-stretch border-b-2 border-b-neutral-200 pb-6 justify-start items-center gap-4 inline-flex">
                <a href="/berita"><i class="text-3xl text-neutral-900 ph ph-arrow-left"></i></a>
                <div class="grow shrink basis-0 text-neutral-900 text-2xl font-normal font-THICCCBOI leading-H1-H2-H3">Kembali</div>
            </div>
            {{--  --}}
            <div class="self-stretch h-fit flex-col justify-start items-center gap-8 flex">
                {{-- Judul & Kategori Info  --}}
                <div class="self-stretch h-fit flex-col justify-start gap-8 items-start flex">
                    <div class="self-stretch text-start text-netral-900 font-bold text-5xl font-THICCCBOI leading-H1-H2-H3">Mahasiswa Polimedia Raih Prestasi Juara Street Photography</div>
                    <div class="self-stretch h-14 flex-col justify-start gap-2 items-start flex">
                        <a href="#" class="px-4 bg-indigo-200 rounded-full justify-start items-center flex">
                            <div class="text-neutral-900 text-lg font-medium font-THICCCBOI leading-B1">Pencairan KIPK</div>
                        </a>
                        <div class="self-stretch text-netral-400 text-lg font-normal font-THICCCBOI leading-H4">Senin, 29 Juli 2022</div>
                    </div>
                </div>
                {{-- image --}}
                <div class="w-full h-fit bg-primary-100 rounded-2xl">
                    <img src="{{ url('img/Logo-Polimedia.png') }}" alt="">
                </div>
                {{-- Content --}}
                <div class="self-stretch h-fit flex-col justify-start items-start gap-6 flex">
                    <div class="self-stretch h-fit flex-col justify-start items-start gap-4 flex">
                        <div class="self-stretch">
                            <span class="text-netral-900 text-lg font-normal font-THICCCBOI leading-H4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis porta commodo scelerisque ut mattis. Dui turpis risus sed eget. Pretium a vivamus tellus sed quam ornare quis viverra volutpat. Vitae, in augue ac tristique nisi, enim sit dolor. Et eu volutpat ridiculus cursus quis ac. Dictum nibh enim at quam massa venenatis. Erat et nulla posuere egestas varius lorem odio iaculis ut. In eget blandit ornare sit natoque ultricies sed at eget. Ut placerat massa sit pellentesque egestas sit. Mattis sem amet, vulputate integer massa.<br/>Dictum ac odio pharetra, nulla a porttitor. Cursus elit, sed vestibulum mattis. Quis in scelerisque nisi hendrerit nibh. Sit proin lacus, duis duis malesuada commodo pellentesque eleifend. Purus id cursus a at. Felis eu aliquet sed in tellus nulla nisi, leo. Aliquam pharetra egestas ullamcorper leo molestie. Maecenas at vitae vel, euismod in ac.</span></div>
                        <a class="w-full h-fit justify-start items-center gap-4 flex flex-row" href="/detail-kabinet">
                            <div class="text-center text-primary-base text-2xl font-medium font-THICCCBOI">Lihat Kabinet
                            </div>
                            <i class="text-3xl text-primary-base ph ph-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Side Nav --}}
        <div class="w-360 h-fit self-stretch bg-white rounded-3xl flex-col justify-start items-start gap-8 inline-flex">
            <div class="w-96 h-fit py-2 bg-rose-100 rounded-lg justify-start items-center gap-4 inline-flex">
                <div class="w-2 h-12 relative bg-primary-base rounded"></div>
                <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-H1-H2-H3">Terpopuler</div>
            </div>
            <div class="h-fit flex-col justify-start items-start gap-9 flex">
                <div class="self-stretch h-fit flex-col justify-start items-start gap-3 flex">
                    <div class="self-stretch h-96 flex-col justify-start items-start gap-6 flex">
                        <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-H1-H2-H3">Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                        </div>
                    </div>
                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                        <div class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-normal">29 Juli 2022</div>
                        <div class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-THICCCBOI leading-normal">SBMPN</div>
                    </div>
                </div>
            </div>
            <div class="h-fit flex-col justify-start items-start gap-9 flex">
                <div class="self-stretch h-fit flex-col justify-start items-start gap-3 flex">
                    <div class="self-stretch h-96 flex-col justify-start items-start gap-6 flex">
                        <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-H1-H2-H3">Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                        </div>
                    </div>
                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                        <div class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-normal">29 Juli 2022</div>
                        <div class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-THICCCBOI leading-normal">SBMPN</div>
                    </div>
                </div>
            </div>
            <div class="h-fit flex-col justify-start items-start gap-9 flex">
                <div class="self-stretch h-fit flex-col justify-start items-start gap-3 flex">
                    <div class="self-stretch h-96 flex-col justify-start items-start gap-6 flex">
                        <div class="self-stretch h-72 bg-zinc-800 rounded-2xl"></div>
                        <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-netral-900 text-2xl font-semibold font-THICCCBOI leading-H1-H2-H3">Mahasiswa Polimedia Raih Prestasi Juara Street Photo...</div>
                        </div>
                    </div>
                    <div class="self-stretch pl-1 justify-start items-start gap-2.5 inline-flex">
                        <div class="grow shrink basis-0 text-netral-900 text-base font-normal font-THICCCBOI leading-normal">29 Juli 2022</div>
                        <div class="grow shrink basis-0 text-right text-stone-500 text-base font-normal font-THICCCBOI leading-normal">SBMPN</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('partials.footer')
@endsection
