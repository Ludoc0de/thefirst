class imageSend {
    constructor() {

        this.button = document.querySelector(".postviewImage-button");
        this.imageInfo = document.querySelector(".imageSend");
        this.contentImage = document.getElementById("content-image");
        console.log(this.contentImage);
        //listener
        this.button.addEventListener('click', this.send.bind(this));


    }

    send() {
        if (this.contentImage) {
            this.imageInfo.textContent = "Ajouter une image!";
            this.imageInfo.style.color = "orangered";

        } else {
            this.imageInfo.textContent = "image envoyé !";
            this.imageInfo.style.color = "green";
        }

    }

}

const buttonImage = new imageSend();