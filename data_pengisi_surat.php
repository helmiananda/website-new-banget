<?php

session_start();

if (!isset($_SESSION["surat"])) {
  header('Location: index.php');
  exit;
}
require 'function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM input_data_surat
WHERE
 nama LIKE '%$keyword%' OR
 no_rumah LIKE '%$keyword%' OR
 jk LIKE '%$keyword%' OR
 nik LIKE '%$keyword%' OR
jenis_surat LIKE '%$keyword%'

 ";
$input_data_surat = query($query);

?>

<table class="table-inputdata" border="1" width="100%">
  <thead class="th-inputdata">
    <tr class="tr-inputdata">
      <td class="td-inputdata">No.</td>
      <td class="td-inputdata">Nama</td>
      <td class="td-inputdata">NIK</td>
      <td class="td-inputdata">Jenis Kelamin</td>
      <td class="td-inputdata">Nomor Rumah</td>
      <td class="td-inputdata">Jenis Surat</td>
      <td class="td-inputdata">Waktu Isi</td>
      <td class="td-inputdata">Jam Isi</td>
      <td class="td-inputdata">Nomor Surat</td>

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
        <td class="td-inputdata"> <?= $row["waktu_isi"]; ?> </td>
        <td class="td-inputdata"> <?= $row["jam_isi"]; ?> </td>
        <td class="td-inputdata"> <?= $row["no_surat_pengantar"], $row["no_surat_keterangan"], $row["no_surat_keterangan_berdomisili"]; ?> </td>



      </tr>
      <?php $no++; ?>
    <?php endforeach ?>
    <?php
    ?>
</table>