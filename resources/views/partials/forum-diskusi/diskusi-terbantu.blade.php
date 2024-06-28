{{-- Right Content/ POPULER --}}
<section class="w-full xl:w-fit lg:max-w-480 flex-col justify-start items-start gap-4 flex">
    <div
        class="w-full py-2 px-4 md:py-2 md:px-6 bg-love-base md:rounded-lg  justify-start items-start flex text-netral-100 font-semibold Heading2">
        Sangat Terbantu
    </div>

    @forelse ($discussionsTerbantu as $discussion)
        {{-- Question --}}
        <div class="w-full h-fit px-4 lg:px-8 bg-white md:rounded-lg flex-col justify-start items-start flex">
            <div
                class="w-full h-fit flex-col justify-start items-start gap-8 py-4 lg:py-8 flex border-b-2 border-netral-200">
                <div class="w-full h-fit flex-col justify-center items-start gap-4 lg:gap-6 flex">
                    {{-- Profil --}}
                    <div class="w-full justify-start items-center gap-2 inline-flex">
                        <div class="flex-none" onclick="pageUserProfile()">
                            <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                ? $discussion->user->profile_picture
                                : Storage::url($discussion->user->profile_picture) }}"
                                alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 md:w-12">
                        </div>
                        <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                            <div class="w-full justify-start items-center gap-2 inline-flex ">
                                <div class="justify-start items-center gap-2 flex">
                                    <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                        {{ $discussion->user->fullname }}</p>
                                    <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                </div>
                                <div class="text-netral-900 font-semibold hidden md:flex">
                                    -</div>
                                <div class="w-fit text-netral-500 font-normal flex relative hidden lg:flex">
                                    <p class="w-full line-clamp-1">{{ $discussion->user->user_type }}
                                    </p>
                                </div>
                                <i class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                    <div id="info-akun"
                                        class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                        {{ $discussion->user->user_type }}</div>
                                </i>
                            </div>
                            <p class="w-fit text-neutral-900 font-medium Body2">
                                {{ $discussion->created_at->diffForHumans() }}</p>
                        </div>
                        <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                    </div>
                    {{-- Content --}}
                    <div class="w-full h-fit flex-col justify-start items-start gap-4 flex">
                        <div class="w-full flex flex-col gap-2">
                            <button
                                onclick="window.location.href='{{ route('forum-diskusi.diskusi.kategori.show', $discussion->category->slug) }}'"
                                class="w-fit h-fit px-2 bg-indigo-200 rounded-lg justify-start items-center gap-2 flex flex-none text-neutral-900 font-medium Body2">
                                {{ $discussion->category->name }}
                            </button>
                            <div class="w-full text-neutral-900 font-normal Body1 md:Heading4">
                                {{ $discussion->title }}</div>
                        </div>
                        @if (isset($discussion->image) && !empty($discussion->image))
                            <div class="h-48 rounded-2xl overflow-clip">
                                <img class="h-full" src="{{ asset('storage/' . $discussion->image) }}"
                                    alt="Gambar Diskusi">
                            </div>
                        @endif
                    </div>
                    {{-- Like & Comment --}}
                    <div class="w-full h-fit justify-start items-center gap-2 md:gap-4 inline-flex"
                        onclick="event.stopPropagation()">
                        <button id="discussion-like-{{ $discussion->slug }}" type="button"
                            data-discussion-slug="{{ $discussion->slug }}" data-liked="{{ $discussion->liked() }}"
                            @guest onclick="pageMasuk()" @endguest
                            class="like-button w-fit h-fit rounded-full justify-start items-center gap-2 flex flex-none Body1">
                            <div class="w-fit flex flex-none items-center gap-1">
                                <i class="text-32 lg:text-4xl text-love-base ph-heart {{ $discussion->liked() ? 'ph-fill' : 'ph' }}"
                                    alt="Like" id="discussion-like-icon-{{ $discussion->slug }}"></i>
                            </div>
                            <div id="discussion-like-count-{{ $discussion->slug }}"
                                class="w-full text-nowrap rounded-full justify-start items-start text-love-base font-medium flex md:after:content-['\00A0_org_merasa_terbantu']">
                                {{ $discussion->likeCount }}
                            </div>
                        </button>
                        <div class="w-full rounded-full justify-start items-center gap-2 flex Body1">
                            <div class="w-fit flex flex-none items-center gap-1">
                                <i class="text-32 text-netral-900 lg:text-4xl ph ph-chat-teardrop-text"></i>
                                <div class="text-netral-900 font-medium flex">3</div>
                            </div>
                            <button onclick="pageForumDiskusiPertanyaan()" class="commentbar">
                                <div class="w-full line-clamp-1">Berikan jawaban atau tanggapan</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Comment --}}
            <div onclick="pageForumDiskusiPertanyaan()"
                class="w-full h-fit flex-col justify-center items-center py-4 lg:py-8 gap-8 flex cursor-pointer">
                <div class="w-full h-fit flex-col justify-start items-center gap-6 flex">

                    <div class="w-full h-fit flex-col justify-center items-center gap-4 flex">
                        <div class="w-full justify-start items-center gap-2 inline-flex">
                            {{-- Profil --}}
                            <div class="flex-none" onclick="pageUserProfile()">
                                <img src="{{ filter_var($discussion->user->profile_picture, FILTER_VALIDATE_URL)
                                    ? $discussion->user->profile_picture
                                    : Storage::url($discussion->user->profile_picture) }}"
                                    alt="{{ $discussion->user->fullname }}" class="rounded-full w-9 md:w-12">
                            </div>
                            <div class="w-full h-fit flex-col justify-center items-start inline-flex Body1">
                                <div class="w-full justify-start items-center gap-2 inline-flex ">
                                    <div class="justify-start items-center gap-2 flex">
                                        <p class="w-full text-netral-900 font-semibold line-clamp-1">
                                            {{ $discussion->user->fullname }}</p>
                                        <i class="Heading3 ph-fill text-blue-700 ph-seal-check"></i>
                                    </div>
                                    <div class="text-netral-900 font-semibold hidden md:flex">
                                        -</div>
                                    <div class="w-fit  text-netral-500 font-normal relative hidden lg:flex">
                                        <p class="w-full line-clamp-1">{{ $discussion->user->user_type }}
                                        </p>
                                    </div>
                                    <i class="Heading3 leading-none ph ph-info flex md:hidden group/info-akun relative">
                                        <div id="info-akun"
                                            class="w-fit h-fit p-4 group-hover/info-akun:flex bg-netral-900 bg-opacity-40 Body2 absolute hidden right-0 bottom-0 line-clamp-2 text-white rounded-lg">
                                            {{ $discussion->user->user_type }}</div>
                                    </i>
                                </div>
                                <p class="w-fit text-neutral-900 font-medium Body2">
                                    {{ $discussion->created_at->diffForHumans() }}</p>
                            </div>
                            <i class="w-fit text-netral-900 text-2xl md:text-4xl ph ph-dots-three"></i>
                        </div>
                        {{-- Content --}}
                        <div class="w-full text-neutral-900 font-normal Body1 md:Heading4 line-clamp-2">
                            {{ $discussion->title }}</div>
                        <button class="btn-tertiary-sm p-0">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.like-button').click(function() {
                    var slug = $(this).data('discussion-slug');
                    var isLiked = $(this).data('liked');
                    var likeRoute = isLiked ?
                        '{{ route('forum-diskusi.diskusi.unlike', '__slug__') }}' :
                        '{{ route('forum-diskusi.diskusi.like', '__slug__') }}';
        
                    likeRoute = likeRoute.replace('__slug__', slug);
        
                    $.ajax({
                        method: 'POST',
                        url: likeRoute,
                        data: {
                            '_token': '{{ csrf_token() }}'
                        }
                    }).done(function(res) {
                        if (res.status === 'success') {
                            $('#discussion-like-count-' + slug).text(res.data.likeCount);
        
                            var likeIcon = $('#discussion-like-icon-' + slug);
                            if (isLiked) {
                                likeIcon.addClass('ph').removeClass('ph-fill');
                            } else {
                                likeIcon.removeClass('ph').addClass('ph-fill');
                            }
        
                            $('.like-button').data('liked', !isLiked);
                        }
                    });
                });
            });
        </script>
    @empty
        <div class="w-full flex justify-center Heading4 py-8">
            Data Tidak Ditemukan
        </div>
    @endforelse
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const likeButtons = document.querySelectorAll('#discussion-like');

        likeButtons.forEach(button => {
            button.addEventListener('click', async () => {
                const isLiked = button.getAttribute('data-liked') === 'true';

                // Kirim permintaan ke server untuk toggle like
                const response = await fetch(`/discussion/${discussion.id}/like`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        liked: !isLiked
                    })
                });

                if (response.ok) {
                    const data = await response.json();

                    // Perbarui ikon dan jumlah like
                    button.querySelector('.ph-heart').classList.toggle('ph-fill');
                    button.setAttribute('data-liked', !isLiked);
                    document.querySelector('#discussion-like-count').textContent = data
                        .likeCount;
                } else {
                    console.error('Gagal mengirimkan permintaan like');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Preview image when file input changes
        $('#image-input').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').attr('src', e.target.result).removeClass('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                $('#image-preview').attr('src', '{{ asset('images/default-image.png') }}').removeClass(
                    'hidden');
            }
        });
    });
</script>
