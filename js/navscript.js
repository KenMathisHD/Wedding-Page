const mobileNav = document.getElementById("mobile-nav");
const nav = document.getElementById("mobile").getElementsByTagName("nav");
const swirls = document.getElementById("swirls");
console.log("nav is ");
console.log(nav);

mobileNav.addEventListener("click", function () {
    
    console.log("fired");
    
    if (nav[0].classList.contains("slideMobileNav")) {
        console.log("true");
        nav[0].classList.remove("slideMobileNav");
        swirls.classList.remove("swirly");
    }
    else {
        console.log("false");
        nav[0].classList.add("slideMobileNav");
        swirls.classList.add("swirly");
    }
});

