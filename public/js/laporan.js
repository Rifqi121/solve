const modal = document.querySelector(".modal");
const blurbg = document.querySelector(".blur");
const body = document.getElementById("body");
const closeModal = document.getElementById("close-modal");
const btnForm = document.getElementById("tambah-laporan");
const modalDetail = document.querySelector(".modal-detail");
const blurbgDetail = document.querySelector(".blur-detail");
const closeModalDetail = document.getElementById("close-detail");
const btndetail = document.querySelectorAll(".btn-detail")

btnForm.onclick = () => {
    modal.classList.add("modal-active");
    blurbg.classList.add("blur-active");
    body.classList.add("nonscroll");
};

closeModal.onclick = () => {
    modal.classList.remove("modal-active");
    blurbg.classList.remove("blur-active");
    body.classList.remove("nonscroll");
}

btndetail.forEach(element =>{
    element.onclick = () =>{
        modalDetail.classList.add("modalDetail-active");
        blurbgDetail.classList.add("blur-active");
        body.classList.add("nonscroll");
    }
});

closeModalDetail.onclick = () => {
    modalDetail.classList.remove("modalDetail-active");
    blurbgDetail.classList.remove("blur-active");
    body.classList.remove("nonscroll");
}

function changeColor() {
let pengaduanRadio = document.getElementById("pengaduan");
let aspirasiRadio = document.getElementById("aspirasi");
let labelaspir = document.getElementById("label-aspir");
let labelpengaduan = document.getElementById("label-pengaduan");
let pengaduanDiv = document.getElementById("pengaduanDiv");
let aspirasiDiv = document.getElementById("aspirasiDiv");

    if (pengaduanRadio.checked) {
        pengaduanDiv.style.backgroundColor = "#990000";
        labelpengaduan.style.color = "#ffffff";
        labelaspir.style.color = "#000000";
        aspirasiDiv.style.backgroundColor = ""; // Clear background color
    } else if (aspirasiRadio.checked) {
        aspirasiDiv.style.backgroundColor = "#990000";
        labelaspir.style.color = "#ffffff";
        labelpengaduan.style.color = "#000000";
        pengaduanDiv.style.backgroundColor = ""; // Clear background color
    }
}