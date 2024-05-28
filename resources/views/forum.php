<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE: Forum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-up-o.css' rel='stylesheet'>    
    <link rel="stylesheet" href="css/forum.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-down-o.css' rel='stylesheet'>
</head>
<body id="body">
    <div class="blur">
        <div class="modal">
            <div id="modal-title">
                <p>Komentar Forum</p>
                <button id="close-modal">
                    <i class="fa-solid fa-x fa-lg" style="color: black;"></i>
                </button>
            </div>
            <div id="modal-content">
                <div class="title">
                    <div class="profile-post">
                        <div>
                            <img src="img/avatar.png" alt="profil" class="profil">
                        </div>
                        <div class="profile-name">
                            <span>Reyhan Putra</span>
                            <span>3 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="category">
                        <span>Pengaduan</span>
                    </div>
                </div>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Consequuntur saepe ratione exercitationem vitae suscipit laudantium, vel quidem nam eius omnis,
                         enim eligendi esse ex qui aliquam iusto praesentium repellat maiores!
                    </p>
                    <div class="post-img">
                        <img src="img/posts/berita3.jpg" alt="lampiran" width="150px">
                    </div>
                </div>
                <div class="action-button">
                    <button><i class="gg-arrow-up-o"></i> Upvote <span>&#x2022; 1.5k</span></button>
                    <button><i class="gg-arrow-down-o"></i></i> Downvote <span>&#x2022; 165</span></button>
                </div>
                <div class="post-comments">
                    <div class="comment-section">
                        <div class="comment-profile">
                            <img src="img/avatar.png" alt="">
                        </div>
                        <div class="comment-content">
                            <div class="bubble-chat">
                                <span>Firli</span>
                                <p>Astagfirullah ... &#128549;</p>
                            </div>
                            <div class="comment-info">
                                <span>39 menit yang lalu</span> &#x2022; <span>suka</span> &#x2022; <span>balas</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-section">
                        <div class="comment-profile">
                            <img src="img/avatar.png" alt="">
                        </div>
                        <div class="comment-content">
                            <div class="bubble-chat">
                                <span>Firli</span>
                                <p>Astagfirullah ... &#128549;</p>
                            </div>
                            <div class="comment-info">
                                <span>39 menit yang lalu</span> &#x2022; <span>suka</span> &#x2022; <span>balas</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-section">
                        <div class="comment-profile">
                            <img src="img/avatar.png" alt="">
                        </div>
                        <div class="comment-content">
                            <div class="bubble-chat">
                                <span>Firli</span>
                                <p>Astagfirullah ... &#128549;</p>
                            </div>
                            <div class="comment-info">
                                <span>39 menit yang lalu</span> &#x2022; <span>suka</span> &#x2022; <span>balas</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-section">
                        <div class="comment-profile">
                            <img src="img/avatar.png" alt="">
                        </div>
                        <div class="comment-content">
                            <div class="bubble-chat">
                                <span>Firli</span>
                                <p>Astagfirullah ... &#128549;</p>
                            </div>
                            <div class="comment-info">
                                <span>39 menit yang lalu</span> &#x2022; <span>suka</span> &#x2022; <span>balas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-comment">
                <div class="comment-profile">
                    <img src="img/avatar.png" alt="">
                </div>
                <div class="comment-input">
                    <input type="text" name="comment" id="" placeholder="Tulis Komentar ...">
                </div>
                <div class="comment-submit">
                    <button>Kirim</button>
                </div>
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
                    <div class="profile-post">
                        <div>
                            <img src="img/avatar.png" alt="profil" class="profil">
                        </div>
                        <div class="profile-name">
                            <span>Reyhan Putra</span>
                            <span>3 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="category">
                        <span>Pengaduan</span>
                    </div>
                </div>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Consequuntur saepe ratione exercitationem vitae suscipit laudantium, vel quidem nam eius omnis,
                         enim eligendi esse ex qui aliquam iusto praesentium repellat maiores!
                    </p>
                    <div class="post-img">
                        <img src="img/posts/berita.jpg" alt="lampiran" width="150px">
                    </div>
                </div>
                <div class="action-button">
                    <button class="upvote"><i class="gg-arrow-up-o"></i> Upvote <span>&#x2022 1.5k</span></button>
                    <button class="downvote"><i class="gg-arrow-down-o"></i></i> Downvote <span>&#x2022 165</span></button>
                    <button class="comment"><i class="fa-regular fa-comment fa-xl"></i>97 Komentar</button>
                </div>
            </div>
            <div class="content-card">
                <div class="title">
                    <div class="profile-post">
                        <div>
                            <img src="img/avatar.png" alt="profil" class="profil">
                        </div>
                        <div class="profile-name">
                            <span>Reyhan Putra</span>
                            <span>3 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="category aspirasi">
                        <span>Aspirasi</span>
                    </div>
                </div>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Consequuntur saepe ratione exercitationem vitae suscipit laudantium, vel quidem nam eius omnis,
                         enim eligendi esse ex qui aliquam iusto praesentium repellat maiores!
                    </p>
                    <div class="post-img">
                        <img src="../aset/posts/berita3.jpg" alt="lampiran" width="150px">
                    </div>
                </div>
                <div class="action-button">
                    <button class="upvote"><i class="gg-arrow-up-o"></i> Upvote <span>&#x2022 1.5k</span></button>
                    <button class="downvote"><i class="gg-arrow-down-o"></i></i> Downvote <span>&#x2022 165</span></button>
                    <button class="comment"><i class="fa-regular fa-comment fa-xl"></i>97 Komentar</button>
                </div>
            </div>
            <div class="content-card">
                <div class="title">
                    <div class="profile-post">
                        <div>
                            <img src="../aset/avatar.png" alt="profil" class="profil">
                        </div>
                        <div class="profile-name">
                            <span>Reyhan Putra</span>
                            <span>3 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="category aspirasi">
                        <span>Aspirasi</span>
                    </div>
                </div>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Consequuntur saepe ratione exercitationem vitae suscipit laudantium, vel quidem nam eius omnis,
                         enim eligendi esse ex qui aliquam iusto praesentium repellat maiores!
                    </p>
                    <div class="post-img">
                        <img src="../aset/posts/berita2.jpg" alt="lampiran" width="150px">
                    </div>
                </div>
                <div class="action-button">
                    <button class="upvote"><i class="gg-arrow-up-o"></i> Upvote <span>&#x2022 1.5k</span></button>
                    <button class="downvote"><i class="gg-arrow-down-o"></i></i> Downvote <span>&#x2022 165</span></button>
                    <button class="comment"><i class="fa-regular fa-comment fa-xl"></i>97 Komentar</button>
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
    <script src="../js/forum.js"></script>
</body>
</html>