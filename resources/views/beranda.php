<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE: Beranda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/beranda.css">
</head>
<body>
    <header>
        <img src="../aset/LOGO SOLVE/logo_solve putih dengan tulisan.svg" alt="" id="logo-header">
        <form action="">
            <div id="search-container">
                <input type="text" placeholder="Search.." id="search">
                <button><i class="fa fa-search fa-lg" style="color: black;"></i></button>
            </div>
        </form>
        <ul>
            <li>
                <a href=""><i class="fa-solid fa-moon fa-lg"></i></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-bell fa-lg"></i></a>
            </li>
            <li>
                <a href=""><img src="../aset/avatar.png" alt="profil" id="profil"></a>
            </li>
        </ul>
    </header>
    <aside>
        <ul>
            <li>
                <a href="beranda">
                    <i class="fa fa-home"></i> Beranda
                </a>
            </li>
            <li>
                <a href="laporan">
                    <i class="fa fa-book"></i> Laporan
                </a>
            </li>
            <li>
                <a href="petisi">
                    <i class="fa-regular fa-newspaper"></i> Petisi
                </a>
            </li>
            <li>
                <a href="forum">
                    <i class="fa fa-users"></i> Forum
                </a>
            </li>
            <li>
                <a href="konsultasi">
                    <i class="fa-regular fa-comments"></i> Konsultasi
                </a>
            </li>
            <li>
                <a href="setting"><i class="fa fa-cog"></i> Pengaturan</a>
            </li>
        </ul>
    </aside>
    <main>
        <section id="card-container">
            <div class="content-card">
                <div id="title">
                    <h4>Statistik Status Laporan</h4>
                </div>
                <div id="chart-container">
                    <div id="donut-chart">
                        <canvas id="statistik-a"></canvas>
                    </div>
                    <div class="chart-legend">
                        <ul>
                            <li>
                                <i class="fa-solid fa-square" style="color: #28a745; margin-right: 12px;"></i>
                                Laporan Selesai Ditangani : <span>31</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #ffc107; margin-right: 12px;"></i>
                                Laporan Dalam Pengajuan : <span>152</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #17A2B8; margin-right: 12px;"></i>
                                Laporan dalam Peninjauan : <span>70</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #A370F7; margin-right: 12px;"></i>
                                Laporan dalam Penanganan : <span>24</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #DC3545; margin-right: 12px;"></i>
                                Laporan tak Tertangani : <span>44</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-card">
                <div id="title">
                    <h4>Statistik Topik Pengaduan</h4>
                </div>
                <div id="barchart-container">
                    <div id="bar-chart">
                        <canvas id="statistik-b"></canvas>
                    </div>
                    <div class="chart-legend">
                        <ul>
                            <li>
                                <i class="fa-solid fa-square" style="color:#ffc107; margin-right: 12px;"></i>
                                Diskriminasi : <span>31</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #DC3545; margin-right: 12px;"></i>
                                Keamanan : <span>152</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #f7a14a; margin-right: 12px;"></i>
                                Akademik : <span>70</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #28a745; margin-right: 12px;"></i>
                                Fasilitas : <span>24</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-square" style="color: #6b6d6e; margin-right: 12px;"></i>
                                lainnya : <span>44</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-card">
                <div id="title">
                    <h4>Statistik Jumlah Pengaduan</h4>
                </div>
                <div id="barchart2-container">
                    <div id="bar-chart2">
                        <canvas id="statistik-c"></canvas>
                    </div>
                    <div class="chart-legend">
                        <i class="fa-solid fa-square" style="color:#17A2B8; margin-right: 12px; margin-top: 10px;"></i>
                        <h5>Jumlah Pengaduan Per Bulan</h5>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="tren">
            <div id="tren-container">
                <h3>Tren Saat Ini</h3>
                <div id="tren-content-container">
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#diskriminasi</span>
                                <span>#keamanan</span>
                                <span>#lingkungan</span>
                            </div>
                            <p>Putri Solo</p>
                            <span>1.223 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#fasilitas</span>
                                <span>#diskriminasi</span>
                            </div>
                            <p>Sekre KSR</p>
                            <span>69 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#lingkungan</span>
                                <span>#akademik</span>
                            </div>
                            <p>Jaster Merah</p>
                            <span>324 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#diskriminasi</span>
                                <span>#keamanan</span>
                                <span>#lingkungan</span>
                            </div>
                            <p>Putri Solo</p>
                            <span>1.223 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#diskriminasi</span>
                                <span>#keamanan</span>
                                <span>#lingkungan</span>
                            </div>
                            <p>Putri Solo</p>
                            <span>1.223 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#diskriminasi</span>
                                <span>#keamanan</span>
                                <span>#lingkungan</span>
                            </div>
                            <p>Putri Solo</p>
                            <span>1.223 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#diskriminasi</span>
                                <span>#keamanan</span>
                                <span>#lingkungan</span>
                            </div>
                            <p>Putri Solo</p>
                            <span>1.223 post</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="tren-content">
                            <div>
                                <span>#diskriminasi</span>
                                <span>#keamanan</span>
                                <span>#lingkungan</span>
                            </div>
                            <p>Putri Solo</p>
                            <span>1.223 post</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/beranda.js"></script>
</body>
</html>