class sliderText {
    constructor(text) {
        this.text = text;
        this.variable = 32;
        this.time = 350;
        this.interval = null;

        //listener
        this.containers = document.querySelectorAll(".first-div-section");
        this.test = document.querySelectorAll(".containerSlide");

        //essayer avec for loop  et regarder si obtiens le container précisement
        for (let i = 0; i < this.containers.length; i++) {

            this.containers[1].addEventListener("mouseover", this.autoSlide.bind(this));

        }


    }

    over() {

        //this.test.classList.add('defaultJs');

        if (this.variable < -1) {
            this.variable = NaN;
        }


        /*good code
        this.moveText = this.text.style;
        this.moveText.marginTop = this.variable + "%";
        */


        this.moveText = this.text[1].style;
        this.moveText.marginTop = this.variable + "%";


        this.variable--;
        console.log(this.variable)

    }

    //change text auto with interval 
    autoSlide() {
        this.interval = setInterval(this.over.bind(this), this.time);
    }
}


const text = document.querySelectorAll(".slideText");

const slider = new sliderText(text);
