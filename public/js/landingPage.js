/** @format */

const login = document.getElementById("login");
const register = document.getElementById("register");
const masukbtn = document.getElementById("masuk-btn");
const registrasibtn = document.getElementById("registrasi-btn");
const masuk = document.getElementById("masuk");

masukbtn.addEventListener("click", (e) => {
  register.style.display = "none";
  login.style.display = "flex";
});
registrasibtn.addEventListener("click", (e) => {
  register.style.display = "flex";
  login.style.display = "none";
});

//chart js
const chart = document.getElementById("doughnut-chart");
const chartData = {
  labels: [
    "Laporan Selesai Ditangani",
    "Laporan Dalam Pengajuan",
    "Laporan dalam Peninjauan",
    "Laporan dalam Penanganan",
    "Laporan tak Tertangani",
  ],
  data: [31, 152, 70, 24, 44],
};

new Chart(chart, {
  type: "doughnut",
  data: {
    labels: chartData.labels,
    datasets: [
      {
        label: "Jumlah Laporan",
        data: chartData.data,
      },
    ],
  },
  options: {
    borderWidth: 10,
    borderColor: "#e9ecef",
    backgroundColor: ["#28a745", "#ffc107", "#17A2B8", "#A370F7", "#DC3545"],
    hoverBorderWidth: 5,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

masuk.onclick = () => {
  location.replace(
    "file:///E:/CoolYeah/PEMWEB/New%20foblder/Projek2/view/beranda.html"
  );
};
