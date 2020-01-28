const accordion = document.querySelector(".accordion");

const postView = document.querySelector(".postView-comment-div");


accordion.addEventListener("click", function () {
    postView.classList.toggle('is-open')
})