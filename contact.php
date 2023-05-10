<?php

session_start();
if (!isset($_SESSION["surat"])) {
    header("Location: index.php");
    exit;
}
require 'function.php';
$input_data_surat = query("SELECT * FROM input_data_surat");
if (isset($_POST["cari"])) {
    $input_data_surat = cari($_POST["katakunci"]);
}



?>

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Surat Online RT. 07</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
    <title>
        Input Data Surat
    </title>
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
                    <li><a href="logout.php" class="btn-pink">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="marginlrdownloadsurat">
        <div class="margin">
            <div class="kolom">
                <h1 class="header-inputdatasurat">Hubungi Kami </h1>
                <div class="contact-info"> Silahkan Hubungi Nomor dibawah ini jika ada kesulitan <br> dalam mengakses website</div>
                <p> Hubungi Ketua RT</p>
                <a href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> <button class="button-wa-rt" a href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> Hubungi Ketua RT </button> </a>
                <p> Hubungi Sekretaris RT</p>
                <a class="" href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> <button class="button-wa-rt"> Hubungi Sekretaris RT </button> </a>
                <p> Hubungi Karang Taruna</p>
                <a class="" href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> <button class="button-wa-rt"> Hubungi Sekretaris RT </button> </a>
            </div>

            <img class="gambar-contact" src="download/Illustration Contact.avif" alt="">

</body>

</html>