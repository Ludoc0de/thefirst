class sliderText {
    constructor(container, text) {
        this.container = container;
        this.text = text;
    }
}

const container = document.querySelector("#containerSlide");

const text = document.querySelector(".slideText");

const slider = new sliderText(container, text);
