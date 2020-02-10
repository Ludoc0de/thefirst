class formLoginCheck {
    constructor() {

        this.user = document.getElementById("login-pseudo");
        this.helpUser = document.getElementById("helpUser");
        this.pass = document.getElementById("login-pass");
        this.helpPass = document.getElementById("helpPass");
        this.loginButton = document.querySelector(".login-button");

        //listener
        this.user.addEventListener('input', this.checkedLogin.bind(this));
        this.pass.addEventListener('input', this.checkedLogin.bind(this));
        this.loginButton.addEventListener('click', this.checkedLogin.bind(this));

    }

    checkedLogin() {
        if ((this.user.value == "") || (this.pass.value == "")) {
            this.helpUser.textContent = " : Renseigner le formulaire";
            this.helpUser.style.color = "orangered";
            this.loginButton.textContent = "Renseigner le formulaire";

        } else {
            this.loginButton.textContent = "Se connecter";
            this.loginButton.type = "submit";
        }
    }

}

const formLogin = new formLoginCheck();

