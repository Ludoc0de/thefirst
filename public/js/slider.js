class sliderText {
    constructor(text) {
        this.text = text;

        //listener
        this.containers = document.querySelectorAll(".first-div-section");

        for (let container of this.containers) {
            container.addEventListener("mouseover", this.over);
        }

    }

    over() {
        console.log('good');
    }
}


const text = document.querySelector(".slideText");

const slider = new sliderText(text);
