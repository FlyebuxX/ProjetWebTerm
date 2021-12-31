var lastScrollTop = 0;
navbar = document.getElementById("navbar");

window.addEventListener("scroll", function() {
    
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-148px";
        navbar.style.background = "rgba(156, 0, 0)";
    } else if (scrollTop == 0) {
        navbar.style.top = "0";
        navbar.style.background = "";
        navbar.style.marginTop = "3rem";
    } else {
        navbar.style.top = "0";
        navbar.style.marginTop = "0rem";
    }
    lastScrollTop = scrollTop;
});