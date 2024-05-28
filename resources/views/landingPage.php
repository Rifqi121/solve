<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE:</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/landingPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div id="gradient-color">
        <header>
            <a href="#gradient-color">
                <img id="logo-header" src="img/LOGO SOLVE/logo_solve putih dengan tulisan.svg" alt="solveLogo">
            </a>
            <ul>
                <li>
                    <a href="#features">Fitur</a>
                </li>
                <li>
                    <a href="#guide">Petunjuk</a>
                </li>
                <li>
                    <a href="#stat">Statistik</a>
                </li>
                <li>
                    <a href="#footer-contact">Kontak</a>
                </li>
            </ul>
        </header>
    
    <main>
        <section id="about-login">
            <div id="about">
                <h2>Tentang Solve</h2>
                <p>SOLVE: System for Complaint and Voice Expression merupakan sebuah aplikasi website yang dirancang khusus untuk mahasiswa universitas Pendidikan Indonesia kampus Cibiru. 
                    Aplikasi ini memberikan platform yang terintegrasi untuk mahasiswa menyampaikan pengaduan, aspirasi, dan saran terkait dengan lingkungan akademik, prodi dan organisasi. 
                    SOLVE membuka kesempatan bagi mahasiswa untuk berpartisipasi aktif dalam peningkatan kualitas prodi, memperkuat komunitas akademik, dan meningkatkan pengalaman belajar.</p>
            </div>
            <div id="login">
                <h3>Masuk</h3>
                <p>Selamat datang kembali! Silakan masukkan username dan password untuk login.</p>
                <form action="" method="post">
                    <input type="text" placeholder="Masukkan Email" name="email" id="email">
                    <input type="password" placeholder="Masukkan Password" name="password" id="password">
                    <span id="forgotpw"><a href="">Forgot Password ?</a></span>
                </form>
                <a href="beranda" style="width: 80%;"><button type="submit" id="masuk">Masuk</button></a>
                <span id="buatakun">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;Belum punya akun?&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</span>
                <button id="registrasi-btn">Registrasi</button>
            </div>
            <div id="register">
                <h3>Registrasi</h3>
                <p>Selamat datang! Silakan isi data untuk membuat akun.</p>
                <form action="" method="post">
                    <input type="text" placeholder="Masukkan Email" name="email" id="email">
                    <input type="text" placeholder="Masukkan Username" name="username" id="username">
                    <input type="password" placeholder="Masukkan Password" name="password" id="password">
                    <input type="password" placeholder="Konfirmasi Password" name="password" id="password">
                </form>
                <a href="beranda.html" style="width: 80%;"><button type="submit" id="masuk">Buat Akun</button></a>
                <span id="buatakun">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;Sudah punya akun?&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</span>
                <button id="masuk-btn">Masuk</button>
            </div>
        </section>
    </div>
        <section id="info">
            <div id="features">
                <div class="feature-card">
                    <img src="img/logos/laporan pengaduan dan aspirasi.svg" alt="Pengaduan dan Aspirasi">
                    <h3>Pengaduan dan Aspirasi</h3>
                    <p> Mahasiswa dapat mengirimkan pengaduan terkait dengan berbagai masalah di prodi, seperti fasilitas yang rusak, 
                        layanan yang kurang memuaskan, atau kekurangan sarana pendukung belajar.</p>
                </div>
                <div class="feature-card">
                    <img src="img/logos/petisi online.svg" alt="Petisi">
                    <h3>Petisi Online</h3>
                    <p> Sebuah surat elektronik yang dibuka dan dapat diakses secara online untuk menyerukan dukungan terhadap suatu isu atau tuntutan tertentu.</p>
                </div>
                <div class="feature-card" id="feature-card-caption">
                    <p>&mdash; What SOLVE: do?</p>
                    <h3>OUR FEATURES</h3>
                    <p>Berikut ini adalah fitur-fitur yang kami sediakan.</p>
                </div>
                <div class="feature-card">
                    <img src="img/logos/konsultasi online.svg" alt="konsultasi">
                    <h3>Konsultasi Online</h3>
                    <p> Mahasiswa dapat berkonsultasi secara online pada aplikasi untuk 
                        mendapatkan informasi terkait permasalahan akademik.</p>
                </div>
                <div class="feature-card">
                    <img src="img/logos/laporan statistik.svg" alt="Statistik">
                    <h3>Laporan Statistik</h3>
                    <p> Pengguna dapat melihat tren data laporan yang masuk dalam bentuk grafik, tabel, atau visualisasi lainnya.</p>
                </div>
                <div class="feature-card">
                    <img src="img/logos/aspiration circle.svg" alt="Aspiration Circle">
                    <h3>Aspiration Circle</h3>
                    <p> Pengguna dapat membuat postingan pada aplikasi untuk membuka forum di mana pengguna lain dapat memberikan komentar, upvote, dan downvote.</p>
                </div>
            </div>
            <div id="guide">
                <h3>PETUNJUK PENGGUNAAN</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/pVJlNv0Zgd0?si=ROKmQsMzQ0JqCoCK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div id="stat">
                <div id="stat-first-sec">
                    <div class="stats-card" id="users">
                        <h3>Jumlah User</h3>
                        <span>356</span>
                    </div>
                    <div class="stats-card" id="reports">
                        <h3>Jumlah Laporan</h3>
                        <span>321</span>
                    </div>
                    <div class="stats-card" id="satisfication">
                        <h3>Tingkat Ketuntasan Laporan</h3>
                        <span>9.65%</span>
                    </div>
                </div>
                <div id="chart-container">
                    <div id="live-chart">
                        <div id="donut-chart">
                            <h3 style="text-align: center;">Statistik Saat Ini</h3>
                            <canvas id="doughnut-chart"></canvas>
                        </div>
                        <div id="chart-legend">
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
                    <div class="stats-card" id="ketuntasan">
                        <h3>Tingkat Kepuasan</h3>
                        <span>27.8%</span>
                        <img src="img/angryEmoji.png" style="width: 180px; margin-top: 14px;" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div id="footer-contact">
            <div id="socmed-contact">
                <h5>Follow Us</h5>
                <ul>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-facebook fa-lg" style="color: white;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-instagram fa-lg" style="color: white;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-x-twitter fa-lg" style="color: white;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-youtube fa-xl" style="color: white;"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div id="contact-us">
                <h5>Contact Us</h5>
                <ul>
                    <li>
                        <div>
                            <i class="fa-solid fa-phone"></i>
                            <p>(+62) 813XXXXXXXX</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <i class="fa-solid fa-envelope"></i>
                            <p>yourvoicematter@upi.edu</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <i class="fa-solid fa-map-pin"></i>
                            <p>UPI Kampus Cibiru</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="copyright">
            <p>Copyright &#169; 2024. SOLVE: All Rights Reserved.</p>
        </div>      
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/landingPage.js"></script>
    <script src="https://kit.fontawesome.com/bc344815e5.js" crossorigin="anonymous"></script>
</body>
</html>