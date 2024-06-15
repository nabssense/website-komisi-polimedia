{{-- Pop Up Card --}}
@if (session('warning.mustlogin'))
        <div class="alert alert-warning">
            {{ session('warning.mustlogin') }}
        </div>
    @endif