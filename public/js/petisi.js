/** @format */

const lihatbtn = document.querySelector("#buat-petisi button");
const modal = document.querySelector(".modal");
const blurbg = document.querySelector(".blur");
const body = document.getElementById("body");
const closeModal = document.getElementById("close-modal");

lihatbtn.onclick = () => {
  modal.classList.add("modal-active");
  blurbg.classList.add("blur-active");
  body.classList.add("nonscroll");
};
closeModal.onclick = () => {
  modal.classList.remove("modal-active");
  blurbg.classList.remove("blur-active");
  body.classList.remove("nonscroll");
};
