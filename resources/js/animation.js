document.querySelectorAll(".hover-animation").forEach(function(element) {
    element.addEventListener("mouseenter", function() {
        this.querySelector('.moving-animation').classList.add("movingText");
    });
});

