<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE: Laporan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/laporan.css"> 
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
</head>

<body>
    <div class="blur">
        <div class="modal">
            <div id="modal-title">
                <p>Kirimkan Laporan Anda</p>
                <button id="close-modal">
                    <i class="fa-solid fa-x fa-lg" style="color: black;"></i>
                </button>
            </div>
            <div id="modal-content">
                <div class="timeline-container">   
                    <div class="timeline-laporan" style="position: relative;">
                        <div class="icon-timeline" style="z-index: 100;">
                            <i class="fa-solid fa-globe" style="z-index: 100;"></i>
                            <hr style="position: absolute; top: 25px; width: 100%; left: 100px; z-index: -100;">
                        </div>
                        <div class="text-timeline">
                            <h4>Buat Laporan</h4>
                        </div>
                    </div>
    
                    <div class="timeline-laporan" style="position: relative;">
                        <div class="icon-timeline" style="z-index: 100;">
                            <i class="fa-solid fa-arrow-up-right-from-square" style="z-index: 100;"></i>
                            <hr style="position: absolute; top: 25px; width: 100%; left: 100px; z-index: -100;">
                        </div>
                        <div class="text-timeline">
                            <h4>Proses Peninjauan</h4>
                        </div>
                    </div>
                
                    <div class="timeline-laporan" style="position: relative;">
                        <div class="icon-timeline" style="z-index: 100;">
                            <i class="fa-solid fa-clock" style="z-index: 100;"></i>
                            <hr style="position: absolute; top: 25px; width: 100%; left: 100px; z-index: -100;">
                        </div>
                        <div class="text-timeline">
                            <h4>Proses Penanganan</h4>
                        </div>
                    </div>

                    <div class="timeline-laporan" style="position: relative;">
                        <div class="icon-timeline" style="z-index: 100;">
                            <i class="fa-regular fa-comment-dots" style="z-index: 100;"></i>
                            <hr style="position: absolute; top: 25px; width: 100%; left: 100px; z-index: -100;">
                        </div>
                        <div class="text-timeline">
                            <h4>Feedback</h4>
                        </div>
                    </div>

                    <div class="timeline-laporan" style="position: relative;">
                        <div class="icon-timeline" style="z-index: 100;">
                            <i class="fa-solid fa-check" style="z-index: 100;"></i>
                        </div>
                        <div class="text-timeline">
                            <h4>Selesai</h4>
                        </div>
                    </div>  
                </div>
                <div class="form-container">
                    <form action="" id="form-laporan">
                        <h4>Pilih Jenis Laporan</h4>
                        <div class="btn-jenisLaporan" id="pengaduanDiv">
                            <input id="pengaduan" type="radio" name="jenislaporan" value="Pengaduan" onchange="changeColor()">
                            <label id="label-pengaduan" for="pengaduan"> Pengaduan</label>
                        </div>
                        <div class="btn-jenisLaporan" id="aspirasiDiv">
                            <input id="aspirasi" type="radio" name="jenislaporan" value="Aspirasi" onchange="changeColor()">
                            <label id="label-aspir" for="aspirasi"> Aspirasi</label>
                        </div>
                        <input id="judul" type="text" placeholder="Judul Laporan">
                        <textarea id="deskripsi" name="deskripsi" cols="30" rows="10" placeholder="Masukan Deskripsi Laporan"></textarea>
                        <input id="tanggal" type="text" placeholder="Tanggal Kejadian" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <select name="Kategori" id="kategori">
                            <option value="" disabled selected>Pilih Kategori Laporan</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Akademik">Akademik</option>
                            <option value="Diskriminasi">Diskriminasi</option>
                          </select>
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa-solid fa-paperclip"></i> Kirim Lampiran
                        </label>
                        <input id="file-upload" type="file" accept="image/*"/>
                        <div id="form-button">
                            <div>
                                <input type="checkbox" id="anonim" name="anonim">
                                <label for="anonim"> Anonim</label>
                            </div>
                            <button type="submit" id="btn-send">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="blur-detail"></div>
        <div class="modal-detail">
            <div id="modal-title">
                <p>Detail Laporan</p>
                <button id="close-detail">
                    <i class="fa-solid fa-x fa-lg" style="color: black;"></i>
                </button>
            </div>
            <div id="modal-content">
                <div class="title-detail">
                    <div id="judul-detail">
                        <h4>Kecurangan dalam Ujian Semester</h4>
                    </div>
                    <div class="category">
                        <span>Pengaduan</span>
                    </div>
                </div>
                <div id="deskripsi-detail">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Molestias cum soluta, magni neque deserunt eum delectus corporis quae veritatis 
                        numquam velit laudantium fugit at praesentium ducimus cupiditate cumque quaerat adipisci.</p>
                </div>
                <div class="detail-img">
                    <img src="img/upicibiru.jpg" alt="lampiran">
                </div>
                <div id="date-detail">
                    <h4>Tanggal Kejadian: 25-03-2024</h4>
                </div>
                <div id="status-detail">
                    <h4>Status Laporan: Proses Peninjauan</h4>
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
        <section class="laporan">
            <button id="tambah-laporan">
                <i class="fa-solid fa-plus"></i> 
                Buat Laporan
            </button>
            <div class="table-container">
                    <table id="tabel-laporan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Laporan</th>
                                <th>Jenis Laporan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Lihat Detail</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Kecurangan dalam Ujian Semester</td>
                                <td>Pengaduan</td>
                                <td>25-03-2024</td>
                                <td>Proses Peninjauan</td>
                                <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Peningkatan Fasilitas Olahraga di Kampus</td>
                                <td>Aspirasi</td>
                                <td>25-03-2024</td>
                                <td>Proses Penanganan</td>
                                <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>AC Rusak</td>
                                <td>Pengaduan</td>
                                <td>25-03-2024</td>
                                <td>Selesai</td>
                                <td><button class="btn-detail"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></td>
                            </tr>
                        </thead>
                    </table>
            </div>
        </section>
    </main>
    <script src="js/laporan.js"></script>
</body>
</html>