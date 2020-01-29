const accordion = document.querySelector(".accordion");

const postView = document.querySelector(".postView-comment-div");

accordion.addEventListener("click", function () {
    accordion.classList.toggle('is-open');

    if (accordion.classList.contains('is-open')) {
        postView.style.height = postView.scrollHeight + "px";
    } else {
        postView.style.height = '0';
    }
})