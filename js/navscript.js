const mobileNav = document.getElementById("mobile-nav");
const nav = document.getElementById("nav");
const swirls = document.getElementById("swirls");


mobileNav.addEventListener("click", function () {
    
    console.log("fired");
    
    if (nav.classList.contains("slideMobileNav")) {
        console.log("true");
        nav.classList.remove("slideMobileNav");
        swirls.classList.remove("swirly");
    }
    else {
        console.log("false");
        nav.classList.add("slideMobileNav");
        swirls.classList.add("swirly");
    }
});