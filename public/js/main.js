class moveEffect {
    constructor(navbar) {
        this.navbar = navbar;
        this.window = window;

        //listener
        this.window.addEventListener("scroll", navbarChange.bind(this));
    }

    navbarChange() {
        if (this.window.pageYOffset >= this.navbar) {
            this.navbar.style.("sticky")
        } else {
            this.navbar.classList.remove("sticky");
        }
    }
}

const navbar = document.getElementById("navbar");

const move = new moveEffect(navbar);