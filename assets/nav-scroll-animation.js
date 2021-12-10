var lastScrollTop = 0;
navbar = document.getElementById("navbar");

window.addEventListener("scroll", function() {
    
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-100px";
        navbar.style.background = "hsl(216, 53%, 9%)";
    } else if (scrollTop === "0" || scrolTop == 0) {
        navbar.style.top = "0";
        navbar.style.background = "";
    } else {
        navbar.style.top = "0";
    }

    lastScrollTop = scrollTop;
});