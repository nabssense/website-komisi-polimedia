    @extends('layouts.main')
    @include('partials.navbar')
    @include('partials.navbar-mobile')
    @section('container')
        <div
            class="w-full h-fit  py-20 md:py-28 lg:py-32 lg:px-8 bg-netral-200 flex-col justify-center items-center gap-8 flex">
            <div class="w-full max-w-1480 flex-col  justify-center items-center gap-4 lg:gap-8 flex">
                <div class="w-full h-fit px-4 lg:px-0 justify-start items-center gap-6 inline-flex">
                    <div class="w-full h-fit justify-between items-center gap-6 inline-flex">
                        <a href="{{ route('kelola.website.index') }}"
                            class=" text-32 text-netral-800 ph ph-arrow-left flex flex-row gap-4 items-center">
                            <div class="flex-none text-netral-900 Heading2 font-extrabold">
                                Daftar Akun</div>
                        </a>
                        <a href="{{ route('kelola.akun.create') }}" class="btn-primary">Tambah Akun
                            <i class=" ph ph-plus"></i>
                        </a>
                    </div>
                </div>
                {{-- Main Content --}}
                <div class="w-full flex flex-col gap-4">


                    <div class="justify-start items-start px-4 lg:px-0 gap-4 flex">
                        <div class="p-4 bg-primary-100 rounded-2xl flex-col justify-start items-start flex">
                            <div class="text-netral-900 Body1 font-medium">Total Akun Mahasiswa</div>
                            <div class="justify-end items-end gap-4 flex">
                                <div class="text-netral-900 Heading2 font-extrabold">
                                    {{ $users->where('user_type', 'Mahasiswa')->count() }}</div>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-netral-100 rounded-2xl flex-col justify-start items-start flex">
                            <div class="text-netral-900 Body1 font-medium">Total Akun Umum
                            </div>
                            <div class="text-netral-900 Heading2 font-extrabold">
                                {{ $users->where('user_type', 'Umum')->count() }}</div>
                        </div>
                    </div>
                    {{-- Table --}}
                    <div
                        class="self-stretch h-fit lg:px-0 pb-4 bg-netral-200 lg:bg-netral-100 lg:rounded-2xl flex-col justify-start items-center gap-8 flex">
                        <table class="w-full h-fit rounded-lg flex-col justify-start items-center flex">
                            <thead
                                class="w-full px-4 py-6 rounded-tl-lg rounded-tr-lg border-b-2 border-neutral-900 justify-start items-center gap-4 hidden lg:flex">
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
                                class="w-full h-fit lg:px-4 lg:py-6 rounded-bl-lg rounded-br-lg flex-col justify-start items-start flex gap-2 lg:gap-4">
                                @foreach ($users as $user)
                                    @if ($user->user_type === 'Mahasiswa' || $user->user_type === 'Pembina Komisi')
                                        <div id="menuDropdown-{{ $user->id }}"
                                            class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="toggleDropdownPopUp('{{ $user->id }}'); event.stopPropagation()"
                                                class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div class="w-full flex flex-col gap-2">
                                                        <button
                                                            onclick="location.href='{{ route('kelola.akun.edit', $user->id) }}'"
                                                            class="w-full flex btn-tertiary-sm px-4">
                                                            Ubah
                                                        </button>
                                                        <form id="deleteForm-{{ $user->id }}"
                                                            action="{{ route('kelola.akun.destroy', $user->id) }}"
                                                            class="w-full m-0" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                onclick="confirmDelete('{{ $user->id }}')"
                                                                class="w-full flex btn-tertiary-sm px-4">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <button class="w-full flex btn-secondary-sm px-4"
                                                        onclick="toggleDropdownPopUp('{{ $user->id }}')">
                                                        Tutup
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Alert Delete --}}
                                        <div id="alertDelete-{{ $user->id }}"
                                            class="flex-col Body1 gap-2 fixed left-0 top-0 justify-center items-center z-50 w-full h-full bg-opacity-20 bg-netral-900 hidden">
                                            <div onclick="hideAlertDelete('{{ $user->id }}')"
                                                class="close-button-bg w-full h-full relative justify-center items-end px-4 pb-4 lg:items-center flex">
                                                <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
                                                    role="none" onclick="event.stopPropagation();">
                                                    <div class="w-full Heading4 text-center">Kamu yakin
                                                        ingin
                                                        menghapus
                                                        ini?</div>
                                                    <div class="w-full flex flex-row gap-2">
                                                        <button id="cancel-delete-button-{{ $user->id }}"
                                                            onclick="hideAlertDelete('{{ $user->id }}')"
                                                            class="w-full flex btn-primary px-4">
                                                            Tidak
                                                        </button>
                                                        <button type="submit"
                                                            id="confirm-delete-button-{{ $user->id }}"
                                                            onclick="submitDelete('{{ $user->id }}')"
                                                            class="w-full flex btn-secondary px-4">
                                                            Iya, Hapus
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <tr
                                            class="w-full h-fit flex-col bg-netral-100 lg:flex-row justify-start items-center gap-4 hidden lg:flex relative">
                                            <td
                                                class="w-full h-full basis-4/12 flex flex-row gap-4 justify-start items-center">

                                                <div
                                                    class="h-16 w-16 overflow-clip object-fill rounded-full justify-center items-center flex relative">
                                                    <img class="w-full aspect-auto object-bottom"
                                                        src="{{ strpos($user->profile_picture, 'https://ui-avatars.com') === 0
                                                            ? $user->profile_picture
                                                            : Storage::url($user->profile_picture) }}" />
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
                                                <div
                                                    class="w-full flex lg:hidden flex-col items-center basis-1/12 justify-center cursor-pointer">
                                                    <div class="w-full flex flex-col gap-0">
                                                        <p
                                                            class="w-full text-start status-text text-netral-900 Body1 font-normal text-wrap">
                                                            Status</p>
                                                        <div class="w-fit gap-2 flex flex-row justify-center items-center">
                                                            <i class="headline-switch text-5xl ph ph-toggle-left {{ $user->status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                                data-id="{{ $user->id }}"></i>
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-col gap-0">
                                                        <p
                                                            class="w-full text-start status-text text-netral-900 Body1 font-normal text-wrap">
                                                            Admin</p>
                                                        <div class="w-fit gap-2 flex flex-row justify-center items-center">
                                                            <i class="admin-switch text-5xl ph ph-toggle-left {{ $user->admin === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                                data-id="{{ $user->id }}"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="w-full h-full basis-4/12 overflow-hidden hidden lg:flex">
                                                <p class="text-netral-900 Heading4 font-normal text-wrap">
                                                    {{ $user->email }}
                                                </p>
                                            </td>
                                            <td
                                                class="w-full flex lg:hidden flex-row lg:flex-col items-center basis-1/12 justify-center cursor-pointer">
                                                <div class="w-full flex flex-col gap-0">
                                                    <p
                                                        class="w-full text-start status-text text-netral-900 Body1 font-normal text-wrap">
                                                        Status</p>
                                                    <div class="w-fit gap-2 flex flex-row justify-center items-center">
                                                        <i class="headline-switch text-5xl ph ph-toggle-left {{ $user->status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                            data-id="{{ $user->id }}"></i>
                                                    </div>
                                                </div>
                                                <div class="w-full flex flex-col gap-0">
                                                    <p
                                                        class="w-full text-start status-text text-netral-900 Body1 font-normal text-wrap">
                                                        Admin</p>
                                                    <div class="w-fit gap-2 flex flex-row justify-center items-center">
                                                        <i class="admin-switch text-5xl ph ph-toggle-left {{ $user->admin === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                            data-id="{{ $user->id }}"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="w-full h-fit justify-end items-center gap-4 flex flex-row">
                                                    <a href="{{ route('kelola.akun.edit', $user) }}"
                                                        class="py-1 rounded-full justify-center items-center gap-2 flex">
                                                        <div class="text-center text-primary-base Heading4 font-medium">Ubah
                                                        </div>
                                                        <i class="text-2xl text-primary-base ph ph-pencil-simple"></i>
                                                    </a>
                                                    <form id="deleteForm-{{ $user->id }}"
                                                        action="{{ route('kelola.akun.destroy', $user) }}" method="POST"
                                                        class="m-0">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            onclick="confirmDelete('{{ $user->id }}')"
                                                            class="py-1 rounded-full justify-center items-center gap-2 flex">
                                                            <div class="text-center text-primary-base Heading4 font-medium">
                                                                Hapus
                                                            </div>
                                                            <i class="text-2xl text-primary-base ph ph-trash-simple"></i>
                                                        </button>
                                                    </form>
                                                   
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
                                                </div> --}}
                                            </td>
                                            <td
                                                class="w-full hidden lg:flex flex-row lg:flex-col items-center basis-1/12 justify-center cursor-pointer">
                                                <i class="headline-switch text-5xl ph ph-toggle-left  {{ $user->status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                    data-id="{{ $user->id }}"></i>
                                                <p
                                                    class="w-full order-1 lg:order-2 text-center status-text text-netral-900 Body1 font-normal text-wrap">
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

                                            <td
                                                class="w-full h-full hidden lg:flex basis-3/12 flex-row gap-4 justify-start items-center">
                                                <div class="w-full h-fit justify-end items-center gap-4 flex flex-wrap">
                                                    <a href="{{ route('kelola.akun.edit', $user) }}"
                                                        class="py-1 rounded-full justify-center items-center gap-2 flex">
                                                        <div class="text-center text-primary-base Heading4 font-medium">
                                                            Ubah
                                                        </div>
                                                        <i class="text-2xl text-primary-base ph ph-pencil-simple"></i>
                                                    </a>
                                                    <form id="deleteForm-{{ $user->id }}"
                                                        action="{{ route('kelola.akun.destroy', $user) }}" method="POST"
                                                        class="m-0">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            onclick="confirmDelete('{{ $user->id }}')"
                                                            class="py-1 rounded-full justify-center items-center gap-2 flex">
                                                            <div
                                                                class="text-center text-primary-base Heading4 font-medium">
                                                                Hapus
                                                            </div>
                                                            <i class="text-2xl text-primary-base ph ph-trash-simple"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                        {{-- Mobile --}}
                                        <tr
                                            class="w-full flex-col p-4 bg-netral-100 justify-start items-center gap-2 flex lg:hidden relative">
                                            <td onclick="location.href='{{ route('kelola.akun.edit', $user->id) }}'"
                                                class="w-full h-fit flex flex-col gap-4 justify-start items-center cursor-pointer">
                                                <div class="w-full h-fit flex flex-row gap-4 justify-start items-center">
                                                    <div class="w-full self-stretch flex flex-col gap-2 justify-between">
                                                        <div class="self-stretch flex flex-row gap-2">
                                                            <div
                                                                class="h-12 w-12 overflow-clip object-fill rounded-full justify-center items-center flex relative">
                                                                <img class="w-full aspect-auto object-bottom"
                                                                    src="{{ strpos($user->profile_picture, 'https://ui-avatars.com') === 0
                                                                        ? $user->profile_picture
                                                                        : Storage::url($user->profile_picture) }}" />
                                                            </div>
                                                            <div
                                                                class="w-full h-full flex-col justify-center items-start inline-flex">
                                                                <div
                                                                    class="self-stretch text-netral-900 Heading4 font-semibold">
                                                                    {{ $user->fullname }}</div>
                                                                <div
                                                                    class="self-stretch text-netral-900 text-base font-normal font-THICCCBOI leading-normal">
                                                                    {{ $user->user_type }} - {{ $user->nim }}</div>
                                                                </p>
                                                            </div>
                                                            {{-- Menu --}}
                                                            <i id="menuButton-{{ $user->id }}"
                                                                onclick="toggleDropdownPopUp('{{ $user->id }}'); event.stopPropagation()"
                                                                class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three relative cursor-pointer">
                                                            </i>

                                                        </div>

                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div onclick=" event.stopPropagation()"
                                                    class="self-stretch flex lg:hidden flex-row items-center justify-between cursor-pointer gap-4">
                                                    <div class="w-full flex flex-row p-2 bg-netral-200 rounded-lg">
                                                        <div class="w-full h-fit flex flex-col">
                                                            <p
                                                                class="w-full text-start status-text text-netral-900 Body2 font-normal text-wrap">
                                                                Status</p>
                                                            <p
                                                                class="w-full text-start status-text text-netral-900 Body1 font-semibold text-wrap">
                                                                {{ $user->admin }}</p>
                                                        </div>
                                                        <div class="w-fit gap-2 flex flex-row justify-center items-center">
                                                            <i class="headline-switch text-4xl ph ph-toggle-left {{ $user->status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                                data-id="{{ $user->id }}"></i>
                                                        </div>
                                                    </div>
                                                    @if (auth()->user()->user_type === 'Admin' || auth()->user()->user_type === 'Pembina Komisi')
                                                        <div
                                                            class="headline-switch w-full flex flex-row p-2 bg-netral-200 rounded-lg">
                                                            <div class="w-full h-fit flex flex-col">
                                                                <p
                                                                    class="w-full text-start status-text text-netral-900 Body2 font-normal text-wrap">
                                                                    Admin</p>
                                                                <p
                                                                    class="w-full text-start status-text text-netral-900 Body1 font-semibold text-wrap">
                                                                    {{ $user->admin }}</p>
                                                            </div>
                                                            <div
                                                                class="w-fit gap-2 flex flex-row justify-center items-center">
                                                                <i class="headline-switch text-4xl ph ph-toggle-left {{ $user->status === 'Aktif' ? 'ph-fill ph-toggle-right' : '' }}"
                                                                    data-id="{{ $user->id }}"></i>
                                                            </div>
                                                        </div>
                                                    @else
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                        <!-- Pagination links -->
                        <!-- Load More Button -->
                        <div id="load-more-container" class="mt-4">
                            <button id="load-more-btn" class="btn-secondary">Lihat Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
            <script>
                // JavaScript for Load More functionality
                document.addEventListener('DOMContentLoaded', function() {
                    let page = 1;

                    // Function to load more users
                    function loadMoreUsers() {
                        fetch(`/load-more-users?page=${page}`, {
                                method: 'GET',
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                const userList = document.getElementById('user-list');
                                data.users.forEach(user => {
                                    let html = `
                                <tr class="w-full flex-col bg-netral-100 lg:flex-row justify-start items-center gap-4 hidden lg:flex relative">
                                    <!-- User data cells -->
                                    <!-- Adjust as per your user data -->
                                </tr>
                            `;
                                    userList.insertAdjacentHTML('beforeend', html);
                                });
                                page++;
                                if (!data.has_more) {
                                    document.getElementById('load-more-container').style.display = 'none';
                                }
                            })
                            .catch(error => {
                                console.error('Error loading more users:', error);
                            });
                    }

                    // Event listener for Load More button
                    document.getElementById('load-more-btn').addEventListener('click', function() {
                        loadMoreUsers();
                    });
                });
            </script>
        @endpush

        @include('partials.footer')
        <script src="{{ asset('js/toggleDropdown2PopUp.js') }}"></script>
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
