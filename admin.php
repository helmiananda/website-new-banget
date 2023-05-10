<?php

session_start();
if (!isset($_SESSION["admin"])) {
    header('location: login-admin.php');
    exit;
}
require 'function.php';
$input_data_surat = query("SELECT * FROM input_data_surat");
if (isset($_POST["cari"])) {
    $input_data_surat = cari($_POST["katakunci"]);
}

?>


<?php

date_default_timezone_set("Asia/Jakarta");
function hari_ini()
{
    $hari = date("D");

    switch ($hari) {

        case 'Sun':
            $hari_ini = "Minggu";
            break;


        case 'Mon':
            $hari_ini = "Senin";
            break;


        case 'Tue':
            $hari_ini = "Selasa";
            break;


        case 'Wed':
            $hari_ini = "Rabu";
            break;


        case 'Thu':
            $hari_ini = "Kamis";
            break;


        case 'Friday':
            $hari_ini = "Jumat";
            break;


        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:

            $hari_ini = "Tidak diketahui hari apa";
            break;
    }

    return $hari_ini;
}
$now = new DateTime();
$hari_ini2 = $now->format('d-m-y');
$jam_sekarang = $now->format('H:i:s');

?>

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengisi Surat | Surat Online RT. 07</title>
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
                    <li class="hover"><a href="admin.php"> Data Pengisi Surat</a></li>
                    <li><a href="logout-admin.php" class="btn-pink">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="inputdatasurat">
        <div class="margin-inputdatasurat">
            <div class="kolom">
                <h1 class="header-inputdatasurat">Daftar Pengisi Surat</h1>
                <div class="margin-paragraf-admin"> Note : Sebelum menghapus atau mengubah data, jangan lupa refresh halaman terlebih dahulu</div>
                <br>
                <form method="post" action="">
                    <label> Cari Data</label>
                    <input type="text" class="input" name="katakunci" id="keyword" autocomplete="off" placeholder="  Cari disini...">
                    <button type="submit" name="cari" id="tombolCari" class="button-submit-cari"> Cari </button>
                    <a href="cetak.php" class="button-submit-cetak"> Cetak Halaman </a>

                </form>

                <?php echo '<div class="date" >' . hari_ini() .
                    ' / ' . '' . '' . ''
                    . $hari_ini2 . ' / '
                    . $jam_sekarang;
                '</div>' ?>



                <br>
                <div id="pencarian">
                    <table class="table-inputdata-admin" border="1" width="100%" cellpadding="5" cellspacing="0">
                        <thead class="th-inputdata">
                            <tr class="tr-inputdata">
                                <td class="td-inputdata">No.</td>
                                <td class="td-inputdata">Nama</td>
                                <td class="td-inputdata">NIK</td>
                                <td class="td-inputdata">Jenis Kelamin</td>
                                <td class="td-inputdata">Nomor Rumah</td>
                                <td class="td-inputdata">Jenis Surat</td>
                                <td class="td-inputdata">Nomor Surat</td>
                                <td class="td-inputdata">Waktu Isi</td>
                                <td class="td-inputdata">Jam Isi</td>
                                <td class="td-inputdata">Mengubah Data</td>
                                <td class="td-inputdata"> Menghapus Data</td>
                            </tr>
                            <?php $no = 1; ?>
                            <?php
                            foreach ($input_data_surat as $row) :
                            ?>
                                <tr class="tr-inputdata">
                                    <td class="td-inputdata"> <?= $no; ?> </td>
                                    <td class="td-inputdata"> <?= $row["nama"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["nik"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["jk"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["no_rumah"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["jenis_surat"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["no_surat_pengantar"],
                                                                $row["no_surat_keterangan_berdomisili"],
                                                                $row["no_surat_keterangan"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["waktu_isi"]; ?> </td>
                                    <td class="td-inputdata"> <?= $row["jam_isi"]; ?> </td>
                                    <td class="td-inputdata">
                                        <center> <a class=" text-ubahdata" href="ubah.php?id=<?= $row["id"]; ?> "> ubah </a> </center>
                                    <td class="td-inputdata">
                                        <center> <a class="text-hapusdata" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data ?')"> hapus </a> </center>


                                </tr>
                                <?php $no++; ?>
                            <?php endforeach ?>
                            <?php
                            ?>
                    </table>
                </div>
                <script src="scriptajax-admin.js">
                </script>
</body>

</html>