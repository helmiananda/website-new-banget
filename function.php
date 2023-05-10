<?php

$conn = mysqli_connect("localhost", "root", "", "input_data");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function cari($katakunci)
{
    $query = "SELECT * FROM input_data_surat
 WHERE
  nama LIKE '%$katakunci%' OR
  no_rumah LIKE '%$katakunci%' OR
  jk LIKE '%$katakunci%' 
  ";
    return query($query);
}


function tambah($data)
{

  
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = ($data["jk"]);
    $no_rumah = htmlspecialchars($data["no_rumah"]);
    $jenis_surat = htmlspecialchars($data["jenis_surat"]);
    $no_surat_keterangan_berdomisili = htmlspecialchars($data["no_surat_keterangan_berdomisili"]);
    $no_surat_pengantar = htmlspecialchars($data["no_surat_pengantar"]);
    $no_surat_keterangan = htmlspecialchars($data["no_surat_keterangan"]);
    $waktu_isi = ($data["waktu_isi"]);
    $jam_isi = ($data["jam_isi"]);



    $query = "INSERT INTO input_data_surat
        VALUES
        ('','$nik' , '$nama', '$jk' ,'$no_rumah','$jenis_surat','$no_surat_keterangan_berdomisili' ,'$no_surat_pengantar' , '$no_surat_keterangan','$waktu_isi','$jam_isi')
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{

    global $conn;
    mysqli_query($conn, "DELETE FROM input_data_surat WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $no_rumah = htmlspecialchars($data["no_rumah"]);
    $jenis_surat = htmlspecialchars($data["jenis_surat"]);
    $no_surat_keterangan_berdomisili = htmlspecialchars($data["no_surat_keterangan_berdomisili"]);
    $no_surat_pengantar = htmlspecialchars($data["no_surat_pengantar"]);
    $no_surat_keterangan = htmlspecialchars($data["no_surat_keterangan"]);


    $query = "UPDATE input_data_surat SET 
            nik = '$nik',
            nama = '$nama',
            jk = '$jk',
            no_rumah = '$no_rumah',
            jenis_surat ='$jenis_surat',
            no_surat_keterangan_berdomisili = '$no_surat_keterangan_berdomisili',
             no_surat_pengantar = '$no_surat_pengantar',
              no_surat_keterangan = '$no_surat_keterangan',
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>
