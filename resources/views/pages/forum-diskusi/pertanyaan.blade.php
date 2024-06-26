@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
<div class="w-full h-fit px-56 py-8 bg-soft-base flex-col justify-start items-center gap-8 inline-flex">
    <div class="self-stretch justify-center items-start gap-16 inline-flex">
        {{-- Left Content --}} <div class="w-full h-fit self-stretch flex-col justify-start items-start gap-6 inline-flex">
            <button onclick="goBack()" class="w-fit py-2rounded-lg justify-start items-center gap-4 flex flex-row">
                    <i class="text-4xl ph ph-arrow-left"></i>
                    <div class="grow shrink basis-0 text-neutral-900 text-3xl font-semibold font-THICCCBOI leading-10">Kembali</div>
            </button>
            {{--  --}}
            <div class="w-full h h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-8 flex">
                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                        <div class="w-full justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                    <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                </div>
                                <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                            </div>
                            <div class="px-4 py-1 bg-blue-700 rounded-full justify-start items-start flex">
                                <div class="text-white text-xs font-semibold font-THICCCBOI leading-none">Terjawab</div>
                            </div>
                            <div class="relative inline-block text-left">
                                <button type="button" class="option-button inline-flex justify-center w-fit rounded-md focus:group/btntext-indigo-500 ">
                                    <i class="text-32 ph ph-dots-three-vertical focus:text-indigo-500"></i>
                                </button>
                                <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden" role="menu" aria-orientation="vertical" tabindex="-1">
                                    <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                        <div class="bg-netral-100 rounded-2xl w-480 h-fit justify-center items-center overflow-clip" role="none">
                                            <button href="#" class="block w-full text-center px-4 py-3 border-b-2 border-netral-200 text-xl font-THICCCBOI text-gray-700 hover:bg-netral-200 hover:text-gray-900" role="menuitem">Ubah</button>
                                            <button href="#" class="block w-full text-center px-4 py-3 border-b-2 border-netral-200 text-xl font-THICCCBOI text-red-700 hover:bg-red-100 hover:text-red-900" role="menuitem">Hapus</button>
                                            <button class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-netral-900" role="menuitem">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch text-neutral-900 text-3xl font-semibold font-THICCCBOI leading-H4">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                            <div class="h-96 rounded-2xl overflow-clip">
                                <img class="h-full" src="{{ url('img/Kabinet/KOBRA/All-Team.png') }}" alt="">
                            </div>
                            <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="self-stretch h-fit flex-col justify-center items-center gap-8 flex">
                    <div class="self-stretch h-fit flex-col justify-center items-center flex">
                        <div class="self-stretch px-6 py-2 border-b border-stone-300 justify-start items-center gap-1 inline-flex">
                            <div class="h-fit justify-start items-start gap-1 flex">
                                <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">3</div>
                                <div class="text-neutral-900 text-lg font-semibold font-THICCCBOI leading-7">Jawaban</div>
                            </div>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-center flex divide-y-8">
                            
                            <div class="self-stretch h-fit px-6 py-6 flex-col justify-center items-center gap-4 flex">
                                <div class="w-full justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="w-full flex-col justify-center items-start inline-flex">
                                        <div class="justify-start items-center gap-2 inline-flex">
                                            <div class="w-fit justify-start items-center gap-2 flex">
                                                <div class="text-netral-900 text-base font-semibold font-THICCCBOI leading-normal">Bapak Suhaili</div>
                                                <i class="text-xl ph-fill text-blue-700 ph-seal-check"></i>
                                            </div>
                                            <div class="text-netral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                            <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Pembina Komunitas Bidikmisi Polimedia</div>
                                        </div>
                                        <div class="self-stretch justify-start items-start gap-4 inline-flex">
                                            <div class="grow shrink basis-0 text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                        </div>
                                    </div>
                                    <div class="relative inline-block text-left">
                                        <button type="button" class="option-button inline-flex justify-center w-fit rounded-md focus:group/btntext-indigo-500 ">
                                            <i class="text-32 ph ph-dots-three-vertical focus:text-indigo-500"></i>
                                        </button>
                                        <div class="option-card-menu fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden" role="menu" aria-orientation="vertical" tabindex="-1">
                                            <div class="close-button-bg w-screen h-screen relative justify-center items-center flex ">
                                                <div class="bg-netral-100 rounded-2xl w-480 h-fit justify-center items-center overflow-clip" role="none">
                                                    <button href="#" class="block w-full text-center px-4 py-3 border-b-2 border-netral-200 text-xl font-THICCCBOI text-gray-700 hover:bg-netral-200 hover:text-gray-900" role="menuitem">Ubah</button>
                                                    <button href="#" class="block w-full text-center px-4 py-3 border-b-2 border-netral-200 text-xl font-THICCCBOI text-red-700 hover:bg-red-100 hover:text-red-900" role="menuitem">Hapus</button>
                                                    <button class="close-button block w-full text-center px-4 py-3 text-xl font-THICCCBOI text-netral-900 hover:bg-netral-200 hover:text-netral-900" role="menuitem">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="self-stretch text-netral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="rounded-full justify-start items-center gap-2 flex">
                                        <i class="text-32 text-primary-base ph ph-heart"></i>
                                        <div class="px-4 py-2 bg-rose-100 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">30 org merasa terbantu</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="self-stretch h-fit px-6 py-6 flex-col justify-center items-center gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                            <div class="justify-start items-center gap-2 flex">
                                                <div class="text-netral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                            </div>
                                            <div class="text-netral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                            <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                        </div>
                                        <div class="self-stretch justify-start items-start gap-4 inline-flex">
                                            <div class="grow shrink basis-0 text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                        </div>
                                    </div>
                                    <i class="text-32 ph ph-dots-three-vertical"></i>
                                </div>
                                <div class="self-stretch text-netral-900 text-lg font-normal font-THICCCBOI leading-7">Baik Terimakasih Pak</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="rounded-full justify-start items-center gap-2 flex">
                                        <i class="text-32 text-primary-base ph ph-heart"></i>
                                        <div class="px-4 py-2 bg-rose-100 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">30 org merasa terbantu</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="self-stretch h-fit px-6 py-6 flex-col justify-center items-center gap-4 flex">
                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                    <i class="text-5xl ph ph-user-circle"></i>
                                    <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                            <div class="justify-start items-center gap-2 flex">
                                                <div class="text-netral-900 text-base font-semibold font-THICCCBOI leading-normal">Insan Hadid</div>
                                                <i class="text-xl ph-fill text-blue-700 ph-seal-check"></i>
                                            </div>
                                            <div class="text-netral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                            <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Ketua Komunitas Bidikmisi Polimedia Kabinet Sancaka</div>
                                        </div>
                                        <div class="self-stretch justify-start items-start gap-4 inline-flex">
                                            <div class="grow shrink basis-0 text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                                        </div>
                                    </div>
                                    <i class="text-32 ph ph-dots-three-vertical"></i>
                                </div>
                                <div class="self-stretch text-netral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                                <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                    <div class="rounded-full justify-start items-center gap-2 flex">
                                        <i class="text-32 text-primary-base ph ph-heart"></i>
                                        <div class="px-4 py-2 bg-rose-100 rounded-full justify-start items-start gap-2 flex">
                                            <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">30 org merasa terbantu</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="px-4 py-2  rounded-full justify-start items-start gap-2 flex">
                                <div class="text-primary-base text-base font-medium font-THICCCBOI leading-B2">Lihat 3 komentar lainnya</div>
                            </div>
                    </div>
                        
                  
                    <div class="w-full self-stretch px-6 rounded-full justify-start items-start inline-flex">
                        <div class="w-full h-fit px-4 py-2 bg-gray-200 rounded-full justify-start items-start gap-2.5 flex">
                            <div class="text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Berikan jawaban atau tanggapan anda</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Content --}} <div class="grow shrink basis-0 self-stretch rounded-3xl flex-col justify-start items-start gap-9 inline-flex">
            <div class="self-stretch py-2 bg-rose-100 rounded justify-start items-start gap-4 inline-flex">
                <div class="w-2 h-12 relative bg-primary-base rounded"></div>
                <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Terpopuler</div>
            </div>
            
            
            <div class="h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                    <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                </div>
                                <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                            </div>
                            <i class="text-32 ph ph-dots-three-vertical"></i>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                            <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                    <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-fit py-6 bg-white rounded-lg flex-col justify-start items-start gap-8 flex">
                <div class="self-stretch h-fit px-6 flex-col justify-start items-start gap-6 flex">
                    <div class="self-stretch h-fit flex-col justify-center items-start gap-4 flex">
                        <div class="self-stretch justify-start items-center gap-2 inline-flex">
                            <i class="text-5xl ph ph-user-circle"></i>
                            <div class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">Muhammad Alif</div>
                                    <div class="text-neutral-900 text-base font-semibold font-THICCCBOI leading-normal">-</div>
                                    <div class="grow shrink basis-0 text-stone-600 text-base font-normal font-THICCCBOI leading-normal">Mahasiswa</div>
                                </div>
                                <div class="self-stretch text-neutral-900 text-base font-medium font-THICCCBOI leading-normal">9 menit lalu</div>
                            </div>
                            <i class="text-32 ph ph-dots-three-vertical"></i>
                        </div>
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-2 flex">
                            <div class="self-stretch text-neutral-900 text-lg font-normal font-THICCCBOI leading-7">Bagaimana tahapan kipk bisa cair ke rekening tiap mahasiswa? dan apakah kita bisa mengetahui rinciannya?</div>
                            <div class="self-stretch justify-start items-center gap-4 inline-flex">
                                <div class="w-fit h-fit px-4 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex">
                                    <div class="text-neutral-900 text-xs font-medium font-THICCCBOI leading-B2">Pencairan KIPK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Fungsi Option Card --}}
<script>
    const optionButtons = document.querySelectorAll('.option-button');

    // Loop melalui setiap tombol opsi dan tambahkan event listener
    optionButtons.forEach(function(optionButton) {
        optionButton.addEventListener('click', function () {
            // Dapatkan menu terkait
            const optionMenu = this.nextElementSibling;
            // Toggle tampilan menu
            optionMenu.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });

        // Ambil tombol tutup terkait
        const closeButton = optionButton.nextElementSibling.querySelector('.close-button');
        if (closeButton) {
            // Tambahkan event listener untuk tombol tutup
            closeButton.addEventListener('click', function () {
                // Dapatkan menu terkait
                const optionMenu = this.parentNode.parentNode.parentNode;
                // Sembunyikan menu
                optionMenu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        }
        // Tambahkan event listener untuk tombol "Batalkan 2"
        document.addEventListener('click', function(event) {
            // Cek apakah yang diklik adalah tombol "Batalkan 2"
            if (event.target.classList.contains('close-button-bg')) {
                // Dapatkan menu terkait dengan tombol "Batalkan 2"
                const optionMenu = event.target.closest('.option-card-menu');
                // Sembunyikan menu
                optionMenu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
    });
</script>

<script>
    let mouseDown = false;
let startX, scrollLeft;
const slider = document.querySelector('.parent');

const startDragging = (e) => {
  mouseDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
}

const stopDragging = (e) => {
  mouseDown = false;
}

const move = (e) => {
  e.preventDefault();
  if(!mouseDown) { return; }
  const x = e.pageX - slider.offsetLeft;
  const scroll = x - startX;
  slider.scrollLeft = scrollLeft - scroll;
}

// Add the event listeners
slider.addEventListener('mousemove', move, false);
slider.addEventListener('mousedown', startDragging, false);
slider.addEventListener('mouseup', stopDragging, false);
slider.addEventListener('mouseleave', stopDragging, false);

</script>



@include('partials.footer')
@endsection
