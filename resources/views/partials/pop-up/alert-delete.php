<div id="alertDelete-{{ $discussion->slug }}"
    class="flex-col Body1 gap-2 fixed inset-0 justify-center items-center z-50 w-screen h-screen bg-opacity-20 bg-netral-900 hidden">
    <div onclick="toggleDropdownPopUp('{{ $discussion->slug }}')"
        class="close-button-bg w-screen h-screen relative justify-center items-center flex">
        <div class="flex flex-col bg-netral-100 rounded-xl w-full lg:w-480 h-fit justify-center items-center overflow-clip gap-4 p-4"
            role="none" onclick="event.stopPropagation();">
            <div>Kamu yakin ingin menghapus ini?</div>
            <div class="w-full flex flex-row gap-2">
                <button id="confirm-delete-button" class="w-full flex btn-tertiary-sm px-4">
                    Iya
                </button>
                <button id="cancel-delete-button" class="w-full flex btn-tertiary-sm px-4">
                    Tidak
                </button>
            </div>
        </div>
    </div>
</div>
