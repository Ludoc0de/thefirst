class moveEffect {
    constructor() {
        this.navbarLi = document.getElementsByClassName("navbar-li");
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

const move = new moveEffect();