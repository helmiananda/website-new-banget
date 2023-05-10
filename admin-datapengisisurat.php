<?php

session_start();

require 'function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM input_data_surat
WHERE
 nama LIKE '%$keyword%' OR
 no_rumah LIKE '%$keyword%' OR
 jk LIKE '%$keyword%' OR
 nik LIKE '%$keyword%' OR
no_surat_pengantar LIKE '%$keyword%' OR
no_surat_keterangan_berdomisili LIKE '%$keyword%' OR
no_surat_keterangan LIKE '%$keyword%' OR
jenis_surat LIKE '%$keyword%'

 ";
$input_data_surat = query($query);

?>

<table class="table-inputdata" border="1">
    <thead class="th-inputdata">
        <tr class="tr-inputdata">
            <td class="td-inputdata">No.</td>
            <td class="td-inputdata">Nama</td>
            <td class="td-inputdata">NIK</td>
            <td class="td-inputdata">Jenis Kelamin</td>
            <td class="td-inputdata">Nomor Rumah</td>
            <td class="td-inputdata">Jenis Surat</td>
            <td class="td-inputdata">Nomor Surat</td>
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
                <td class="td-inputdata">
                    <center> <a class="text-ubahdata" href="ubah.php"> ubah </a> </center>
                <td class="td-inputdata">
                    <center><a class="text-hapusdata" href="hapus.php"> hapus </a> </center>

            </tr>
            <?php $no++; ?>
        <?php endforeach ?>
        <?php
        ?>
</table>