<?php

session_start();

if (!isset($_SESSION["surat"])) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Surat Online RT. 07</title>
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
                    <li class="hover"><a href="inputdata_surat.php"> Data Pengisi Surat </a></li>
                    <li class="hover"><a href="contact.php"> Contact</a></li>
                    <li><a href="logout.php" class="btn-pink">Log out</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="kolomaboutus">
        <div class="margin">
            <img class="surataboutus" src="download/Illustrasi Surat 3.avif" />
            <div class="paragrafaboutus">
                <h2>Urus Surat Mu Dengan Cepat Secara Online</h2>
                <p class="paragraphaboutus">Di era sekarang ini banyak sekali kebutuhan yang mengharuskan <br>
                    para warga untuk mendatangi sebuah tempat
                    untuk membuat <br> surat kebutuhan yang
                    warga inginkan.
                    <br>
                    contohnya adalah seperti
                    membuat surat kebutuhan rukun tetangga yang mengharuskan para warga untuk mendatangi ketua rt atau sekertaris. Website kami
                    mempermudah para warga untuk mengurus
                    sendiri surat kebutuhan
                </p>
                <br>
            </div>

            </section>

</body>

</html>