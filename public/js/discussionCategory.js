function toggleCategory(categorySlug, allRoute, categoryRoute) {
    const currentUrl = window.location.href;
    const categoryUrl = categoryRoute;

    if (currentUrl.includes(categorySlug)) {
        window.location.href = allRoute;
    } else {
        window.location.href = categoryRoute;
    }
}