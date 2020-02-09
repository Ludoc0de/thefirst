class imageSend {
    constructor() {

        this.button = document.querySelector(".postviewImage-button");
        this.imageInfo = document.querySelector(".imageSend");
        //listener
        this.button.addEventListener('click', this.send.bind(this));

    }

    send() {
        this.imageInfo.textContent = "image envoyé !";
        this.imageInfo.style.color = "green";
    }

}

const buttonImage = new imageSend();