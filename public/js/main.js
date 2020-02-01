class moveEffect {
    constructor() {
        this.navbarLi = document.getElementsByClassName("navbar-li");
        this.window = window;
        this.navbarColors = document.getElementsByClassName("navbar-span-1");
        this.accordion = document.querySelector(".accordion");
        this.postView = document.querySelector(".postView-comment-div");
        this.minus = document.querySelector(".fa-plus");

        this.getBurger = document.querySelector("#burger");

        //listener
        this.getBurger.addEventListener("click", this.openMenu.bind(this));
        this.window.addEventListener("scroll", this.navbarChange.bind(this));
        this.accordion.addEventListener("click", this.commentOpen.bind(this));


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
                navbarColor.style.backgroundColor = "#FF8A00";
            } else {
                navbarColor.style.backgroundColor = "orange";
            }
        }
    }

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
        console.log('test');
        this.getBurger.classList.toggle('animate');
    }

}

const move = new moveEffect();