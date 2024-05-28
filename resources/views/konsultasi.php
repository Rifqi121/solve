<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE: Konsultasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-up-o.css' rel='stylesheet'>    
    <link rel="stylesheet" href="css/konsultasi.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-down-o.css' rel='stylesheet'>
</head>
<body id="body">
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
                <div class="chat-container">
                    <div id="consultant-info">
                        <div id="consultant-profile">
                            <img src="img/A.png" alt="">
                            <div>
                                <span>Akademik</span>
                                <p><i class="fa-solid fa-circle fa-xs" style="color: #198754;"></i> available</p>
                            </div>
                        </div>
                        <div id="option">
                            <button id="option-btn">
                                <i class="fa-solid fa-ellipsis-vertical fa-xl" id="option-icon"></i>
                            </button>
                            <div class="dropdown">
                                <div class="akademik-option">
                                    <button id="akademik-btn">Akademik</button>
                                </div>
                                <div class="prodi-option">
                                    <button id="prodi-btn">Prodi</button>
                                </div>
                                <div class="bem-option">
                                    <button id="bem-btn">BEM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chat-section">
                        <div class="chat-date-info">
                            Today
                        </div>
                        <div class="comment-section sender">
                            <div class="comment-content">
                                <div class="bubble-chat">
                                    <span>Firli</span>
                                    <p>Astagfirullah ... &#128549;</p>
                                </div>
                                <div class="comment-info">
                                    <span>08:33</span>
                                </div>
                            </div>
                            <div class="comment-profile">
                                <img src="img/avatar.png" alt="">
                            </div>
                        </div>
                        <div class="comment-section sender">
                            <div class="comment-content">
                                <div class="bubble-chat">
                                    <span>Firli</span>
                                    <p>Astagfirullah ... &#128549;</p>
                                </div>
                                <div class="comment-info">
                                    <span>08.34</span>
                                </div>
                            </div>
                            <div class="comment-profile">
                                <img src="img/avatar.png" alt="">
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="comment-profile">
                                <img src="img/A.png" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="bubble-chat">
                                    <span>Akademik</span>
                                    <p>Astagfirullah ... &#128549;</p>
                                </div>
                                <div class="comment-info">
                                    <span>12.30</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-section sender">
                            <div class="comment-content">
                                <div class="bubble-chat">
                                    <span>Firli</span>
                                    <p>Astagfirullah ... &#128549;</p>
                                </div>
                                <div class="comment-info">
                                    <span>12:34</span>
                                </div>
                            </div>
                            <div class="comment-profile">
                                <img src="img/avatar.png" alt="">
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="comment-profile">
                                <img src="img/A.png" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="bubble-chat">
                                    <span>Akademik</span>
                                    <p>Astagfirullah ... &#128549;</p>
                                </div>
                                <div class="comment-info">
                                    <span>14:21</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-section sender">
                            <div class="comment-content">
                                <div class="bubble-chat">
                                    <span>Firli</span>
                                    <p>Astagfirullah ... &#128549;</p>
                                </div>
                                <div class="comment-info">
                                    <span>14:44</span>
                                </div>
                            </div>
                            <div class="comment-profile">
                                <img src="img/avatar.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="modal-comment">
                        <div class="comment-profile">
                            <img src="img/avatar.png" alt="">
                        </div>
                        <div class="comment-input">
                            <input type="text" name="comment" id="" placeholder="Tulis Pesan ...">
                        </div>
                        <div class="comment-submit">
                            <button><i class="fa-solid fa-paper-plane fa-lg" style="color: white;"></i></button>
                        </div>
                    </div>
                </div>
                <div id="consultation-info">
                    <div>
                        <h3>Konsultasi dengan Solve:</h3>
                        <p>Layanan Konsultasi yang siap siaga membantu kamu mendapatkan informasi dengan lebih mudah</p>
                        <p>Silakan klik icon <i class="fa-solid fa-ellipsis-vertical" id="option-icon"></i> untuk memilih admin sesuai tujuan konsultasi (<strong>BEM</strong>/<strong>Prodi</strong>/<strong>Akademik</strong>) lalu jelaskan kebutuhan kamu 
                            dan informasi apa yang ingin kamu dapatkan</p>
                        <p><strong>Mengapa konsultasi di solve ?</strong></p>
                        <ul>
                            <li>Dapat dilakukan dimana saja dan kapan saja</li>
                            <li>Respon cepat</li>
                            <li>Identitas terlindungi dengan baik</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="js/konsultasi.js"></script>
</body>
</html>