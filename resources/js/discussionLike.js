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