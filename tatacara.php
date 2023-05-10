<?php

session_start();


if (!isset($_SESSION["surat"])) {
    header("Location: index.php");
    exit;
}
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Panduan | Surat Online RT. 07</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">

</head>

<body>
    <nav class="background">
        <div class="wrapper">
            <div class="logo">Surat Online RT. 07</div>
            <div class="menu">
                <ul>
                    <li class="hover"><a href="home.php">Home</a></li>
                    <li class="hover"><a href="aboutus.php">About Us</a></li>
                    <li class="hover"><a href="tatacara.php">Panduan</a></li>
                    <li class="hover"><a href="downloadsurat.php">Download Surat</a></li>
                    <li class="hover"><a href="inputdata_surat.php"> Data Pengisi Surat</a></li>
                    <li class="hover"><a href="contact.php"> Contact</a></li>

                    <li><a href="logout.php" class="btn-pink">Log out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="kolompaduan">
        <div class="margin">
            <img class="suratpaduan" src="download/Illustrasi Surat 4.avif" />
            <div class="kolompanduan">
                <p class="deskripsi-panduan">Panduan Pembuatan dan Pengisian Surat Secara Online </p>
                <h2>Urus Surat Mu Dengan Cepat Secara Online</h2>
                <p>1. User login menggunakan username dan password yang sudah didaftarkan. <br>
                    2. User memilih surat yang ingin di download dalam menu Download Surat. <br>
                    3. User mengisi data form dari surat yang dipilih dan mengirim data. <br>
                    4. User Mendownload Surat. <br>
                    5. User mengisi data untuk Pendataan siapa saja yang sudah mendownload dan mengisi data. <br>
                    6. Jika ada yang ingin ditanyakan silahkan menghubungi Contact Person yang ada di Halaman Contact.
                    </b>
                </p>
                <br>
            </div>
            </section>

</body>

</html>