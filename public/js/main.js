class moveEffect {
    constructor() {
        this.navbarLi = document.getElementsByClassName("navbar-li");
        this.window = window;
        this.navbarColors = document.getElementsByClassName("navbar-span-2");
        this.accordion = document.querySelector(".accordion");
        this.postView = document.querySelector(".postView-comment-div");
        this.minus = document.querySelector(".fa-plus");

        this.getBurger = document.querySelector("#burger");

        this.footer = document.querySelector("footer");

        //listener
        this.getBurger.addEventListener("click", this.openMenu.bind(this));
        this.window.addEventListener("scroll", this.navbarChange.bind(this));
        this.accordion.addEventListener("click", this.commentOpen.bind(this));
        //this.window.addEventListener("scroll", this.footerBar.bind(this));
    }

    navbarChange() {
        for (let navbarLi of this.navbarLi) {
            if (document.documentElement.scrollTop > 50) {
                navbarLi.classList.add("shrink");
            } else {
                navbarLi.classList.remove("shrink");
            }
        }

        for (let navbarColor of this.navbarColors) {
            if (document.documentElement.scrollTop > 50) {
                navbarColor.style.background = "linear-gradient(145deg, orange 0%, orangered 100%)";
            } else {
                navbarColor.style.background = "linear-gradient(145deg, white 0%, orange 50%)";
            }
        }
    }
    /*
    footerBar() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            this.footer.classList.add("footerShrink");
        } else {
            this.footer.classList.remove("footerShrink");
        }
    }
*/
    commentOpen() {
        this.accordion.classList.toggle('is-open');

        if (this.accordion.classList.contains('is-open')) {
            this.postView.style.height = this.postView.scrollHeight + "px";
            this.minus.classList.remove("fa-plus");
            this.minus.classList.add("fa-minus");
        } else {
            this.postView.style.height = '0';
            this.minus.classList.remove("fa-minus");
            this.minus.classList.add("fa-plus");
        }
    }

    openMenu() {
        this.getBurger.classList.toggle('animate');
        this.getBurger.classList.toggle('move');
    }

}

const move = new moveEffect();