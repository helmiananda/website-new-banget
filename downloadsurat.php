<?php

session_start();

if (!isset($_SESSION["surat"])) {
    header("Location:index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Surat | Surat Online RT. 07</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <nav class="background">
        <div class="wrapper">
            <div class="logo">
                Surat Online RT. 07
            </div>
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
    <div class="marginlrdownloadsurat">
        <div class="margin">
            <div class="kolom">
                <div class="header"> Silahkan Download Surat Yang Anda Inginkan</div>
                <div class="teks-deskripsi-downloadsurat"> Sebelum mendownload surat, isi terlebih dahulu form untuk mengetahui nomor surat
                </div>
                <div class="margin-surat"> Surat Pengantar</div>
                <a class="button-download" id="margin-btnsuratpengantar" href="form_surat_pengantar.php"> Isi Form </a>
                <br>
                <div class="margin-surat"> Surat Keterangan </div>
                <a class="button-download" id="margin-btnsuratpengantar" href="form_surat_keterangan.php"> Isi Form </a>
                <br>

                <div class="margin-surat"> Surat Keterangan Berdomisili</div>
                <a class="button-download" id="margin-btnsuratpengantar" href="form_surat_keteranganberdomisili.php"> Isi Form </a>
                <br>

                <div class="paragraf-info"> Note : Setelah Download dan Mengisi Surat, Data anda akan masuk ke halaman Data Pengisi Surat</div>
            </div>
            <img class="suratdownloadgambarpage" src="download/Illustrasi Surat 5.avif" />



</body>

</html>