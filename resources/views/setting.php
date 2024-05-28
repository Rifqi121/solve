<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLVE: Pengaturan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/LOGO SOLVE/logo solve merah.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/setting.css">
</head>
<body>
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
                <i class="fa fa-home"></i> Beranda</a>
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
        <div id="card-container">
            <div id="content-card">
                <div id="title">
                    <div id="profile-post" style="margin-bottom: 12px;">
                        <img src="img/avatar.png" alt="profil" id="profil">
                    </div>
                    <div id="profil-username">
                        <h4>Firli Rucita Sundari</h4>
                        <p>rucitafirli12</p>
                    </div>
                </div>
                    <div id="change-img">
                        <button id="change-img"><i class="fa-regular fa-pen-to-square"></i> Ubah Foto Profil</button>
                    </div>
                <div id="profil-card">
                    <div id="profil-info">
                        <h4>Profile Information</h4>
                        <hr>
                        <div>
                            <form action="">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" id="name" value="Firli Rucita Sundari">
                                <label for="nim">Nomor Induk Mahasiswa</label>
                                <input type="text" name="nim" id="nim" value="2200041" disabled>
                                <label for="prodi">Program Studi</label>
                                <div class="prodi-select">
                                <select>
                                    <option selected disabled>Pilih Program Studi Anda</option>
                                    <option value="pgsd">Pendidikan Guru Sekolah Dasar</option>
                                    <option value="pgpaud">Pendidikan Guru PAUD</option>
                                    <option value="pmm">Pendidikan Multimedia</option>
                                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                                    <option value="tekom">Teknik Komputer</option>
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div id="account-info">
                        <h4>Account Information</h4>
                        <div><hr>
                            <form action="">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" value="rucitafirli12">
                                <label for="pass-word">Password</label>
                                <input type="password" name="pass-word" id="pass-word" value=".......">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" value="rucitafirli@upi.edu">
                            </form>
                        </div>
                        <div id="show-uname">
                            <label for="show-toggle">Tampilkan username</label>
                            <input type="checkbox" id="show-uname">
                        </div>
                    </div>
                    <div class="profil-btn">
                        <div class="submit">
                            <button id="reset">Urungkan</button>
                            <button id="save">Simpan</button>
                        </div>
                        <div id="logout">
                            <a href="landingPage" style="display: flex; justify-content: center; align-items: center;">
                                <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>