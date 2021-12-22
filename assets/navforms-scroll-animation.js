var lastScrollTop = 220;
navbar = document.getElementsByClassName("nav-forms");
console.log(navbar);

window.addEventListener("scroll", function() {
    
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    console.log(scrollTop);
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-220px";
        navbar.style.background = "hsl(216, 53%, 9%)";
    } else if (scrollTop == 0) {
        navbar.style.top = "220";
        navbar.style.background = "";
    } else {
        navbar.style.top = "220";
    }

    lastScrollTop = scrollTop;
});