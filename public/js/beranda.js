const statusLaporan = document.getElementById("statistik-a");
const topikPengaduan = document.getElementById("statistik-b");
const jmlPengaduan = document.getElementById("statistik-c");

const statusLaporanData = {
    labels: ["Laporan Selesai Ditangani","Laporan Dalam Pengajuan", "Laporan dalam Peninjauan","Laporan dalam Penanganan","Laporan tak Tertangani"],
    data: [31,152,70,24,44]
};

const topikPengaduanData = {
    labels: ["Diskriminasi","Keamanan", "Akademik","Fasilitas","Lainnya"],
    data: [31,152,70,24,44]
};

const jmlPengaduanData = {
    labels: ["Des","Jan", "Feb","Maret","April","Mei","Juni","Juli","Agustus","Sep","Okto","Nov"],
    data: [50,100,70,45,5]
}
     
new Chart(statusLaporan, {
    type: "doughnut",
    data: {
        labels: statusLaporanData.labels,
        datasets: [
            {
                label: "Jumlah Laporan",
                data: statusLaporanData.data,
            }
        ]
    },
    options: {
        borderWidth: 5,
        borderColor: "#ffffff",
        backgroundColor: ["#28a745","#ffc107","#17A2B8","#A370F7","#DC3545"],
        hoverBorderWidth: 10,
        plugins: {
            legend: {
                display: false,
            }
        }
    }
});

new Chart(topikPengaduan, {
    type: "bar",
    data: {
        labels: topikPengaduanData.data,
        datasets: [
            {
                label: "Jumlah Laporan", 
                data: topikPengaduanData.data,
            }
        ]
    },
    options: {
        backgroundColor: ["#ffc107","#DC3545","#f7a14a","#28a745","#6b6d6e"],
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins:{
            legend: {
                display: false,
            }
        }
    }
});

new Chart(jmlPengaduan, {
    type: "bar",
    data: {
        labels: jmlPengaduanData.labels,
        datasets: [
            {
                label: "Jumlah Laporan", 
                data: jmlPengaduanData.data,
            }
        ]
    },
    options: {
        backgroundColor: "#17A2B8",
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins:{
            legend: {
                display: false,
            }
        }
    }
});