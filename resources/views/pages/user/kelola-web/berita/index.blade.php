@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div class="w-full h-fit px-32 py-32 bg-soft-base flex-col justify-center items-center gap-8 flex">
        <div class="w-full max-w-1480 flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full h-fit justify-start items-center gap-6 flex">
                <div class="w-full h-fit justify-start items-center gap-6 flex">
                    <button onclick="goBack()" class="text-32 text-netral-800 ph ph-arrow-left"></button>
                    <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">Kelola
                        Berita</div>
                    <a href="/kelola-berita/tambah" class="py-3 rounded-full justify-center items-center gap-4 flex">
                        <div class="text-center text-rose-600 text-2xl font-medium font-THICCCBOI leading-9">Tambah Berita
                        </div>
                        <i class="text-32 text-primary-base ph ph-plus"></i>
                    </a>
                </div>
            </div>
            {{-- Main Content --}}
            <div class="w-full flex flex-col gap-4">
                <div class="justify-start items-start gap-9 flex">
                    <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start flex">
                        <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Berita</div>
                        <div class="justify-end items-end gap-4 flex">
                            <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">
                                {{ $news->count() }}</div>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start flex">
                        <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Berita Kabinet
                            Sekarang</div>
                        <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">400 Berita</div>
                    </div>
                    <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start flex">
                        <div class="text-netral-900 text-lg font-medium font-THICCCBOI leading-7">Total Berita Tidak Aktif
                        </div>
                        <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">0 Berita</div>
                    </div>
                </div>
                <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
                    <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                        <thead
                            class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 flex">
                            <tr class="w-full justify-center items-center flex flex-row gap-8">
                                <th class="w-full h-fit grow shrink basis-4/12 justify-start gap-4 items-center flex">
                                    <i class="text-32 ph ph-square"></i>
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Info
                                        Berita</div>
                                </th>
                                <th class="w-full grow shrink basis-2/12 flex">
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Isi Berita
                                    </div>
                                </th>
                                <th class="w-full grow shrink basis-1/12 flex">
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9">Headline
                                    </div>
                                </th>
                                <th class="w-full grow shrink basis-3/12 flex">
                                    <div class="text-neutral-900 text-2xl font-semibold font-THICCCBOI leading-9"></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                            @foreach ($news as $oneNews)
                                <tr class="w-full h-fit flex-row justify-start items-center gap-8 flex cursor-pointer">
                                    <td
                                        class="w-full h-full grow shrink basis-4/12 flex flex-row gap-4 justify-start items-center">
                                        <div class="justify-start items-center flex">
                                            <i class="text-32 ph ph-square"></i>
                                        </div>
                                        <div
                                            class="max-h-24 h-24 aspect-square bg-netral-100 shadow-card-m rounded-lg overflow-clip justify-center items-center flex relative">
                                            @if (!empty($firstImages[$oneNews->id]))
                                                <img class="h-full w-full aspect-square object-cover"
                                                    src="{{ asset('storage/' . $firstImages[$oneNews->id]) }}"
                                                    alt="First Image">
                                            @else
                                                <p>No image available.</p>
                                            @endif
                                        </div>
                                        <div class="w-full h-full flex-col justify-center items-center flex">
                                            <div
                                                class="self-stretch text-netral-900 text-2xl font-semibold font-THICCCBOI leading-7">
                                                {{ $oneNews->title }}</div>
                                            <div
                                                class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                {{ $oneNews->category->name }}</div>
                                            <div
                                                class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                {{ $oneNews->created_at->diffforHumans() }}</div>
                                        </div>
                                    </td>
                                    <td class="w-full flex grow shrink basis-2/12">
                                        <div class="h-full justify-start items-center gap-4 flex">
                                            <div class="self-stretch flex-col justify-center items-start flex">
                                                <div
                                                    class="grow shrink basis-0 text-netral-900 text-lg font-normal font-THICCCBOI leading-7">
                                                    {{ Str::limit($oneNews->content, 40) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-full flex Heading4 flex-col grow shrink basis-1/12">
                                        <div class="w-full flex justify-center items-center">
                                            <i class="text-5xl ph ph-toggle-left headline-switch {{ $oneNews->headline_status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                data-id="{{ $oneNews->id }}"></i>
                                        </div>
                                        <div class="w-full h-fit headline-status text-center">
                                            {{ $oneNews->headline_status }}</div>
                                    </td>
                                    <td
                                        class="w-full h-full flex grow shrink basis-3/12 flex-row gap-4 justify-start items-center">
                                        <div class="w-full h-fit justify-end items-center gap-4 flex flex-wrap">
                                            <a href="{{ route('kelola.berita.edit', $oneNews->id) }}"
                                                class="btn-tertiary-sm-primary px-0">Ubah
                                                <i class="text-2xl ph ph-pencil-simple"></i>
                                            </a>
                                            <form id="menuButton-{{ $oneNews->id }}"
                                                action="{{ route('kelola.berita.destroy', $oneNews->id) }}" class=" m-0"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button id="" class="btn-tertiary-sm-primary px-0"
                                                    onclick="toggleDropdownPopUp('{{ $oneNews->id }}')">Hapus
                                                    <i class="text-2xl ph ph-trash-simple"></i>
                                                </button>
                                            </form>
                                            {{-- Alert Delete --}}
                                            <div id="alertDelete-{{ $oneNews->id }}"
                                                class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                                <div onclick="hideAlertDelete('{{ $oneNews->id }}')"
                                                    class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                    <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                        role="none" onclick="event.stopPropagation();">
                                                        <div class="w-full Heading4 text-center">Kamu yakin ingin menghapus
                                                            ini?</div>
                                                        <div class="w-full flex flex-row gap-2">
                                                            <button id="confirm-delete-button-{{ $oneNews->id }}"
                                                                onclick="confirmDelete('{{ $oneNews->id }}')"
                                                                class="w-full flex btn-secondary-sm px-4">
                                                                Iya, Hapus
                                                            </button>
                                                            <button id="cancel-delete-button-{{ $oneNews->id }}"
                                                                onclick="hideAlertDelete('{{ $oneNews->id }}')"
                                                                class="w-full flex btn-primary-sm px-4">
                                                                Tidak
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/kelola-kabinet-pilih" class="btn-secondary-sm">
                                                Lihat
                                                <i class="text-2xl  ph ph-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="h-14 px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 flex">
                        <div class="text-center text-netral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.headline-switch').forEach(switchIcon => {
                switchIcon.addEventListener('click', function() {
                    const newsId = this.dataset.id;
                    const iconElement = this;
                    const statusElement = this.parentElement
                        .nextElementSibling; // Adjust this to get the correct sibling element
                    const csrfToken = document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content');

                    if (!csrfToken) {
                        console.error('CSRF token not found!');
                        return;
                    }

                    fetch(`/kelola-berita/berita/${newsId}/toggle-headline`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok ' + response
                                    .statusText);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.status === 'Aktif') {
                                iconElement.classList.remove('ph-toggle-left');
                                iconElement.classList.add('ph-fill', 'ph-toggle-right');
                            } else {
                                iconElement.classList.remove('ph-fill', 'ph-toggle-right');
                                iconElement.classList.add('ph-toggle-left');
                            }
                            statusElement.textContent = data.status;
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        });
    </script>
    <script>
        function toggleDropdownPopUp(newsId) {
            var alertId = 'alertDelete-' + newsId;
            var alertElement = document.getElementById(alertId);
            if (alertElement) {
                alertElement.classList.toggle('hidden');
            }
        }

        function hideAlertDelete(newsId) {
            var alertId = 'alertDelete-' + newsId;
            var alertElement = document.getElementById(alertId);
            if (alertElement) {
                alertElement.classList.add('hidden');
            }
        }

        function confirmDelete(newsId) {
            // Implementasi logika penghapusan di sini, contohnya bisa redirect ke route delete
            console.log('Deleting news with ID:', newsId);
            // Simpan logic untuk melakukan penghapusan sesuai kebutuhan
        }
    </script>
@endsection
