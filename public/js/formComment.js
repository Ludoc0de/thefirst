class formCheck {
    constructor() {
        this.helpAuthor = document.getElementById("helpAuthor");
        this.author = document.getElementById("author");
        this.helpTextarea = document.getElementById("helpTextarea");
        this.textarea = document.querySelector(".postView-textarea");

        this.postViewButton = document.querySelector(".postView-btn-input");
        this.regex = /(^[A-Z]{1}[a-z]{2,}|^[A-Z]?[a-z]{3,})\d{0,2}$/;

        this.user = document.getElementById("login-pseudo");
        this.helpUser = document.getElementById("helpUser");
        console.log(this.helpUser);
        this.pass = document.getElementById("login-pass");
        this.helpPass = document.getElementById("helpPass");
        this.loginButton = document.querySelector(".login-button");

        //listener
        this.author.addEventListener('input', this.checkedComment.bind(this));
        this.textarea.addEventListener('input', this.checkedComment.bind(this));
        this.postViewButton.addEventListener('click', this.checkedComment.bind(this));

        this.user.addEventListener('input', this.checkedLogin.bind(this));
        this.pass.addEventListener('input', this.checkedLogin.bind(this));
        this.loginButton.addEventListener('click', this.checkedLogin.bind(this));

    }

    checkedComment() {

        if (this.regex.test(this.author.value)) {
            this.helpAuthor.textContent = " : validé";
            this.helpAuthor.style.color = "green";
        } else {
            this.helpAuthor.textContent = " : renseignez au moins 3 lettres, sans caractère spéciaux";
            this.helpAuthor.style.color = "orangered";
        }

        this.text = this.textarea.value;

        if (this.text.length > 10) {
            this.helpTextarea.textContent = " : validé";
            this.helpTextarea.style.color = "green";
        } else {
            this.helpTextarea.textContent = " : faite une phrase, s'il vous plait";
            this.helpTextarea.style.color = "orangered";
        }

        if ((this.text.length > 10) && (this.regex.test(this.author.value))) {
            this.postViewButton.value = "Envoyer";
            this.postViewButton.type = "submit";
        } else {
            this.postViewButton.value = "Renseigner le formulaire";
            this.postViewButton.type = "button";
        }

    }

    checkedLogin() {

        if (1 > 2) {
            console.log('lol');
        }

    }
}

const form = new formCheck();