@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    @include('partials.forum-diskusi.index')
    @include('partials.footer')
@endsection
@section('after-script')
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
    <script src="{{ asset('js/searchField.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/dropdownPopup.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
@endsection
