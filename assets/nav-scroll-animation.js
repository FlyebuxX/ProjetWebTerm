var lastScrollTop = 0;
navbar = document.getElementById("navbar");

window.addEventListener("scroll", function() {
    
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-148px";
        navbar.style.background = "rgb(13, 4, 4)";
        navbar.style.borderBottom = "1px solid rgb(95, 3, 3)";
    } else if (scrollTop == 0) {
        navbar.style.top = "0";
        navbar.style.background = "";
        navbar.style.marginTop = "3rem";
        navbar.style.borderBottom = "";
    } else {
        navbar.style.top = "0";
        navbar.style.marginTop = "0rem";
    }
    lastScrollTop = scrollTop;
});