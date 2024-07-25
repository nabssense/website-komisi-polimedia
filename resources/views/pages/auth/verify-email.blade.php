@extends('layouts.main')
@section('container')
    <div class="w-screen h-screen p-4 md:p-8 bg-netral-100 shadow justify-center flex flex-col items-center">
        <div class="w-96 h-fit bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Verifikasi Email Anda</h2>
            <p class="mb-4">Sebelum melanjutkan, silakan periksa email Anda untuk link verifikasi.</p>
            @if (session('message'))
                <div class="mb-4 text-green-600">
                    {{ session('message') }}
                </div>
            @endif
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="flex flex-col gap-4">
                    <button type="submit" class="w-full bg-primary-base text-white py-2 rounded">Kirim Ulang Email
                        Verifikasi</button>
                    {{-- <button onclick="togglePopUpShow('keluarAkunAlert')"
                        class="w-full text-left self-stretch px-4 py-3 bg-white rounded-lg justify-center items-center gap-3 inline-flex">
                        <i class="text-2xl ph ph-sign-out"></i>
                        <div class="text-netral-900 font-medium Heading4">Keluar Akun</div>
                    </button> --}}

                </div>

            </form>
            {{-- Pop Up --}}
            {{-- <div id="keluarAkunAlert"
                class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                <div class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                    <form action="{{ route('auth.masuk.logout') }}" method="POST" onclick="event.stopPropagation();"
                        class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-6 p-4">
                        @csrf
                        <div class="self-stretch h-fit flex-col justify-start items-start flex" role="none"
                            onclick="event.stopPropagation();">
                            <div class="w-full Heading4 text-center">Kamu yakin ingin keluar?</div>
                        </div>
                        <div class="w-full flex flex-row gap-2">
                            <button id="confirm-delete-button" onclick="" type="submit"
                                class="w-full flex btn-secondary-sm px-4">
                                Iya, Keluar
                            </button>
                            <button id="cancel-delete-button" type="button" onclick="togglePopUpShow('keluarAkunAlert')"
                                class="w-full flex btn-primary-sm px-4">
                                Tidak
                            </button>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>

    </div>
    {{-- toogle --}}
    <script>
        function togglePopUpShow(popupId) {
            var popup = document.getElementById(popupId);
            if (popup.classList.contains('hidden')) {
                popup.classList.remove('hidden');
            } else {

                popup.classList.add('hidden');
            }
        }
    </script>
@endsection
