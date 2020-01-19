/*
window.onscroll = function () { myFunction() };

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
*/

class moveEffect {
    constructor(navbar) {
        this.navbar = navbar;
        this.sticky = navbar.offsetTop;
        this.window = window;

        //listener
        this.window.addEventListener("scroll", this.stickyScroll.bind(this));
    }

    stickyScroll() {
        if (this.window.pageYOffset >= this.sticky) {
            this.navbar.classList.add("sticky")
        } else {
            this.navbar.classList.remove("sticky");
        }
    }
}

const navbar = document.getElementById("navbar");

const move = new moveEffect(navbar);