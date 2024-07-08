@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    <div class="w-full h-fit  py-20 md:p-32  bg-soft-base flex-col justify-center items-center gap-8 flex">
        <div class="w-full max-w-1480 flex-col justify-center items-center gap-4 lg:gap-8 flex">
            <div class="w-full h-fit px-4 lg:px-0 justify-start items-center gap-6 flex">
                <div class="w-full h-fit justify-start items-center gap-4 flex">
                    <div class="w-full flex gap-2 lg:gap-4 justify-center items-center">
                        <a href="{{ route('kelola.website.index') }}" class="text-32 text-netral-800 ph ph-arrow-left"></a>
                        <div class="w-full text-netral-900 Heading2 font-extrabold">Kelola
                            Berita</div>
                    </div>

                    <a href="{{ route('kelola.berita.create') }}" class="btn-primary">Tambah Berita
                        <i class=" ph ph-plus"></i>
                    </a>
                </div>
            </div>
            {{-- Main Content --}}
            <div class="w-full flex flex-col gap-4">
                <div class="justify-start items-start px-4 lg:px-0 gap-4 flex">
                    <div class="p-4 bg-primary-100 rounded-2xl flex-col justify-start items-start flex">
                        <div class="text-netral-900 Body1 font-medium">Total Berita</div>
                        <div class="justify-end items-end gap-4 flex">
                            <div class="text-netral-900 Heading2 font-extrabold">
                                {{ $news->count() }}</div>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start flex">
                        <div class="text-netral-900 Body1 font-medium">Total Headline Aktif
                        </div>
                        <div class="text-netral-900 Heading2 font-extrabold">
                            {{ $news->where('headline_status', true)->count() }}</div>
                    </div>
                </div>
                {{-- Table --}}
                <div
                    class="self-stretch h-fit px-4 lg:px-0 pb-4 bg-white lg:rounded-2xl flex-col justify-start items-center gap-8 flex">
                    <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                        <thead
                            class="w-full px-0 lg:px-4 py-2 lg:py-6 rounded-tl-lg rounded-tr-lg lg:border-b-2 border-neutral-900 justify-start items-center gap-4 flex">
                            <tr class="w-full justify-center items-center flex flex-row gap-8">
                                <th class="w-full h-fit grow shrink basis-4/12 justify-start gap-4 items-center flex">
                                    {{-- <i class="text-32 ph ph-square"></i> --}}
                                    <div class="text-neutral-900 Heading3 font-semibold">Info
                                        Berita</div>
                                </th>
                                <th class="w-full grow shrink basis-2/12 hidden lg:flex">
                                    <div class="text-neutral-900 Heading3 font-semibold">Isi Berita
                                    </div>
                                </th>
                                <th class="w-full grow shrink basis-2/12 lg:basis-1/12 justify-center flex">
                                    <div class="text-neutral-900 Heading3 font-semibold">Headline
                                    </div>
                                </th>
                                <th class="w-full grow shrink basis-3/12 flex">
                                    <div class="text-neutral-900 Heading3 font-semibold"></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="self-stretch px-0 lg:px-4 py-2 lg:py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                            @foreach ($news as $oneNews)
                                <tr class="w-full h-fit flex-row justify-start items-center gap-8 flex cursor-pointer">
                                    <td
                                        class="w-full h-full grow shrink basis-4/12 flex flex-col lg:flex-row gap-4 justify-start items-start">
                                        {{-- <div class="justify-start items-center flex">
                                            <i class="text-32 ph ph-square"></i>
                                        </div> --}}
                                        <div
                                            class="max-h-24 h-24 aspect-square bg-netral-100 shadow-card-m rounded-lg overflow-clip justify-center items-center flex relative">
                                            <div
                                                class="max-h-24 h-24 aspect-square bg-netral-100 shadow-card-m rounded-lg overflow-clip justify-center items-center flex relative">
                                                @if (!empty($firstImages[$oneNews->id]))
                                                    <img class="h-full w-full aspect-square object-cover"
                                                        src="{{ asset('storage/' . $firstImages[$oneNews->id]) }}"
                                                        alt="First Image">
                                                @else
                                                    <i class="text-5xl ph ph-newspaper text-netral-900"></i>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="w-full h-full flex-col justify-center items-center flex">
                                            <div class="self-stretch text-netral-900 Heading4 font-semibold">
                                                {{ $oneNews->title }}</div>
                                            <div class="self-stretch text-netral-900 Body1 font-normal">
                                                {{ $oneNews->category->name }}</div>
                                            <div class="self-stretch text-netral-900 Body2 font-normal">
                                                {{ $oneNews->created_at->diffforHumans() }}</div>
                                        </div>
                                    </td>
                                    <td class="w-full grow shrink basis-2/12  hidden lg:flex">
                                        <div class="h-full justify-start items-center gap-4 flex">
                                            <div class="self-stretch flex-col justify-center items-start flex">
                                                <div class="grow shrink basis-0 text-netral-900 Body1 font-normal">
                                                    {{ Str::limit($oneNews->content, 40) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-full flex Heading4 flex-col grow shrink basis-2/12 lg:basis-1/12">
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
                                            <form id="deleteForm-{{ $oneNews->id }}"
                                                action="{{ route('kelola.berita.destroy', $oneNews->id) }}" method="POST"
                                                class="m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn-tertiary-sm-primary px-0"
                                                    onclick="confirmDelete('{{ $oneNews->id }}')">Hapus
                                                    <i class="text-2xl ph ph-trash-simple"></i>
                                                </button>
                                            </form>
                                            {{-- Alert Delete --}}
                                            <div id="alertDelete-{{ $oneNews->id }}"
                                                class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                                <div onclick="hideAlertDelete('{{ $oneNews->id }}')"
                                                    class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                    <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                        role="none" onclick="event.stopPropagation();">
                                                        <div class="w-full Heading4 text-center">Kamu yakin ingin menghapus
                                                            ini?</div>
                                                        <div class="w-full flex flex-row gap-2">
                                                            <button id="confirm-delete-button-{{ $oneNews->id }}"
                                                                onclick="submitDelete('{{ $oneNews->id }}')"
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
                                                <i class="text-2xl ph ph-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn-secondary">Lihat
                        Selengkapnya</button>
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
                    fetch(`/kelola-website/kelola-berita/berita/ubah/${newsId}/toggle-headline`, {
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
        function confirmDelete(newsId) {
            // Tampilkan pop-up konfirmasi penghapusan
            const alertDelete = document.getElementById(`alertDelete-${newsId}`);
            alertDelete.classList.remove('hidden');
            alertDelete.classList.add('flex');
        }

        function hideAlertDelete(newsId) {
            const alertDelete = document.getElementById(`alertDelete-${newsId}`);
            alertDelete.classList.add('hidden');
            alertDelete.classList.remove('flex');
        }

        function submitDelete(newsId) {
            // Submit form
            const deleteForm = document.getElementById(`deleteForm-${newsId}`);
            deleteForm.submit();
        }
    </script>
@endsection
