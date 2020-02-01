class formLoginCheck {
    constructor() {

        this.user = document.getElementById("login-pseudo");
        this.helpUser = document.getElementById("helpUser");
        console.log(this.helpUser);
        this.pass = document.getElementById("login-pass");
        this.helpPass = document.getElementById("helpPass");
        this.loginButton = document.querySelector(".login-button");

        //listener
        this.user.addEventListener('input', this.checkedLogin.bind(this));
        this.pass.addEventListener('input', this.checkedLogin.bind(this));
        this.loginButton.addEventListener('click', this.checkedLogin.bind(this));

    }


}

const formLogin = new formLoginCheck();

