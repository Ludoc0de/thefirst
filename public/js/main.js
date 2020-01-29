class moveEffect {
    constructor() {
        this.navbarLi = document.getElementsByClassName("navbar-li");
        this.window = window;

        //listener
        this.window.addEventListener("scroll", this.navbarChange.bind(this));
    }

    navbarChange() {
        for (let navbarLi of this.navbarLi) {
            if (document.documentElement.scrollTop > 50) {
                navbarLi.classList.add("shrink");
            } else {
                navbarLi.classList.remove("shrink");
            }
        }
    }
}

const move = new moveEffect();