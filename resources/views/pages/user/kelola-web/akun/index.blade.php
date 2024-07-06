    @extends('layouts.main')
    @include('partials.navbar')
    @include('partials.navbar-mobile')
    @section('container')
        <div class="w-full h-fit px-32 py-32 bg-soft-base flex-col justify-center items-center gap-8 flex">
            <div class="w-full max-w-1480 flex-col justify-center items-center gap-4 lg:gap-8 flex">
                <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
                    <div class="w-full h-fit justify-start items-center gap-6 inline-flex">
                        <a href="{{ route('kelola.website.index') }}" class="text-32 text-netral-800 ph ph-arrow-left"></a>
                        <div class="grow shrink basis-0 text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">
                            Daftar
                            Akun</div>
                        <a href="{{ route('kelola.akun.create') }}" class="btn-primary">Tambah Akun
                            <i class=" ph ph-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full justify-start items-start gap-9 inline-flex">
                    <div class="p-4 bg-red-200 rounded-2xl flex-col justify-start items-start inline-flex">
                        <div class="text-netral-900 Heading4 font-medium">Total Akun Mahasiswa</div>
                        <div class="justify-end items-end gap-4 inline-flex">
                            <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">
                                {{ $users->where('user_type', 'Mahasiswa')->count() }}</div>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start inline-flex">
                        <div class="text-netral-900 Heading4 font-medium">Total Akun Umum</div>
                        <div class="text-netral-900 text-3xl font-extrabold font-THICCCBOI leading-10">400 orang</div>
                    </div>

                </div>
                {{-- Main Content --}}
                <div class="self-stretch h-fit p-4 bg-white rounded-2xl flex-col justify-start items-center gap-8 flex">
                    <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                        <thead
                            class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 inline-flex">
                            <tr class="w-full justify-center items-center inline-flex flex-row gap-4">
                                <th
                                    class="w-full h-fit grow shrink basis-4/12 justify-start gap-4 items-center inline-flex">
                                    {{-- <i class="text-32 ph ph-square"></i> --}}
                                    <div class="text-neutral-900 Heading3 font-semibold">Akun</div>
                                </th>
                                <th class="w-full grow shrink basis-4/12 flex">
                                    <div class="text-neutral-900 Heading3 font-semibold">Email
                                    </div>
                                </th>
                                <th class="w-full grow shrink basis-1/12 flex justify-center">
                                    <div class="text-neutral-900 Heading3 font-semibold">Status
                                    </div>
                                </th>
                                @if (auth()->user()->user_type === 'Admin' || auth()->user()->user_type === 'Pembina Komisi')
                                    <th class="w-full grow shrink basis-2/12 flex justify-center">
                                        <div class="text-neutral-900 Heading3 font-semibold">Akses Admin
                                        </div>
                                    </th>
                                @else
                                @endif
                                <th class="w-full grow shrink basis-3/12 flex">
                                    <div class="text-neutral-900 Heading3 font-semibold"></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="self-stretch px-4 py-6 h-fit rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-4">
                            @foreach ($users as $user)
                                @if ($user->user_type === 'Mahasiswa' || $user->user_type === 'Pembina Komisi')
                                    <tr class="w-full h-fit flex-row justify-start items-center gap-4 flex relative">
                                        <td class="w-full h-full basis-4/12 flex flex-row gap-4 justify-start items-center">
                                            <div
                                                class="h-16 w-16 overflow-clip object-fill rounded-full justify-center items-center flex relative">
                                                <img class="w-full aspect-auto object-bottom"
                                                    src="{{ url($user->profile_picture) }}" />
                                            </div>
                                            <div
                                                class="grow shrink basis-0 flex-col justify-center items-start inline-flex">
                                                <div class="self-stretch text-netral-900 Heading4 font-semibold">
                                                    {{ $user->fullname }}</div>
                                                <div
                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $user->user_type }} - {{ $user->nim }}</div>
                                                <div
                                                    class="text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                    {{ $user->edu_program }}</div>
                                            </div>
                                        </td>
                                        <td class="w-full h-full flex basis-4/12 overflow-hidden">
                                            <p class="text-netral-900 Heading4 font-normal text-wrap">{{ $user->email }}
                                            </p>
                                        </td>
                                        <td
                                            class="w-full flex flex-col items-center basis-1/12 justify-center cursor-pointer">
                                            <i class="headline-switch text-5xl ph ph-toggle-left {{ $user->status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                data-id="{{ $user->id }}"></i>
                                            <p
                                                class="w-full text-center status-text text-netral-900 Body1 font-normal text-wrap">
                                                {{ $user->status }}</p>
                                        </td>
                                        @if (auth()->user()->user_type === 'Admin' || auth()->user()->user_type === 'Pembina Komisi')
                                            <td
                                                class="w-full flex flex-col items-center basis-2/12 justify-center cursor-pointer">
                                                <i class="admin-switch text-5xl ph ph-toggle-left {{ $user->admin === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                    data-id="{{ $user->id }}"></i>
                                                <p
                                                    class="w-full text-center status-text text-netral-900 Body1 font-normal text-wrap">
                                                    {{ $user->admin }}
                                                </p>
                                            </td>
                                        @else
                                        @endif

                                        <td class="w-full h-full flex basis-3/12 flex-row gap-4 justify-start items-center">
                                            <div class="w-full h-fit justify-end items-center gap-4 flex flex-wrap">
                                                <a href="{{ route('kelola.akun.edit', $user) }}"
                                                    class="py-1 rounded-full justify-center items-center gap-2 flex">
                                                    <div class="text-center text-rose-600 Heading4 font-medium">Ubah</div>
                                                    <i class="text-2xl text-rose-600 ph ph-pencil-simple"></i>
                                                </a>
                                                <form id="deleteForm-{{ $user->id }}"
                                                    action="{{ route('kelola.akun.destroy', $user) }}" method="POST"
                                                    class="m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete('{{ $user->id }}')"
                                                        class="py-1 rounded-full justify-center items-center gap-2 flex">
                                                        <div class="text-center text-rose-600 Heading4 font-medium">Hapus
                                                        </div>
                                                        <i class="text-2xl text-rose-600 ph ph-trash-simple"></i>
                                                    </button>
                                                </form>
                                                {{-- Alert Delete --}}
                                                <div id="alertDelete-{{ $user->id }}"
                                                    class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
                                                    <div onclick="hideAlertDelete('{{ $user->id }}')"
                                                        class="close-button-bg w-screen h-screen relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                        <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                            role="none" onclick="event.stopPropagation();">
                                                            <div class="w-full Heading4 text-center">Kamu yakin ingin
                                                                menghapus
                                                                ini?</div>
                                                            <div class="w-full flex flex-row gap-2">
                                                                <button type="submit"
                                                                    id="confirm-delete-button-{{ $user->id }}"
                                                                    onclick="submitDelete('{{ $user->id }}')"
                                                                    class="w-full flex btn-secondary-sm px-4">
                                                                    Iya, Hapus
                                                                </button>
                                                                <button id="cancel-delete-button-{{ $user->id }}"
                                                                    onclick="hideAlertDelete('{{ $user->id }}')"
                                                                    class="w-full flex btn-primary-sm px-4">
                                                                    Tidak
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                    <div class="h-14 px-8 py-3 bg-rose-100 rounded-full justify-center items-center gap-6 inline-flex">
                        <div class="text-center text-netral-900 text-2xl font-medium font-THICCCBOI leading-9">Lihat
                            Selengkapnya
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
                        const statusElement = this.nextElementSibling;
                        const csrfToken = document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content');

                        if (!csrfToken) {
                            console.error('CSRF token not found!');
                            return;
                        }

                        fetch(`/kelola-website/kelola-akun/akun/ubah/${newsId}/toggle-status`, {
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
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.admin-switch').forEach(switchIcon => {
                    switchIcon.addEventListener('click', function() {
                        const userId = this.dataset.id;
                        const iconElement = this;
                        const statusElement = this.nextElementSibling;
                        const csrfToken = document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content');

                        if (!csrfToken) {
                            console.error('CSRF token not found!');
                            return;
                        }

                        fetch(`/kelola-website/kelola-akun/akun/ubah/${userId}/toggle-admin`, {
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
                                if (data.admin === 'Aktif') {
                                    iconElement.classList.remove('ph-toggle-left');
                                    iconElement.classList.add('ph-fill', 'ph-toggle-right');
                                } else {
                                    iconElement.classList.remove('ph-fill', 'ph-toggle-right');
                                    iconElement.classList.add('ph-toggle-left');
                                }
                                statusElement.textContent = data.admin;
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
