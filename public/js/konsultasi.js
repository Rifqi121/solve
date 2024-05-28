/** @format */

const optionbtn = document.getElementById("option-btn");
const dropdown = document.querySelector(".dropdown");
optionbtn.onclick = () => {
  dropdown.classList.toggle("dropdown-active");
};

document.onclick = (e) => {
  if (e.target.id !== "option-btn" && e.target.id !== "option-icon") {
    dropdown.classList.remove("dropdown-active");
  }
};

const akademikOpt = document.getElementById("akademik-btn");
const prodiOpt = document.getElementById("prodi-btn");
const bemOpt = document.getElementById("bem-btn");
const chatsection = document.getElementById("chat-section");
const temp = chatsection.innerHTML;

console.log(chatsection)

prodiOpt.onclick = () => {
    const avatar = document.querySelector("#consultant-profile img");
    const consultant = document.querySelector("#consultant-profile div span");
    const statusinfo = document.querySelector("#consultant-profile div p");

    avatar.setAttribute("src", "../aset/P.png");
    consultant.innerText = "Prodi";
    statusinfo.innerHTML = '<i class="fa-solid fa-circle fa-xs" style="color: #198754;"></i> Available';
    chatsection.innerHTML = "<div class='chat-kosong'><p>Belum ada riwayat konsultasi</p></div>";
}

akademikOpt.onclick = () => {
    const avatar = document.querySelector("#consultant-profile img");
    const consultant = document.querySelector("#consultant-profile div span");
    const statusinfo = document.querySelector("#consultant-profile div p");

    avatar.setAttribute("src", "../aset/A.png");
    consultant.innerText = "Akademik";
    statusinfo.innerHTML = '<i class="fa-solid fa-circle fa-xs" style="color: #198754;"></i> Available';
    chatsection.innerHTML = temp;
}

bemOpt.onclick = () => {
    const avatar = document.querySelector("#consultant-profile img");
    const consultant = document.querySelector("#consultant-profile div span");
    const statusinfo = document.querySelector("#consultant-profile div p");

    avatar.setAttribute("src", "../aset/B.png");
    consultant.innerText = "BEM";
    statusinfo.innerHTML = '<i class="fa-solid fa-circle fa-xs" style="color: #dc3545;"></i> Sibuk';
    chatsection.innerHTML = "<div class='chat-kosong'><p>Belum ada riwayat konsultasi</p></div>";
}

