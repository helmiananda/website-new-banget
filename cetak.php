<?php

require_once __DIR__ . '/vendor/autoload.php';

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

    return "<b>" . $hari_ini . "</b>";
}
$now = new DateTime();
$hari_ini2 = $now->format('d-m-y');
$jam_sekarang = $now->format('H:i:s');



$html = '

<html>
<head>
    <title> Cetak Daftar Pengisi Surat | Surat Online RT. 07 </title>

 </head>
<body>
 Daftar Pengisi Surat
                      
<br>
 <br>
 <table class="table-inputdata-admin" border="1" width="100%" cellpadding="5" cellspacing="0">
                        <thead class="th-inputdata">
                            <tr class="tr-inputdata">
                                <td class="td-inputdata">No.</td>
                                <td class="td-inputdata">NIK</td>
                                <td class="td-inputdata">Nama</td>
                                <td class="td-inputdata">Jenis Kelamin</td>
                                <td class="td-inputdata">Nomor Rumah</td>
                                <td class="td-inputdata">Jenis Surat</td>
                                <td class="td-inputdata">Nomor Surat</td>
                                <td class="td-inputdata">Waktu Isi</td>
                                <td class="td-inputdata">Jam Isi</td>

                            </tr>';

                            $no = 1;
foreach ($input_data_surat as $row ) {
    $html .= '<tr class="tr-inputdata">
    <td>' .$no++.'</td>
    <td>'. $row["nik"]      . '</td>
    <td>' . $row["nama"]      . '</td>
    <td>' . $row["jk"]      . '</td>
    <td>' . $row["no_rumah"]      . '</td>
    <td>' . $row["jenis_surat"]      . '</td>
    <td>' . $row["no_surat_pengantar"] .  
 $row["no_surat_keterangan_berdomisili"] .
    $row["no_surat_keterangan"].   '</td>
<td>' . $row["waktu_isi"]      . '</td>
<td>' . $row["jam_isi"]      . '</td>
    
    </tr>';
}
$html .='</table>
</body>

</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("Laporan Daftar Pengisi Surat.pdf", 'I');
