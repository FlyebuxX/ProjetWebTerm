var lastScrollTop = 0;
navbar = document.getElementById("navbar");
nav = document.getElementsByClassName("navbar");

window.addEventListener("scroll", function() {
    
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-148px";
        navbar.style.background = "rgba(156, 0, 0, 0.521)";
    } else if (scrollTop == 0) {
        navbar.style.top = "0";
        navbar.style.background = "";
    } else {
        navbar.style.top = "0";
    }

    lastScrollTop = scrollTop;
    nav.style.background = "yellow";
});