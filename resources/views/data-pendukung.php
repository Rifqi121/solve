<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE: Petisi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/data-pendukung.css">
</head>
<body id="body">
    <div class="blur">
        <div class="modal">
            <div id="modal-title">
                <p>Mulai Petisi</p>
                <button id="close-modal">
                    <i class="fa-solid fa-x fa-lg" style="color: black;"></i>
                </button>
            </div>
            <div id="modal-content">
                <div class="input">
                    <label for="judul"><span>*</span> Judul Petisi</label>
                    <p>Pernyataan spesifik, yang memberi tahu orang lain secara pasti apa yang Anda ingin agar mereka dukung</p>
                    <input type="text" name="judul" id="inp-judul" placeholder="Ketikkan judul petisi">
                </div>
                <div class="input">
                    <label for="judul"><span>*</span> Deskripsi Petisi</label>
                    <p>Anda meminta orang-orang menyetujui petisi ini dan menanda tangani 
                        Pastikan Anda menyampaikan sudut pandang Anda dalam bahasa yang jelas 
                        (apa yang Anda tidak setujui/untuk apa, apa yang harus dilakukan dan mengapa)</p>
                    <textarea name="deskripsi" id="inp-deskipsi" cols="30" rows="10" placeholder="Sampaikan ceritamu di sini ..."></textarea>
                </div>
                <div class="input">
                    <label for=""><span>*</span> Tambahkan Gambar</label>
                    <p>Lampirkan bukti yang kuat untuk meyakinkan orang lain agar mendukungmu</p>
                    <div class="input-file">
                        <input type="file" name="lampiran" id="lampiran" accept="image/*">
                        <label for="lampiran"><i class="fa-solid fa-upload" style="color: #ffffff;"></i>Upload Gambar</label>
                    </div>
                </div>
                <div class="input">
                    <label for="nama"><span>*</span> Cantumkan Nama</label>
                    <div class="checkbox">
                        <input type="checkbox" name="nama" id="nama-checkbox">
                        <p>Anda wajib mencantumkan nama Anda sebagai bentuk pertanggungjawaban atas petisi yang dibuat</p>
                    </div>
                </div>
            </div>
            <div id="modal-comment">
                    <button id="cancel-petisi-btn">Cancel</button>
                    <button id="mulai-petisi-btn">Mulai</button>
            </div>
        </div>
    </div>
    <header>
        <img src="img/LOGO SOLVE/logo_solve putih dengan tulisan.svg" alt="" id="logo-header">
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
                <a href=""><img src="img/avatar.png" alt="profil" id="profil"></a>
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
                <a href="laporan"><i class="fa fa-book"></i> Laporan</a>
            </li>
            <li>
                <a href="petisi"><i class="fa-regular fa-newspaper"></i> Petisi</a>
            </li>
            <li>
                <a href="forum"><i class="fa fa-users"></i> Forum</a>
            </li>
            <li>
                <a href="konsultasi"><i class="fa-regular fa-comments"></i> Konsultasi</a>
            </li>
            <li>
                <a href="setting"><i class="fa fa-cog"></i> Pengaturan</a>
            </li>
        </ul>
    </aside>
    <main>
        <section id="card-container">
            <div class="content-card">
                <div class="title">
                    <h3>Data Pendukung</h3>
                </div>
                <table id="tabel-laporan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Alasan</th>
                            <th>TTD</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Reyhan Putra</td>
                            <td>25-03-2024</td>
                            <td>Vivamus at augue eget arcu dictum varius duis. </td>
                            <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sarah Nindya</td>
                            <td>24-03-2024</td>
                            <td>Natoque penatibus et magnis dis. Lacus luctus accumsan tortor posuere ac ut consequat semper.</td>
                            <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rifki F</td>
                            <td>26-03-2024</td>
                            <td> Elementum facilisis leo vel fringilla est ullamcorper eget nulla facilisi.</td>
                            <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rucita Firli</td>
                            <td>28-03-2024</td>
                            <td>In est ante in nibh mauris. Consequat interdum varius sit amet mattis vulputate.</td>
                            <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                        </tr>
                    </thead>
                </table>
                <div class="action-button">
                    <a href="detail-petisi">
                        <button><i class="fa-solid fa-circle-info"></i> Detail Petisi</button>
                    </a>
                    <a href="tanda-tangan-petisi">
                        <button><i class="fa-solid fa-file-signature"></i> Tanda Tangani</button>
                    </a>
                    <a href="data-pendukung">
                        <button class="active"><i class="fa-solid fa-table"></i> Data Pendukung</button>
                    </a>
                    <div><i class="fa-solid fa-users" style="color: gray;"></i> <span>451 Pendukung</span></div>
                </div>
            </div>
        </section>

        <section class="petisi-card">
            <div id="buat-petisi">
                <button><i class="fa-solid fa-plus" style="margin-right: 10px;"></i>Mulai Petisi</button>
            </div>
            <div id="petisi-anda">
                <a href="petisi-anda">
                    <button><i class="fa-solid fa-folder" style="margin-right: 10px;"></i> Petisi Anda</button>
                </a>
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
    <script src="js/petisi.js"></script>
</body>
</html>