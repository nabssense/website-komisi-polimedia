function sortDiscussions(orderBy) {
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('order_by', orderBy);
    window.location.search = urlParams.toString();
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const orderBy = urlParams.get('order_by');

    if (orderBy) {
        document.getElementById('sort-' + orderBy).classList.add('active');
    }
});