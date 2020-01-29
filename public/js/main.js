class moveEffect {
    constructor() {
        this.navbarLi = document.getElementsByClassName("navbar-li");
        this.window = window;

        //listener
        this.window.addEventListener("scroll", navbarChange.bind(this));
    }

    navbarChange() {
        if (document.documentElement.scrollTop > 50) {
            navbarLi.classList.add("shrink");
        } else {
            navbarLi.classList.remove("shrink");
        }
    }
}

const move = new moveEffect();