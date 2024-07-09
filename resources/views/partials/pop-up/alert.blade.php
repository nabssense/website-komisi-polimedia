@if(session('error'))
    <div id="error-alert" class="w-full h-fit p-8 bg-danger-base text-netral-100 fixed z-50 Heading4 lg:Heading2 drop-shadow-sm animate-slide-down">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div id="success-alert" class="w-full h-fit p-8 bg-teal-500 text-netral-100 fixed z-50 Heading4 lg:Heading2 drop-shadow-sm animate-slide-down">
        {{ session('success') }}
    </div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const errorAlert = document.getElementById('error-alert');
        const successAlert = document.getElementById('success-alert');

        if (errorAlert) {
            setTimeout(() => {
                errorAlert.style.display = 'none';
            }, 3500); // 3500 milliseconds = 35seconds
        }

        if (successAlert) {
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 3500); // 3500 milliseconds = 35seconds
        }
    });
</script>
