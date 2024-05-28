const btnUpvote = document.querySelectorAll(".upvote");
const btnDownvote = document.querySelectorAll(".downvote");

for (let i = 0; i < btnUpvote.length; i++) {
  btnUpvote[i].onclick = () => {
    btnUpvote[i].classList.toggle("active");
    btnDownvote[i].classList.forEach((element) => {
      if (element === "active") {
        btnDownvote[i].classList.remove("active");
      }
    });
  };
}
for (let i = 0; i < btnDownvote.length; i++) {
  btnDownvote[i].onclick = () => {
    btnDownvote[i].classList.toggle("active");
    btnUpvote[i].classList.forEach((element) => {
      if (element === "active") {
        btnUpvote[i].classList.remove("active");
      }
    });
  };
}

const comment = document.querySelectorAll(".comment");
const modal = document.querySelector(".modal");
const blurbg = document.querySelector(".blur");
const body = document.getElementById("body");
const closeModal = document.getElementById("close-modal");

comment.forEach((element) => {
  element.onclick = () => {
    modal.classList.add("modal-active");
    blurbg.classList.add("blur-active");
    body.classList.add("nonscroll");
  };
});

closeModal.onclick = () => {
  modal.classList.remove("modal-active");
  blurbg.classList.remove("blur-active");
  body.classList.remove("nonscroll");
};
