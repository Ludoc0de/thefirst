const accordion = document.querySelector(".accordion");

const postView = document.querySelector(".postView-comment-div");

const minus = document.querySelector(".fa-plus");

accordion.addEventListener("click", function () {
    accordion.classList.toggle('is-open');

    if (accordion.classList.contains('is-open')) {
        postView.style.height = postView.scrollHeight + "px";
        minus.classList.remove("fa-plus");
        minus.classList.add("fa-minus");
    } else {
        postView.style.height = '0';
        minus.classList.remove("fa-minus");
        minus.classList.add("fa-plus");
    }
})