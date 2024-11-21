document.addEventListener("DOMContentLoaded", function () {
    const pesanPesan = document.querySelector(".Pesan-Pesan");

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        if (isInViewport(pesanPesan)) {
            pesanPesan.classList.add("fade-in");
            pesanPesan.classList.remove("fade-out");
        } else {
            pesanPesan.classList.add("fade-out");
            pesanPesan.classList.remove("fade-in");
        }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); 
});
