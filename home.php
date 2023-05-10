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
    <title>Home | Surat Online RT. 07</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="stylea.css">
</head>

<body>
    <nav class="background">
        <div class="wrapper">
            <div class="logo"> 
                Surat Online RT. 07</div>
            <div class="menu">
                <ul>
                    <li class="hover"><a href="home.php">Home</a></li>
                    <li class="hover"><a href="aboutus.php">About Us</a></li>
                    <li class="hover"><a href="tatacara.php">Panduan</a></li>
                    <li class="hover"><a href="downloadsurat.php">Download Surat</a></li>
                    <li class="hover"><a href="inputdata_surat.php"> Data Pengisi Surat </a></li>
                    <li class="hover"><a href="contact.php"> Contact</a></li>
                    <li><a href="logout.php" class="btn-pink">Log out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="margin-home">
        <div class="home-margin">
            <div class="kolom-home">
                <p class="deskripsi">Selamat Datang Di Website Pembuatan Surat RT. 07</p>
                <h2>Urus Surat Mu Secara Online</h2>
                <p class="paragraf-home"> Di Website ini anda bisa mengurus surat kebutuhan anda tanpa
                    <br> harus mendatangi ketua rt atau sekertaris
                </p>
                <p class="cta"><a href="tatacara.php" class="btn-cta">Pelajari Lebih Lanjut</a></p>
            </div>
            <img class="surat" src="download/Illustrasi Surat 2.avif" />

            </section>

</body>

</html>